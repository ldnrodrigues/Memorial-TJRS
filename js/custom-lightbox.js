jQuery(document).ready(function($) {
    $('.gallery').on('click', 'a', function(event) {
        event.preventDefault();

        var gallery = $(this).closest('.gallery');
        var images = gallery.find('a');
        var currentIndex = images.index(this);

        // Cria a lightbox
        var lightbox = $('<div class="lightbox" id="myLightbox">' +
                            '<div class="lightbox-content">' +
                                '<span class="lightbox-close" onclick="closeLightbox()">&times;</span>' +
                                '<img class="lightbox-image" src="" alt="">' +
                                '<span class="lightbox-prev" onclick="prevImage()">&#10094;</span>' +
                                '<span class="lightbox-next" onclick="nextImage()">&#10095;</span>' +
                            '</div>' +
                        '</div>');

        // Adiciona a lightbox ao corpo do documento
        $('body').append(lightbox);

        // Carrega a imagem atual na lightbox
        updateLightbox(currentIndex);

        // Exibe a lightbox
        lightbox.show();
    });

    // Função para fechar a lightbox
    window.closeLightbox = function() {
        $('#myLightbox').remove();
    };

    // Função para navegar para a imagem anterior
    window.prevImage = function() {
        var currentIndex = parseInt($('.lightbox-image').attr('data-index'));
        updateLightbox(currentIndex - 1);
    };

    // Função para navegar para a próxima imagem
    window.nextImage = function() {
        var currentIndex = parseInt($('.lightbox-image').attr('data-index'));
        updateLightbox(currentIndex + 1);
    };

    // Função para atualizar a imagem na lightbox
    function updateLightbox(index) {
        var gallery = $('.gallery');
        var images = gallery.find('a');
        var totalImages = images.length;

        // Garante que o índice esteja no intervalo válido
        index = (index + totalImages) % totalImages;

        var imageUrl = images.eq(index).attr('href');

        // Atualiza a imagem na lightbox
        $('.lightbox-image').attr('src', imageUrl);
        $('.lightbox-image').attr('data-index', index);
    }
    jQuery(document).ready(function($) {
        // Adaptação do tamanho das imagens em galerias para dispositivos móveis
        if (window.innerWidth <= 767) {
            $('.gallery img').css({
                'width': '100%',   // Defina o tamanho desejado para as imagens em dispositivos móveis
                'height': 'auto'
            });
        }
        
        // Restante do código...
    
        // Aqui continua o restante do código que você já tinha no seu arquivo custom-lightbox.js
        // Certifique-se de que não há duplicidade de funções ou elementos com os mesmos IDs.
        // ...
    });
});
