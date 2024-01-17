 // Função para definir o contraste com base no cookie
function setContrastFromCookie() {
    var body = document.body;
    var contrastCookie = getCookie('contrast');

    if (contrastCookie === 'contrast') {
        body.classList.add('contrast');
    }
}

  // Função para alternar o contraste e salvar o estado no cookie
function toggleContrast() {
    var body = document.body;

    if (body.classList.contains('contrast')) {
        body.classList.remove('contrast');
        setCookie('contrast', '', 365);
    } else {
        body.classList.add('contrast');
        setCookie('contrast', 'contrast', 365);
    }
}

  // Função para obter o valor de um cookie
function getCookie(name) {
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].trim();
        if (cookie.startsWith(name + '=')) {
        return cookie.substring(name.length + 1);
        }
    }
    return '';
}

  // Função para definir um cookie
function setCookie(name, value, days) {
    var expires = '';
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + value + expires + '; path=/';
}

  // Executar a função ao carregar a página
document.addEventListener('DOMContentLoaded', function() {
    setContrastFromCookie();
});