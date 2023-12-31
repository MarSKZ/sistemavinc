<!DOCTYPE html>

<!--

Author: Keenthemes

Product Name: Metronic

Product Version: 8.2.0

Purchase: https://1.envato.market/EA4JP

Website: http://www.keenthemes.com

Contact: support@keenthemes.com

Follow: www.twitter.com/keenthemes

Dribbble: www.dribbble.com/keenthemes

Like: www.facebook.com/keenthemes

License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.

-->

<html lang="en">

<!--begin::Head-->



<head>

	<base href="" />

	<title>UPAM Vinculación</title>

	<meta charset="utf-8" />

	<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />

	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta property="og:locale" content="en_US" />

	<meta property="og:type" content="article" />

	<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />

	<meta property="og:url" content="https://keenthemes.com/metronic" />

	<meta property="og:site_name" content="Keenthemes | Metronic" />

	<style>
		body::-webkit-scrollbar{
			-webkit-appearance: none;
		}

		body::-webkit-scrollbar:vertical {
			width: 10px;
		}

		body::-webkit-scrollbar-button:increment,
		body::-webkit-scrollbar-button{
			display: none;
		}

		body::-webkit-scrollbar:horizontal {
			height: 10px;
		}

		body::-webkit-scrollbar-thumb {
			background: #002e79;
			border-radius: 20px;
			border: 2px solid #f1f2f3;
		}

		body::-webkit-scrollbar-track {
			border-radius: 10px;
		}
	</style>

	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

	<link rel="shortcut icon" href="assets/media/logos/upam.ico" />

	<!--begin::Fonts(mandatory for all pages)-->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

	<!--end::Fonts-->

	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->

	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />

	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Global Stylesheets Bundle-->

	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>

</head>

<!--end::Head-->

<!--begin::Body-->



<body id="kt_body" class="app-blank">

	<!--begin::Theme mode setup on page load-->

	<script>
		var defaultThemeMode = "light";

		var themeMode;

		if (document.documentElement) {

			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {

				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");

			} else {

				if (localStorage.getItem("data-bs-theme") !== null) {

					themeMode = localStorage.getItem("data-bs-theme");

				} else {

					themeMode = defaultThemeMode;

				}

			}

			if (themeMode === "system") {

				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";

			}

			document.documentElement.setAttribute("data-bs-theme", themeMode);

		}
	</script>

	<!--end::Theme mode setup on page load-->

	<!--begin::Root-->

	<div class="d-flex flex-column flex-root" id="kt_app_root">

		<!--begin::Authentication - Sign-in -->

		<div class="d-flex flex-column flex-lg-row flex-column-fluid">

			<!--begin::Body-->

			<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">

				<!--begin::Form-->

				<div class="d-flex flex-center flex-column flex-lg-row-fluid">

					<!--begin::Wrapper-->

					<div class="w-lg-500px p-10">

						<!--begin::Form-->

						<form action="index.php?c=usuarios&a=iniciarSesion" method="post">
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Iniciar Sesión</h1>
								<!--end::Title-->
							</div>

							<!--end::Login options-->

							<!--begin::Input group=-->

							<div class="fv-row mb-8">

								<!--begin::Email-->

								<input type="text" placeholder="Correo" name="correo" class="form-control bg-transparent" />

								<!--end::Email-->

							</div>

							<!--end::Input group=-->

							<div class="fv-row mb-3">

								<!--begin::Password-->

								<input type="password" placeholder="Contraseña" name="contraseña" class="form-control bg-transparent" />

								<!--end::Password-->

							</div>

							<!--end::Input group=-->

							<!--begin::Wrapper-->

							<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">

								<div></div>

								<!--begin::Link-->
								<div class="d-flex my-4">
									<a href="#" class="link-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal" style="color: #002e79 !important;">¿Has olvidado tu contraseña?</a>
								</div>

								<!--end::Link-->

							</div>

							<!--end::Wrapper-->

							<!--begin::Submit button-->

							<div class="d-grid mb-10">

								<button type="submit" id="kt_sign_in_submit" class="btn btn-primary" style="background-color: #002e79 !important;">

									<!--begin::Indicator label-->

									<span class="indicator-label">Iniciar Sesión</span>

									<!--end::Indicator label-->

								</button>

							</div>

						</form>

						<!--end::Form-->

					</div>

					<!--end::Wrapper-->

				</div>
				<script>
					// Capturar el mensaje de la URL y mostrar un alert si está presente
					var mensaje = '<?php echo isset($_GET["mensaje"]) ? $_GET["mensaje"] : "" ?>';
					if (mensaje !== '') {
						alert(mensaje);
					}
				</script>
				<!--end::Form-->
				<!--begin::Modal - Offer A Deal-->
				<div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-1000px">
						<!--begin::Modal content-->
						<div class="modal-content">
							<!--begin::Modal header-->
							<div class="modal-header py-7 d-flex justify-content-between">
								<!--begin::Modal title-->
								<h2 style="margin-left:36%;">Recuperación de contraseña</h2>
							</div>
							<!--begin::Modal header-->
							<!--begin::Modal body-->
							<div class="modal-body scroll-y m-5">
								<!--begin::Stepper-->
								<div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
									<!--begin::Content-->
									<div id="kt_account_settings_profile_details" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_profile_details_form" class="form" action="?c=rcontraseña&a=index" method="post" onsubmit="return validarCorreo()">
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Input group-->
												<div class="row mb-6" style="margin-left:16%;">
													<!--begin::Label-->
													<label class="">Escribe tu correo electrónico para obtener tu código para la restauración de tu contraseña:</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8">
														<!--begin::Row-->
														<div class="row" style="margin-top: 10%; margin-left:33%;">
															<!--begin::Col-->
															<div class="col-lg-6 fv-row">
																<input type="text" id="correo" name="correo" class="form-control" style="width: 260px;" required />
															</div>
															<script>
																function validarCorreo() {
																	// Obtener el valor del correo electrónico
																	var correo = document.getElementById("correo").value;

																	// Expresión regular para validar un correo electrónico
																	var expresionRegular = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

																	// Validar el correo electrónico con la expresión regular
																	if (!expresionRegular.test(correo)) {
																		// Mostrar una alerta si el correo no es válido
																		alert("Por favor, ingrese un correo electrónico válido.");
																		return false; // Evitar que el formulario se envíe
																	}

																	return true; // Permitir que el formulario se envíe si el correo es válido
																}
															</script>
															<!--end::Col-->
														</div>
														<!--end::Row-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Card body-->
											<!--begin::Actions-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit" style="background-color: #002e79 !important;">Siguiente...</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Stepper-->
							</div>
							<!--begin::Modal body-->
						</div>
					</div>
				</div>
				<!--end::Modal - Offer A Deal-->

			</div>

			<!--end::Body-->

			<!--begin::Aside-->

			<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(assets/media/misc/auth-bg.png)">

				<!--begin::Content-->

				<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100" style="background-color: #002e79 !important;">

					<!--begin::Logo-->

					<a href="https://www.upamozoc.edu.mx/" class="mb-0 mb-lg-12">

						<img alt="Logo" src="assets/media/logos/upamLogoB.png" class="h-60px h-lg-75px" />

					</a>

					<!--end::Logo-->

					<!--begin::Image-->

					<img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="assets/media/misc/fondoUpam5.png" alt="" />

					<!--end::Image-->

					<!--begin::Title-->

					<h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Universidad Politécnica de Amozoc</h1>

					<!--end::Title-->

					<!--begin::Text-->

					<div class="d-none d-lg-block text-white fs-base text-center">La UPAM es una excelente opción para alcanzar metas y <br>contribuir al desarrollo de todos los vinculados a nuestra comunidad.
						<br />¡Tu sueño, nuestra misión!
					</div>

					<!--end::Text-->

				</div>

				<!--end::Content-->

			</div>

			<!--end::Aside-->

		</div>

		<!--end::Authentication - Sign-in-->

	</div>

	<!--end::Root-->

	<!--begin::Javascript-->

	<script>
		var hostUrl = "assets/";
	</script>

	<!--begin::Global Javascript Bundle(mandatory for all pages)-->

	<script src="assets/plugins/global/plugins.bundle.js"></script>

	<script src="assets/js/scripts.bundle.js"></script>

	<!--end::Global Javascript Bundle-->

	<!--begin::Custom Javascript(used for this page only)-->

	<script src="assets/js/custom/authentication/sign-in/general.js"></script>

	<!--end::Custom Javascript-->

	<!--end::Javascript-->

</body>

<!--end::Body-->



</html>