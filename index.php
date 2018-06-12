<?php get_header(); ?>

<body class="animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out-up">
    <main class="container-fluid">

        <!-- HEADER-->
        <header>
        <a name="top-page"></a>
            <!-- FIN LOGO-->
            <!-- NAV / MENU-->
            <nav class="landing__navegacion">
                <ul>
                    <li>
                        <a class='about-nav' href="#">About</a>
                    </li>
                    <li>
                        <a class="works-nav" href="#">Works</a>
                    </li>
                    <li>
                        <a class="contact-nav" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- FIN NAV / MENU-->
            <!-- MENU MOVIL-->
            <div id="mySidenav" class="sidenav">
                <a id="close-nav" href="javascript:void(0)" class="closebtn">&times;</a>
                <a class='about-nav-movil' href="#">About</a>
                <a class="works-nav-movil" href="#">Works</a>
                <a class="contact-nav-movil" href="#">Contact</a>
            </div>
            <span id="open-nav" class="nav-movil">&#9776;</span>
            <!-- FIN MENU MOVIL-->
        </header>
        <!-- FIN HEADER-->


        <!-- LANDING-->
        <a name="landing-page"></a>
        <section id="landing-page" class="landing background">
            <!-- LANDING ROW-->
            <div class="row landing__row justify-content-center align-items-center">
                <!-- LANDING CONTENIDO-->
                <section class="landing__informacion col-10 col-xl-6 offset-xl-4 wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
                    <h1 class="wow fadeInUp landing__informacion__h1-visible" data-wow-duration="1.2s" data-wow-delay=".5s">Hello</h1>
                    <p>I'm Alicia, a web designer and junior frontend developer and this is my portfolio. Nice to meet you!
                        <br>
                        <br>
                        <br>
                        <br>
                        <a id="see-more" class="texto-small wow bounce hvr-underline-from-center" data-wow-duration="1s" data-wow-delay="1.5s" href="#">see more</a>
                    </p>
                    <img class="position-absolute" src="http://portfolio.local/wp-content/uploads/2018/06/rombos.png" alt="Portfolio de Alicia Cardete">
                </section>
                <!-- FIN LANDING CONTENIDO-->
            </div>
            <!-- FIN LANDING ROW-->
        </section>
        <!-- FIN LANDING -->


        <!-- ABOUT-->
        <a name="about-page"></a>
        <section id="about-page" class="about background">
            <!-- ABOUT ROW-->
            <div class="about__row row justify-content-center align-items-center">
                <!-- ABOUT COLUMNA IZQUIERDA-->
                <section class="about__columnaizquierda col-10 col-md-10 order-2 col-lg-5 order-lg-1 col-xl-6 order-xl-1 justify-content-center align-items-center">
                    <h2 class="titulo-mediano  wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">I enjoy everyday, because I work in what I love</h2>
                    <article class="about__columnaizquierda__texto wow fadeIn" data-wow-duration="1s" data-wow-delay=".8s">
                        <p>I’m a 24 years old hardworking and passionated webx designer and frontend developer from Spain. I
                            finished my master in June 2018, so now I’m looking for a job that offers me an opportunity to
                            develop my skills in this professional field and to learn more about it everyday.</p>
                        <br>
                        <p>Before starting my career like a web designer and frontend developer, I built several blogger designs
                            for some clients. These experiences made me realize I love it and that I needed to change my
                            career -I was studying to be a Primary teacher- for be a professional of this labor field. I’m
                            very proud of took that decisition. </p>
                        <br>
                        <p class="titulo-pequeño">What can I do?</p>
                        <br>
                        <p>As designer, I can create multidispositive wireframes and responsive designs. I can use Axure RP,
                            Adobe Photoshop, Sketch, Principle and I’m learning Adobe Illustrator and about logo designs
                            and lettering. Moreover, as frontend developer, I know HTML5, CSS3, Javascript, Flexbox, Grid,
                            PHP and Wordpress.
                        </p>
                        <br>
                        <p class="titulo-pequeño">A little more about me</p>
                        <br>
                        <p>I LOVE reading, writing, the bellydance, yoga and nature. I’ve travelled around Europe and I’ve visited
                            Norway, UK, France, Italy (where I resided four months), Poland, Portugal… and I hope to travel
                            around the world one day! I believe in dreams, so I always follow mine and encourage others to
                            do it too. Ahhh, and I have a blog where I share writing tips :)</p>
                    </article>
                </section>
                <!-- ABOUT FIN COLUMNA IZQUIERDA-->
                <!-- ABOUT COLUMNA DERECHA-->
                <section class="about__columnaderecha col-10 order-1 col-md-8 col-lg-5 col-xl-4">
                    <div class="about__columnaderecha__rectangulo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s"></div>
                    <img class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" src="http://portfolio.local/wp-content/uploads/2018/06/foto-alicia.jpg" alt="Alicia Cardete">
                    <section class="about__columnaderecha__letras letter-big wow fadeIn" data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="about__columnaderecha__a  position-absolute draggable hvr-bob">A</div>
                        <div class="about__columnaderecha__b position-absolute draggable hvr-bob">B</div>
                        <div class="about__columnaderecha__o position-absolute draggable hvr-bob">O</div>
                        <div class="about__columnaderecha__u position-absolute draggable hvr-bob">U</div>
                        <div class="about__columnaderecha__t position-absolute draggable hvr-bob">T</div>
                    </section>
                </section>
                <!-- ABOUT FIN COLUMNA DERECHA-->
            </div>
            <!-- ABOUT FIN ROW-->
        </section>
        <!-- FIN ABOUT-->

        <!-- WORKS -->
        <?php query_posts( 'cat=proyectos' ); ?>

        <a name="works-page"></a>
        <section id="works-page" class="works">
            <div class="row justify-content-center align-items-center">

                <div class="works__letras col-lg-2 col-xl-3">
                    <h1 class="letter-big works__w wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s">W</h1>
                    <h1 class="letter-big works__o wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".3s">O</h1>
                    <h1 class="letter-big works__r wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".4s">R</h1>
                </div>

                <div class="works__proyectos col-12 col-lg-8 col-xl-6">
                    <div class="swiper-container wow fadeIn works__proyectos-swiper-container" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="swiper-wrapper">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="works__proyectos-swiper-slide swiper-slide">
                                <div class="row">
                                    <div class="works__proyectos-img col-12">
                                        <a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail( 'large' ); ?></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="works__proyectos-texto">
                                        <h1 class="titulo-mediano"><a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a></h1>
                                        <div class="justify-content-center">
                                            <div class="col-11">
                                                <p><?php the_excerpt() ?></p>
                                            </div>
                                        </div>
                                        <a class="texto-small animsition-link hvr-underline-from-center" data-animsition-out-class="fade-out-up" data-animsition-out-duration="800"
                                            href="<?php the_permalink() ?>">
                                            <b>see project</b>
                                        </a>
                                    </div>
                                </div>   
                            </div>
                            <?php endwhile; wp_reset_postdata(); endif; ?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                
                <div class="works__letras col-lg-2 col-xl-3">
                    <h1 class="letter-big works__k wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".3s">K</h1>
                    <h1 class="letter-big works__s wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".4s">S</h1>
                </div>
            </div>
        </section>
        <!-- FIN WORKS-->


        <!-- CONTACT-->
        <a name="contact-page"></a>
        <footer id="contact-page" class="contact background">
            <!-- CONTACT ROW 1-->
            <div class="row">
                <!-- CONTACT COLUMNA IZQUIERDA-->
                <section class="contact__columnaizq col-lg-5 offset-lg-1 col-xl-5 offset-xl-1 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".4s">
                    <h1 class="contact__columnaizq__co letter-big">CO
                        <br>NTA
                        <br>CT</h1>
                </section>
                <!-- CONTACT FIN COLUMNA IZQUIERDA-->
                <!-- CONTACT COLUMNA DERECHA-->
                <section class="contact__columnader col-md-12 col-lg-5 col-xl-5 wow fadeInUp" data-wow-duration="1s ">
                    <section class="contact__columnader__info">
                        <div class="contact__columnader__img"></div>
                        <p>Do you want to contact me?
                            <br>Feel free to get in touch!</p>
                        <section class="contact__columnader__info__impor ">
                            <h3 class="contact__columnader__info__impor__tachado ">_Email</h3>
                            <h2 class="titulo-mediano hvr-forward">
                                <a href="# ">miemail@miemail.com</a>
                            </h2>
                            <h3 class="contact__columnader__info__impor__tachado ">_Mobile</h3>
                            <h2 class="titulo-mediano hvr-forward">
                                <a href="# ">(+34)697468210</a>
                            </h2>
                        </section>
                    </section>
                </section>
                <!-- FIN COLUMNA DERECHA-->

    <?php get_footer(); ?>
    </main>


