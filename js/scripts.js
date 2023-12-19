(function ($) {
  $(document).ready(function () {
    const w = window.innerWidth;
    const h = window.innerHeight;
    const mobile = w < 1300;
    const desktop = h < w;
    const menuMobile = document.querySelector('.menu-mobile .mainMenu');

    /*--- bloqueio de conteudo para usuarios nao logados ----------------------------------------------*/    

    function setCookie(name,value,days) {
      var expires = "";
      if (days) {
          var date = new Date();
          date.setTime(date.getTime() + (days*24*60*60*1000));
          expires = "; expires=" + date.toUTCString();
      }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
    function eraseCookie(name) {   
        document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }    

    const body = document.querySelector('body');    

    function checkUserRole(){
      if(body.classList.contains('logged-in')){      
        setCookie('userRole', 'logado', 30);
      }else{      
        setCookie('userRole', 'anonimo', 30);
      }
    }     
    
    if(body.classList.contains('single-post')){      
      
      checkUserRole();      

      const userRole = getCookie('userRole');
      const posts = getCookie('posts');        
      
      if((userRole == 'anonimo') && (!posts)){          
          setCookie('posts', 1, 30)
          console.log('Usuário leu o primeiro post');
      }else if((userRole == 'anonimo') && (posts == 1)){
          console.log('numero de posts excedido');
          console.log('Total de posts = ' + getCookie('posts'));
          document.querySelector('body').classList.add('blocked');
          document.querySelector('#limite-leitura').classList.add('active');

      }else{
          eraseCookie('posts');          
      }

    }

    

    /*--------------------------------------------------------------------------------------------------*/

    if (mobile) {
      $('.menu-menu-secundario-container')
        .appendTo('.menu-menu-principal-container')
        .show();

      /* botão do menu */
      $('.menuBtn').click(function () {
        $('.menuBtn').toggleClass('act');
        if ($('.menuBtn').hasClass('act')) {
          $('.mainMenu').addClass('act');
        } else {
          $('.mainMenu').removeClass('act');
        }
      });
    } else {
      /* botão do menu */
      $('.menuBtn').click(function () {
        $(this).toggleClass('act');
        if ($(this).hasClass('act')) {
          $('.menu-menu-secundario-container').addClass('act');
        } else {
          $('.menu-menu-secundario-container').removeClass('act');
        }
      });
    }

    /* ACCORDION ------------------------------------------------------------------------------*/
    /*$('p.accordion').click(function () {
      $p = $(this).parent();
      $container = $(this).parents('.fornecedor');
      if ($p.hasClass('active')) {
        $p.removeClass('active');
        $container.removeClass('active');
      } else {
        $('.fornecedor').removeClass('active');
        $p.addClass('active');
        $container.addClass('active');
      }
      $('.item.active').not($p).removeClass('active');
    });*/

    /* CARROSSEL -----------------------------------------------------------------------*/
    $('.carrossel').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      dots: true,
      infinite: true,
      arrows: false,
      adaptiveHeight: true,
      fade: false,
      autoplaySpeed: 4000,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            //sdots: false,
          },
        },
      ],
    });
    if (!mobile) {
      $('.carrossel-categorias').slick({
        slidesToShow: 4,
        dots: false,
        infinite: true,
        arrows: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: true,
              dots: false,
              infinite: true,
              arrows: false,
              adaptiveHeight: true,
              fade: false,
              autoplaySpeed: 3000,
            },
          },
        ],
      });
    }

    if(mobile){
      $('.footer-1 .patrocinadores').slick({             
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        infinite: true,
        arrows: false,
        adaptiveHeight: true,
        fade: false,
        autoplaySpeed: 3000,           
      });
    }
    


    /*---- DOWNLOAD USUARIOS --------------------------------------------------------------------------*/

    // Quick and simple export target #table_id into a csv
      function download_table_as_csv(table_id, separator = ',') {
        // Select rows from table_id
        var rows = document.querySelectorAll('#usuarios-cadastrados tr');
        // Construct csv
        var csv = [];
        for (var i = 0; i < rows.length; i++) {
            var row = [], cols = rows[i].querySelectorAll('td, th');
            for (var j = 0; j < cols.length; j++) {
                // Clean innertext to remove multiple spaces and jumpline (break csv)
                var data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/(\s\s)/gm, ' ')
                // Escape double-quote with double-double-quote (see https://stackoverflow.com/questions/17808511/properly-escape-a-double-quote-in-csv)
                data = data.replace(/"/g, '""');
                // Push escaped string
                row.push('"' + data + '"');
            }
            csv.push(row.join(separator));
        }
        var csv_string = csv.join('\n');

        // Download it
        var filename = 'export_' + table_id + '_' + new Date().toLocaleDateString() + '.csv';        
        var link = document.querySelector('a#download');        
        link.setAttribute('target', '_blank');
        link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv_string));
        link.setAttribute('download', filename);        
      }      
            
      download_table_as_csv('#usuarios-cadastrados');

      /* fancybox */
      /*$('[data-fancybox="gallery"]').fancybox({
        buttons: ['close'],
        loop: false,
        protect: true,
      });*/

      /*document.addEventListener( 'wpcf7submit', function( event ) {
        console.log('teste');
        location = 'https://www.elospace.com.br/contato-enviado-com-sucesso/';
      }, false );*/
  });
})(jQuery);
