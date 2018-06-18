<?php get_header(); the_post(); ?>

<body class="animsition">
    <main>
        <header>
        <a name="top-page"></a>
            <!-- NAV / MENU-->
            <div class="projects-nav">
                <a href="<?php echo home_url('#works-page'); ?>" class="animsition-link"><img class="projects-nav__imagen" src="http://portfolio.local/wp-content/uploads/2018/06/flecha-izquierda.svg" alt="" style="width: 16px;"></a>
                <a href="<?php echo home_url('#works-page'); ?>" class="animsition-link"><p class="projects-nav__texto">Go back</p></a>
            </div>
            <!-- FIN NAV / MENU-->
        </header>
        <!-- FIN HEADER-->
        <a name="projects-page"></a>
        <section class="projects">
            <div class="row projects__row justify-content-center align-items-center">
                <!-- <div class="col-8 col-sm-10 col-md-8 col-lg-10 col-xl-12 projects__titulo wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <h1 class="letter-big"><?php the_title(); ?></h1>
                </div> -->
                <div class="col-11 col-sm-10 col-md-10 col-lg-8 col-xl-6 projects__informacion wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
                    <div class="projects__titulo wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <h1><?php the_title(); ?></h1>
                </div>
                    <div class="projects__informacion__mockup">
                        <?php the_post_thumbnail ( 'large' ); ?>
                    </div>
                    <article class="projects__informacion__texto">
                        <?php the_content(); ?>
                    </article><br>
                    <div class="projects__informacion__enlace"><a href="<?php the_field('proyectos-enlace'); ?>" class="hvr-underline-from-center">
                    Visit project</a></div>

                </div>
                <div class="col-xl-4 projects__imagenderecha wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
                    <?php if( get_field('proyectos-mockup') ): ?>
	                <img src="<?php the_field('proyectos-mockup'); ?>" />
                    <?php endif; ?>
                </div>

                <!-- SLIDER -->
                <div class="col-12 col-sm-12 col-md-10 col-xl-12" style="display: flex; justify-content: center; align-items: center;">
                    <div class="swiper-container projects__swiper-container">
                        <div class="swiper-wrapper">
                            <?php 
                                $images = get_field('proyectos-galeria');
                                if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                                        <div class="swiper-slide">
                                            <img class="single-galeria" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            <!-- <p><?php echo $image['caption']; ?></p> -->
                                        </div>
                                    <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Add Pagination -->
                        <!-- <div class="swiper-pagination swiper-pagination-projects"></div> -->
                    </div>
                </div>
                <div class="col-8 col-xl-8">
                    <!-- PAGINATION-->
                    <section class="pagination">
                        <span class="pagination__old texto-small hvr-backward">
                            <?php next_post_link('%link', 'Old project', TRUE); ?>
                        </span>
                        <span class="pagination__next texto-small hvr-forward">
                            <?php previous_post_link('%link', 'Next project', TRUE); ?>
                        </span>
                    </section>
                    <!-- FIN PAGINATION-->
                </div>
        </section>
        <?php get_footer(); ?>
    </main>