<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maybe a CustomTwo Less site</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <link rel="stylesheet/less" type="text/css" href="main.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div class="container-fluid blackheader">
        <div class="row">
            <a href="#">
            <div class="rt-logo">
                <h2>RT</h2>
            </div>
            </a>
            <div class="questionmore">
                <h2><a href="#">Question more</a></h2>
            </div>
            <div class="buttonlive">
                <button type="button" class="btn">LIVE</button>
            </div>

        </div>
        <div class="row">
                <div class="navbar navbar-default" role="navigation">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right marks">
                            <li><a href="#"><strong>News</strong></a></li>
                            <li><a href="#"><strong>USA</strong></a></li>
                            <li><a href="#"><strong>MK</strong></a></li>
                            <li><a href="#"><strong>Sport</strong></a></li>
                            <li><a href="#"><strong>Russia</strong></a></li>
                            <li><a href="#"><strong>Business</strong></a></li>
                            <li><a href="#"><strong>Op-ed</strong></a></li>
                            <li><a href="#"><strong style="color: #76BD1D";>RT360</strong></a></li>
                            <li><a href="#"><strong>Shops</strong></a></li>
                            <li><a href="#"><strong>Projects</strong></a></li>
                            <li><a href="#"><strong>Podcasts</strong></a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <img id="pic1" src="images/rt1.jpg" alt="Reality" class="responsive">
            </div>
            <div class="col-sm-4 titles">
                <a href="#"><h4>Some title that is big enough that goes in two rows, even maybe three</h4></a>
                <a href="#"><h4 id="pic2" onmouseover="changePic2()" onmouseout="firstPic()">Another that is big enough that goes in two rows, even maybe three</h4></a>
                <a href="#"><h4 id="pic3" onmouseover="changePic3()" onmouseout="firstPic()">Some title that that goes in two rows, even maybe three</h4></a>
                <a href="#"><h4 id="pic4" onmouseover="changePic4()" onmouseout="firstPic()">Some title and some that is big enough that goes in two rows, even maybe three</h4></a>
                <a href="#"><h4 id="pic5" onmouseover="changePic5()" onmouseout="firstPic()">Some title that is big enough that goes in two rows, even maybe three</h4></a>
            </div>
            <div class="col-sm-3 popular borderbox">
                <h5>POPULAR</h5>
                <img src="images/rtoped.jpg" alt="oped" class="responsive1">
                <h3><a href="#" class="hoverclass">Looks like this title always matches the size of the div</a></h3>
            </div>
        </div>
        <div class="row newsline">
            <div class="col-sm-9 borderbox">
                <h5><span><a href="#">Newsline</a></span> Some news that will change over time. Something like carousel or simular</h5>
            </div>
            <div class="col-sm-3">
                <div class="buttons">
                    <button class="bt1">Where to watch</button>
                    <button class="bt2">Schedule</button>
                </div>
            </div>
        </div>
        <div class="row">
            <p>Space for a banner</p>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="articlwithpic ">
                    <img src="images/rtsm1.jpg" alt="Somethingwrong" class="responsive1">
                    <h4><a href="#" class="hoverclass">Some title in order to check it like whaaat</a></h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="articlwithpic ">
                    <img src="images/rtsm2.jpg" alt="Somethingwrong" class="responsive1">
                    <h4><a href="#" class="hoverclass">Some title in order to check it like whaaat it looks good</a></h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="articlwithpic ">
                    <img src="images/rtsm3.jpg" alt="Somethingwrong" class="responsive1">
                    <h4><a href="#" class="hoverclass">Some title in order to check it like whaaat it is nice</a></h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="articllist ">
                    <h4><a href="#" class="hoverclass">Before there is some text to simulate title in order to have a view</a> </h4>
                    <h4><a href="#" class="hoverclass">Again some text to simulate title in order to have a view</a> </h4>
                    <h4><a href="#" class="hoverclass">Changing this helps some text to simulate title in order to have a view</a> </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="titleinpic">
                    <img src="images/rtb1.jpg" alt="smtn" class="responsive">
                    <h3><a href="#">Mike Pence salutes his highschool friends Mike Pence salutes his highschool friends</a></h3>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="articllist ">
                    <h4><a href="#" class="hoverclass">Before there is some text to simulate title in order to have a view</a> </h4>
                    <h4><a href="#" class="hoverclass">Again some text to simulate title in order to have a view</a> </h4>
                    <h4><a href="#" class="hoverclass">Changing this helps some text to simulate title in order to have a view</a> </h4>
                    <h4><a href="#" class="hoverclass">Changing this helps some text to simulate title in order to have a view</a> </h4>
                    <h4><a href="#" class="hoverclass">Changing this helps some text to simulate title in order to have a view</a> </h4>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="articlwithpic ">
                    <img src="images/rtsm4.jpg" alt="Somethingwrong" class="responsive1">
                    <h4><a href="#" class="hoverclass">Some title in order to check it like whaaat</a></h4>
                </div>
                <div class="articllist">
                    <h4><a href="#" class="hoverclass">Changing this helps some text to simulate title in order to have a view</a> </h4>
                </div>
            </div>
        </div>
        <div class="row footer">
            <div class="col-sm-5">
                <h5>
                    <a href="#">ESP</a>
                    <a href="#">РУС</a>
                    <a href="#">DE</a>
                    <a href="#">FR</a>
                    <a href="#">МКД</a>
                </h5>
            </div>
            <div class="col-sm-5">
                <h5>
                    <a href="#">ИНОТВ</a>
                    <a href="#">РТД</a>
                    <a href="#">RUPTLY</a>
                </h5>
            </div>
            <div class="col-sm-2 text-right">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </div>
        <div class="row footer">
            <div class="col-sm-3">
                <p>RT News App</p>
                <i class="fa fa-android"></i>
                <i class="fa fa-apple"></i>
                <i class="fa fa-windows"></i>
            </div>
            <div class="col-sm-1">
                <p class="rtshop"><strong>RT</strong><span>SHOP</span></p>
            </div>
            <div class="col-sm-8 text-right">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <div class="row footer">
            <div class="col-sm-3">
                <h6><a href="#">News</a></h6>
                <h6><a href="#">USA</a></h6>
                <h6><a href="#">UK</a></h6>
                <h6><a href="#">Russia</a></h6>
                <h6><a href="#">Bussiness</a></h6>
                <h6><a href="#">Sport</a></h6>
            </div>
            <div class="col-sm-3">
                <h6><a href="#">Op-ed</a></h6>
                <h6><a href="#" class="green">RT360</a></h6>
                <h6><a href="#">Shows</a></h6>
                <h6><a href="#">Projects</a></h6>
                <h6><a href="#" class="green">RT Play</a></h6>
                <h6><a href="#">Podcasts</a></h6>
            </div>
            <div class="col-sm-3 blue">
                <h6><a href="#">Live</a></h6>
                <h6><a href="#">Applications</a></h6>
                <h6><a href="#">Where to watch</a></h6>
                <h6><a href="#">Schedule</a></h6>
                <h6><a href="#">Sponsored content</a></h6>
                <h6><a href="#">On-Air Talent</a></h6>
            </div>
            <div class="col-sm-3 blue">
                <h6><a href="#">Terms of Use</a></h6>
                <h6><a href="#">Privacy Policy</a></h6>
                <h6><a href="#">About us</a></h6>
                <h6><a href="#">Contact info</a></h6>
                <h6><a href="#">Feedback & Complaints</a></h6>
                <h6><a href="#">Vacancies</a></h6>
            </div>
        </div>
        <div class="row footer">
            <a href="#">
                <div class="rt-logogray">
                    <h3><strong>RT</strong></h3>
                </div>
            </a>
            <p>© Autonomous Nonprofit Organization “TV-Miceski”, 1989–2019. All rights reserved.</p>
        </div>


    <script src="javascript.js"></script>
</body>
</html>