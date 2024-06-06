
<head>
	<link rel="stylesheet" href="./components/header/header.css">
	<link rel="stylesheet" href="./components/header/css/menu-lateral.css">
	<script src="assets\jquery-3.7.1.min.js"></script>
</head>

<header>
	<nav class="L_nav-header">
		<div class="L_menu-left " id="L_menu-toggle" style="cursor: pointer">
			<ul>
				<li><img src="./components/header/imgs/logo-diamond.svg" alt="logo"></li>
				<li><span>Menu</span></li>
				<li style="cursor: pointer"><img src="./components/header/imgs/menu-tracinhos.svg" alt=""></li>
			</ul>
		</div>
		<div id="L_sidebar">
			<ul class="L_ul-sidebar">
				<div class="L_menu-left " id="L_menu-toggle">
					<ul>
						<li><img src="./components/header/imgs/logo-diamond.svg" alt="logo"></li>
						<li><span>Menu</span></li>
						<li style="cursor: pointer"><img src="./components/header/imgs/menu-tracinhos.svg" alt=""></li>
					</ul>
				</div>

				<!-- opções sidebar -->
				<!-- login -->

				<li class='L_li-sidebar-options'>
					<div class='L_focus-sidebar'>
					</div>
					<div class='L_div-icon-sidebar'>

						<svg class='L_svg-sidebar' width="64px" height="64px" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<g id="SVGRepo_bgCarrier" stroke-width="0" />
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
							<g id="SVGRepo_iconCarrier">
								<g id="User / User_Circle">
									<path class="L_svg-color-sidebar-login" id="Vector"
										d="M17.2166 19.3323C15.9349 17.9008 14.0727 17 12 17C9.92734 17 8.06492 17.9008 6.7832 19.3323M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z"
										stroke="#000000" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round" />
								</g>
							</g>
						</svg>
					</div>

					<div class="L_container-txt-sidebar">
						<a class="L_txt-sidebar" href="./pages/login/login.php">Login</a>
						<span>faça o login</span>
					</div>
				</li>


				<!-- ----home---- -->

				<li class='L_li-sidebar-options' onclick="location.href='index.php'">
					<div class='L_focus-sidebar'>
					</div>
					<div class='L_div-icon-sidebar'>

						<svg class='L_svg-sidebar' fill="#000000" width="64px" height="64px" viewBox="0 0 32 32"
							xmlns="http://www.w3.org/2000/svg">
							<g id="SVGRepo_bgCarrier" stroke-width="0" />
							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
							<g id="SVGRepo_iconCarrier">

								<path class="L_svg-color-sidebar"
									d="M27 18.039L16 9.501 5 18.039V14.56l11-8.54 11 8.538v3.481zm-2.75-.31v8.251h-5.5v-5.5h-5.5v5.5h-5.5v-8.25L16 11.543l8.25 6.186z" />

							</g>
						</svg>
					</div>
					<div class="L_container-txt-sidebar">
						<a class="L_txt-sidebar" href="index.php">Home</a>
						<span>inicio</span>
					</div>
				</li>

				<!-- serviços -->

				<li class='L_li-sidebar-options'>
					<div class='L_focus-sidebar'>
					</div>
					<div class='L_div-icon-sidebar'>

						<svg class='L_svg-sidebar' width="64px" height="64px" viewBox="0 0 1024 1024"
							xmlns="http://www.w3.org/2000/svg" fill="#000000">

							<g id="SVGRepo_bgCarrier" stroke-width="0" />

							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

							<g id="SVGRepo_iconCarrier">

								<path class="L_svg-color-sidebar" fill="#000000"
									d="M764.416 254.72a351.68 351.68 0 0 1 86.336 149.184H960v192.064H850.752a351.68 351.68 0 0 1-86.336 149.312l54.72 94.72-166.272 96-54.592-94.72a352.64 352.64 0 0 1-172.48 0L371.136 936l-166.272-96 54.72-94.72a351.68 351.68 0 0 1-86.336-149.312H64v-192h109.248a351.68 351.68 0 0 1 86.336-149.312L204.8 160l166.208-96h.192l54.656 94.592a352.64 352.64 0 0 1 172.48 0L652.8 64h.128L819.2 160l-54.72 94.72zM704 499.968a192 192 0 1 0-384 0 192 192 0 0 0 384 0z" />

							</g>

						</svg>
					</div>
					<div class="L_container-txt-sidebar">
						<a class="L_txt-sidebar" href="#D_services">Serviços</a>
						<span>Serviços Diamond</span>
					</div>
				</li>


				<!-- Contato -->
				<li class='L_li-sidebar-options'>
					<div class='L_focus-sidebar'>
					</div>
					<div class='L_div-icon-sidebar'>

						<svg class='L_svg-sidebar' width="64px" height="64px" viewBox="0 0 512 512" version="1.1"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							fill="#000000">

							<g id="SVGRepo_bgCarrier" stroke-width="0" />

							<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

							<g id="SVGRepo_iconCarrier">
								<title>contact-details-filled</title>
								<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="icon" fill="#000000" transform="translate(42.666667, 85.333333)">
										<path class="L_svg-color-sidebar"
											d="M426.666667,1.42108547e-14 L426.666667,341.333333 L3.55271368e-14,341.333333 L3.55271368e-14,1.42108547e-14 L426.666667,1.42108547e-14 Z M362.666667,213.333333 L234.666667,213.333333 L234.666667,245.333333 L362.666667,245.333333 L362.666667,213.333333 Z M125.333333,155.733333 L109.333333,155.733333 C78.4053873,155.733333 53.3333333,181.333333 53.3333333,213.333333 L53.3333333,213.333333 L181.333333,213.333333 C181.333333,181.333333 156.16,155.733333 125.333333,155.733333 L125.333333,155.733333 Z M362.666667,149.333333 L234.666667,149.333333 L234.666667,181.333333 L362.666667,181.333333 L362.666667,149.333333 Z M117.333333,78.62624 C101.86936,78.62624 89.3333333,91.162267 89.3333333,106.62624 C89.3333333,122.090213 101.86936,134.62624 117.333333,134.62624 C132.797306,134.62624 145.333333,122.090213 145.333333,106.62624 C145.333333,91.162267 132.797306,78.62624 117.333333,78.62624 Z M362.666667,85.3333333 L234.666667,85.3333333 L234.666667,117.333333 L362.666667,117.333333 L362.666667,85.3333333 Z"
											id="Combined-Shape"> </path>
									</g>
								</g>
							</g>

						</svg>
					</div>
					<div class="L_container-txt-sidebar">
						<a class="L_txt-sidebar" href="#D_contact">Contato</a>
						<span>Contato Diamond</span>
					</div>
				</li>

			</ul>
		</div>

		<!-- data-href="index.php" -->
		<div class="L_central-options">
			<ul>
				<li class="L_optn-central " onclick="location.href='index.php'">
					<span>Home</span>
				</li>
				<li class="L_optn-central" onclick="location.href='./imoveis.php'">
					<span>Moradias</span>
					<svg class="my-svg" width="28" height="28" viewBox="0 0 28 28" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<rect class="line" x="8" y="12.0908" width="1.54265" height="8" rx="0.771326"
							transform="rotate(-45 8 12.0908)" fill="#1E1E1E" />
						<rect class="line" x="18.5205" y="11.2454" width="1.54" height="8" rx="0.77"
							transform="rotate(45.11 18.5205 11.2454)" fill="#1E1E1E" />
					</svg>
				</li>
				<a href="#D_services">
					<li class="L_optn-central L_none-2">
						<span>Serviços</span>
						<svg class="my-svg" width="28" height="28" viewBox="0 0 28 28" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<rect class="line" x="8" y="12.0908" width="1.54265" height="8" rx="0.771326"
								transform="rotate(-45 8 12.0908)" fill="#1E1E1E" />
							<rect class="line" x="18.5205" y="11.2454" width="1.54" height="8" rx="0.77"
								transform="rotate(45.11 18.5205 11.2454)" fill="#1E1E1E" />
						</svg>
					</li>
				</a>
				<a href="#D_contact">
					<li class="L_optn-central L_none-1">
						<span>Contact</span>
						<svg class="my-svg" width="28" height="28" viewBox="0 0 28 28" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<rect class="line" x="8" y="12.0908" width="1.54265" height="8" rx="0.771326"
								transform="rotate(-45 8 12.0908)" fill="#1E1E1E" />
							<rect class="line" x="18.5205" y="11.2454" width="1.54" height="8" rx="0.77"
								transform="rotate(45.11 18.5205 11.2454)" fill="#1E1E1E" />
						</svg>
					</li>
				</a>
				<a href="#D_galeria">
					<li class="L_optn-central  L_none-3">
						<span>Galeria</span>
						<svg class="my-svg" width="28" height="28" viewBox="0 0 28 28" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<rect class="line" x="8" y="12.0908" width="1.54265" height="8" rx="0.771326"
								transform="rotate(-45 8 12.0908)" fill="#1E1E1E" />
							<rect class="line" x="18.5205" y="11.2454" width="1.54" height="8" rx="0.77"
								transform="rotate(45.11 18.5205 11.2454)" fill="#1E1E1E" />
						</svg>
					</li>
				</a>
			</ul>
		</div>
		<div class='L_fundo-login'>
			<ul class='L_login-header'>
				<li class='L_li-login' onclick="location.href='./pages/login/login.php'"><span>Login</span></lil>
				<li class='L_icon-btn-login'>
					<img src="./components/header/imgs/icon-btn-login.svg" alt=""
						onclick="location.href='./logout.php'">
				</li>
			</ul>
		</div>
		<div class='L_login-header-m'  title="Logout">
			<span onclick="location.href='./pages/login/login.php'">Login</span>
		</div>
	</nav>
</header>
<script src="./components/header/js/func-links.js"></script>
<script src="./components/header/js/scroll-header.js"></script>
<script src="./components/header/js/menu-lateral.js"></script>