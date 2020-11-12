

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Northstreet Restaurant">
    <meta name="author" content="A.K.">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Restaurant FTW</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="myPage"  data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Restaurant Awoo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron">
    <div class="container-fluid">
        <div class="header-content-inner">
            <h1>Welcome to Awoo Restaurant Management</h1>
            <h3>We are proud of our long history of making delicious meals, warm and
                friendly atmosphere and professional staff.</h3>
        </div>
    </div>
</div>

<section class="bg-about bg-section" id="about">
    <div class="container-fluid">
        <h1 class="container-h1">About</h1>
        <div class="row">
            <div class="col-sm-5">

                <div class="hov-img">
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951746/new/warm_welcome.jpg" alt="Warm welcome" class="hov-img-bottom img-fluid">
                    <div class="hov-img-top hov-img-slideup">
                        <div class="hov-img-text">
                            <h5>Warm welcome</h5>
                            <p>It had separate tables, a menu, and specialized in soups made with a base of meat and eggs, which were said to be restaurants or, in English "restoratives".</p>
                        </div>
                    </div>
                </div>

                <div class="hov-img">
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951746/new/delicious_meals.jpg" alt="Delicious meals" class="hov-img-bottom img-fluid">
                    <div class="hov-img-top hov-img-slideup">
                        <div class="hov-img-text">
                            <h5>Delicious meals</h5>
                            <p> In about 1765 a new kind of eating establishment, called a "Bouillon", was opened on rue des Poulies, near the Louvre, by a man named Boulanger.</p>
                        </div>
                    </div>
                </div>

                <div class="hov-img">
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536951746/new/professional_staff.jpg" alt="Professional staff" class="hov-img-bottom img-fluid">
                    <div class="hov-img-top hov-img-slideup">
                        <div class="hov-img-text">
                            <h5>Professional staff</h5>
                            <p>For centuries Paris had taverns which served food at large common tables, but they were notoriously crowded, noisy, not very clean, and served food of dubious quality.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-7">
                <div class="row ">
                    <div class="restaurant-history slideanim text-center">
                        <h3 class="section-heading">Restaurant Awoo</h3>
                        <p class="about-history first">The modern idea of a restaurant – as well as the term itself – appeared in Paris in the 18th century. For centuries Paris had taverns which served food at large common tables, but they were notoriously crowded, noisy, not very clean, and served food of dubious quality. In about 1765 a new kind of eating establishment, called a "Bouillon", was opened on rue des Poulies, near the Louvre, by a man named Boulanger.<br /> <br >
                            It had separate tables, a menu, and specialized in soups made with a base of meat and eggs, which were said to be restaurants or, in English "restoratives". Other similar bouillons soon opened around Paris.
                            In about 1765 a new kind of eating establishment, called a "Bouillon", was opened on rue des Poulies, near the Louvre, by a man named Boulanger.
                            It had separate tables, a menu, and specialized in soups made with a base of meat and eggs, which were said to be restaurants or, in English "restoratives". Other similar bouillons soon opened around Paris.
                        </p>

                        <button type="button" class="btn more" id="more" data-toggle="collapse" data-target="#demo">More</button>
                        <div id="demo" class="collapse">
                            <p class="about-history"> Thanks to Boulanger and his imitators, these soups moved from the category of remedy into the category of health food and ultimately into the category of ordinary food. Their existence was predicated on health, not gustatory, requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<

<section class="bg-service bg-section" id="service">
    <div class="container-fluid text-center">
        <h1 class="container-h1">Service</h1>

        <div class="row service-round-3 slideanim">
            <div class="col-sm-4 text-center round">
                <div class="service-round b-party">
                    <i class="fa fa-4x fa fa-birthday-cake sr-icons"></i>
                </div>
                <h4>Birthday party</h4>
                <p>For more information please contact us.</p>
            </div>
            <div class="col-sm-4 text-center round">
                <div class="service-round wedding">
                    <i class="fa fa-4x fa fa-heart sr-icons"></i>
                </div>
                <h4>Wedding</h4>
                <p>For more information please contact us</p>
            </div>
            <div class="col-sm-4 text-center round">
                <div class="service-round b-dinner">
                    <i class="fa fa-4x fa fa-suitcase  sr-icons"></i>
                </div>
                <h4>Business dinner</h4>
                <p>For more information please contact us.</p>
            </div>
        </div>
        <a href="#contact" class="btn">Contact us</a>
    </div>
</section>




<section id="gallery" class="bg-gallery no-padding">
    <div class="container-fluid">
        <h3>Gallery</h3>
        <hr class="hr-h3s">
        <div class="row no-gutter gallery slideanim">

            <div class="col-sm-4 portfolio-item">
                <a href="#" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-instagram fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s1.jpg" class="img-fluid
                        " alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-instagram fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s2.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-instagram fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s3.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-instagram fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s4.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-instagram fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s5.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-instagram fa-3x"></i>
                        </div>
                    </div>
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952203/new/s6.jpg" class="img-fluid" alt="">
                </a>
            </div>
        </div>
        <div class="row more-img">

            <div class="to-gallery">
                <h4>For more pictures visit us on</h4>
                <div class="social-networks">
                    <a href="https://www.instagram.com" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="bg-staff" id="staff">
    <div class="container-fluid">
        <h3>Our staff</h3>
        <hr class="hr-h3s">
        <div class="row text-center slideanim thumbnail-row">
            <div class="col-sm-3">
                <div class="staff">
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952566/new/manager.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                    <h5 class="">John Johnson</h5>
                    <h6>Manager</h6>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="staff">
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952565/new/chef1.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                    <h5 class="">Anna Schmidt</h5>
                    <h6>Chef</h6>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="staff">
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952566/new/chef3.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                    <h5 class="">Ivan Gonzales</h5>
                    <h6>Chef</h6>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="staff">
                    <img src="https://res.cloudinary.com/dbte0ueti/image/upload/v1536952566/new/chef2.jpg" class="" alt="chef-img" style="width:170px; height: 170px">
                    <h5 class="">Joseph Martinez</h5>
                    <h6>Chef</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-testimonials" id="testimonials">
    <div class="container-fluid">
        <h3 class="">What customers say about us</h3>
        <hr class="hr-testimonials">
        <div class="row slideanim">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <h4>The atmosphere in restaurant is friendly, and the
                            dishes are delicious.</h4>
                        <h5>Mark Gross</h5>
                    </div>

                    <div class="carousel-item">
                        <h4>Delicious meals, warm welcome, excellent service.</h4>
                        <h5>Nina Hansen</h5>
                    </div>

                    <div class="carousel-item">
                        <h4>Definitely my favourite restaurant, friendly, clean,
                            delicious meals.</h4>
                        <h5>Maria Fernandez</h5>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>

</div>





<script src="js/main.js"></script>

<script>

</script>

</body>

</html>