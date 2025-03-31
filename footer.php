<?php
include('../config/config.php');

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) {
    header('Location: ' . SITE . '/error/');
}
?>



</main>



</div><!-- /.wrapper -->



<footer class="footer">

    <div class="container center">

        <p class="small"><a href="<?php echo(SITE); ?>/privacy/">Privacy Policy</a></p>

        <p class="small">&copy;2006-<?php echo date('Y'); ?> <a href="https://ericadreisbach.com">erica dreisbach</a> + <a href="https://darkblackllc.com">Dark Black LLC</a></p>

    </div>

</footer>


</body>

</html>