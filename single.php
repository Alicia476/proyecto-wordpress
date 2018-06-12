<?php get_header(); the_post(); ?>

<body class="animsition">
    <main>
        <header>
            <!-- LOGO-->
            <a id="logo-nav" href="#">
                <img class="logo-projects" src="assets/img/logo2.svg" alt="Portfolio Alicia Cardete">
            </a>
            <!-- FIN LOGO-->
            <!-- NAV / MENU-->
            <div class="projects-nav">
                <a href="<?php echo home_url('#works-page'); ?>" class="animsition-link"><img class="projects-nav__imagen" src="assets/img/flecha-izquierda.svg" alt="" style="width: 16px;"></a>
                <a href="<?php echo home_url('#works-page'); ?>" class="animsition-link"><p class="projects-nav__texto">Go back</p></a>
            </div>
            <!-- FIN NAV / MENU-->
        </header>
        <!-- FIN HEADER-->
        <a name="projects-page"></a>
        <section class="projects">
            <div class="row projects__row justify-content-center align-items-center">
                <div class="col-8 col-sm-10 col-md-8 col-lg-10 col-xl-12 projects__titulo wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <h1 class="letter-big"><?php the_title(); ?></h1>
                </div>
                <div class="col-11 col-sm-10 col-md-10 col-lg-8 col-xl-6 projects__informacion wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
                    <div class="projects__informacion__mockup">
                        <?php the_post_thumbnail ( 'large' ); ?>
                    </div>
                    <article class="projects__informacion__texto">
                        <?php the_content(); ?>
                    </article><br>
                    <a href="<?php the_field('proyectos-enlace'); ?>" class="projects__informacion__enlace hvr-underline-from-center">Visit project</a>

                </div>
                <div class="col-xl-4 projects__imagenderecha wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
                    <?php if( get_field('proyectos-mockup') ): ?>
	                <img src="<?php the_field('proyectos-mockup'); ?>" />
                    <?php endif; ?>
                </div>

                <!-- TOCAPELOTAS SLIDER -->
                <div class="col-12 col-sm-12 col-md-10 col-xl-12" style="display: flex; justify-content: center; align-items: center;">
                    <div class="swiper-container projects__swiper-container">
                        <div class="swiper-wrapper">
                            <?php 
                                $images = get_field('proyectos-galeria');
                                if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
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
                            <a href="#">Old project</a>
                        </span>
                        <span class="pagination__next texto-small hvr-forward">
                            <a href="#">Next project</a>
                        </span>
                    </section>
                    <!-- FIN PAGINATION-->
                </div>
        </section>

        <!-- Copyright-->
        <section class="contact__footer contact__footer-proyectos col-12 texto-small">
            <div class="contact__footer__texto texto-small">
                <p>2018 © Alicia Cardete, Spain</p>
            </div>
            <div class="contact__footer__rrss">
                <ul class="contact__footer__rrss__ul">
                    <a href="#">
                        <li>
                            <img src="assets/img/logo-linkedin.svg" alt="">
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="assets/img/wordpress.svg" alt="">
                        </li>
                    </a>
                    <a href="#">
                        <li>
                            <img src="assets/img/logo-instagram.svg" alt="">
                        </li>
                    </a>
                </ul>
            </div>
        </section>
        <!-- Fin Copyright-->
    </main>

    <?php get_footer(); ?>