<?php
// -----
// Part of the News Box Manager plugin, re-structured for Zen Cart v1.5.1 and later by lat9.
// Copyright (C) 2015, Vinos de Frutas Tropicales
//
// +----------------------------------------------------------------------+
// | Do Not Remove: Coded for Zen-Cart by geeks4u.com                     |
// | Dedicated to Memory of Amelita "Emmy" Abordo Gelarderes              |
// +----------------------------------------------------------------------+
//
?>
<div class="centerColumn" id="moreNewsDefault">
  <div class="post">
    <div class="post__title_block">
      <div class="pull-left">
        <h1 class="post__title text-uppercase"><?php echo $news_title; ?></h1>
      <div class="pull-left">
        <time><strong>
          <?php 
            $dateAdded = date("j", strtotime($news_added_date));
						$monthAdded = date("M", strtotime($news_added_date));
					?>
          <span>
            <?php echo $dateAdded;?>
          </span>
          <?php echo $monthAdded;?>
        </strong></time>
      </div>

      </div>
    </div>
    <!-- Content Post-->
    <p>
      <img class="img-responsive" src="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/news/'.$news_image;?>" alt="<?php echo $news_title; ?>">
    </p>
    <div class="divider divider--xs"></div>
    <?php echo htmlspecialchars_decode(stripslashes($news_content)); ?>
  </div>
  <div class="newsInfo"><?php //echo ($start_date === false) ? TEXT_NEWS_ARTICLE_NOT_FOUND : ('<span class="news_header">' . TEXT_NEWS_PUBLISHED_DATE . '</span><span class="news_date">' . $start_date . ((isset ($end_date)) ? ( NEWS_DATE_SEPARATOR . $end_date) : '') . '</span>'); ?>
    
    <!--Begin Disqus http://www.samuelsena.com/zen-cart-disqus-comment-system/-->
                        <?php define('DISQUS_STATUS', 'false');  if(DISQUS_STATUS != 'false') { ?>
                        <div id="<?php echo DISQUS_ELEMENT_ID; ?>"></div>
                        <script type="text/javascript">
                            
                            var disqus_container_id = '<?php echo DISQUS_ELEMENT_ID; ?>';
                            var disqus_domain = 'disqus.com';
                            var disqus_shortname = '<?php echo DISQUS_SHORTNAME; ?>';
                            var disqus_title = "<?php echo $news_title; ?>";
                            var disqus_config = function () {
                            var config = this; // Access to the config object
                        
                                /*
                                   All currently supported events:
                                    * preData ?fires just before we request for initial data
                                    * preInit - fires after we get initial data but before we load any dependencies
                                    * onInit  - fires when all dependencies are resolved but before dtpl template is rendered
                                    * afterRender - fires when template is rendered but before we show it
                                    * onReady - everything is done
                                 */
                        
                                config.callbacks.preData.push(function() {
                                    // clear out the container (its filled for SEO/legacy purposes)
                                    document.getElementById(disqus_container_id).innerHTML = '';
                                });
                        
                            };
                        </script>
                        <script type="text/javascript">
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript';
                            dsq.async = true;
                            dsq.src = 'http://' + disqus_shortname + '.' + disqus_domain + '/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                        </script>
                        <?php } ?>
                        <!--End Disqus http://www.samuelsena.com/zen-cart-disqus-comment-system/-->
    
  </div>

  <div class="buttonRow back btn btn--ys">
    <?php //echo zen_back_link() . zen_image_button (BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?>
    <a href="<?php echo zen_href_link (FILENAME_NEWS_ARCHIVE, '', 'SSL'); ?>">
      <?php echo zen_image_button (BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) ?>
    </a>
  </div>
  
</div>
