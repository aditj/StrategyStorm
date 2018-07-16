<?php
    $title = "Conference";
    $active_conference = "active";

    include ("navbar.php");
?>

            <div id="carouselConference" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <a class="carousel-control" href="#carouselConference" data-slide-to="0"><li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li></a>
                    <a class="carousel-control" href="#carouselConference" data-slide-to="1"><li data-target="#carouselExampleIndicators" data-slide-to="1"></li></a>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="conference-tint row align-items-center">
                            <div class="container">
                                <div class="col-4 col-md-5 align-self-center">
                                    Strategy Storm's <span>Social Business Conference</span>
                                </div>
                            </div>
                        </div>
                        <img class="d-block w-100" src="./img/conference/conference_slider1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <div class="conference-tint row align-items-center">
                            <div class="container">
                                <div class="col-4 col-md-5 align-self-center">
                                    Meet us at IIT Guwahati in Week 3
                                </div>
                            </div>
                        </div>
                        <img class="d-block w-100" src="./img/conference/conference_slider2.JPG" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselConference" role="button" data-slide="prev">
                    <span class="fa fa-angle-left fa-5x" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselConference" role="button" data-slide="next">
                    <span class="fa fa-angle-right fa-5x" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <script charset="utf-8">
                $(".carousel").carousel({
                    interval: 4000,
                    pause: false,
                })
            </script>

            <div id="about-us" class="container">
                <h1>About</h1>
                <hr>
                <p>
                  The 2nd Social Business Conference of Strategy Storm 2019 will take place at IIT Guwahati on January 20th and will be open for the competition participants and IIT Guwahati’s current campus junta. The main goal of the conference is to introduce young leaders to the models of social business and the challenges faced while dealing with social problems, through business perspective. We gather renowned and inspirational speakers from social businesses, the business world, as well as entrepreneurs to deliver conference with high quality content. This conference is a great place not only to increase awareness about social entrepreneurship but also to meet and establish professional networks with leaders of social businesses around the world. The aim of the entire project is to create a breath-taking experience to all participants and to stimulate your creativity through new inspiring platforms for problem-solving.
                </p>
            </div>

            <div id="speakers">
                <h1 class="">Speakers</h1>
                <hr>
                <div class="row">
                    <div class="col-md-3 img-wrap container">
                        <img class="img-fluid" src="img/conference/pic1.png" alt="First Speaker" />
                        <h2><span>Coming Soon</span></h2>
                    </div>
                    <div class="col-md-3 img-wrap">
                        <img class="img-fluid" src="img/conference/pic2.png" alt="Second Speaker" />
                        <h2><span>Coming Soon</span></h2>
                    </div>
                    <div class="col-md-3 img-wrap">
                        <img class="img-fluid" src="img/conference/pic3.png" alt="Third Speaker" />
                        <h2><span>Coming Soon</span></h2>
                    </div>
                    <div class="col-md-3 img-wrap">
                        <img class="img-fluid" src="img/conference/pic4.png" alt="Fourth Speaker" />
                        <h2><span>Coming Soon</span></h2>
                    </div>
                </div>
            </div>

            <div id="agenda" class="container">
                <h1>AGENDA</h1>
                <hr>
                <div class="row justify-content-between">
                    <div class="col-sm-6">
                        <table>
                            <tr>
                                <td>9:30</td>
                                <td>Registration</td>
                            </tr>
                            <tr>
                                <td>10:00</td>
                                <td>Opening</td>
                            </tr>
                            <tr>
                                <td>10:30</td>
                                <td>Speaker 1</td>
                            </tr>
                            <tr>
                                <td>10:50</td>
                                <td>Speaker 2</td>
                            </tr>
                            <tr>
                                <td>11:20</td>
                                <td>Panel Discussion</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-6 agenda">
                        <table>
                            <tr>
                                <td>12:00</td>
                                <td>Coffee Break</td>
                            </tr>
                            <tr>
                                <td>12:15</td>
                                <td>Speaker 3</td>
                            </tr>
                            <tr>
                                <td>12:50</td>
                                <td>Speaker 4</td>
                            </tr>
                            <tr>
                                <td>13:20</td>
                                <td>Panel Discussion</td>
                            </tr>
                            <tr>
                                <td>13:40</td>
                                <td>Closing</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- <div id="faqs">
                <div class="container">
                    <h1>Frequently Asked Questions</h1>
                    <hr>
                    <p class="question">1. How many teams will make it to the finals?</p>
                    <p>Ans: The top 8 teams from the prelims will be invited for the finals.</p>
                    <p class="question">2. Do I have to be a business student to attend Strategy Storm?</p>
                    <p>Ans: No, not at all! We accept anyone who wants to prove themselves.</p>
                    <p class="question">3. Is the preliminary round held online?<p>
                    <p>Ans: Yes, the preliminary round is held online.
                    <p class="question">4. How many people in a team can apply?
                    <p>Ans: Teams are made of three or four people.<p>
                    <p class="question">5. Does members of a team necessary have to be from a same university?</p>
                    <p>Ans: No, people from different universities can be in a same team.</p>
                    <p class="question">6. Do you cover accommodation and travel fees to the finals?</p>
                    <p>Ans: Accommodation fees will be taken care by us but you have to take care of your travel to IIT Guwahati.</p>
                </div>
            </div> -->

<?php
    include ("footer.html");
?>
