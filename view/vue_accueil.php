
        <?php

        include_once('view/vue_entete.php')

        ?>

        <!--
            <div class="slider--container">
                <img src="assets/imgs/mans_innovation_mans_sonorejpg.jpg" alt="" role="presentation" class="img__slider active">
                <img src="assets/imgs/placeholder.webp" alt="" role="presentation" class="img__slider">
                <img src="assets/imgs/placeholder.webp" alt="" role="presentation" class="img__slider">
                <div class="slider--container__next">
                     <i class="fa-solid fa-circle-chevron-right"></i>
                </div>
                <div class="slider--container__prev">
                    <i class="fa-solid fa-circle-chevron-left"></i>
                </div>
                <div class="slider--container__dot">
                    <i class="fa-solid fa-circle slider_dot"></i>
                    <i class="fa-solid fa-circle slider_dot"></i>
                    <i class="fa-solid fa-circle slider_dot"></i>
                </div>
            </div>
            -->

        <!--Section Hero-->
        <div class="main-content">
                <section class="" id="home">
                    <div class="solution--container animate-on-scroll bg-white  px-4">
                        <div class="row" style="margin-top: 200px;">
                            <div class="col-12 col-md-6">
                                <p class="caption--text fs-6"></p>
                                <h1 class="fw-bold m-4"><i>Réinventez vos parcours avec Road Maker !</i></h1>
                                <p class="fs-4 mb-5">Transformez vos circuits en balades interactives et offrez une expérience immersive à vos clients.</p>
                                <div class="d-flex flex-column flex-md-row g-sm-2">
                                    <!--<a href="#" class="button__reservation text-white border-0 py-3 px-5 rounded-2 fs-6 fw-semibold me-4 w-100 w-md-auto mb-2 mb-md-0 text-center text-decoration-none" role="button">Réserver une démo</a>-->
                                    <a href=""  class="button__reservation text-white border-0 py-3 px-2 rounded-2 fs-6 fw-semibold me-4 w-100 w-md-auto mb-2 mb-md-0 text-center text-decoration-none" role="button" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/mindful-house-contact?primary_color=00b6f0'});return false;">Réservez une démo</a>
                                    <a href="index.php#target_application" class="button__details text-black border-0 py-3 px-2 rounded-2 fs-6 fw-semibold bg-white w-100 w-md-auto text-center text-decoration-none" role="button">Plus de détails</a>                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <img src="assets/imgs/Logo.webp" class="d-none d-md-block" alt="Logo">
                            </div>
                        </div>
                    </div>
                </section>

            <!--Section Specificities-->
                <section id="specificities" class="mt-5">
                    <div class="animate-on-scroll  d-flex flex-column flex-lg-row gap-md-4 px-4 py-5  ">
                        <div class="argument--container__item d-flex flex-column align-items-center text-center col shadow-sm p-2 rounded-4">
                            <i class="fa-solid fa-location-dot mb-2 pt-3 "></i>
                            <h2 class="fs-3 fw-bolder mb-2 text-wrap mx-2">Conception de vos propres parcours digitaux</h2>
                            <p class="fs-6 fw-normal mb-1 text-wrap mx-2">Une interface intuitive pour structurer votre parcours avec des points d'intérêt personnalisés.</p>
                        </div>
                        <div class="argument--container__item d-flex flex-column align-items-center text-center col shadow-sm p-2 rounded-4">
                            <i class="fa-solid fa-box-archive  mb-2 pt-3 "></i>
                            <h2 class="fs-3 fw-bolder mb-2 text-wrap mx-2">Gardez une trace de vos parcours digitaux</h2>
                            <p class="fs-6 fw-normal mb-1 text-wrap mx-2">Archivez et suivez votre progression à travers vos parcours digitaux.</p>
                        </div>
                        <div class="argument--container__item d-flex flex-column align-items-center text-center col shadow-sm p-2 rounded-4">
                            <i class="fa-solid fa-vr-cardboard mb-2 pt-3 "></i>
                            <h2 class="fs-3 fw-bolder mb-2 text-wrap mx-2">Vivez une expérience immersive gamifiée en Réalité Augmentée</h2>
                            <p class="fs-6 fw-normal mb-1 text-wrap mx-2">Combinez jeu et réalité augmentée pour un parcours interactif et immersif.
                            </p>
                        </div>
                        <!--
                        <div class="argument--container__item d-flex flex-column align-items-center text-center">
                            <i class="fa-solid fa-person-rays mb-2 pt-3 "></i>
                            <h2 class="fs-3 fw-bolder mb-2 text-wrap mx-2">Une solution agile pour s'adapter aux utilisateurs</h2>
                            <p class="fs-6 fw-normal mb-1 text-wrap mx-2">Quelque soit l'objectif du créateur de parcours dans la solution JEMos, les nombreuses fonctionnalités de création permettent de répondre aux besoins sans être un expert en informatique.</p>
                        </div>
                        -->
                    </div>
                </section>

            <!--Section Usage-->
                <section class="usage--container my-2 p-2" id="principes">
                    <h1 class=" animate-on-scroll  fw-bolder text-center my-3 mb-6 mb-md-5 fs-2">Le principe est simple </h1>
                    <div class="animate-on-scroll  usage--container__pictures d-flex justify-content-around my-2 flex-column flex-lg-row mt-5">
                        <!--
                        <div class="usage--container__pictures__item d-flex flex-column align-items-center mb-sm-4">
                            <img src="assets/imgs/CAMPUS-EXPRESS.jpg" alt="" role="presentation" class="rounded-4 w-100 w-lg-50">
                            <h3 class="text-wrap fw-bold text-align-center fs-5 mt-2">Expérimentation Campus Express</h3>
                        </div>
                        -->
                        <div class="usage--container__pictures__item d-flex flex-column align-items-center mb-5">
                            <img src="assets/imgs/startup-illu.webp" alt="" role="presentation" class="rounded-4 w-75 w-lg-50">
                            <h3 class="text-wrap fw-bold text-align-center fs-5 mt-3">Créer vos parcours sur RoadMaker</h3>
                        </div>
                        <div class="usage--container__pictures__item d-flex flex-column align-items-center mb-5">
                            <img src="assets/imgs/smartphone-illu.webp" alt="" role="presentation" class="rounded-4 w-75 w-lg-50">
                            <h3 class="text-wrap fw-bold text-align-center fs-5 mt-3">Déployer votre circuit sur RoadBook</h3>
                        </div>
                        <div class="usage--container__pictures__item d-flex flex-column align-items-center mb-5">
                            <img src="assets/imgs/friends-illu.webp" alt="" role="presentation" class="rounded-4 w-75 w-lg-50">
                            <h3 class="text-wrap fw-bold text-align-center fs-5 mt-3">Faites profiter vos clients</h3>
                        </div>
                        <!--
                        <div class="usage--container__pictures__item d-flex flex-column align-items-center">
                            <div class="video--iframe rounded-4 w-100 mt-3 mt-lg-0">
                                <iframe class="rounded-4 w-100 w-lg-50" src="https://www.youtube.com/embed/Lq98waDaXRE?si=GODCznr3r7DPaOgL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <h3 class="text-wrap fw-bold text-center fs-5 mt-2"> Intégration à la bibliothèque universitaire du Mans <br>grâce à RoadMaker </h3>
                        </div>
                        -->
                    </div>
                </section>

            <!--Section Target Application-->
                <section class="target--container" id="target_application">
                    <h1 class=" animate-on-scroll  fw-bolder text-center mb-5 mt-4 mx-4 fs-2 ">Pourquoi RoadMaker ? </h1>
                    <div class="animate-on-scroll  d-flex justify-content-around p-2 mt-3 flex-column flex-lg-row align-items-stretch mx-4 gap-md-4">

                        <div class="target--application__item d-flex flex-column align-items-center text-center col mb-3 shadow-sm p-2 rounded-4 ">
                            <div class="icon-circle d-flex justify-content-center align-items-center mb-2 ">
                                <i class="fa-solid fa-scissors"></i>
                            </div>
                            <h3 class="fw-bold mb-2 text-wrap mx-2">Pour une expérience de navigation sur mesure</h3>
                            <p class="fw-normal text-wrap mx-3">Créez des parcours numériques adaptés à vos besoins spécifiques.</p>
                        </div>
                        <div class="target--application__item d-flex flex-column align-items-center text-center col mb-3 shadow-sm p-2 rounded-4">
                            <div class="icon-circle d-flex justify-content-center align-items-center mb-2">
                                <i class="fa-solid fa-vr-cardboard"></i>
                            </div>
                            <h3  class="fw-bold mb-2 text-wrap mx-2">Expérience immersive grâce à la Réalité Augmentée et Mixte</h3>
                            <p class="fw-normal text-wrap mx-3">Plongez vos visiteurs dans un univers enrichi par la réalité augmentée et mixte.</p>
                        </div>

                        <div class="target--application__item d-flex flex-column align-items-center text-center col mb-3 shadow-sm p-2 rounded-4">
                            <div class="icon-circle d-flex justify-content-center align-items-center mb-2">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <h3  class="fw-bold mb-2 text-wrap mx-2">La solution idéale pour accélérer votre transition numérique</h3>
                            <p class="fw-normal  text-wrap mx-3">Adoptez une plateforme intuitive pour une transformation numérique réussie.</p>
                        </div>
                    </div>
                    <div class="animate-on-scroll  d-flex justify-content-around p-2 mx-4 mt-2 mb-5 flex-column flex-lg-row align-items-stretch gap-md-4 ">
                        <div class="target--application__item d-flex flex-column align-items-center text-center col mb-3 shadow-sm p-2 rounded-4 ">
                            <div class="icon-circle d-flex justify-content-center align-items-center mb-2">
                                <i class="fa-solid fa-cloud"></i>
                            </div>
                            <h3  class="fw-bold mb-2 text-wrap mx-2">Digitaliser les parcours</h3>
                            <p class="fw-normal text-wrap mx-3">Offrez une expérience numérique immersive à vos visiteurs.</p>
                        </div>
                        <div class="target--application__item d-flex flex-column align-items-center text-center col mb-3 shadow-sm p-2 rounded-4">
                            <div class="icon-circle d-flex justify-content-center align-items-center mb-2">
                                <i class="fa-solid fa-gamepad"></i>
                            </div>
                            <h3  class="fw-bold mb-2 text-wrap mx-2">Gamifier</h3>
                            <p class="fw-normal text-wrap mx-3">Rendez vos parcours ludiques et engageants grâce à la gamification.</p>
                        </div>
                        <div class="target--application__item d-flex flex-column align-items-center text-center col mb-3 shadow-sm p-2 rounded-4">

                            <div class="icon-circle d-flex justify-content-center align-items-center mb-2">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                            <h3  class="fw-bold mb-2 text-wrap mx-2">Personnalisez vos ressources</h3>
                            <p class="fw-normal text-wrap mx-3">Enrichissez votre contenu avec des ressources personnalisées et ciblées.</p>
                        </div>
                    </div>
                </section>

         <!-- Section Partners -->
                <section class="py-4 partners--section mb-5" id="partners">
                    <h3 class="animate-on-scroll  fw-bold fs-2 text-center pb-4">Nos partenaires</h3>
                    <div id="carouselPartners" class="animate-on-scroll  carousel carousel-dark slide w-75 h-75 mx-auto shadow-lg " data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="assets/imgs/logo_ouest_valo.webp" class="d-block w-75 mx-auto" alt="...">

                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="assets/imgs/logo_lmi.webp" class="d-block w-75 mx-auto" alt="...">

                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="assets/imgs/logo_inpi.webp" class="d-block w-75 mx-auto" alt="Logo INPI">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="assets/imgs/logo_eCarPassion.webp" class="d-block w-75 mx-auto" alt="Logo eCar Passions">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="assets/imgs/logo_ecoMobileLoisirs.webp" class="d-block w-75 mx-auto" alt="Logo EcoMobileLoisirs">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPartners" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselPartners" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>



            <!-- Section Trust -->
                <section class="py-4 partners--section" id="trust_partners">
                    <h3 class="animate-on-scroll  fw-bold fs-2 text-center pb-4">Ils nous font déjà confiance</h3>
                    <div id="carouselTrust" class="animate-on-scroll carousel carousel-dark slide w-75 h-75 mx-auto shadow-lg " data-bs-ride="carousel">

                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselTrust" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselTrust" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselTrust" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="animate-on-scroll  carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="assets/imgs/logo_lemansville.webp" class="d-block w-50 mx-auto" alt="Logo Le Mans Ville">

                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/imgs/logo_leMansMetropole.webp" class="d-block w-50 mx-auto" alt="Logo Le Mans Métropole">

                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="assets/imgs/logo_sartheTourisme.webp" class="d-block w-50 mx-auto" alt="Logo Sarthe Tourisme">
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTrust" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselTrust" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                    </div>
                </section>


            <!--Section Contact-->
                <section id="contact">
                        <div class=" animate-on-scroll  d-flex flex-column align-items-center my-4">
                            <div class="contact--container__header text-center mb-3">
                                <h1 class="fw-bold text-center fs-2">Contactez-nous</h1>
                                <p class="fs-6 text-center text-wrap mx-3">Pour tout complément d'information ou question, n'hésitez pas à nous envoyer un message avec vos cordonnées. Notre équipe vous contactera rapidement</p>
                            </div>
                            <form action="" class="contact--container__form w-75 d-flex flex-column rounded-3 " onsubmit="sendEmail(event)">
                                <div class="">
                                    <div class="contact--container__form__item d-flex flex-column align-items-start my-3 mx-3">
                                        <label for="name" class="text-white fw-bold mb-2">Nom :</label>
                                        <input type="text" name="name" id="name" placeholder="Votre nom" class="w-100 p-2 rounded-4 border-0 " required>
                                    </div>
                                    <div class="contact--container__form__item d-flex flex-column align-items-start my-3 mx-3">
                                        <label for="email" class="text-white fw-bold mb-2">Email :</label>
                                        <input type="email" name="email" id="email" placeholder="Votre email"  class="w-100 p-2 rounded-4 border-0  "required>
                                    </div>
                                    <div class="contact--container__form__item d-flex flex-column align-items-start my-3 mx-3">
                                        <label for="subject" class="text-white fw-bold mb-2">Sujet du mail :</label>
                                        <input type="text" name="subject" id="subject" placeholder="Votre sujet"  class="w-100 p-2 rounded-4 border-0 "required>
                                    </div>
                                    <div class="contact--container__form__item d-flex flex-column align-items-start my-3 mx-3">
                                        <label for="message" class="text-white fw-bold mb-2">Message :</label>
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"  class="w-100 p-2 rounded-4 border-0 "required></textarea>
                                    </div>
                                </div>
                                <div class="contact--container__button d-flex justify-content-center mb-3">
                                    <button type="submit" class="button__contact text-white border-0 py-2 px-5 rounded-pill fs-6 fw-semibold " id="openModal">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </section>
        </div>

            <!--Loading Modal-->
            <dialog class="loading__modal justify-content-center align-items-center flex-column rounded-4 text-center" id="loading__modal">

                    <div class="loading__modal__header">
                        <img src="assets/imgs/Dual Ring-1s-200px.gif" alt="" role="presentation">

                    </div>
                    <div class="loading__modal__body d-flex flex-column align-items-center text-wrap m-auto p-auto">
                        <h1 class="fs-5 fw-bold">Envoi en cours</h1>
                    </div>

            </dialog>

            <!-- Modal contact -->
            <dialog class="modal__contact justify-content-center align-items-center flex-column rounded-4 text-center" id="modal__contact">
                <div class="icon__modal__contact">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div class="modal__contact__header">
                    <h1 class="fs-2 fw-bold ">Message envoyé</h1>
                </div>
                <div class="modal__contact__body d-flex flex-column align-items-center text-wrap m-auto p-auto">
                    <p class="">Votre message a bien été envoyé. Nous vous recontacterons dans les plus brefs délais.<br>Un email récapitulatif de votre demande à été envoyé à l'adresse que vous nous avez communiqué.</p>
                </div>
                <div class="modal__contact__footer">
                    <button class="modal__contact__footer__button fw-semibold  text-white border-0 rounded-pill px-4 py-2 fs-6  mb-2" id="close__modal__contact">Fermer</button>
                </div>
            </dialog>


            <?php

            include_once('view/vue_footer.php')

            ?>




            <!--<button id="back-to-top" title="Back to the top" class="position-fixed  justify-content-center text-center p-2"><i class="fa-solid fa-arrow-up"></i></button>-->
