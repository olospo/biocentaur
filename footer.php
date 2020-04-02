<?php /* Footer */ ?>

<footer>
  <div class="container">
    <!-- <a href="#" class="back_to_top">Back to Top</a> -->
    <div class="row">
      <div class="about three columns">
        <img src="<?php bloginfo('template_directory'); ?>/img/biocentaur_logo_rev.svg" alt="Biocentaur Logo"/>
        <p>
          Baarerstrasse 75, Zug, 6300.<br />
          Switzerland
        </p>
        <p>
          <a href="tel:+441179181506">+44 117 918 1506</a><br />
          <a href="mailto:info@biocentaur.com">info@biocentaur.com</a>
        </p>
        <ul class="social-icons">
          <li><a href="<?php the_field('facebook_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/facebook_icon.svg" /></a></li>
          <li><a href="<?php the_field('twitter_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/twitter_icon.svg" /></a></li>
          <li><a href="<?php the_field('youtube_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/youtube_icon.svg" /></a></li>
        </ul>
      </div>
    
      <div class="three columns">
        <ul>
          <li class="heading"><h5><a href="<?php echo get_site_url(); ?>/individuals/">Individuals</a></h5></li>
          <li><a href="<?php echo get_site_url(); ?>/individuals/">Our process</a></li>
          <li><a href="<?php echo get_site_url(); ?>/individuals/future-health-test/">Future health test</a></li>
          <li>
            <a href="#">Support</a>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/individuals/support/health-conditions/">Conditions</a></li>
              <li><a href="#">Health features</a></li>
            </ul>
          </li>
          <li><a href="#">FAQs</a></li>
        </ul>
      </div>
      <div class="three columns">
        <ul>
          <li class="heading"><h5><a href="<?php echo get_site_url(); ?>/clinicians/">Clinicians</a></h5></li>
          <li><a href="#">Clinicians</a></li>
          <li>
            <a href="<?php echo get_site_url(); ?>/clinicians/our-tests/">Our tests</a>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/clinicians/our-tests/predictive-test/">Predictive test</a></li>
              <li><a href="<?php echo get_site_url(); ?>/clinicians/our-tests/diagnostic-test/">Dianostic test</a></li>
              <li><a href="<?php echo get_site_url(); ?>/clinicians/our-tests/targeted-test/">Targeted test</a></li>
            </ul>
          </li>
          <li><a href="#">FAQs</a></li>
        </ul>
      </div>
      <div class="three columns">
        <ul>
          <li class="heading">
            <h5><a href="<?php echo get_site_url(); ?>/about/">About</a></h5>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/about/">About us</a></li>
              <li><a href="#">Laboratory</a></li>
            </ul>
          </li>
        </ul>
        <ul>
          <li class="heading"><h5><a href="<?php echo get_site_url(); ?>/contact/">Contact</a></h5></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="end_links twelve columns">
        <strong>Biocentaur &copy; <?php echo date("Y"); ?>, all rights reserved</strong> | <a href="/cookie-policy">Cookie policy</a> | <a href="/privacy-policy">Privacy policy</a> | <a href="/accessibility">Accessibility</a> | <a href="#">Sitemap</a> | <a href="#">Terms & conditions</a><br />
        <span class="registered">Registered number: xxxxx</span> | <span class="registered">Registered office: Biocentaur LTD, 3 Beau Street, BA6 1QY Bath, UK.</span> | <span class="registered">In compliance with GDPR -EU 2016/679- / IBC- Motive Consulting / DPO for RGCC Group</span>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
