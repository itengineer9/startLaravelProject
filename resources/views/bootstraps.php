<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complete Bootstrap 4 Website Layout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>

<!-- Navigation -->

<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" >
            <img style="max-height: 80px; max-width: 100px;" src="/img/MyLogo.png" alt="alt"/>
        </a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target='#navbarResponsive'>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" active>
                    <a class="nav-link" href="http://a-alhamad.com">Home</a>
                </li>
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="Zertifikat.html">About</a>
                </li>
                <a class="nav-link" href="slideShow.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Contact</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<!--- Image Slider -->

<div id="slider" class="carousel slide" data-ride='carousel'>
    <ul class="carousel-indicators">
        <li data-target='#slides' data-slide-to='0' class="active"></li>
        <li data-target='#slides' data-slide-to='1' ></li>
        <li data-target='#slides' data-slide-to='2' ></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src='/img/background.png' class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h1 class="display-2">Bootstrap</h1>
                <h3>Complete Website Layout</h3>
                <button type="button" class="btn btn-outline-light btn-lg">View More</button>
                <button type="button" class="btn btn-primary btn-lg">Start</button>
            </div>
        </div>
        <div class="carousel-item" >
            <img src='/img/background2.png' class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" >
            <img src='/img/background3.png' class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<!--- Jumbotron -->

<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">
                A web Hosting Service allows individuals and Organizations
                to make their websites accessible via the World Wide Web.
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
        </div>
    </div>

</div>
    <!--- Welcome Section -->

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Built with ease.</h1>
            </div>
            <hr><!-- comment -->
            <div class="col-12">
                <p class="lead">
                    Welcome to my Bootstrap website training project, Bootstrap is a free
                    and open source front-end library with HTML and CSS based design.
                </p>
            </div>
        </div>
    </div>

    <!--- Three Column Section -->
    <div class="container-fluid padding">
        <div class="row padding text-center">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-code icon"></i>
                <h3 class="display-4">HTML.</h3>
                <p>Build with the latest version of HTML, HTML5.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-bold icon"></i>
                <h3 class="display-4">BOOTSTRAP.</h3>
                <p>Build with the latest version of Bootstrap, Bootstrap4.</p>
            </div><!-- comment -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fab fa-css3 icon"></i>
                <h3 class="display-4">CSS.</h3>
                <p>Build with the latest version of CSS, CSS3.</p>
            </div>
        </div>
        <hr class="my-4">
    </div>

    <!--- Two Column Section -->

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-sm-12 col-md-12 col-lg-10 col-xl-6">

                <h2>If you build it...</h2>
                <p>The columns will automatically stack on top of each other
                    when the screen is less than 576px wide.</p>

                <p>Resize the browser window to see the effect.
                    Responsive Website design become more important as the amount of mobile traffic
                    now accounts for more than half of the internet Traffic</p>

                <p>It can also display the web page differently depend on the size of the screen or viewing device.</p>
                <br><!-- comment -->
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
            <div class="col-lg-6"><img class="img-fluid" src="/img/desk.png"></div>

        </div>

    </div>
    <hr class="my-4">

    <!--- Fixed background -->

    <figure>
        <div class="fixed-wrap">
            <div id="fixed">

            </div>
        </div>
    </figure>

    <!--- Emoji Section -->

    <button class="fun" data-toggle="collapse" data-target="#emoji">click for fun</button>
    <div id="emoji" class="collapse">
        <div class="container-fluid padding">
            <div class="row text-center ">
                <div class="col-sm-6 col-md-3">
                    <img class="gif" src="/img/gif/panda.gif">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="gif" src="/img/gif/poo.gif">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="gif" src="/img/gif/unicorn.gif">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="gif" src="/img/gif/chicken.gif">
                </div>
            </div><!-- comment -->
        </div>
    </div>

    <!--- Meet the team -->

    <div class="container-fluid padding">
        <div class="row welcome text-center ">
            <div class="col-12">
                <h1 class="display-4">Meet the team!</h1>
            </div>
            <hr>
        </div>
    </div>
    <!--- Cards -->
    <div class="container-fluid padding">
        <div class="row  text-center ">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/img/team1.png">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">John is an internet Expert with almost 20 years of experience</p>
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div>
                </div>
            </div>
            <hr>

            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/img/team2.png">
                    <div class="card-body">
                        <h4 class="card-title">Mary Jo</h4>
                        <p class="card-text">Mary is an internet Expert with almost 10 years of experience</p>
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/img/team3.png">
                    <div class="card-body">
                        <h4 class="card-title">Phil Ho</h4>
                        <p class="card-text">John is an internet Expert with almost 20 years of experience</p>
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Two Column Section -->
    <div class="container-fluid padding">
        <div class="row padding ">
            <div class="col-sm-12 col-md-12 col-lg-10 col-xl-6">

                <h2>Our Philosophy...</h2>
                <p>We know the greatness in a disruptive era requires bold ambition,
                    curious talent and a culture that believes we're smarter together.</p>

                <p>Resize the browser window to see the effect.
                    Responsive Website design become more important as the amount of mobile traffic
                    now accounts for more than half of the internet Traffic</p>

                <p>It can also display the web page differently depend on the size of the screen or viewing device.</p>
                <br>
            </div>
            <div class="col-xl-6"><img src="/img/bootstrap2.png" class="img-fluid"></div>

        </div>
        <hr class="my-4">
    </div>

    <!--- Connect -->
    <div class="container-fluid padding">
        <div class="row padding ">
            <div class="col-12">
                <h3>Our Social Media ...</h3>
            </div>

            <div class="col-12 social padding">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#" ><i class="fab fa-twitter"></i></a>
                <a href="#" ><i class="fab fa-instagram"></i></a>
                <a href="#" ><i class="fab fa-youtube"></i></a>
                <a href="#" ><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
    </div>

    <!--- Footer -->
    <footer>
        <div class="container-fluid padding ">
            <div class="row text-center ">
                <div class="col-md-4">
                    <img style="max-height: 80px; max-width: 100px;" src="/img/MyLogo.png">
                    <hr class="light">
                    <p>555-555-5555</p>
                    <p>email@email.com</p><!-- comment -->
                    <p>100 street name</p>
                    <p>city, state, 9000</p>
                </div>

                <div class="col-md-4">
                    <hr class="light">
                    <h5> Our hours</h5></p><hr class="light">
                    <p>Mo-Fr 9:00-16:00</p>
                    <p>Sa 9:00-13:00 </p>
                    <p>So : closed</p>
                </div>

                <div class="col-md-4">
                    <hr class="light">
                    <h5>Our Newsletter</h5></p><hr class="light">
                    <p>Register to get news every day</p>
                    <p><input type="email" name="email" placeholder="Your Email..."></p>
                    <p><a href="#" class="btn btn-outline-secondary">Subscribe</a></p>
                </div>

                <div class="col-12 foot">
                    <hr class="light-100">
                    <h5>&copy; Ahmad Al Hamad</h5>
                    <img style="max-height: 80px; max-width: 100px;" src="/img/MyLogo.png" alt="alt"/>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
