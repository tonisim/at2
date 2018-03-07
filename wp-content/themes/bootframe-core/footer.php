<footer class="smartlib-footer-area ">
    <!--Footer sidebar-->

    <?php do_action('smartlib_footer_sidebar', 'default'); ?>



    <!--Footer bottom - customizer-->
    <section class="smartlib-bottom-footer">
        <div class="container">
            <div class="row khkfooter">
                <div class="col-lg-6 ">
                    <h5>Kiirlingid</h5>
					<a href="#">Kontakt</a></br>
					<a href="https://tkhk.siseveeb.ee/veebivormid/tunniplaan">Tunniplaan</a></br>
					<a href="https://tkhk.siseveeb.ee">Siseveeb</a>
                </div>
                <div class="col-lg-6">				
                   <h5>Kontakt</h5>
                </div>
            </div>
        </div>
    </section>
    <!--END Footer bottom - customizer-->
</footer>

<?php
do_action('smartlib_after_content');
wp_footer();

?>

</body>
</html>
