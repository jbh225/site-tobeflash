<?php
/*
Template Name: WEB KEY
*/
get_header();
if (have_posts()) :
  // Start the Loop.
  while (have_posts()) : the_post();

  ?>
  <div class="subheader row">
    <div class="col-xs-12">
      <?php
      if (has_post_thumbnail()):
        the_post_thumbnail('full', array('class' => 'img-responsive'));
      else:

        ?>
        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/images/slider-web-key.png'; ?>">
        <?php
      endif;

      ?>

      <div class="row text-center">
        <div class="col-sm-4">
          <div class="circle">
            <img class="img-responsive center-block" src="<?php echo get_template_directory_uri() . '/images/ext.png'; ?>">
          </div>

          <strong class="sub">
            <?php pll_e('SIMPLICITÉ'); ?>
          </strong>
          <p class="text"><?php pll_e('Support papier + Port USB'); ?>
            <i class="egal">=</i>
            <strong><?php pll_e('Redirection immédiate vers vos contenus en ligne'); ?></strong></p>
          </div>
          <div class="col-sm-4">
            <div class="circle">
              <img class="img-responsive center-block" src="<?php echo get_template_directory_uri() . '/images/copy.png'; ?>">
            </div>

            <strong class="sub">
              <?php pll_e('INNOVATION'); ?>
            </strong>
            <p class="text"><?php pll_e('Personnalisation + Mesurabilité'); ?>
              <i class="egal">=</i>
              <strong><?php pll_e('Outil adapté aux nouvelles tendances du marketing'); ?></strong></p>
            </div>
            <div class="col-sm-4">
              <div class="circle">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri() . '/images/lock.png'; ?>">
              </div>
              
              <strong class="sub">
                <?php pll_e('TRACKING'); ?>
              </strong>
              <p class="text"><?php pll_e('Plateforme de tracking + Remontée des performances en temps réel'); ?>
                <i class="egal">=</i>
                <strong><?php pll_e('Visibilité instantanée sur le ROI'); ?></strong></p>
              </div>
            </div>
            <?php
            $elvideo = get_field('elvideo-webkey');
            if ($elvideo):

              ?>
              <h1 class="text-center h1">
                <?php pll_e('DÉCOUVREZ LA WEB KEY'); ?>
              </h1>
              <div class="video center-block">
                <div class="embed-responsive embed-responsive-16by9">
                  <?php echo $elvideo; ?>
                </div>
              </div>
            <?php endif; ?>
            <h2 class="text-center h1">
              <?php pll_e('COMMENT CA MARCHE ?'); ?>
            </h2>
            <div class="schema">

              <div id="rollover">
                <img class="img-responsive center-block" src="<?php echo get_template_directory_uri() . '/images/schema.png'; ?>">
                <a class="steps step1" data-trigger="focus hover" type="button" data-container="body" data-toggle="popover" data-placement="bottom" title="<?php pll_e('BRANCHEMENT'); ?>" data-content="<?php pll_e('Retrait de la web key du flyer et connexion au port USB d’un ordinateur (MAC ou PC)'); ?>">
                  <img  src="<?php echo get_template_directory_uri() . '/images/icons/1.png'; ?>">
                </a>
                <a class="steps step2" data-trigger="focus hover" type="button" data-container="body" data-toggle="popover" data-placement="bottom" title="<?php pll_e('CONNEXION'); ?>" data-content="<?php pll_e('Redirection automatique vers le contenu en ligne'); ?>">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/2.png'; ?>">
                </a>
                <a class="steps step3" data-trigger="focus hover" type="button" data-container="body" data-toggle="popover" data-placement="bottom" title="<?php pll_e('STATISTIQUES'); ?>" data-content="<?php pll_e('Consultation des statistiques de performance via la plateforme de tracking'); ?>">
                  <img  src="<?php echo get_template_directory_uri() . '/images/icons/3.png'; ?>">
                </a>

              </div>
            </div>
            <h2 class="text-center h1">
              <?php pll_e('NOTRE GAMME'); ?>
            </h2>
            <div class="text-center tabs-trigger  center-block">
              <!-- Nav tabs -->
              <ul id="tabs" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#webcard" aria-controls="webcard" role="tab" data-toggle="tab">
                    <?php pll_e('WEB CARD'); ?>
                  </a>
                </li>
                <li role="presentation">
                  <a href="#webflyer" aria-controls="webflyer" role="tab" data-toggle="tab">
                    <?php pll_e('WEB FLYER'); ?>
                  </a>
                </li>
                <li role="presentation">
                  <a href="#surmesure" aria-controls="surmesure" role="tab" data-toggle="tab">
                    <?php pll_e('SUR MESURE'); ?>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content">
          <div id="webcard" role="tabpanel" class="tab-pane active">
            <div class="row  key-content superflex">
              <div class="col-sm-6">
                <?php
                $images = get_field('gallery_web_card');
                if ($images):

                  ?>
                  <div class="flexslider sliderproduct">
                    <ul class="slides">
                      <?php
                      foreach ($images as $image):
                        //var_dump($image['sizes']);

                        ?>
                        <li>


                          <img class="img-responsive" src="<?php echo $image['sizes']['product']; ?>" alt="<?php echo $image['alt']; ?>" />
                          <a class="gallery-go" data-fancybox-type="image" href="<?php echo $image['url']; ?>">
                            <i class="fa fa-search"></i>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <div class="flexslider carousel">
                    <ul class="slides">
                      <?php
                      foreach ($images as $image):
                        //var_dump($image['sizes']);

                        ?>
                        <li>


                          <img class="img-responsive" src="<?php echo $image['sizes']['small-product']; ?>" alt="<?php echo $image['alt']; ?>" />

                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <?php
                endif;

                ?>

              </div>
              <div class="col-sm-6 wrap-right">
                <div class="">

                  <?php
                  $text1 = get_field('text_web_card');
                  if ($text1):
                    echo $text1;
                  endif;
                  $pdf1 = get_field('pdf_web_card');
                  if ($pdf1):
                    //var_dump($pdf1);

                    ?>
                    <a class="download pull-right" href="<?php echo $pdf1["url"] ?>" class="pull-right">
                      <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
                    </a>
                    <?php
                  endif;

                  ?>
                  <a class="btn btn-devis" href="<?php
                  if (get_bloginfo('language') == "en-US" || get_bloginfo('language') == "en-GB"): echo get_permalink(786);
                else: echo get_permalink(18);
              endif;

              ?>#contactHeader">
              <?php pll_e('Demande de devis'); ?>
            </a>
          </div>
        </div>
      </div>

      <?php
      $cas1 = get_field('cas_client_1');

      if ($cas1):

        ?>
        <a class="collapse-title" role="button" data-toggle="collapse" href="#casclient1" aria-expanded="true" aria-controls="collapseExample">
          <?php pll_e('CAS CLIENT'); ?>
          <span class="pull-right">
            <i class="fa fa-minus-circle" aria-hidden="true"></i>
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
          </span>
        </a>
        <div id="casclient1" class="casclient collapse in">


          <?php foreach ($cas1 as $post): ?>
            <?php setup_postdata($post); ?>
            <div class="row onecas">
              <div class="col-sm-6">
                <?php
                $images = get_field('gallery_cas');
                if ($images):

                  ?>
                  <div class="flexslider flexsliderBase">
                    <ul class="slides">
                      <?php
                      foreach ($images as $image):
                        //var_dump($image['sizes']);

                        ?>
                        <li>

                          <a href="<?php echo $image['url']; ?>" class="gallery-link">
                            <img class="img-responsive" src="<?php echo $image['sizes']['acc']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <?php
                endif;

                ?>
              </div>
              <div class="col-sm-6">
                <h4><?php the_title(); ?></h4>
                <?php
                $desc = get_field('description_cas');
                if ($desc):

                  ?><h6><?php pll_e('DESCRIPTION DU PROJET'); ?></h6><?php
                  echo $desc;
                endif;

                ?><h6><?php pll_e('TÉMOIGNAGE CLIENT'); ?></h6><?php
                the_content();

                ?>
              </div>
            </div>
          <?php endforeach; ?>

          <?php wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>

    </div>
    <div id="webflyer" role="tabpanel" class="tab-pane">
      <div class="row  key-content superflex">
        <div class="col-sm-6">
          <?php
          $images2 = get_field('gallery_web_flyer');
          if ($images2):

            ?>
            <div class="sliderproduct flexslider">
              <ul class="slides">
                <?php
                foreach ($images2 as $image):
                  //var_dump($image['sizes']);

                  ?>
                  <li>


                    <img class="img-responsive" src="<?php echo $image['sizes']['product']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <a class="gallery-go" data-fancybox-type="image" href="<?php echo $image['url']; ?>">
                      <i class="fa fa-search"></i>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="flexslider carousel">
              <ul class="slides">
                <?php
                foreach ($images2 as $image):
                  //var_dump($image['sizes']);

                  ?>
                  <li>


                    <img class="img-responsive" src="<?php echo $image['sizes']['small-product']; ?>" alt="<?php echo $image['alt']; ?>" />

                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php
          endif;

          ?>

        </div>
        <div class="col-sm-6 wrap-right">
          <div class="">

            <?php
            $text2 = get_field('text_web_flyer');
            if ($text2):
              echo $text2;
            endif;

            ?>
            <a class="btn btn-devis" href="<?php
            if (get_bloginfo('language') == "en-US" || get_bloginfo('language') == "en-GB"): echo get_permalink(786);
          else: echo get_permalink(18);
        endif;

        ?>#contactHeader">
        <?php pll_e('Demande de devis'); ?>
      </a>
    </div>
  </div>
</div>
<a class="collapse-title" role="button" data-toggle="collapse" href="#formats" aria-expanded="true" aria-controls="collapseExample">
  <?php pll_e('CARACTÉRISTIQUES/FORMATS'); ?>
  <span class="pull-right">
    <i class="fa fa-minus-circle" aria-hidden="true"></i>
    <i class="fa fa-plus-circle" aria-hidden="true"></i>
  </span>
</a>

<!--formats-->
<div id="formats" class="collapse in">
  <div class="row">
    <div class="col-xs-6 col-5">
      <div class="format-wrap">
        <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats/1.png'; ?>">
      </div>
      <span>210X297 mm</span>
      <strong> <?php pll_e('A4'); ?></strong>
      <a class="download pull-right" href="https://www.tobeflash.com/wp-content/uploads/2017/09/Gabarit-2017_WEB-FLYER-A4.pdf" target="_blank" class="pull-right">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
      </a>
    </div>

    <div class="col-xs-6 col-5">
      <div class="format-wrap">
        <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats/2.png'; ?>">
      </div>
      <span><?php pll_e('148X210 mm'); ?></span>
      <strong> <?php pll_e('A5'); ?></strong>
      <a class="download pull-right" href="https://www.tobeflash.com/wp-content/uploads/2017/09/Gabarit-2017_WEB-FLYER-A5.pdf" target="_blank" class="pull-right">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
      </a>
    </div>

    <div class="col-xs-6 col-5">
      <div class="format-wrap">
        <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats/3.png'; ?>">
      </div>
      <span><?php pll_e('100X210 mm'); ?></span>
      <strong> <?php pll_e('Format allongé'); ?></strong>
      <a class="download pull-right" href="https://www.tobeflash.com/wp-content/uploads/2017/09/Gabarit-2017_WEB-FLYER-AllongÇ_100x210.pdf" target="_blank" class="pull-right">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
      </a>
    </div>

    <div class="col-xs-6 col-5">
      <div class="format-wrap">
        <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats/4.png'; ?>">
      </div>
      <span><?php pll_e('194X194 mm'); ?></span>
      <strong> <?php pll_e('Format carré'); ?></strong>
      <a class="download pull-right" href="https://www.tobeflash.com/wp-content/uploads/2017/09/Gabarit-2017_WEB-FLYER-Carre_194-x-194.pdf" target="_blank" class="pull-right">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
      </a>
    </div>

    <div class="col-xs-6 col-5">
      <div class="format-wrap">
        <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats/5.png'; ?>">
      </div>
      <span><?php pll_e('105x148 mm'); ?></span>
      <strong><?php pll_e('A6'); ?></strong>
      <a class="download pull-right" href="https://www.tobeflash.com/wp-content/uploads/2017/09/Gabarit-2017_WEB-FLYER-A6.pdf" target="_blank" class="pull-right">
        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
      </a>
    </div>

  </div>
  <p class="subtab text-uppercase"><?php pll_e('Les WEB FLYER sont disponibles <strong>en recto/verso et en deux volets</strong>. L’emplacement de la clé est <strong>personnalisable</strong>.'); ?></p>
</div>

<!--formats-->
<?php
$cas2 = get_field('cas_client_2');

if ($cas2):

  ?>
  <a class="collapse-title" role="button" data-toggle="collapse" href="#casclient2" aria-expanded="true" aria-controls="casclient2">
    <?php pll_e('CAS CLIENT'); ?>
    <span class="pull-right">
      <i class="fa fa-minus-circle" aria-hidden="true"></i>
      <i class="fa fa-plus-circle" aria-hidden="true"></i>
    </span>
  </a>
  <div id="casclient2" class="casclient collapse in">


    <?php foreach ($cas2 as $post): ?>
      <?php setup_postdata($post); ?>
      <div class="row onecas">
        <div class="col-sm-6">
          <?php
          $images = get_field('gallery_cas');
          if ($images):

            ?>
            <div class="flexslider flexsliderBase">
              <ul class="slides">
                <?php
                foreach ($images as $image):
                  //var_dump($image['sizes']);

                  ?>
                  <li>

                    <a href="<?php echo $image['url']; ?>" class="gallery-link">
                      <img class="img-responsive" src="<?php echo $image['sizes']['acc']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php
          endif;

          ?>
        </div>
        <div class="col-sm-6">
          <h4><?php the_title(); ?></h4>
          <?php
          $desc = get_field('description_cas');
          if ($desc):

            ?><h6><?php pll_e('DESCRIPTION DU PROJET'); ?></h6><?php
            echo $desc;
          endif;

          ?><h6><?php pll_e('TÉMOIGNAGE CLIENT'); ?></h6><?php
          the_content();

          ?>
        </div>
      </div>
    <?php endforeach; ?>

    <?php wp_reset_postdata(); ?>
  </div>
<?php endif; ?>

</div>
<div id="surmesure" role="tabpanel" class="tab-pane">
  <div class="row  superflex">
    <div class="fond">
    <style>
    @media (max-width:768px){
      #surmesure .icons::before{
        display:none;
      }
      .subheader .nav-tabs li{
        margin-bottom:15px;
      }
    }
    </style>
    <div class="col-sm-6 icons">
      <div class="row text-center">
        <div class="col-sm-4">
          <img class="center-block img-responsive" src="<?php echo get_template_directory_uri() . '/images/icons/casque.png'; ?>">
          <strong><?php pll_e('À l’écoute'); ?></strong>
        </div>
        <div class="col-sm-4">
          <img class="center-block img-responsive" src="<?php echo get_template_directory_uri() . '/images/icons/light.png'; ?>">
          <strong><?php pll_e('Force de
          proposition'); ?>
        </strong>
      </div>
      <div class="col-sm-4">
        <img class="center-block img-responsive" src="<?php echo get_template_directory_uri() . '/images/icons/hat.png'; ?>">
        <strong><?php pll_e('Expert<br>
        fabrication'); ?></strong>
      </div>

    </div>
    <div class="spacer"></div>
    <div class="h3 challenge"><?php pll_e('CHALLENGEZ-NOUS !'); ?></div>
  </div>
  <div class="col-sm-6 content-right">
    <div class="">

      <?php
      $text3 = get_field('text_sur_mesure');
      if ($text3):
        echo $text3;
      endif;

      ?>
      <a class="btn btn-devis" href="<?php
      if (get_bloginfo('language') == "en-US" || get_bloginfo('language') == "en-GB"): echo get_permalink(786);
    else: echo get_permalink(18);
  endif;

  ?>#contactHeader">
  <?php pll_e('Demande de devis'); ?>
</a>
</div>
</div>
</div>
</div>

<?php
$cas3 = get_field('cas_client_3');

if ($cas3):

  ?>
  <a class="collapse-title" role="button" data-toggle="collapse" href="#casclient3" aria-expanded="true" aria-controls="casclient3">
    <?php pll_e('CAS CLIENT'); ?>
    <span class="pull-right">
      <i class="fa fa-minus-circle" aria-hidden="true"></i>
      <i class="fa fa-plus-circle" aria-hidden="true"></i>
    </span>
  </a>
  <div id="casclient3" class="casclient collapse in">


    <?php foreach ($cas3 as $post): ?>
      <?php setup_postdata($post); ?>
      <div class="row onecas">
        <div class="col-sm-6">
          <?php
          $images = get_field('gallery_cas');
          if ($images):

            ?>
            <div class="flexslider flexsliderBase">
              <ul class="slides">
                <?php
                foreach ($images as $image):
                  //var_dump($image['sizes']);

                  ?>
                  <li>

                    <a href="<?php echo $image['url']; ?>" class="gallery-link">
                      <img class="img-responsive" src="<?php echo $image['sizes']['acc']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php
          endif;

          ?>
        </div>
        <div class="col-sm-6">
          <h4><?php the_title(); ?></h4>
          <?php
          $desc = get_field('description_cas');
          if ($desc):

            ?><h6 ><?php pll_e('DESCRIPTION DU PROJET'); ?></h6><?php
            echo $desc;
          endif;

          ?><h6 ><?php pll_e('TÉMOIGNAGE CLIENT'); ?></h6><?php
          the_content();

          ?>
        </div>
      </div>
    <?php endforeach; ?>

    <?php wp_reset_postdata(); ?>
  </div>
<?php endif; ?>

</div>
</div>

<?php
endwhile;
endif;
get_footer();
