function openPhotoSwipe() {
    var pswpElement = document.querySelectorAll('.pswp')[0];
    var img = document.querySelector('.L_1-2-imagem img');
    
    // Cria um novo objeto de imagem para obter as dimensões reais
    var tempImg = new Image();
    tempImg.src = img.src;

    tempImg.onload = function() {
        // Obtém as dimensões reais da imagem
        var realWidth = tempImg.width;
        var realHeight = tempImg.height;

        // Build items array
        var items = [
            {
                src: img.src,
                w: realWidth,
                h: realHeight
            }
        ];

        // Define options (if needed)
        var options = {
            index: 0 // start at first slide
        };

        // Initializes and opens PhotoSwipe
        var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    }
}