<body>
    <footer id="footer">
        <div class="container">
            <div class="row">

            <div class="col-md-6">
                <div class="titulo-footer">
                    <p><strong>Memorial do Judiciário do Rio Grande do Sul</strong></p>
                </div>

                    <div class="foo" id="endereço">
                        <p>Praça Marechal Deodoro, 55 | Térreo | Palácio da Justiça - TJRS<br>
                        Centro Histórico | CEP: 90010-906 | Porto Alegre, RS Brasil</p>
                    </div>

                <div class="foo bar contato">
                        <strong>E-mail</strong>: <a href="mailto:memorial@tjrs.jus.br" class="email">memorial@tjrs.jus.br</a><br>
                        <strong>Telefone</strong>: <a href="tel:+555132107176" class="phone">+55 (51) 3210-7176</a>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="social">
                        <a class="redes-sociais"><strong>Redes Sociais</strong></a>
                            <div class="icones-sociais">
                                <a href="https://www.facebook.com/memorialtjrs/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Facebook Icon.png" width="26" height="26" alt="instagram logo"></a>
                                <a href="http://www.instagram.com/memorialtjrs" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Instagram Icon.png" width="26" height="26" alt="facebook logo"></a>
                                <a href="https://www.youtube.com/@tjrsnoticias" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Youtube Icon.png" width="28" height="28" alt="youtube logo"></a>
                                <a href="https://soundcloud.com/user-891322221/podcast-gestando-memorias-ep-0-piloto?si=781aad14318a4d97afc0d004f2b5cc80&utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Icones/Soundcloud.png" width="28" height="28" alt="soundcloud logo"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 text-center">
                                <a class="LogoTJ150">
                                    <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Logos/Logo-TJRS-Branco.png" width="136" height="102">
                                </div>
                            </div>

                        <!-- /.container -->

                    </div>

                </footer>

            <!-- Bootstrap core JavaScript -->
            <script src="<?php bloginfo('template_url'); ?>/vendor/jquery/jquery.min.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <button id="scrollToTopBtn" class="to-the-top" onclick="scrollToTop()" title="Voltar ao Topo">
            <i class="fa fw fa-arrow-up"></i></button>
        </button>

    <script>
        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        window.addEventListener('scroll', function () {
            var scrollToTopBtn = document.getElementById("scrollToTopBtn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.classList.add('show'); /* Adiciona a classe 'show' para tornar o botão visível */
            } else {
                scrollToTopBtn.classList.remove('show'); /* Remove a classe 'show' para tornar o botão invisível */
            }
        });
    </script>

    <?php wp_footer(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript">
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');


        ga('create', 'UA-7777936-10', 'auto');
        ga('send', 'pageview');
    </script>  

    <!-- VLibras-->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>

    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    </body>

    </html>
