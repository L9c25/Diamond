document.querySelectorAll('.L_optn-central[data-href]').forEach(function(element) {
    element.addEventListener('click', function() {
        var href = this.getAttribute('data-href');
        window.location.href = href;
    });
});
