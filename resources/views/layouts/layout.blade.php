<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!-- HEAD SECTION -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Map Print Servis</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--CUSTOM STYLE -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="assets/js/custom.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!--END HEAD SECTION -->

<body>
    <div>
        <!-- NAV SECTION -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Map Print</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Početna</a></li>
                        <li><a href="/onama">O nama</a></li>
                        <li><a href="/usluge">Usluge</a></li>
                        <li><a href="/kontakt">Kontakt</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!--END NAV SECTION -->

        <div class="container">
            @yield('content')
        </div>

        <!--FOOTER SECTION -->

    </div>
    <section id="footerSection" background-color=# 000000>
        <div class="container" background-color=# 000000>
            <footer class="footer well well-small" background-color=# 000000>
                <div class="row-fluid">
                    <div class="span4">
                        <h4>Novosti i prijava:</h4>
                        @if(isset($news))
                            @foreach($news as $story)
                                <div class="row  text-center">
                                    <div position="center">
                                        <h3 class="media-heading">{{ $story->headline }}</h3>
                                        <p>{{ $story->excerpt }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <h5>Naš cilj</h5>
                        <em>
            "želimo da vam pružimo najbolje uslove za sersvis Vaših toner kaseta i štampača." <br/><br/>
            </em>
                        <h5>Šta kažu naši klijenti?</h5>
                        <em>
            "Povoljne cene, svaki dogovor ispoštovan nije bilo problema sa rokovima :)"
            </em>
                        <br/>
                        <br/>
                        <h5><b>Prijava za novosti:</b></h5>
                       <div data-role="main" class="ui-content">                        
                          <form method="post" action="subscribing">
                            <div>
                              <h3>Vaš e-mail:</h3>
                              
                              <input type="text" name="email" id="usrnm" style="color:black" >
                              
                              <input type="submit" data-inline="true" value="prijava" style="color:black" >
                            </div>
                          </form>
                        </div>
                      </div>
                        <div class="answer">
                            <h4>{{ isset($response1) ? $response1 : '' }}</h4>
                        </div>
                    </div>
                    <div class="span5">
                        <h4>Najnovije vesti:</h4>
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left" href="Services.html">
                                    <img class="media-object" src="assets/img/img64x64.png" alt="bootstrap business template">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">Letnja akcija je pri kraju.</h5> "Ostalo je jos malo vremena do isteka ak..."
                                    <br/>
                                    <small><em>jul 14, 2016</em> <a href="Services.html"> Više</a></small>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="Services.html">
                                    <img class="media-object" src="assets/img/img64x64.png" alt="bootstrap business template">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">Otvorena letnja akcija!</h5> "Želimo da Vam omogućimo najpovoljnije ..."
                                    <br/>
                                    <small><em>Jul 02, 2016</em> <a href="Services.html"> Više</a></small>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="Services.html">
                                    <img class="media-object" src="assets/img/img64x64.png" alt="bootstrap business template">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">Obaveštenje:</h5> "Počinje sezona vrućih sniženja samo z..."
                                    <br/>
                                    <small><em>jun 22, 2016</em> <a href="Services.html"> Više</a></small>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="Services.html">
                                    <img class="media-object" src="assets/img/img64x64.png" alt="bootstrap business template">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">Zasto nas odabrati?</h5> "Naša profesionalna usluga će ostaviti u Vam ..."
                                    <br/>
                                    <small><em>Jun 14, 2016</em> <a href="Services.html"> Više</a></small>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="span3">
                        <h4>Posetite nas</h4>
                        <address style="margin-bottom:15px;">
            <strong><a href="index.html" title="business"><i class=" icon-home"></i> SZR Map Print </a></strong><br>
                Skender begova 20-22, Stari grad<br>
                11000 Beograd, Srbija<br>
            </address> Telefon: <i class="icon-phone-sign"></i> &nbsp; 063 8375 122
                        <br> E-mail: <a href="contact.html" title="contact"><i class="icon-envelope-alt"></i> mapprintszr@gmail.com</a>
                        <br/> Link: <a href="index.html" title="Business ltd"><i class="icon-globe"></i> www.mapprint.com</a>
                        <br/>
                        <br/>
                        <h5>Brzi linkovi:</h5>
                        <a href="services.html" title="services"><i class="icon-cogs"></i> Usluge </a>
                        <br/>
                        <a href="about.html" title=""><i class="icon-info-sign"></i> O nama </a>
                        <br/>
                        <a href="contact.html" title="contact"><i class="icon-question-sign"></i> Kontakt </a>
                        <br/>

                        <h5>Nađite nas na:</h5>
                        <div style="font-size:2.5em;">
                            <a href="https://www.facebook.com/profile.php?id=100010487207319&fref=ts" role="button" data-toggle="modal" style="display:inline-block; width:1em"> <i class="icon-facebook-sign"><img src= "assets/img/facebook.png" width="50px " height= "50x">  </i> </a>
                        </div>
                            <br>
                            <br>
                           
                <p style="padding:18px 0 44px"><h12>szrMapPrint&copy; 2017, allright reserved </h12></p>
            </footer>
        </div>
        <!-- /container -->
    </section>

    </div>
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->




    <!--END FOOTER SECTION -->
    </div>
</body>

</html>