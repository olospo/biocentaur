<?php /* Footer */ ?>

<footer>
  <div class="container">
    <!-- <a href="#" class="back_to_top">Back to Top</a> -->
    <div class="row">
      <div class="about three columns">
        <img src="<?php bloginfo('template_directory'); ?>/img/biocentaur_logo_rev.svg" alt="Biocentaur logo" class="footer_logo" />
        <p>
          <?php the_field('address','options'); ?>
        </p>
        <p>
          <a href="tel:<?php the_field('phone_number','options'); ?>"><?php the_field('phone_number','options'); ?></a><br />
          <a href="mailto:<?php the_field('email','options'); ?>"><?php the_field('email','options'); ?></a>
        </p>
        <ul class="social-icons">
          <?php if(get_field('facebook_link','options')): ?>
            <li><a href="<?php the_field('facebook_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/facebook_icon.svg" /></a></li>
          <?php endif; ?>
          <?php if(get_field('twitter_link','options')): ?>
            <li><a href="<?php the_field('twitter_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/twitter_icon.svg" /></a></li>
          <?php endif; ?>
          <?php if(get_field('youtube_link','options')): ?>
            <li><a href="<?php the_field('youtube_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/youtube_icon.svg" /></a></li>
          <?php endif; ?>
          <?php if(get_field('instagram_link','options')): ?>
            <li><a href="<?php the_field('instagram_link','options'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/instagram_icon.svg" /></a></li>
          <?php endif; ?>
        </ul>
      </div>
    
      <div class="sitemap three columns">
        <ul>
          <li class="heading"><h5><a href="<?php echo get_site_url(); ?>/individuals/">Individuals</a></h5></li>
          <li><a href="<?php echo get_site_url(); ?>/individuals/how-it-works">How it works</a></li>
          <li><a href="<?php echo get_site_url(); ?>/individuals/our-tests/">Our tests</a></li>
          <li>
            Support
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/individuals/support/sample-collection/">Sample collection</a></li>
              <li><a href="<?php echo get_site_url(); ?>/individuals/support/health-conditions/">Health conditions</a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_site_url(); ?>/faq/">FAQs</a></li>
          <li><a href="<?php echo get_site_url(); ?>/customer/individual-test/">Order a test</a></li>
        </ul>
      </div>
      <div class="sitemap three columns">
        <ul>
          <li class="heading"><h5><a href="<?php echo get_site_url(); ?>/clinicians/">Clinicians</a></h5></li>
          <li>
            <a href="<?php echo get_site_url(); ?>/clinicians/our-tests/">Our tests</a>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/clinicians/our-tests/predispot-test/">PrediSpot test</a></li>
              <li><a href="<?php echo get_site_url(); ?>/clinicians/our-tests/primespot-test/">PrimeSpot test</a></li>
              <li><a href="<?php echo get_site_url(); ?>/clinicians/our-tests/snps-test/">SNPs test</a></li>
              <li><a href="<?php echo get_site_url(); ?>/clinicians/our-tests/paldispot-test/">PaldiSpot test</a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_site_url(); ?>/faq/">FAQs</a></li>
          <li><a href="<?php echo get_site_url(); ?>/customer/clinician-test/">Order a test</a></li>
        </ul>
      </div>
      <div class="sitemap three columns">
        <ul>
          <li class="heading">
            <h5><a href="<?php echo get_site_url(); ?>/about/">About</a></h5>
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/about/">About us</a></li>
              <!--<li><a href="#">Laboratory</a></li>-->
            </ul>
          </li>
        </ul>
        <ul>
          <li class="heading"><h5><a href="<?php echo get_site_url(); ?>/news/">News</a></h5></li>
        </ul>
        <ul>
          <li class="heading"><h5><a href="<?php echo get_site_url(); ?>/contact/">Contact</a></h5></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="end_links twelve columns">
		    <div class="footer_block">
			    <a href="/cookie-policy">Cookie policy</a> | <a href="/privacy-policy">Privacy policy</a> | <a href="/accessibility">Accessibility</a> | <a href="/terms-conditions">Terms and conditions</a>
		    </div>
        <div class="footer_block">
			    <strong>Biocentaur &copy; <?php echo date("Y"); ?>, all rights reserved</strong> | <span class="registered">Registered number: 08540437</span> | <span class="registered">Registered office: Biocentaur LTD, 4 Beau Street, BA1 1QY Bath, UK.</span>
		    </div>	
        <div class="footer_block">		  
			     <span class="dpo">In compliance with GDPR -EU 2016/679- / Data Protection Officer for RGCC Group: <a href="mailto:dpo@rgcc-group.com">Zoe Kassapidou</a></span>
		    </div>	
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
