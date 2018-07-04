<?php
    $title = "About Us";
    $active_aboutus = "active";

    include ("navbar.php");
?>

            <div id="team" class="img-responsive">
                <h1>Meet the Team</h1>
                <!-- <img class="img-responsive" src="./img/aboutus/team.jpg" alt="Team Photo" /> -->
            </div>

            <div id="executive-team" class="container">
                <h1>Executive Team</h1>
                <hr>
                <div class="row justify-content-center">

                    <div class="col-3">
                        <img class="img-fluid rounded-circle" src="./img/aboutus/manav.jpg" alt="Manav_Photo" /><br>
                        <h4>Manav Agrawal</h4>
                        <a href="mailto:manav190497@iitg.ac.in" data-toggle="tooltip" data-placement="bottom" title="manav190497@iitg.ac.in"><i class="fa fa-envelope fa-lg fa1"></i></a>
                        <a href="https://www.linkedin.com/in/manav-agrawal/" target="_blank"><i class="fa fa-linkedin-square fa-lg fa1"></i></a>
                    </div>
                    <div class="col-3">
                        <img class="img-fluid rounded-circle" src="./img/aboutus/devesh.jpg" alt="Devesh_Photo" /><br>
                        <h4>Devesh Soni</h4>
                        <a href="mailto:deveshsoni350@gmail.com" data-toggle="tooltip" data-placement="bottom" title="deveshsoni350@gmail.com"><i class="fa fa-envelope fa-lg fa1"></i></a>
                        <a href="https://www.linkedin.com/in/sonidevesh/" target="_blank"><i class="fa fa-linkedin-square fa-lg fa1"></i></a>
                    </div>
                    <div class="col-3">
                        <img class="img-fluid rounded-circle" src="./img/aboutus/vishwas.jpg" alt="Vishwas_Photo" /><br>
                        <h4>Vishwas Mishra</h4>
                        <a href="mailto:vishwas17597@gmail.com" data-toggle="tooltip" data-placement="bottom" title="vishwas17597@gmail.com"><i class="fa fa-envelope fa-lg fa1"></i></a>
                        <a href="https://www.linkedin.com/in/vishwas-mishra-280161128/" target="_blank"><i class="fa fa-linkedin-square fa-lg fa1"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-3">
                      <img class="img-fluid rounded-circle" src="./img/aboutus/mithilesh.jpg" alt="Mithilesh_Photo" /><br>
                      <h4>Mithilesh Kohale</h4>
                      <a href="mailto:beingtmk@gmail.com" data-toggle="tooltip" data-placement="bottom" title="beingtmk@gmail.com"><i class="fa fa-envelope fa-lg fa1"></i></a>
                      <a href="https://www.linkedin.com/in/mithilesh-kohale-471915136/" target="_blank"><i class="fa fa-linkedin-square fa-lg fa1"></i></a>
                  </div>
                    <div class="col-3">
                        <img class="img-fluid rounded-circle" src="./img/aboutus/utkarsh.jpg" alt="Utkarsh_Photo" /><br>
                        <h4>Utkarsh Aggarwal</h4>
                        <a href="mailto:utk.agg@iitg.ac.in" data-toggle="tooltip" data-placement="bottom" title="utk.agg@iitg.ac.in"><i class="fa fa-envelope fa-lg fa1"></i></a>
                        <a href="https://www.linkedin.com/in/utkarsh-aggarwal-a64ba052/" target="_blank"><i class="fa fa-linkedin-square fa-lg fa1"></i></a>
                    </div>
                </div>
            </div>

            <div id="advisory-team">
                <h1>Advisory Board</h1>
                <hr>
                <div class="row justify-content-center">
                    <div class="advisory-team-member col col-md-2">
                        <img class="img-fluid rounded-circle" src="./img/aboutus/ex1.jpg" alt="Shashank_Photo" />
                        <h4>Shashank <br>Gautam</h4>
                        <a href="mailto:gshashank555@gmail.com" data-toggle="tooltip" data-placement="bottom" title="gshashank555@gmail.com"><i class="fa fa-envelope fa-lg fa1"></i></a>
                        <a href="https://www.linkedin.com/in/shashankg14/" target="_blank"><i class="fa fa-linkedin-square fa-lg fa1"></i></a>
                    </div>
                    <div class="advisory-team-member col col-md-2">
                        <img class="img-fluid rounded-circle" src="./img/aboutus/nihar.jpg" alt="Nihar_Photo" />
                        <h4>Nihar <br>Lohiya</h4>
                        <a href="mailto:lohiyanihar@gmail.com" data-toggle="tooltip" data-placement="bottom" title="lohiyanihar@gmail.com"><i class="fa fa-envelope fa-lg fa1"></i></a>
                        <a href="https://www.linkedin.com/in/niharlohiya/" target="_blank"><i class="fa fa-linkedin-square fa-lg fa1"></i></a>
                    </div>
                    <div class="advisory-team-member col col-md-2">
                        <img class="img-fluid rounded-circle" src="./img/aboutus/ex5.jpg" alt="Shaswat_Photo" />
                        <h4>Shaswat Shrivastava</h4>
                        <a href="mailto:srivastava.shashwat1@gmail.com" data-toggle="tooltip" data-placement="bottom" title="srivastava.shashwat1@gmail.com"><i class="fa fa-envelope fa-lg fa1"></i></a>
                        <a href="https://www.linkedin.com/in/shashwatsrivastava/" target="_blank"><i class="fa fa-linkedin-square fa-lg fa1"></i></a>
                    </div>
                </div>
            </div>

            <div class="quotation">
                <div class="container row justify-content-between">
                    <div class="col-12 col-lg-5 algin-self-center">
                        <blockquote>
                            <p>
                                The best thing about the idea of social business and enterprises is, it adds purpose to business.
                            </p>
                        </blockquote>
                    </div>
                    <div class="col-md-auto">
                        <?php include ("getintouch.html"); ?>
                    </div>
                </div>
            </div>

<?php
    include ("footer.html");
?>
