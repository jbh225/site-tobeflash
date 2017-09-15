<?php
/*
  Template Name: Brochure Video
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
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/images/slider-video.png'; ?>">
                <?php
                endif;

                ?>
                <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="circle">
                            <img class="img-responsive center-block" src="<?php echo get_template_directory_uri() . '/images/icons/diamond.png'; ?>">
                        </div>

                        <strong class="sub">
                            <?php pll_e('HAUT DE GAMME'); ?>
                        </strong>
                        <p class="text"><?php pll_e('Un support de communication<strong> de premier choix</strong>'); ?></p>


                    </div>
                    <div class="col-sm-4">
                        <div class="circle">
                            <img class="img-responsive center-block" src="<?php echo get_template_directory_uri() . '/images/icons/target.png'; ?>">
                        </div>

                        <strong class="sub">
                            <?php pll_e('INTÉRACTIVITÉ'); ?>
                        </strong>
                        <p class="text"><?php pll_e('Une vidéo intégrée dans du papier, <strong>effet « Wahoo » assuré</strong>'); ?>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="circle">
                            <img class="img-responsive center-block" width="54" src="<?php echo get_template_directory_uri() . '/images/icons/excla.png'; ?>">
                        </div>

                        <strong class="sub">
                            <?php pll_e('DIFFÉRENCIATION'); ?>
                        </strong>
                        <p class="text"><?php pll_e('Une occasion originale et innovante <strong>de vous faire remarquer</strong>'); ?></p>
                    </div>
                </div>
                <?php
                $elvideo = get_field('brochure_video');
                if ($elvideo):

                    ?>
                    <h1 class="text-center h1">
                        <?php pll_e('DÉCOUVREZ LA BROCHURE VIDÉO'); ?>
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
                        <img class="img-responsive center-block" src="<?php echo get_template_directory_uri() . '/images/schema-video.png'; ?>">
                        <a class="steps step1" data-trigger="focus hover" type="button" data-container="body" data-toggle="popover" data-placement="bottom" title="<?php pll_e('OUVERTURE'); ?>" data-content="<?php pll_e('Ouverture manuelle du vidéo flyer ou de la vidéo box'); ?>">
                            <img  src="<?php echo get_template_directory_uri() . '/images/icons/1.png'; ?>">
                        </a>
                        <a class="steps step2" data-trigger="focus hover" type="button" data-container="body" data-toggle="popover" data-placement="bottom" title="<?php pll_e('LECTURE'); ?>" data-content="<?php pll_e('Lancement automatique de la vidéo intégrée sur écran LCD avec contrôle de la lecture'); ?>">
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/2.png'; ?>">
                        </a>
                        <a class="steps step3" data-trigger="focus hover" type="button" data-container="body" data-toggle="popover" data-placement="bottom" title="<?php pll_e('AUTONOMIE'); ?>" data-content="<?php pll_e('Rechargement via un câble fourni, Autonomie de 8h'); ?>">
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
                            <a href="#videocard" aria-controls="videocard" role="tab" data-toggle="tab">
                                <?php pll_e('VIDÉO CARD'); ?>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#videoflyer" aria-controls="videoflyer" role="tab" data-toggle="tab">
                                <?php pll_e('VIDÉO FLYER'); ?>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#videobox" aria-controls="videobox" role="tab" data-toggle="tab">
                                <?php pll_e('VIDÉO BOX'); ?>
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
            <div id="videocard" role="tabpanel" class="tab-pane active">
                <div class="row  key-content superflex">
                    <div class="col-sm-6">
                        <?php
                        $images = get_field('gallery_video_card');
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
                            $text1 = get_field('text_video_card');
                            if ($text1):
                                echo $text1;
                            endif;
                            $pdf1 = get_field('pdf_video_card');
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
                $cas1 = get_field('cas_video_card');

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
            <div id="videoflyer" role="tabpanel" class="tab-pane">
                <div class="row  key-content superflex">
                    <div class="col-sm-6">
                        <?php
                        $images4 = get_field('gallery_videoflyer');
                        if ($images4):

                            ?>
                            <div class="flexslider sliderproduct">
                                <ul class="slides">
                                    <?php
                                    foreach ($images4 as $image):
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
                                    foreach ($images4 as $image):
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
                            $text4 = get_field('text_videoflyer');
                            if ($text4):
                                echo $text4;
                            endif;
                            $pdf2 = get_field('pdf_videoflyer');
                            if ($pdf2):
                                //var_dump($pdf1);

                                ?>
                                <a class="download pull-right" href="<?php echo $pdf2["url"] ?>" class="pull-right">
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
                <a class="collapse-title" role="button" data-toggle="collapse" href="#formats" aria-expanded="true" aria-controls="collapseExample">
                    <?php pll_e('CARACTÉRISTIQUES/FORMATS'); ?>
                    <span class="pull-right">
                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </span>
                </a>

                <!--début format-->
                <div id="formats" class="collapse in">
                    <div class="row">
                        <div class="col-xs-6 col-5">
                            <div class="format-wrap">
                                <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats-video/1.png'; ?>">
                            </div>
                            <span>135x190 mm</span>
                            <strong> <?php pll_e('Format DVD'); ?></strong>
                            <span class="last">Ecran 4,3’’ (11 cm)</span>
                            <a class="download pull-right" href="https://www.tobeflash.com/wp-content/uploads/2017/09/Gabarit-2017_VIDEO-FLYER-Format-DVD.pdf" class="pull-right">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 col-5">
                            <div class="format-wrap">
                                <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats-video/2.png'; ?>">
                            </div>
                            <span><?php pll_e('148X210 mm'); ?></span>
                            <strong> <?php pll_e('A5'); ?></strong>
                            <span class="last">Ecran 5’’ (12,7 cm)</span>
                            <a class="download pull-right" href="https://www.tobeflash.com/wp-content/uploads/2017/09/Gabarit-2017_VIDEO-FLYER-A5.pdf" class="pull-right">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 col-5">
                            <div class="format-wrap">
                                <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats-video/3.png'; ?>">
                            </div>
                            <span><?php pll_e('210x210 mm'); ?></span>
                            <strong> <?php pll_e('Format carré'); ?></strong>
                            <span class="last">Ecran 7’’ (17,78 cm)</span>
                            <a class="download pull-right" href="https://www.tobeflash.com/wp-content/uploads/2017/09/Gabarit-2017_VIDEO-FLYER-CarrÇ-.pdf" class="pull-right">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 col-5">
                            <div class="format-wrap">
                                <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats-video/4.png'; ?>">
                            </div>
                            <span><?php pll_e('210x297 mm'); ?></span>
                            <strong> <?php pll_e('A4'); ?></strong>
                            <span class="last">Ecran 7’’ (17,78 cm)</span>
                            <a class="download pull-right" href="https://www.tobeflash.com/wp-content/uploads/2017/09/Gabarit-2017_VIDEO-FLYER-A4.pdf" class="pull-right">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php pll_e('Télécharger le gabarit'); ?>
                            </a>
                        </div>
                        <div class="col-xs-6 col-5">
                            <div class="format-wrap">
                                <img class="center-block" src="<?php echo get_template_directory_uri() . '/images/formats-video/5.png'; ?>">
                            </div>
                            <span></span>
                            <strong><?php pll_e('Format sur mesure'); ?></strong>
                            <span class="last"></span>
                            <a class="btn btn-contact" href="<?php echo get_permalink(20); ?>">
                                <?php pll_e('CONTACTEZ NOUS'); ?>
                            </a>
                        </div>

                    </div>

                </div>

                <!--fin format-->
                <?php
                $cas4 = get_field('cas_videoflyer');

                if ($cas4):

                    ?>
                    <a class="collapse-title" role="button" data-toggle="collapse" href="#casclient4" aria-expanded="true" aria-controls="casclient4">
                        <?php pll_e('CAS CLIENT'); ?>
                        <span class="pull-right">
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div id="casclient4" class="casclient collapse in">


                        <?php foreach ($cas4 as $post): ?>
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
            <div id="videobox" role="tabpanel" class="tab-pane">
                <div class="row  key-content superflex">
                    <div class="col-sm-6">
                        <?php
                        $images2 = get_field('gallery_video_box');
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
                            $text2 = get_field('text_video_box');
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


                <?php
                $cas2 = get_field('cas_video_box');
                //var_dump($cas2);
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
            <div id="surmesure" role="tabpanel" class="tab-pane">
                <div class="row  superflex">
                    <div class="fond">
                        <div class="col-sm-6 icons hidden-xs">
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
