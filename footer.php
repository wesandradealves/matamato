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
                <p class="copyright pt-3 pb-3">Todos os direitos reservados @ Copyright <?php echo date("Y"); ?>. Desenvolvido a mão por <strong><a target="_blank" href="https://904.ag/" title="Agência 9ZERO4">Agência 9ZERO4</a></strong>.</p>
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
                    <img src="https://www.jetvap.com.br/views/0ff05c4ec0/assets/img/thais-jet-vap.jpg" alt="Thais - WhatsApp | Jet Vap" />
                </figure>
                <div class="whatsapp-icon-message-content">
                    <p><strong>Olá! Posso ajudar?</strong> Qualquer coisa me chama aqui, ta?</p>
                </div>
            </div>
            <div class="module-whatsapp-btn-icon">
                <i class="fa-solid fa-xmark"></i>
            </div>
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
    </div>

    <?php wp_footer(); ?>
</body>
</html>