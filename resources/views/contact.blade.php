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
    <link href="../../assets/css/style.css" rel="stylesheet" />
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

   <!--CONTACT SECTION -->
    <div id="contact-section">
        <div class="container" >
            <!-- ./ Main Heading-->
            <div class="row main-low-margin">
                <div class="col-md-12  col-sm-12 ">


                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1414.978420258911!2d20.46211447610294!3d44.822443894748936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab5a25c4203%3A0xd29d594924ef78bf!2sSkenderbegova+20%2C+Beograd+11000!5e0!3m2!1ssr!2srs!4v1469661605499" width="1200" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

                        <h3>Naša lokacija :</h3>
                        <hr />
                        <p>
                        Skender Begova 20-22<br />
                            Dorćol, Beograd<br />

                        <b>Telefon:</b> 063-83-75-122 - Milan<br />
                        <b>Email:</b> mapprintszr@gmail.com<br />
                            </p>




                </div>
            </div>


             <!-- ./ Row Content-->
             <div class="row ">
                <div class="col-md-12" >
                    <h5>


                    </h5>
                </div>
            </div>
        </div>
    </div>

</form></div>
<form method="post" action="sendEmail">

    <label>Name:</label><br />
    <input name="name" placeholder="Type Here">
     <br />
    <label>E-mail:</label><br />
    <input name="mail" type="email" placeholder="Type Here">
      <br />
    <label>Message:</label><br />
    <textarea name="msg" placeholder="Type Here"></textarea>
       <br/>
    <input id="submit" name="submit" type="submit" value="Submit">

</form>
<h1>{{ isset($response2) ? $response2 : '' }}</h1>
    <!--END CONTACT SECTION -->



    <!--FOOTER SECTION -->
<section id="footerSection" background-color= #000000>
<div class="container" background-color= #000000>
    <footer class="footer well well-small" background-color= #000000>
    <div class="row-fluid">
    <div class="span4">
            <h4>Novosti i prijava:</h4>
            <h5>Naš cilj</h5>
            <em>
            "želimo da vam pružimo najbolje uslove za sersvis Vaših toner kaseta i štampača." <br/><br/>
            </em>
            <h5>Šta kažu naši klijenti?</h5>
            <em>
            "Povoljne cene, svaki dogovor ispoštovan nije bilo problema sa rokovima :)"
            </em>
            <br/><br/>
            <h5><b>Prijava za novosti:</b></h5>
            <form method="post" action="checkEmail">
                <input style="color:black" id="appendedInputButton"  placeholder="Unesite E-mail adresu" type="text" name="email">
                <input type="submit" value="Pošalji" />
            </form>
            <h1>{{ isset($response1) ? $response1 : '' }}</h1>
            <script>
              IF (response1===resposne1){
                alert(response1)
              }

            </script>
        </div>
        <div class="span5">
        <h4>Najnovije vesti:</h4>
        <ul class="media-list">
          <li class="media">
            <a class="pull-left" href="Services.html">
              <img class="media-object" src="assets/img/img64x64.png" alt="bootstrap business template">
            </a>
            <div class="media-body">
              <h5 class="media-heading">Letnja akcija je pri kraju.</h5>
              "Ostalo je jos malo vremena do isteka ak..."<br/>
              <small><em>jul 14, 2016</em> <a href="Services.html"> Više</a></small>
            </div>
          </li>
           <li class="media">
            <a class="pull-left" href="Services.html">
              <img class="media-object" src="assets/img/img64x64.png" alt="bootstrap business template">
            </a>
            <div class="media-body">
              <h5 class="media-heading">Otvorena letnja akcija!</h5>
              "Želimo da Vam omogućimo najpovoljnije ..."<br/>
              <small><em>Jul 02, 2016</em> <a href="Services.html"> Više</a></small>
            </div>
          </li>
           <li class="media">
            <a class="pull-left" href="Services.html">
             <img class="media-object" src="assets/img/img64x64.png" alt="bootstrap business template">
            </a>
            <div class="media-body">
              <h5 class="media-heading">Obaveštenje:</h5>
              "Počinje sezona vrućih sniženja samo z..."<br/>
              <small><em>jun 22, 2016</em> <a href="Services.html"> Više</a></small>
            </div>
          </li>
           <li class="media">
            <a class="pull-left" href="Services.html">
              <img class="media-object" src="assets/img/img64x64.png" alt="bootstrap business template">
            </a>
            <div class="media-body">
              <h5 class="media-heading">Zasto nas odabrati?</h5>
              "Naša profesionalna usluga će ostaviti u Vam ..."<br/>
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
            </address>
            Telefon: <i class="icon-phone-sign"></i> &nbsp; 063 8375 122 <br>
            E-mail: <a href="contact.html" title="contact"><i class="icon-envelope-alt"></i> szrmapprint@gmail.com</a><br/>
            Link: <a href="index.html" title="Business ltd"><i class="icon-globe"></i> www.mapprint.com</a><br/><br/>
            <h5>Brzi linkovi:</h5>
            <a href="services.html" title="services"><i class="icon-cogs"></i> Usluge </a><br/>
            <a href="about.html" title=""><i class="icon-info-sign"></i> O nama </a><br/>
            <a href="contact.html" title="contact"><i class="icon-question-sign"></i> Kontakt </a><br/>

    <h5>Nađite nas na:</h5>
    <div style="font-size:2.5em;">
        <a href="https://www.facebook.com/profile.php?id=100010487207319&fref=ts" role="button" data-toggle="modal" style="display:inline-block; width:1em"> <i class="icon-facebook-sign"><img src= "assets/img/facebook.png" width="50px " height= "50x"  </i> </a>
        <a href="#twitter" role="button" data-toggle="modal" title="" style="display:inline-block; width:1em"> <i class="icon-twitter-sign"> </i> </a>
        <a href="#youtube" role="button" data-toggle="modal" style="display:inline-block;width:1em"> <i class="icon-facetime-video"> </i> </a>
        <a href="#" title="" style="display:inline-block;width:1em"> <i class="icon-google-plus-sign"> </i> </a>
        <a href="#rss" role="button" data-toggle="modal" style="display:inline-block;width:1em" > <i class="icon-rss"> </i> </a>
        <!-- Facebook -->
        <div id="facebook" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="facebook" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>Facebook Header</h3>
          </div>
          <div class="modal-body">
            <p>"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer."</p>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- Twitter -->
        <div id="twitter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="twitter" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>Twitter Header</h3>
          </div>
          <div class="modal-body">
            <p>"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer."</p>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- Rss feed -->
        <div id="rss" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="rss" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>RSS fed header</h3>
          </div>
          <div class="modal-body">
            <p>"Our aim is simple - to provide affordable web design and development services for Mobile and Computer by creating websites that fully meet your requirements a professional look that inspire confidence in your customer."</p>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- Youtube -->
        <div id="youtube" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="youtube" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3>Youtube Vedio</h3>
          </div>
          <div class="modal-body">
            Vedios here
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button>
          </div>
        </div>
    </div>
    </div>
    </div>

    <p style="padding:18px 0 44px">szrMapPrint&copy; 2016, allright reserved </p>
    </footer>
    </div><!-- /container -->
</section>

 </div>


           <!-- CUSTOM SCRIPT-->
    <script src="assets/js/custom.js"></script>
</body>
</html>
