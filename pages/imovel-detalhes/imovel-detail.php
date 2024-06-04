<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./pages/imovel-detalhes/imovel-page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.min.css">
    <script src="assets\jquery-3.7.1.min.js"></script>
</head>


<div class='L_container-imovel'>
    <!-- container 1 da pagina de imovel -->
    <div class="L_container-1m-2m">
        <div class='L_container-im-1'>
            <!-- div do topo do container 1 -->
            <div class="L_div-1-1">
                <!-- div voltar -->
                <div class="L_1-1-voltar">
                    <div class="L_icon-svg-arrow">
                        <img src="./pages/imovel-detalhes/img/icon-voltar.svg" alt="">
                        <span>Voltar</span>
                    </div>
                </div>
                <!-- div logo diamond -->
                <div class="L_1-1-logo">
                    <img src="./pages/imovel-detalhes/img/logo-diamond-p.png" alt="">
                </div>
            </div>
            <!-- div imagem imovel -->

            <!-- <div class="L_1-2-imagem">
                    <img src="pages\imovel-detalhes\img\imagem-imovel-page.png" alt="">
                </div> -->
            <!-- Seu conteúdo aqui -->
            <div class="L_1-2-imagem">
                <img src="./pages/imovel-detalhes/img/imagem-imovel-page.png" alt="Imagem Imóvel" class="img-fluid"
                    onclick="openPhotoSwipe();">
            </div>

            <!-- PhotoSwipe core JS files -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.min.js"></script>

            <!-- PhotoSwipe HTML structure -->
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="pswp__bg"></div>
                <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                        <div class="pswp__top-bar">
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                            <button class="pswp__button pswp__button--share" title="Share"></button>
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- div descrição -->
            <div class="L_div-1-3">
                <div class="L_1-3-desc">
                    <h1>Descrição</h1>
                    <span>Este imóvel moderno é
                        um exemplo de elegância e
                        funcionalidade, situado em
                        um bairro tranquilo e prestigiado.
                        A fachada minimalista é composta por
                        linhas retas e materiais de alta qualidade,
                        como vidro e aço inoxidável, criando um visual
                        limpo e contemporâneo. </span>
                </div>
                <!-- divisor -->
                <div class="L_divisor-barra L_barra-desc"></div>
                <!-- ------- -->
                <div class="L_1-3-info-viagem">
                    <h2>Informações de viagem</h2>
                    <div class='L_span-info'>
                        <div class='L_span-info-1'>
                            <p>Tempo de Viagem - <strong>1/2</strong> - semanas</p>
                            <a class="links-diamond" href="#">Duvidas sobre a Viagem ?</a>
                        </div>
                        <div class="L_span-info-2">
                            <p>Preço do transporte - <strong>$65.950</strong></p>
                            <a class="links-diamond" href="#">Veja os preços</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="L_divisor-barra L_barra-1m-2m"></div>
        <div class="L_container-im-2">
            <!-- titulo  -->
            <div class='L_titulo-residencia'>
                <h1>Residencia Moderna</h1>
            </div>
            <!-- comodidades -->
            <div class="L_div-comodidades">
                <div class="L_comodidades">
                    <img src="./pages/imovel-detalhes/img/icon-pool.svg" alt="ss">
                    <span>Piscina</span>
                </div>
                <div class="L_comodidades">
                    <img src="./pages/imovel-detalhes/img/icon-pool.svg" alt="ss">
                    <span>Piscina</span>
                </div>
                <div class="L_comodidades">
                    <img src="./pages/imovel-detalhes/img/icon-pool.svg" alt="ss">
                    <span>Piscina</span>
                </div>
                <div class="L_comodidades">
                    <img src="./pages/imovel-detalhes/img/icon-pool.svg" alt="ss">
                    <span>Piscina</span>
                </div>
                <div class="L_comodidades">
                    <img src="./pages/imovel-detalhes/img/icon-pool.svg" alt="ss">
                    <span>Piscina</span>
                </div>
                <div class="L_comodidades">
                    <img src="./pages/imovel-detalhes/img/icon-pool.svg" alt="ss">
                    <span>Piscina</span>
                </div>
            </div>
            <!-- preço  -->
            <div class="L_container-valor">
                <div class="L_valor">
                    <span class="L_span-title-valor">Preço</span>
                    <span class="L_span-valor">$ 4.000.000</span>
                    <div class="L_reviews">
                        <div class="L_div-stars">
                            <div class="L_stars-review">
                                <img src="./pages/imovel-detalhes/img/icon-star-100.svg" alt="">
                            </div>
                            <div class="L_stars-review">
                                <img src="./pages/imovel-detalhes/img/icon-star-100.svg" alt="">
                            </div>
                            <div class="L_stars-review">
                                <img src="./pages/imovel-detalhes/img/icon-star-100.svg" alt="">
                            </div>
                            <div class="L_stars-review">
                                <img src="./pages/imovel-detalhes/img/icon-star-100.svg" alt="">
                            </div>
                            <div class="L_stars-review">
                                <img src="./pages/imovel-detalhes/img/icon-star-50.svg" alt="">
                            </div>
                        </div>
                        <span>441 reviews</span>
                    </div>
                </div>
            </div>
            <!-- botoes de compra e aluguel -->
            <div class="L_div-compra">
                <div class="L_btn-compra L_uni-btn-compra">
                    <span>Compre Agora</span>
                </div>
                <div class="L_btn-aluguel L_uni-btn-compra">
                    <span>Alugue Agora</span>
                </div>
            </div>
            <!-- informações do corretor e contato -->
            <div class="L_info-importantes">
                <div class="L_info-corretor">
                    <h3>Corretores</h3>
                    <p>Conheça nossos corretores <br> especializados</p>
                </div>
                <div class="L_divisor-barra L_barra-corretor"></div>
                <div class="L_info-contato">
                    <h3>Informações de contato</h3>
                    <p>Fulano da silva</p>
                    <p>+777 888 999</p>
                </div>
            </div>
            <!-- redes sociais -->
            <div class="L_redes-sociais">
                <div class="L_container-icones">
                    <div class="L_icon-social">
                        <img src="./pages/imovel-detalhes/img/x-social.svg" alt="">
                    </div>
                    <div class="L_icon-social">
                        <img src="./pages/imovel-detalhes/img/f-social.svg" alt="">
                    </div>
                    <div class="L_icon-social">
                        <img src="./pages/imovel-detalhes/img/ins-social.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./page/imovel-detalhes/js/function-full-img.js"></script>