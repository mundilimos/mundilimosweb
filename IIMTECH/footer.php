<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php include 'options.php'; ?>




<footer id="footer" class="footer">




    <div class="container">

        <?php get_sidebar( 'main' ); ?>

    </div>

</footer>



<!-- #main -->







<?php wp_footer(); ?>


<script src="/wp-content/themes/IIMTECH/js/jqueryjs.js"></script>
<script src="/wp-content/themes/IIMTECH/js/functions.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
window.addEventListener('load',function(){
jQuery('[href="/contact-us/#quote"]').click(function(){
ga('send','event','book button','click','book a ride')
})
})
</script>
<script type="text/javascript">
var google_replace_number=" 800.317.7087 ";
(function(a,e,c,f,g,h,b,d){var k={ak:"953090911",cl:"_g3pCNSfyWwQ34a8xgM"};a[c]=a[c]||function(){(a[c].q=a[c].q||[]).push(arguments)};a[g]||(a[g]=k.ak);b=e.createElement(h);b.async=1;b.src="//www.gstatic.com/wcm/loader.js";d=e.getElementsByTagName(h)[0];d.parentNode.insertBefore(b,d);a[f]=function(b,d,e){a[c](2,b,k,d,null,new Date,e)};a[f]()})(window,document,"_googWcmImpl","_googWcmGet","_googWcmAk","script");
</script>
</body>
</html>