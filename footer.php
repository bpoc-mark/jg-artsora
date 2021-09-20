        </div>
        <div class="page__footer">
        </div>
        </main>

        <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/release/js/custom.js"></script>
        <script>
          AOS.init({
            once: true
          });

          $('.zipInput').on('keyup', function() {
                AjaxZip3.zip2addr('zip_s', '', 'address_s', 'address_s');
            });
        </script>

        <?php wp_footer(); ?>
        </body>

        </html>