        </main>
        <footer class="footer">
            <div class="container">
                <h2><a href="#" title="Jet Vap - Matamato - Lavadoras a Vapor"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-top-jetvap.webp" alt="Jet Vap - Matamato - Lavadoras a Vapor"></a></h2>
                <p class="footer-text mt-5 mb-5 pb-4">A transformação tecnológica da sua<br/>capina urbana começa com uma<br/>conversa com os nossos consultores.</p>
                <ul class="footer-info m-auto d-block">
                    <li class="d-flex flex-column flex-lg-row mb-5 mb-lg-3 align-items-center justify-content-center justify-content-lg=between">
                        <p class="d-flex col-lg-6 align-items-center"><i class="fa-solid fa-globe me-3"></i> <a title="www.jetvap.com.br" href="http://www.jetvap.com.br">www.jetvap.com.br</a></p>
                        <p class="d-flex col-lg-6 align-items-center"><i class="fa-solid fa-phone me-3"></i> <a title="554130798009" href="tel:554130798009">41 3079-8009</a></p>
                    </li>
                    <li class="d-flex flex-column flex-lg-row mb-5 mb-lg-3 align-items-center justify-content-center justify-content-lg=between">
                        <p class="d-flex col-lg-6 align-items-center"><i class="fa-solid fa-envelope me-3"></i> <a title="contato@jetvap.com.br" href="mailto:contato@jetvap.com.br">contato@jetvap.com.br</a></p>
                        <p class="d-flex col-lg-6 align-items-center"><i class="fa-brands fa-whatsapp me-3"></i> <a href="https://api.whatsapp.com/send?phone=554130798009&text=Ol%C3%A1,%20" title="554130798009">41 9 9269-9195</a></p>
                    </li>
                    <li class="d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg=between">
                        <p class="d-flex col-lg-6 align-items-center"></p>
                        <p class="d-flex col-lg-6 align-items-center"><i class="fa-solid fa-location-pin me-3"></i> <span>Rua Dr. Helio Valente, 97<br/>Tarumã - Curitiba - PR</span></p>
                    </li>
                </ul>
                <p class="copyright pt-3 pb-3">Todos os direitos reservados @ Copyright <?php echo date("Y"); ?>. Desenvolvido a mão por Agência 9ZERO4.</p>
            </div>
        </footer> 
    </div> 

    <div class="module-whatsapp" id="module-whatsapp" style="visibility: hidden;">
        <div class="module-whatsapp-btn whatsapp-btn btn-whatsapp-pulse" id="module-whatsapp-btn">
            <div class="whatsapp-icon-message">
                <div class="whatsapp-icon-message-close">
                    <i class="fas fa-times"></i>
                </div>
                <figure>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/thais-jet-vap.jpg" alt="Thais - WhatsApp | Jet Vap" />
                </figure>
                <div class="whatsapp-icon-message-content">
                    <p><strong>Olá! Posso ajudar?</strong> Qualquer coisa me chama aqui, ta?</p>
                </div>
            </div>
            <div class="module-whatsapp-btn-icon"></div>
        </div>

        <div class="module-whatsapp-container" id="module-whatsapp-container">
            <div class="module-whatsapp-header">
                <div class="module-whatsapp-header-icon">
                </div>
                <div class="module-whatsapp-header-title">
                    <strong>Comece uma conversa</strong>
                    <p>Cadastre-se para começar uma conversa no <b>WhatsApp</b></p>
                </div>
            </div>
            <div class="module-whatsapp-content">
                <div class="module-whatsapp-content-form">
                    <?php echo do_shortcode('[contact-form-7 id="8" title="WhatsApp Icon – PT-BR"]'); ?>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function($) {
                setTimeout(function () {
                    if (sessionStorage.getItem('name') !== "whatsappIconMessage") {
                        $('.whatsapp-icon-message').addClass('active');
                    }
                }, 12000);

                $('.whatsapp-icon-message-close').click(function () {
                    sessionStorage.setItem('name', 'whatsappIconMessage');
                    $('.whatsapp-icon-message').removeClass('active');
                });

                setTimeout(function() {
                    $('#module-whatsapp').css('visibility', 'visible');
                }, 2000);

                $('.whatsapp-btn').click(function(e) {
                    e.preventDefault();

                    if ($('.whatsapp-btn').hasClass('active')) {
                        $('.whatsapp-btn').addClass('not-active');
                        $('.whatsapp-btn').removeClass('active');
                        $('#module-whatsapp-container').removeClass('active');
                        setTimeout(function() {
                            if (sessionStorage.getItem('name') !== "whatsappIconMessage") {
                                $('.whatsapp-icon-message').addClass('active');
                            }
                        }, 2000);
                    } else {
                        $('.whatsapp-btn').addClass('active');
                        $('.whatsapp-btn').removeClass('not-active');
                        $('#module-whatsapp-container').addClass('active');
                        $('.whatsapp-icon-message').removeClass('active');
                    }
                });

                setTimeout(function() {
                    $('#module-whatsapp').css('visibility', 'visible');
                }, 2000);                
            });
        </script>
    </div>

    <style>
        .module-whatsapp {
            font-family: "OpenSans-Regular", sans-serif;
            font-size: 14px;
        }
        .module-whatsapp .module-whatsapp-btn {
            width: 55px;
            height: 55px;
            line-height: 55px;
            border-radius: 55px;
            background-color: #25d366;
            text-align: center;
            display: block;
            position: fixed;
            cursor: pointer;
            bottom: 20px;
            right: 20px;
            outline: none;
            z-index: 999999;
            -webkit-box-shadow: 5px 5px 25px 0px rgba(0, 0, 0, 0.35);
            -moz-box-shadow: 5px 5px 25px 0px rgba(0, 0, 0, 0.35);
            box-shadow: 5px 5px 25px 0px rgba(0, 0, 0, 0.35);
        }
        @media (min-width: 520px) {
            .module-whatsapp .module-whatsapp-btn {
                bottom: 30px;
                right: 30px;
            }
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon {
            width: 55px;
            height: 55px;
            line-height: 55px;
            position: relative;
            display: block;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon::before {
            content: "\f232";
            width: 55px;
            color: #fff;
            line-height: 55px;
            font-size: 29.988px;
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            transition: all 150ms ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
        }
        .module-whatsapp .module-whatsapp-btn.active .module-whatsapp-btn-icon::before {
            animation: module_whatsapp_btn_active 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_active {
            0% {
                content: "\f232";
                transform: rotate(0deg);
            }
            50% {
                opacity: 0;
                transform: rotate(180deg);
            }
            100% {
                content: "\f00d";
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                opacity: 1;
                transform: rotate(360deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn.not-active .module-whatsapp-btn-icon::before {
            animation: module_whatsapp_btn_not_active 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_not_active {
            0% {
                content: "\f00d";
                font-family: "Font Awesome 5 Pro";
                font-style: normal;
                font-weight: 300;
                opacity: 1;
                transform: rotate(0deg);
            }
            50% {
                opacity: 0;
                transform: rotate(180deg);
            }
            0% {
                content: "\f232";
                font-family: "Font Awesome 5 Brands";
                font-style: normal;
                font-weight: 400;
                transform: rotate(360deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-text {
            white-space: nowrap;
            padding: 0 15px;
            background-color: #fff;
            border-radius: 3px;
            position: absolute;
            top: 50%;
            margin-top: -12.5px;
            right: calc(100% + 10px);
            -webkit-box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            display: none;
        }
        @media (min-width: 520px) {
            .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-text {
                display: block;
            }
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-text p {
            font-family: "OpenSans-Bold", sans-serif;
            font-size: 9.996px;
            color: #43474e;
            line-height: 25px;
            margin: 0;
            padding: 0;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-text p .fal {
            font-size: 14px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 3px;
        }
        .module-whatsapp .module-whatsapp-container {
            width: 100%;
            max-width: 320px;
            height: auto;
            position: fixed;
            right: 0;
            bottom: 20px;
            background-color: #fff;
            transition: all 250ms ease-in-out;
            opacity: 0;
            visibility: hidden;
            z-index: 999999;
            -webkit-box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            border-radius: 5px;
        }
        @media (min-width: 520px) {
            .module-whatsapp .module-whatsapp-container {
                right: 30px;
                bottom: 30px;
            }
        }
        .module-whatsapp .module-whatsapp-container.active {
            bottom: 80px;
            opacity: 1;
            visibility: visible;
        }
        @media (min-width: 520px) {
            .module-whatsapp .module-whatsapp-container.active {
                bottom: 100px;
            }
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header {
            width: 100%;
            height: auto;
            display: grid;
            padding: 15px 20px;
            grid-template-columns: minmax(0, 40px) minmax(0, 1fr);
            align-items: start;
            justify-content: stretch;
            grid-gap: 0 5px;
            background-color: #25d366;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-icon {
            width: 100%;
            height: auto;
            display: block;
            text-align: center;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-icon::before {
            content: "\f232";
            color: #fff;
            font-size: 29.988px;
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-title {
            width: 100%;
            height: auto;
            display: block;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-title strong {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 5px;
            font-family: "OpenSans-Bold", sans-serif;
            font-size: 15.988px;
            line-height: 17.99px;
            color: #fff;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-title p {
            font-size: 11.998px;
            line-height: 14px;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content {
            width: 100%;
            height: auto;
            display: block;
            padding: 15px 0;
            background-color: #fff;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-text {
            width: 100%;
            height: auto;
            display: block;
            padding: 0 20px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-text p {
            font-size: 11.998px;
            line-height: 14px;
            color: #43474e;
            margin: 0;
            padding: 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users {
            width: 100%;
            height: auto;
            max-height: 180px;
            display: block;
            overflow-y: scroll;
            padding: 20px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user {
            width: 100%;
            height: auto;
            display: grid;
            grid-template-columns: minmax(0, 40px) minmax(0, 1fr);
            align-items: center;
            justify-content: stretch;
            position: relative;
            grid-gap: 0 10px;
            padding: 10px;
            background-color: #f5f7f9;
            margin-bottom: 10px;
            border-left: 2px solid #25d366;
            border-radius: 3px;
            transition: all 150ms ease-in-out;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user figure.module-whatsapp-user-img {
            width: 100%;
            height: auto;
            display: block;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user figure.module-whatsapp-user-img img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 40px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title {
            width: 100%;
            height: auto;
            display: block;
            position: relative;
            padding: 0 30px 0 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title strong {
            font-size: 11.998px;
            line-height: 14px;
            font-family: "OpenSans-Regular", sans-serif;
            color: #43474e;
            margin-bottom: 5px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title p {
            font-size: 9.996px;
            line-height: 11.998px;
            font-family: "OpenSans-Regular", sans-serif;
            color: #989b9f;
            margin: 0;
            padding: 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title .module-whatsapp-user-icon {
            width: 19.992px;
            height: 19.992px;
            line-height: 19.992px;
            display: block;
            position: absolute;
            top: 50%;
            right: 0;
            margin-top: -10px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title .module-whatsapp-user-icon::before {
            content: "\f232";
            color: #25d366;
            line-height: 19.992px;
            font-size: 19.992px;
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            transition: all 150ms ease-in-out;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user:hover {
            background-color: #fff;
            -webkit-box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15);
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user:last-child {
            margin-bottom: 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form {
            width: 100%;
            height: auto;
            display: block;
            padding: 20px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form {
            width: 100%;
            height: auto;
            display: block;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select {
            width: 100%;
            height: 40px;
            position: relative;
            display: block;
            margin-bottom: 5px;
            background-color: #f5f7f9;
            border-radius: 3px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select select {
            width: 100%;
            height: 40px !important;
            padding: 0 15px !important;
            margin: 0 !important;
            color: #989b9f !important;
            font-family: "OpenSans-Regular", sans-serif;
            font-size: 11.998px !important;
            line-height: 40px !important;
            border: 0 !important;
            background: transparent !important;
            border-left: 2px solid #25d366 !important;
            border-radius: 3px !important;
            display: block;
            outline: none;
            cursor: pointer;
            box-sizing: border-box;
            z-index: 1;
            position: relative;
            appearance: none;
            transition: all 100ms ease-in-out;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select select:hover {
            border-left: 2px solid #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select select:disabled {
            cursor: not-allowed;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select::after {
            content: "\f107";
            font-family: "Font Awesome 5 Pro";
            font-size: 14px !important;
            line-height: 40px;
            color: #25d366 !important;
            right: 15px;
            top: 0;
            position: absolute;
            z-index: 0;
            transition: all 100ms ease-in-out;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select:hover::after {
            color: #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select:focus::after {
            color: #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input {
            width: 100%;
            height: 40px !important;
            line-height: 40px !important;
            display: block;
            position: relative;
            padding: 0 15px !important;
            font-family: "OpenSans-Regular", sans-serif;
            font-size: 11.998px !important;
            background-color: #f5f7f9 !important;
            border-left: 2px solid #25d366 !important;
            border-radius: 3px;
            margin-bottom: 5px;
            transition: all 100ms ease-in-out;
            color: #43474e !important;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input::-webkit-input-placeholder {
            color: #989b9f !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input:-ms-input-placeholder {
            color: #989b9f !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input::placeholder {
            color: #989b9f !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input:hover {
            border-left: 2px solid #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input:focus {
            border-left: 2px solid #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form button.module-whatsapp-content-form-button {
            width: 100%;
            height: 40px;
            line-height: 40px;
            font-family: "OpenSans-Bold", sans-serif;
            font-size: 11.998px !important;
            border: 0;
            margin: 0;
            padding: 0 15px;
            color: #fff;
            display: block;
            font-weight: normal;
            vertical-align: middle;
            text-decoration: none;
            text-transform: uppercase;
            text-align: center;
            user-select: none;
            outline: 0;
            border-radius: 3px;
            white-space: nowrap;
            cursor: pointer;
            position: relative;
            background-color: #25d366;
            box-sizing: border-box;
            appearance: none;
            transition: all 100ms ease-in-out;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form button.module-whatsapp-content-form-button:hover {
            background-color: #43474e !important;
            -webkit-box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15);
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form .wpcf7-form.sent .wpcf7-response-output {
            width: 100%;
            height: auto;
            border: 0 !important;
            background-color: #1da851 !important;
            color: #fff !important;
            font-size: 11.998px !important;
            font-family: "OpenSans-Regular", sans-serif !important;
            border-radius: 3px !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form .wpcf7-form.invalid .wpcf7-response-output {
            width: 100%;
            height: auto;
            border: 0 !important;
            background-color: #f44336 !important;
            color: #fff !important;
            font-size: 11.998px !important;
            font-family: "OpenSans-Regular", sans-serif !important;
            border-radius: 3px !important;
        }
        .module-whatsapp {
            font-family: "OpenSans-Regular", sans-serif !important;
            font-size: 14px;
        }
        .module-whatsapp .module-whatsapp-btn {
            width: 55px;
            height: 55px;
            line-height: 55px;
            border-radius: 55px;
            background-color: #25d366;
            text-align: center;
            display: block;
            position: fixed;
            cursor: pointer;
            bottom: 20px;
            right: 20px;
            outline: none;
            z-index: 999999;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
        @media (min-width: 520px) {
            .module-whatsapp .module-whatsapp-btn {
                bottom: 30px;
                right: 30px;
            }
        }
        .module-whatsapp .module-whatsapp-btn.email {
            background-color: #006bb2;
        }
        .module-whatsapp .module-whatsapp-btn.email.active .module-whatsapp-btn-icon::before {
            animation: module_whatsapp_btn_active_before 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_active_before {
            0% {
                opacity: 1;
                transform: rotate(0deg);
            }
            100% {
                opacity: 0;
                transform: rotate(180deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn.email.active .module-whatsapp-btn-icon::after {
            animation: module_whatsapp_btn_active_after 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_active_after {
            0% {
                opacity: 0;
                transform: rotate(180deg);
            }
            100% {
                opacity: 1;
                transform: rotate(360deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn.email.not-active .module-whatsapp-btn-icon::after {
            animation: module_whatsapp_btn_not_active_after 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_not_active_after {
            0% {
                opacity: 1;
                transform: rotate(0deg);
            }
            100% {
                opacity: 0;
                transform: rotate(180deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn.email.not-active .module-whatsapp-btn-icon::before {
            animation: module_whatsapp_btn_not_active_before 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_not_active_before {
            0% {
                opacity: 0;
                transform: rotate(180deg);
            }
            100% {
                opacity: 1;
                transform: rotate(360deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon {
            width: 55px;
            height: 55px;
            line-height: 55px;
            position: relative;
            display: block;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon::before,
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon::after {
            width: 55px;
            color: #fff;
            line-height: 55px;
            font-size: 29.988px;
            font-style: normal;
            transition: all 150ms ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon::before {
            content: "\f232";
            font-weight: 400;
            font-family: "Font Awesome 5 Brands";
            opacity: 1;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon::after {
            content: "\f00d";
            font-weight: 300;
            font-family: "Font Awesome 5 Pro";
            opacity: 0;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon.email {
            width: 55px;
            height: 55px;
            line-height: 55px;
            position: relative;
            display: block;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon.email::before,
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon.email::after {
            width: 55px;
            color: #fff;
            line-height: 55px;
            font-size: 29.988px;
            font-style: normal;
            transition: all 150ms ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon.email::before {
            content: "\f0e0";
            font-weight: 900;
            font-family: "Font Awesome 5 Free";
            opacity: 1;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-icon.email::after {
            content: "\f00d";
            font-weight: 300;
            font-family: "Font Awesome 5 Pro";
            opacity: 0;
        }
        .module-whatsapp .module-whatsapp-btn.active .module-whatsapp-btn-icon::before {
            animation: module_whatsapp_btn_active_before 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_active_before {
            0% {
                opacity: 1;
                transform: rotate(0deg);
            }
            100% {
                opacity: 0;
                transform: rotate(180deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn.active .module-whatsapp-btn-icon::after {
            animation: module_whatsapp_btn_active_after 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_active_after {
            0% {
                opacity: 0;
                transform: rotate(180deg);
            }
            100% {
                opacity: 1;
                transform: rotate(360deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn.not-active .module-whatsapp-btn-icon::after {
            animation: module_whatsapp_btn_not_active_after 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_not_active_after {
            0% {
                opacity: 1;
                transform: rotate(0deg);
            }
            100% {
                opacity: 0;
                transform: rotate(180deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn.not-active .module-whatsapp-btn-icon::before {
            animation: module_whatsapp_btn_not_active_before 0.25s ease-in-out both;
        }
        @keyframes module_whatsapp_btn_not_active_before {
            0% {
                opacity: 0;
                transform: rotate(180deg);
            }
            100% {
                opacity: 1;
                transform: rotate(360deg);
            }
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-text {
            white-space: nowrap;
            padding: 0 15px;
            background-color: #fff;
            border-radius: 3px;
            position: absolute;
            top: 50%;
            margin-top: -12.5px;
            right: calc(100% + 10px);
            -webkit-box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            display: none;
        }
        @media (min-width: 520px) {
            .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-text {
                display: block;
            }
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-text p {
            font-family: "OpenSans-Bold", sans-serif !important;
            font-size: 9.996px;
            color: #43474e;
            line-height: 25px;
            margin: 0;
            padding: 0;
        }
        .module-whatsapp .module-whatsapp-btn .module-whatsapp-btn-text p .fal {
            font-size: 14px;
            display: inline-block;
            vertical-align: middle;
            margin-left: 3px;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message {
            width: 220px;
            position: absolute;
            bottom: 90%;
            right: 0;
            background-color: #fff;
            border-radius: 5px;
            display: grid;
            grid-template-columns: minmax(0, 50px) minmax(0, 1fr);
            grid-gap: 0 10px;
            padding: 10px;
            -webkit-box-shadow: 5px 5px 25px 0 rgba(0, 0, 0, 0.35);
            box-shadow: 5px 5px 25px 0 rgba(0, 0, 0, 0.35);
            opacity: 0;
            visibility: hidden;
            transition: all 300ms ease-in-out;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message.active {
            bottom: 120%;
            opacity: 1;
            visibility: visible;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message .whatsapp-icon-message-close {
            background-color: #f78b8b;
            height: 15px;
            line-height: 12px;
            width: 15px;
            border-radius: 15px;
            text-align: center;
            position: absolute;
            bottom: 88%;
            right: 0;
            z-index: 1;
            cursor: pointer;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message .whatsapp-icon-message-close .fa-times {
            font-size: 10px;
            line-height: 15px;
            color: #fff;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message .whatsapp-icon-message-close:hover {
            background-color: #f45b5b;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message figure {
            width: 50px;
            height: 50px;
            border-radius: 50px;
            overflow: hidden;
            -webkit-box-shadow: 5px 5px 25px 0 rgba(0, 0, 0, 0.15);
            box-shadow: 5px 5px 25px 0 rgba(0, 0, 0, 0.15);
            border: 2px solid #fff;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message figure img {
            width: 100%;
            height: auto;
            display: block;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message .whatsapp-icon-message-content {
            text-align: left;
            cursor: pointer;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message .whatsapp-icon-message-content p {
            margin: 0;
            font-size: 13px;
            line-height: 16px;
            color: #006bb2;
        }
        .module-whatsapp .module-whatsapp-btn .whatsapp-icon-message .whatsapp-icon-message-content p strong {
            font-weight: bold;
        }
        .module-whatsapp .module-whatsapp-container {
            width: 100%;
            max-width: 300px;
            height: auto;
            position: fixed;
            right: 10px;
            bottom: 20px;
            background-color: #fff;
            transition: all 250ms ease-in-out;
            opacity: 0;
            visibility: hidden;
            z-index: 11111111111;
            -webkit-box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 3px 3px 15px 0px rgba(0, 0, 0, 0.15);
            border-radius: 5px;
        }
        @media (min-width: 520px) {
            .module-whatsapp .module-whatsapp-container {
                right: 30px;
                bottom: 30px;
            }
        }
        .module-whatsapp .module-whatsapp-container.active {
            bottom: 80px;
            opacity: 1;
            visibility: visible;
        }
        @media (min-width: 520px) {
            .module-whatsapp .module-whatsapp-container.active {
                bottom: 100px;
            }
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header {
            width: 100%;
            height: auto;
            display: grid;
            padding: 15px 20px;
            grid-template-columns: minmax(0, 40px) minmax(0, 1fr);
            align-items: start;
            justify-content: stretch;
            grid-gap: 0 5px;
            background-color: #25d366;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-icon {
            width: 100%;
            height: auto;
            display: block;
            text-align: center;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-icon::before {
            content: "\f232";
            color: #fff;
            font-size: 29.988px;
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-title {
            width: 100%;
            height: auto;
            display: block;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-title strong {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 5px;
            font-family: "OpenSans-Bold", sans-serif !important;
            font-size: 15.988px;
            line-height: 17.99px;
            color: #fff;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-header .module-whatsapp-header-title p {
            font-size: 11.998px;
            line-height: 14px;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content {
            width: 100%;
            height: auto;
            display: block;
            padding: 15px 0;
            background-color: #fff;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-text {
            width: 100%;
            height: auto;
            display: block;
            padding: 0 20px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-text p {
            font-size: 11.998px;
            line-height: 14px;
            color: #43474e;
            margin: 0;
            padding: 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users {
            width: 100%;
            height: auto;
            max-height: 180px;
            display: block;
            overflow-y: scroll;
            padding: 20px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user {
            width: 100%;
            height: auto;
            display: grid;
            grid-template-columns: minmax(0, 40px) minmax(0, 1fr);
            align-items: center;
            justify-content: stretch;
            position: relative;
            grid-gap: 0 10px;
            padding: 10px;
            background-color: #f5f7f9;
            margin-bottom: 10px;
            border-left: 2px solid #25d366;
            border-radius: 3px;
            transition: all 150ms ease-in-out;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user figure.module-whatsapp-user-img {
            width: 100%;
            height: auto;
            display: block;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user figure.module-whatsapp-user-img img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 40px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title {
            width: 100%;
            height: auto;
            display: block;
            position: relative;
            padding: 0 30px 0 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title strong {
            font-size: 11.998px;
            line-height: 14px;
            font-family: "OpenSans-Regular", sans-serif !important;
            color: #43474e;
            margin-bottom: 5px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title p {
            font-size: 9.996px;
            line-height: 11.998px;
            font-family: "OpenSans-Regular", sans-serif !important;
            color: #989b9f;
            margin: 0;
            padding: 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title .module-whatsapp-user-icon {
            width: 19.992px;
            height: 19.992px;
            line-height: 19.992px;
            display: block;
            position: absolute;
            top: 50%;
            right: 0;
            margin-top: -10px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user .module-whatsapp-user-title .module-whatsapp-user-icon::before {
            content: "\f232";
            color: #25d366;
            line-height: 19.992px;
            font-size: 19.992px;
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            transition: all 150ms ease-in-out;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user:hover {
            background-color: #fff;
            -webkit-box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15);
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-users a.module-whatsapp-user:last-child {
            margin-bottom: 0;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form {
            width: 100%;
            height: auto;
            display: block;
            padding: 20px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form {
            width: 100%;
            height: auto;
            display: block;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select {
            width: 100%;
            height: 40px;
            position: relative;
            display: block;
            margin-bottom: 5px;
            background-color: #f5f7f9;
            border-radius: 3px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select select {
            width: 100% !important;
            height: 40px !important;
            padding: 0 15px !important;
            margin: 0 !important;
            color: #989b9f !important;
            font-family: "OpenSans-Regular", sans-serif !important !important;
            font-size: 11.998px !important;
            line-height: 40px !important;
            border: 0 !important;
            background: transparent !important;
            border-left: 2px solid #25d366 !important;
            border-radius: 3px !important;
            display: block !important;
            outline: none !important;
            cursor: pointer !important;
            box-sizing: border-box;
            z-index: 1 !important;
            position: relative;
            appearance: none;
            transition: all 100ms ease-in-out !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select select:hover {
            border-left: 2px solid #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select select:disabled {
            cursor: not-allowed;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select::after {
            content: "\f107" !important;
            font-family: "Font Awesome 5 Pro" !important;
            font-size: 14px !important;
            line-height: 40px !important;
            color: #25d366 !important;
            right: 15px !important;
            top: 0;
            position: absolute;
            z-index: 0 !important;
            transition: all 100ms ease-in-out !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select:hover::after {
            color: #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form .module-whatsapp-content-form-select:focus::after {
            color: #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input {
            width: 100%;
            height: 40px !important;
            line-height: 40px !important;
            display: block;
            position: relative;
            padding: 0 15px !important;
            font-family: "OpenSans-Regular", sans-serif !important;
            font-size: 11.998px !important;
            background-color: #f5f7f9 !important;
            border: 0 !important;
            border-left: 2px solid #25d366 !important;
            border-radius: 3px !important;
            margin-bottom: 5px !important;
            transition: all 100ms ease-in-out !important;
            color: #43474e !important;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input::-webkit-input-placeholder {
            color: #989b9f !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input:-ms-input-placeholder {
            color: #989b9f !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input::placeholder {
            color: #989b9f !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input:hover {
            border-left: 2px solid #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form input.module-whatsapp-content-form-input:focus {
            border-left: 2px solid #43474e !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form p.privacidade {
            margin: 10px 0;
            font-size: 12px;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form button.module-whatsapp-content-form-button {
            width: 100% !important;
            height: 40px !important;
            line-height: 40px !important;
            font-family: "OpenSans-Bold", sans-serif !important !important;
            font-size: 11.998px !important;
            border: 0 !important;
            margin: 0 !important;
            padding: 0 15px !important;
            color: #fff !important;
            display: block !important;
            font-weight: normal !important;
            vertical-align: middle !important;
            text-decoration: none !important;
            text-transform: uppercase !important;
            text-align: center !important;
            user-select: none !important;
            outline: 0 !important;
            border-radius: 3px !important;
            white-space: nowrap !important;
            cursor: pointer !important;
            position: relative !important;
            background-color: #25d366 !important;
            box-sizing: border-box !important;
            appearance: none !important;
            transition: all 100ms ease-in-out !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form button.module-whatsapp-content-form-button:hover {
            background-color: #43474e !important;
            -webkit-box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15) !important;
            -moz-box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15) !important;
            box-shadow: 0px 3px 15px 0px rgba(0, 0, 0, 0.15) !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form form button.module-whatsapp-content-form-button.disabled {
            background: #989b9f !important;
            color: #43474e !important;
            cursor: not-allowed !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form .wpcf7-form.sent .wpcf7-response-output {
            width: 100%;
            height: auto;
            border: 0 !important;
            background-color: #1da851 !important;
            color: #fff !important;
            font-size: 11.998px !important;
            font-family: "OpenSans-Regular", sans-serif !important !important;
            border-radius: 3px !important;
        }
        .module-whatsapp .module-whatsapp-container .module-whatsapp-content .module-whatsapp-content-form .wpcf7-form.invalid .wpcf7-response-output {
            width: 100%;
            height: auto;
            border: 0 !important;
            background-color: #f44336 !important;
            color: #fff !important;
            font-size: 11.998px !important;
            font-family: "OpenSans-Regular", sans-serif !important !important;
            border-radius: 3px !important;
        }
    </style>

    <?php wp_footer(); ?>
</body>
</html>