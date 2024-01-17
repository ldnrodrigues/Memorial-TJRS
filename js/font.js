  // Aumentar Fonte
document.getElementById('increase-font').addEventListener('click', function() {
    changeFontSize(1.1);
});

  // Diminuir Fonte
document.getElementById('decrease-font').addEventListener('click', function() {
    changeFontSize(0.9);
});

  // Função para definir o tamanho da fonte com base no cookie
function setFontSizeFromCookie() {
    var body = document.body;
    var fontSizeCookie = getCookie('fontSize');

    if (fontSizeCookie) {
        body.style.fontSize = fontSizeCookie;
        applyFontSizeToNav(fontSizeCookie);
    }
}

  // Função para aplicar o tamanho da fonte aos itens de navegação
function applyFontSizeToNav(fontSize) {
    var navItems = document.querySelectorAll('.navbar-nav .nav-item .nav-link');
    for (var i = 0; i < navItems.length; i++) {
        navItems[i].style.fontSize = fontSize;
    }
}

  // Função para alterar o tamanho da fonte e salvar o estado no cookie
function changeFontSize(factor) {
    var body = document.body;
    var currentSize = parseFloat(body.style.fontSize) || 1;
    var newSize = currentSize * factor + 'em';

    // Aplicar a alteração de fonte ao corpo
    body.style.fontSize = newSize;

    // Aplicar a alteração de fonte aos itens da navegação
    applyFontSizeToNav(newSize);

    // Salvar o tamanho da fonte no cookie
    setCookie('fontSize', newSize, 365);
}