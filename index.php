<?php
    $title = "Home";
    $active_home = "active";

    include ("navbar.php");
?>

            <div class="tinted-header-home">
                <div class="row">
                    <div class="col-xs-10 col-md-8 ml-md-auto mr-md-auto">
                        <div class="row">
                            <div class="col-md-auto col-sm-5">
                                <img class="logo-img" src="img/header/logo-lg.png" alt="Logo-large" />
                            </div>
                            <div class="col-md-auto col-sm-6">
                                <h1 class="large-header-text">Strategy<br>Storm</h1>
                                <div class="tagline">Creating &nbsp;Lifetime &nbsp;Experience</div>
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-auto">
                                <div class="competition-type">SOCIAL BUSINESS CASE COMPETITION</div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-auto">
                                <div class="acknowledgement">An Indian Chapter of Creative Shock</div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div id="carouselHome" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-8 col-sm-6 col-md-4">
                                <h2>Adding Purpose to Business</h2>
                                <hr>
                                <!-- <p>
                                    Strategy Storm is a social business case competition for students in Indian universities. It will be organized for the first time this year.
                                    Graduate and Undergraduate students from all over the country will gather to solve business, marketing and PR related problems for social businesses and enterprises.
                                </p> -->
                                <p>
                                  Strategy Storm is a social business case competition organized by students at Consulting Club, IIT Guwahati. Graduate and undergraduate students from all over the country will gather to solve business, marketing and PR related problems for social enterprises and organizations.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-8 col-sm-6 col-md-4">
                                <div>
                                    <h2>Finals at IIT Guwahati</h2>
                                    <hr>
                                    <p>
                                        Preliminary round happens during 26 October - 04 November 2018.
                                        <br>
                                        The final event is held from 19 January - 21 January 2019 at the Indian Institute of Technology Guwahati, India.
                                        <br>
                                        <strong>Registrations Open at 24th of September, 2018</strong>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
                    <span class="fa fa-angle-left fa-5x" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
                    <span class="fa fa-angle-right fa-5x" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div id="organizers">
                <div class="container">
                    <h1>Organizers</h1>
                    <hr>
                    <div class="row">
                       <div class="col-md-6">
                           <div class="row">
                               <div class="col-2">
                                    <img src="img/home/cac.png" class="img-fluid rounded-circle" alt="Udgam Logo">
                               </div>
                                <div class="col-10">
                                    <h2><span>Consulting & Analytics, IIT Guwahati</span></h2>
                                </div>
                            </div>
                            <p>
Founded in late 2015, Consulting and Analytics Club aims at imparting knowledge and skills in emerging fields of Data Analytics and Management Consulting. We serve as a platform for students to learn, understand and apply various concepts through guest lectures, tutorials and pan India competitions. We were recently awarded the best Technical club by Director of IIT Guwahati for the academic year 2017-18.                        </div>
                        <div class="col-md-6">
                            <div class="row">
                               <div class="col-2">
                                   <img src="img/home/iitg_logo.png" class="img-fluid rounded-circle" alt="IITG Logo">
                               </div>
                                <div class="col-10">
                                    <h2><span>Indian Institute of Technology Guwahati</span></h2>
                                </div>
                            </div>
                            <p>
                            IIT Guwahati, the sixth member of the IIT fraternity, was established in 1994 with the academic programme commencing in 1995. The university campus is on a sprawling 285 hectares plot of land on the north bank of the river Brahmaputra around 20 kms. from the heart of the city. With the majestic Brahmaputra on one side, and with hills and vast open spaces on others, the campus provides an ideal setting for learning.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="map-wrapper">
                <div id="map"></div>
                <?php include("./getintouch.html"); ?>
            </div>

            <div id="become-partner">
                <div class="container">
                    <h1>Become a Partner</h1>
                    <p>
                        We offer a strong recruitment platforms to attract top-level students, brand awareness and improve your employer brand perception.<br>
                        Link the corporate world with academia. To learn more about your opportunity to become a preferred partner of the Strategy Storm,<br>
                        please contact us at <a href="mailto:info@strategystorm.in">info&#64;strategystorm.in</a>
                    </p>
                </div>
            </div>

<?php
    include ("footer.html");
?>
