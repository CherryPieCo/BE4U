<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolcool
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="lists-block">
      <div>
        <ul>
          <li>Prices</li>
          <li>Order custom essay</li>
          <li>Sample Essays</li>
          <li>Custom term paper</li>
          <li>Affiliate program</li>
        </ul>
        <ul>
          <li>Custom essay</li>
          <li>Research paper</li>
          <li>Write my essay</li>
          <li>Essay writers</li>
          <li>Writing Process</li>
        </ul>
        <ul>
          <li>Contact us</li>
          <li>Glossary</li>
          <li>Terms and conditions</li>
          <li>Privacy policy</li>
          <li>Sitemap</li>
        </ul>
        <div class="accept-block">
          <p>we accept:</p>
          <img src="<?php echo bloginfo('template_url'); ?>/images/10.png">
        </div>
      </div>
    </div>
    <div class="copyright-block">
      <div>
        <p>Copyright &copy; 2016 BestEssay4You.co.uk All Rights Reserved</p>
      </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
  var downloadjQuery = document.createElement('script');
  var downloadMinScript = document.createElement('script');
  var downloadMyScript = document.createElement('script');
  downloadjQuery.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js';
  downloadMinScript.src = '<?php echo get_template_directory_uri().'/slick/slick.min.js';?>';
  downloadMyScript.src = '<?php echo get_template_directory_uri().'/js/script.js';?>';

  document.body.appendChild(downloadjQuery);

  downloadjQuery.onload = function() {
    document.body.appendChild(downloadMinScript);
    downloadMinScript.onload = function() {
    	document.body.appendChild(downloadMyScript);
    }
  }
</script>
</body>
</html>
