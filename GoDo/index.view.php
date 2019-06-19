<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maybe a bootstrap site</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: #f7f7f7;
        }
        li.active {
            border-bottom: 5px solid orange;
        }

        .navbar-brand, .navbar-nav li a {
            line-height: 100px;
            height: 100px;
            padding-top: 0;
            font-size: 20px;
        }
        .golemina {
            max-height: 800px;
            margin-top: -31px;
        }
        .carousel {
            margin-top: 10px;
        }

        .carousel-caption {
            top: 15%;
            bottom: auto;
        }
        p {
            font-size: 20px;
        }
        .carousel-caption h1 {
            color: orange;
        }
        .centered :not(.formattxt) {
            text-align: center;
        }
        .sectncls {
            background-color: white;
            min-height: 700px;
            max-height: 700px;
            margin-left: 60px;
            margin-right: 60px;
        }
        .col-sm-4  img {
            margin-left: 70px;
        }
        .formattxt {
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 20px;
            padding-right: 20px;
            line-height: 35px;
            overflow:hidden;
            text-overflow:ellipsis;

        }
        .img-circle {
            border-style: solid;
            border-width: 2px;
            box-shadow: 3px 5px 3px #888888;
        }
        .row {
            margin-bottom: 80px;
        }
        .btn-lg {
            font-size: 30px;
        }
        .sectncls h1 {
            padding-top: 60px;
        }
        .bcgcolor {
            background-color: #b1dfbb;
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .glyphicon-arrow-right {
            font-size: 23px;
            color: #b1dfbb;
        }
        .col-lg-9 h1, h4 {
            padding-left: 65px;
        }
        .col-lg-3 button {
            margin-top: 10px;
        }
        .col-sm-2 {
            margin-left: 52px;
        }
        .fixing {
            max-width: 100%;
            max-height: 100%;
        }
        .shadowadd {
            box-shadow: 1px 1px 3px 1px #888888;
        }
        .form-control {
            border-style: solid;
            border-width: 2px;
            border-color: white;
            background-color: #383d41;
        }
        label, .white {
            color: white;
        }
        form {
            padding-left: 65px;
        }
        .colored {
            padding-top: 50px;
            background-color: #383d41;
        }
        .hovv:hover {
            opacity: 0.7;
        }
        .btn
        {
            min-height:50px;
            margin:auto;
            margin-bottom:20px;
        }
        .speech-bubble {
            position: relative;
            background: #407378;
            border-radius: .4em;
        }

        .speech-bubble:after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            width: 0;
            height: 0;
            border: 31px solid transparent;
            border-left-color: #407378;
            border-right: 0;
            margin-top: -31px;
            margin-right: -31px;
        }





    </style>



</head>

<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand"  href="#"><img class="img-fluid" src="images/godo-logo.png" alt="Logo"  width="220"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#" style="background-color: #f7f7f7"><strong>Home</strong></a></li>
            <li><a href="#"><strong>Products</strong></a></li>
            <li><a href="#"><strong>Blog</strong></a></li>
            <li><a href="#"><strong>Contact</strong></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> EN <span class="glyphicon glyphicon-chevron-down"></span></a></li>
        </ul>
    </div>
</nav>


<div class="container-fluid">




    <!--Here should go carousel instead just one picture judging from the example (carousel example in previous examples :))-->
    <div class="row">

    <div id="myCarousel" class="carousel slide golemina" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner golemina">

            <div class="item active">
                <img src="images/Nyork.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                    <h1>Property Menagment System</h1>
                    <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting indystry <br>
                            Lorem Ipsum has been the industry standard dummy text ever since the <br>
                            1500s when an unknown printer took a galley of type and scrambled it to <br>
                            make a type soecimen book</strong></p>  <br> <br>
                    <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting indystry <br>
                            Lorem Ipsum has been the industry standard dummy text ever since the <br>
                            1500s when an unknown printer took a galley of type and scrambled it to <br>
                            make a type soecimen book</strong></p>
                </div>
            </div>

            <div class="item">
                <img src="images/skysc.jpg" alt="Skyscraper" style="width:100%;">
                <div class="carousel-caption">
                    <h1>Property Menagment System</h1>
                    <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting indystry <br>
                            Lorem Ipsum has been the industry standard dummy text ever since the <br>
                            1500s when an unknown printer took a galley of type and scrambled it to <br>
                            make a type soecimen book</strong></p>       <br> <br>
                    <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting indystry <br>
                            Lorem Ipsum has been the industry standard dummy text ever since the <br>
                            1500s when an unknown printer took a galley of type and scrambled it to <br>
                            make a type soecimen book</strong></p>
                </div>
            </div>

            <div class="item">
                <img src="images/tunel.jpg" alt="Tunel" style="width:100%;">
                <div class="carousel-caption">
                    <h1>Property Menagment System</h1>
                    <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting indystry <br>
                        Lorem Ipsum has been the industry standard dummy text ever since the <br>
                    1500s when an unknown printer took a galley of type and scrambled it to <br>
                            make a type soecimen book</strong></p> <br> <br>
                    <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting indystry <br>
                            Lorem Ipsum has been the industry standard dummy text ever since the <br>
                            1500s when an unknown printer took a galley of type and scrambled it to <br>
                            make a type soecimen book</strong></p>

                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>


    <div class="row">
        <div class="col-sm-6">
            <h1 class="formattxt"><strong>Mission statement</strong></h1>
            <p class="formattxt">Lorem Ipsum is simply dummy text of the printing and typesetting indystry
                    Lorem Ipsum has been the industry standard dummy text ever since the
                    1500s when an unknown printer took a galley of type and scrambled it to
                    make a type soecimen book</> <br> <br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting indystry
                    Lorem Ipsum has been the industry standard dummy text ever since the
                    1500s when an unknown printer took a galley of type and scrambled it to
                    make a type soecimen book</p>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/hand-img.png" class="img-fluid" height="80px" width="80px">
                    <p>Some other text that too will be edited soon enough</p>
                </div>
                <div class="col-sm-6">
                    <img src="images/hand-img.png" class="img-fluid" height="80px" width="80px">
                    <p>Some other text that too will be edited soon enough</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/hand-img.png" class="img-fluid" height="80px" width="80px">
                    <p>Some other text that too will be edited soon enough</p>
                </div>
                <div class="col-sm-6">
                    <img src="images/hand-img.png" class="img-fluid" height="80px" width="80px">
                    <p>Some other text that too will be edited soon enough</p>
                </div>
            </div>
        </div>

    </div>


    <div class="row centered">
        <h1><strong>Products</strong></h1>
        <h3>Lorem Ipsum is simply dummy text of the pringing and typesetting industry</h3>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <img src="images/hand-img.png" class="img-fluid img-circle" style="border-color: orange" height="80px" width="80px">
            <section class="centered sectncls" style="margin-top: -50px">
                <h1 class="text-warning"><strong>PROPERTY MENAGMENT SYSTEM</strong></h1>
                <p class="formattxt"><strong>Godo is a great solution to minimise time and reduse risk of errors while charging your bookings. <br>
                The system is integrated and designed into Godo property and wokrs with all major card providers. <br>
                        Godo sends out receipts and confirmations of payment along with tagging the booking itseslf as "paid"</strong></p>
                <div class="centered">
                    <button type="button" class="btn btn-lg btn-warning">Learn More</button>
                </div>
            </section>
        </div>
        <div class="col-sm-4">
            <img src="images/hand-img.png" class="img-fluid img-circle" style="border-color: green" height="80px" width="80px">
            <section class="centered sectncls" style="margin-top: -50px">
                <h1 class="text-success"><strong>TRAVIA</strong></h1>
                <p class="formattxt"><strong> Godo is releasing a new product which is a Market connection between Hotels and Travel Agencies. <br>
                This allows Travel Agencies to reach their inventory directory and manage their bookings better.
                    This product will help Travel Agencies and Hotels to reduce time spent on unnecessary emails and communications.</strong></p>
                <div class="centered">
                    <button type="button" class="btn btn-lg  btn-success">Learn More</button>
                </div>
            </section>
        </div>
        <div class="col-sm-4">
            <img src="images/hand-img.png" class="img-fluid img-circle" style="border-color: darkred" height="80px" width="80px">
            <div class="centered sectncls card" style="margin-top: -50px">
                <h1 class="text-danger"><strong>SERVICES</strong></h1>
                <p class="formattxt"><strong>Our system is now connected to DK accounting systems and Microsoft NAV. We are currently
                connecting further partners such as Regla and Uniconta along with other smaller partners.
                        If you would like to use one of these connections please reach out to one of our opreators tho will assist you further.</strong></p>
                <div class="centered">
                    <button type="button" class="btn btn-lg btn-danger">Learn More</button>
                </div>
            </div>
        </div>b
    </div>

    <div class="row bcgcolor">
        <div class="col-lg-9">
            <h1>Seems, It's time to get started!</h1>
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
        </div>
        <div class="col-lg-3">
            <button type="button" class="btn-lg btn btn-default">CONTACT US   <span class="	glyphicon glyphicon-arrow-right"></span></button>
        </div>
    </div>

    <div class="row">
        <div class="centered">
            <h1><strong>Company History</strong></h1>
        </div>
    </div>

    <div class="row">
        <div class="YetToBeNamed">
            <img src="images/img1.png" class="img-fluid center-block" alt="Some Image">

        </div>
    </div>


    <div class="row">
        <div class="centered">
            <h1><strong>Our Team</strong></h1>
            <h4>Our team is young, ambitious and hard working</h4>
            <h4>We strive for excellence and good service and to provide the best property managment system.</h4>
        </div>
    </div>

    <!--List of People-->


    <div class="row">
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                        <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                        <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                        <span>Manager</span>
                    </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                        <span>Manager</span>
                    </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                        <span>Manager</span>
                    </div>
            </figure>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
        <div class="col-sm-2">
            <figure class="figure">
                <a href="#" title="Sveinn Jakob Palsson">
                    <img src="images/team-img1.png" class="center-block" alt="Jakob Palsson" >
                    <p class="text-center">Sveinn Jakob Palsson</p>
                </a>
                <div class="text-center">
                    <span>Manager</span>
                </div>
            </figure>
        </div>
    </div>


    <div class="row">
            <div class="centered">
                <h1><strong>News</strong></h1>
                <h3>Our team is young, ambitious and hard working</h3>
            </div>
    </div>



    <div class="row">
        <div class="col-lg-4">
            <div class="centered sectncls shadowadd">
                    <img src="images/Nyork.jpg" class="fixing" alt="Someth">
                    <p class="formattxt">Lorem Ipsum is simply dummy text of the printing and typesetting indystry
                        Lorem Ipsum has been the industry standard dummy text ever since the
                        1500s when an unknown printer took a galley of type and scrambled it to
                        make a type soecimen book</p>
                    <div class="centered">
                        <button type="button" class="btn-lg btn btn-warning">Learn More</button>
                    </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="centered sectncls shadowadd">
                <img src="images/Nyork.jpg" class="fixing" alt="Someth">
                <p class="formattxt">Lorem Ipsum is simply dummy text of the printing and typesetting indystry
                    Lorem Ipsum has been the industry standard dummy text ever since the
                    1500s when an unknown printer took a galley of type and scrambled it to
                    make a type soecimen book</strong></p>
                <div class="centered">
                    <button type="button" class="btn-lg btn btn-warning">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="centered sectncls shadowadd">
                <img src="images/Nyork.jpg" class="fixing" alt="Someth">
                <p class="formattxt">Lorem Ipsum is simply dummy text of the printing and typesetting indystry
                    Lorem Ipsum has been the industry standard dummy text ever since the
                    1500s when an unknown printer took a galley of type and scrambled it to
                    make a type soecimen book</p>
                <div class="centered">
                    <button type="button" class="btn-lg btn btn-warning">Learn More</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9 colored">
            <h1 class="white">Contact us</h1>
            <h4 class="white">Lorem Ipsum is simply dummy text of the printing and typesetting indystry.</h4>
            <form>
                <div class="form-group row">
                    <div class="col-xs-8">
                        <label for="ex1"><h3>Email</h3></label>
                        <input class="form-control input-lg" id="ex1" type="email">
                    </div>
                    <div class="col-xs-8">
                        <label for="ex2"><h3>Subject</h3></label>
                        <input class="form-control input-lg" id="ex2" type="text">
                    </div>
                    <div class="col-xs-8">
                        <label for="comment"><h3>Message</h3></label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <div class="col-xs-8">
                        <button type="button" class="btn-lg btn btn-warning" style="margin-top: 20px">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3" style=" padding-top: 30px">
            <div class="centered">
                <img src="images/godo-logo.png" class="center-block" alt="GoDo" height="60%" width="60%">
                <h3 style="margin-top: -20px"><strong>info@godo.is</strong></h3>
                <p style="padding-top: 100px">Laugavegur 176, 105 Reykjavik</p>
                <p>Adress in Sweden</p>
                <p>+354 5554636</p>
                <a href="#"><img src="images/facebook1.png" class="center-block hovv" height="80px" width="80px"></a>
                <p style="padding-top: 180px"><strong>ⓒ Godo.is</strong></p>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: -80px">
        <div class="centered" style="background-color: #4e555b">
            <p class="white" style="padding-top: 30px; padding-bottom: 30px">Privacy Policy <span style="padding-right: 50px"> </span>Terms and Conditions</p>
        </div>
</div>

</body>