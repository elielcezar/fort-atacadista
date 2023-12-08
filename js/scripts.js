(function ($) {
  $(document).ready(function () {
    const w = window.innerWidth;
    const h = window.innerHeight;
    const mobile = w < 1300;
    const desktop = h < w;
    const menuMobile = document.querySelector('.menu-mobile .mainMenu');

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
    $('.footer-1 .patrocinadores').slick({
      slidesToShow: 4,
      dots: false,
      infinite: false,
      arrows: false,
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
