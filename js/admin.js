window.addEventListener('load', function () {

    var form = document.querySelector('.login-action-register form');
    var titulo = document.createElement('h1');
    var texto = document.createTextNode("Cadastre-se");
    titulo.appendChild(texto);    
    form.insertBefore(titulo, form.firstChild);

})
