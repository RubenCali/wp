<footer class="bg-primary text-white p-4">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
            <?php dynamic_sidebar( 'onder' ) ?>
            </div>
                
            <div class="validatie col-md-4">
                <small>
                    <a href="http://validator.w3.org/check?uri=referer" target="_blank">
                <img src="https://blanken5.home.xs4all.nl/afb/valid-html5-blue.png" alt="Valide HTML5"></a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
                <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue.gif" alt="Valide CSS">
                </a>
</small>
            </div>
            <div class="col-md-4">
                    <small>
                    &copy; <?php the_author(); ?>
                    <?php echo date('y') ?>
                    <?php wp_footer(); ?>
                    </small>
                </div>
           
            </div>
        </div>
    </footer>
</body>
</html>