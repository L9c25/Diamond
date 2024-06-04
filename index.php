<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sessoes lucas</title>
	<!-- import icones-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Swiper -->
	<link rel="stylesheet" href="/assets/Swiper/swiper-bundle.min.css">
	<!-- CSS by me -->
	<link rel="stylesheet" href="assets/css/cssLucas.css">
	<link rel="stylesheet" href="assets/css/cssLucas2.css">
	<link rel="stylesheet" href="assets/css/bases.css">
	<link rel="stylesheet" href="assets/css/bases-mobile.css">
	<link rel="stylesheet" href="assets/css/expanse.css">
	<link rel="stylesheet" href="assets/css/expanse-mobile.css">
</head>

<body>
	<?php 
		include "./components/header/header.php";
		include "./components/tela_inicial/bg-home1/bg-home.php";
		include "./components/tela_inicial/ticket/index.php";
	?>


	<div class="container-bases-P">
		<h1 class="confort-title-mobile-P">CONFORT</h1>
		<picture class="luxury-confort-P"></picture>
		<div class="bg-nave">
			<div class="text-container-base-P">
				<h2 class="title-bases-P">Conheça nossas <br>Naves </h2>
				<p>As moradias de luxo na Lua representam um marco impressionante na arquitetura e no desenvolvimento
					humano fora da Terra. Com o avanço das tecnologias espaciais e da engenharia, essas residências não
					são apenas possíveis, mas também um símbolo de prestígio e inovação.</p>
				<span class="space-base-P"></span>
				<div class="buttons-base-P">
					<button class="bt-1-P">GALERIA</button>
					<button class="bt-2-P">NAVES</button>
				</div>
				<picture class="mini-img-nave-P"></picture>
			</div>
			<picture class="img-nave-P"></picture>
		</div>
	</div>

	<div class="container-bases-P">
		<h1 class="luxury-title-mobile-P">LUXURY</h1>
		<picture class="luxury-title-P"></picture>
		<div class="bg-bases">
			<div class="text-container-base-P">
				<h2 class="title-bases-P">As Novas Bases <br> Lunares de alto luxo </h2>
				<p>As moradias de luxo na Lua representam um marco impressionante na arquitetura e no desenvolvimento
					humano fora da Terra. Com o avanço das tecnologias espaciais e da engenharia, essas residências não
					são apenas possíveis, mas também um símbolo de prestígio e inovação.</p>
				<span class="space-base-P"></span>
				<div class="buttons-base-P">
					<button class="bt-1-P">EXPLORE</button>
					<button class="bt-2-P">LUA</button>
				</div>
				<picture class="mini-img-base-P"></picture>
			</div>
			<picture class="img-base-P"></picture>
		</div>
	</div>

	<!-- Expanse -->
	<div class="container-expanse-P">
        <div class="box-expanse-P">
            <!-- Grupo de textos desktop -->
        
            <div class="group-text-expanse-P">
                <div class="box-text-P 1">
                    <h2>Habitações Lunares</h2>
                    <p>Descubra a serenidade da Lua em nossos refúgios lunares, onde paisagens impressionantes e
                        silêncio cósmico se encontram. </p>
                    <button class="button-white-P">Saiba mais</button>
                </div>
                <div class="box-text-P" id="box-text-P2">
                    <h2>Marte Habitável</h2>
                    <p>Explore o próximo passo da humanidade em Marte, onde cidades sustentáveis surgem no deserto
                        vermelho, proporcionando um ambiente acolhedor para os pioneiros do espaço</p>
                    <button class="button-white-P">Saiba mais</button>
                </div>
                <div class="box-text-P" id="box-text-P3">
                    <h2>Horizonte de Jupiter</h2>
                    <p>Explore o futuro da colonização espacial nas luas de Júpiter, onde paisagens alienígenas oferecem
                        um novo horizonte para a humanidade.</p>
                    <button class="button-white-P">Saiba mais</button>
                </div>
            </div>

            <!-- Grupo de textos mobile -->

            <div class="container-expanse-mobile-P mySwiper2">
                <div class="box-expanse-mobile-P swiper-wrapper2">
                    <div class="text-slide swiper-slide2">
                        <h2>Habitações Lunares</h2>
                        <p>Descubra a serenidade da Lua em nossos refúgios lunares, onde paisagens impressionantes e
                            silêncio cósmico se encontram. </p>
                        <button class="button-white-P">Saiba mais</button>
                    </div>
                    <div class="text-slide swiper-slide2" id="box-text-P2">
                        <h2>Marte Habitável</h2>
                        <p>Explore o próximo passo da humanidade em Marte, onde cidades sustentáveis surgem no deserto
                            vermelho, proporcionando um ambiente acolhedor para os pioneiros do espaço</p>
                        <button class="button-white-P">Saiba mais</button>
                    </div>
                    <div class="text-slide swiper-slide2" id="box-text-P3">
                        <h2>Horizonte de Jupiter</h2>
                        <p>Explore o futuro da colonização espacial nas luas de Júpiter, onde paisagens alienígenas oferecem
                            um novo horizonte para a humanidade.</p>
                        <button class="button-white-P">Saiba mais</button>
                    </div>
                </div>
            </div>

            <!-- Tabela de informações sobre a diamond -->
            <div class="categorias-container-P">
                <h2>CATEGORIAS</h2>
                <div>
                    <p><strong>11+</strong><br>COMPLEXOS DE TURISMO EM <br> ÓRBITA</p>
                    <p><strong>35+</strong><br>Colônias Lunares</p>
                    <p><strong>50+</strong><br>MODELOS DE HABITAÇÕES <br>MARCIANAS</p>
                    <p><strong>98+</strong><br>ESTAÇÕES ESPACIAIS DE <br> LUXO</p>
                    <p><strong>107+</strong><br>BIOSFERAS <br>AUTOSSUSTENTÁVEIS</p>
                </div>
                <button class="button-black-P">veja todos</button>
            </div>

            <!-- carrousel dos itens -->

            <div class="swiper-container">
                <div class="swiper mySwiper swp">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <picture class="img-card-P">
                            </picture>
                            <div class="box-text-card-P">
                                <div class="title-box-P">
                                    <h2>Luas Jupiter</h2>
                                    <p>Conheça o melhor do conforto nas luas de jupiter</p>
                                </div>
                                    <div class="expanse-box-P"></i>
                                        <p><i class="fa-solid fa-house"></i> 300 avaliable</p>
                                        <button class="button-expanse">Veja Mais</button>
                                    </div>
                            </div>
                        </div>
                
                        <div class="swipper-slide">
                            <picture class="img-card-P"></picture>
                            <div class="box-text-card-P">
                                <div class="title-box-P">
                                    <h2>Luas Jupiter</h2>
                                    <p>Conheça o melhor do conforto nas luas de jupiter</p>
                                </div>
                                    <div class="expanse-box-P"></i>
                                        <p><i class="fa-solid fa-house"></i> 300 avaliable</p>
                                        <button class="button-expanse">Veja Mais</button>
                                    </div>
                            </div>
                        </div>
                        <div class="swipper-slide">
                            <picture class="img-card-P"></picture>
                            <div class="box-text-card-P">
                                <div class="title-box-P">
                                    <h2>Luas Jupiter</h2>
                                    <p>Conheça o melhor do conforto nas luas de jupiter</p>
                                </div>
                                    <div class="expanse-box-P"></i>
                                        <p><i class="fa-solid fa-house"></i> 300 avaliable</p>
                                        <button class="button-expanse">Veja Mais</button>
                                    </div>
                            </div>
                        </div>
                        <div class="swipper-slide">
                            <picture class="img-card-P"></picture>
                            <div class="box-text-card-P">
                                <div class="title-box-P">
                                    <h2>Luas Jupiter</h2>
                                    <p>Conheça o melhor do conforto nas luas de jupiter</p>
                                </div>
                                    <div class="expanse-box-P"></i>
                                        <p><i class="fa-solid fa-house"></i> 300 avaliable</p>
                                        <button class="button-expanse">Veja Mais</button>
                                    </div>
                            </div>
                        </div>
                        <div class="swipper-slide">
                            <picture class="img-card-P"></picture>
                            <div class="box-text-card-P">
                                <div class="title-box-P">
                                    <h2>Luas Jupiter</h2>
                                    <p>Conheça o melhor do conforto nas luas de jupiter</p>
                                </div>
                                    <div class="expanse-box-P"></i>
                                        <p><i class="fa-solid fa-house"></i> 300 avaliable</p>
                                        <button class="button-expanse">Veja Mais</button>
                                    </div>
                            </div>
                        </div>
                        <div class="swipper-slide">
                            <picture class="img-card-P"></picture>
                            <div class="box-text-card-P">
                                <div class="title-box-P">
                                    <h2>Luas Jupiter</h2>
                                    <p>Conheça o melhor do conforto nas luas de jupiter</p>
                                </div>
                                    <div class="expanse-box-P">
                                        <p><i class="fa-solid fa-house"></i>300 avaliable</p>
                                        <button class="button-expanse">Veja Mais</button>
                                    </div>
                            </div>
                        </div>
                        <div class="swipper-slide">
                            <picture class="img-card-P"></picture>
                            <div class="box-text-card-P">
                                <div class="title-box-P">
                                    <h2>Luas Jupiter</h2>
                                    <p>Conheça o melhor do conforto nas luas de jupiter</p>
                                </div>
                                    <div class="expanse-box-P"></i>
                                        <p><i class="fa-solid fa-house"></i> 300 avaliable</p>
                                        <button class="button-expanse">Veja Mais</button>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="buttons-expanse-P">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>

        </div>
    </div>

	<!-- SESSAO CARD COM NOVIDADES -->
	<section class="D_news">
		<!-- TITLES DESKTOP & MOBILE -->
		<div class="D_TitlenewsDesktop"><img src="assets/img/NEWSDESKTOP.svg" alt="" srcset=""></div>
		<h2 class="D_TitlenewsMobile">NEWS</h2>
		<!-- ARROWS -->
		<i class="fa-solid fa-circle-chevron-left arrow-mobile-left"></i>
		<i class="fa-solid fa-circle-chevron-right arrow-mobile-right"></i>
		<!-- CLASS SWIPER -->
		<div class="swiper mySwiper2">
			<div class="swiper-wrapper">
				<!-- CARD 1 -->
				<div class="swiper-slide">
					<div class="D_container">
						<div class="D_text">
							<h3>Confira o Mais Novo<br> Lançamento da<br> Diamond</h3>
							<p>Descubra o mais recente lançamento: uma habitação orbitando Júpiter, oferecendo
								vistas
								deslumbrantes
								e uma experiência única no espaço interplanetário.</p>

							<div class="D_interact">
								<button>Confira aqui</button>

								<span class="D_social">
									<i class="fa-brands fa-x-twitter"></i>
									<i class="fa-brands fa-square-facebook"></i>
									<i class="fa-brands fa-instagram"></i>
								</span>

							</div>

							<span class="D_navigation">
								<i class="fa-solid fa-circle-chevron-left"></i>
								<div>
									<p class="D_count">01</p>
								</div>
								<i class="fa-solid fa-circle-chevron-right"> </i>
								<div>
									<p class="D_novidad">Proximas novidades</p>
								</div>
							</span>
						</div>
						<div class="D_content">
							<div class="D_clientreview">
								<div class="D_clientreviewText">
									<h4 class="D_clientreviewTitel">Clientes Satisfeitos</h4>
									<p>Nossa equipe trabalha incansavelmente para garantir
										o mais alto nível de satisfação para cada hóspede.</p>
								</div>
								<h5>6+<span>ESTAÇOES</span></h5>
							</div>
							<div class="D_reviews">
								<div class="D_reviewText">
									<h4 class="D_reviewTitel">REVIEWS</h4>
									<p>“Excelente localização, aconchegante
										atmosfera, todas as comodidades
										com tecnologia de ponta!”</p>
								</div>
								<div class="D_contentUserImg">
									<span class="D_userImg"></span>
									<span class="D_userImg"></span>
									<span class="D_userImg"></span>
									<span class="D_userImg">7+</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- CARD 2 -->
				<div class="swiper-slide">
					<div class="D_container">
						<div class="D_text">
							<h3>Confira o Mais Novo<br> Lançamento da<br> Diamond</h3>
							<p>Descubra o mais recente lançamento: uma habitação orbitando Júpiter, oferecendo
								vistas
								deslumbrantes
								e uma experiência única no espaço interplanetário.</p>

							<div class="D_interact">
								<button>Confira aqui</button>

								<span class="D_social">
									<i class="fa-brands fa-x-twitter"></i>
									<i class="fa-brands fa-square-facebook"></i>
									<i class="fa-brands fa-instagram"></i>
								</span>

							</div>

							<span class="D_navigation">
								<i class="fa-solid fa-circle-chevron-left"></i>
								<div>
									<p class="D_count">02</p>
								</div>
								<i class="fa-solid fa-circle-chevron-right"> </i>
								<div>
									<p class="D_novidad">Proximas novidades</p>
								</div>
							</span>
						</div>
						<div class="D_content">
							<div class="D_clientreview">
								<div class="D_clientreviewText">
									<h4 class="D_clientreviewTitel">Clientes Satisfeitos</h4>
									<p>Nossa equipe trabalha incansavelmente para garantir
										o mais alto nível de satisfação para cada hóspede.</p>
								</div>
								<h5>6+<span>ESTAÇOES</span></h5>
							</div>
							<div class="D_reviews">
								<div class="D_reviewText">
									<h4 class="D_reviewTitel">REVIEWS</h4>
									<p>“Excelente localização, aconchegante
										atmosfera, todas as comodidades
										com tecnologia de ponta!”</p>
								</div>
								<div class="D_contentUserImg">
									<span class="D_userImg"></span>
									<span class="D_userImg"></span>
									<span class="D_userImg"></span>
									<span class="D_userImg">7+</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- CARD 3 -->
				<div class="swiper-slide">
					<div class="D_container">
						<div class="D_text">
							<h3>Confira o Mais Novo<br> Lançamento da<br> Diamond</h3>
							<p>Descubra o mais recente lançamento: uma habitação orbitando Júpiter, oferecendo
								vistas
								deslumbrantes
								e uma experiência única no espaço interplanetário.</p>

							<div class="D_interact">
								<button>Confira aqui</button>

								<span class="D_social">
									<i class="fa-brands fa-x-twitter"></i>
									<i class="fa-brands fa-square-facebook"></i>
									<i class="fa-brands fa-instagram"></i>
								</span>

							</div>

							<span class="D_navigation">
								<i class="fa-solid fa-circle-chevron-left"></i>
								<div>
									<p class="D_count">03</p>
								</div>
								<i class="fa-solid fa-circle-chevron-right"> </i>
								<div>
									<p class="D_novidad">Proximas novidades</p>
								</div>
							</span>
						</div>
						<div class="D_content">
							<div class="D_clientreview">
								<div class="D_clientreviewText">
									<h4 class="D_clientreviewTitel">Clientes Satisfeitos</h4>
									<p>Nossa equipe trabalha incansavelmente para garantir
										o mais alto nível de satisfação para cada hóspede.</p>
								</div>
								<h5>6+<span>ESTAÇOES</span></h5>
							</div>
							<div class="D_reviews">
								<div class="D_reviewText">
									<h4 class="D_reviewTitel">REVIEWS</h4>
									<p>“Excelente localização, aconchegante
										atmosfera, todas as comodidades
										com tecnologia de ponta!”</p>
								</div>
								<div class="D_contentUserImg">
									<span class="D_userImg"></span>
									<span class="D_userImg"></span>
									<span class="D_userImg"></span>
									<span class="D_userImg">7+</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- FIM CARD -->
			</div>
			<div class="swiper-pagination2"></div>
		</div>
	</section>

	<!-- SESSAO DE CONTATO  -->
	<section class="D_contact">
		<div class="D_TitlecontactDesktop"><img src="assets/img/CONTACTDESTOP.svg" alt="" srcset=""></div>
		<div class="D_TitlecontactMobile">CONTACT</div>

		<div class="D_container2">
			<!-- CONTAINER FORMULARIO/CALL TO ACTION -->
			<div class="D_container3">
				<!-- FORM -->
				<div class="D_content2">
					<div class="D_formcontact">
						<form id="contact" action="" method="post">
							<h2>Entre em contato<br>conosco</h2>
							<input type="text" name="nome" id=nome" placeholder="Nome">
							<input type="email" name="email" id="email" placeholder="Email">
							<textarea name="coment" id="coment" cols="30" rows="10"
								placeholder="Compartilhe seus pensamentos"></textarea>
							<button type="submit">Deixar Feedback</button>
						</form>
					</div>
				</div>
				<!-- CALL TO ACTION -->
				<div class="D_image2">
					<div>
						<div class="img2"></div>
						<h3>Deixe o seu<br>
							Feedback</h3>
						<p>O seu feedback impacta diretamente no funcionamento dos nossos sistemas! Ele nos ajuda a
							identificar falhas ou desencontro de informações importantes. Desde já agradecemos pela
							preferência </p>
					</div>
				</div>
			</div>
			<!-- CONTENT ONDE NOS ACHAR-->
			<div class="D_content3">
				<span>
					<h4>LIGUE-NÓS</h4>
					<p>+788-009-9009</p>
				</span>
				<span>
					<h4>Aqui está o nosso endereço!</h4>
					<p>Visite-nos na Rua das Estrelas, Quadra 1, Lote 5, Setor Celestial, Brasília.</p>
				</span>
				<span>
					<h4>Nosso e-mail de contato</h4>
					<p>diamond@spacemail.com</p>
				</span>
			</div>
		</div>
	</section>

	<!-- IMPORT SWIPER -->
	<script src="./assets/Swiper/swiper-bundle.min.js"></script>
	<!-- CONFIG SWIPER -->
	<script>
		var swiper = new Swiper(".mySwiper2", {
			pagination: {
				el: ".swiper-pagination2",
				type: "progressbar",
			},
			navigation: {
				nextEl: ".fa-circle-chevron-right",
				prevEl: ".fa-circle-chevron-left",
			},
			grabCursor: false,
			effect: "creative",
			creativeEffect: {
				prev: {
					shadow: true,
					translate: [0, 0, -400],
				},
				next: {
					translate: ["100%", 0, 0],
				},
			},

		});
	</script>
</body>

</html>