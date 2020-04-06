<?php  
  
session_start(); 
   
if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 
      
echo"views = ".$_SESSION['views']; 
  
?> 

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tsamelp</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Tsamelp</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Tsamelp</div>
        <div class="intro-heading text-uppercase">How Can Tsamelp Help You ? </div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">These are the differents services I can provide you with :</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Responsive Web Development, Backend and Frontend</h4>
          <p class="text-muted">I can quickly build a beautiful Responsive Website at the <strong>lowes prices</strong>.</p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Network administration and Security</h4>
          <p class="text-muted">For all the buildings of your entreprise, just contact me for to handler everything about the <strong>network administration and network security</strong>.</p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Software Development</h4>
          <p class="text-muted">I can build any Software of your need using the java programming language and <strong>integreting the javafx technologie to make your Software more beautiful</strong>.</p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Chess Trainer</h4>
          <p class="text-muted">I am a great chess player (2150+ on www.lichess.org), and I can help you improving your level in chess too. Just contact me and <strong>I will bring your from the Beginner level the the Candidate Master at least </strong></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Activities</h2>
          <h3 class="section-subheading text-muted">In this section of the site we put everything amazing (song, videos, memes, and many more). <br>If your have something interesting your want to share on our website, just click on the <strong>TELL ME MORE</strong> button above</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/p1.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Alan Walker</h4>
            <p class="text-muted">Dark Side (Need For Speed)</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/p2.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Alan Walker</h4>
            <p class="text-muted">Ignite (Need For Speed)</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/p3.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Seal</h4>
            <p class="text-muted">Love's Divine</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/p4.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Ellie Goulding</h4>
            <p class="text-muted">Love Me Like You Do</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/p5.jpeg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Conor Maynard</h4>
            <p class="text-muted">I Hate How Much I Love You</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/p6.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Jonas Blue</h4>
            <p class="text-muted">Mama</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">This is a small recall on our evolution.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>April 2020</h4>
                  <h4 class="subheading">Our Humble Beginnings</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">We put our website on line on Monday, April 6 2020 early at 2:00am. We were very happy to see how it will look like as soon as it will be on the Internet. We hosted it on github (<strong>Very easy to do and $0 cost </strong>)!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>April 2020</h4>
                  <h4 class="subheading">An Agency is Born</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">We started sharing the link of our website in almost all the social media to let people know that we exist, that we have started offring them our services!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>May 2020</h4>
                  <h4 class="subheading">Transition to Full Service</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">We planned to start with E-COMMECER. That is something we were not quite sure it will work but we did it and imagine what : It did not work hahahaha. We made many mistakes but learned from them and lunched ourselves into it again. And for that second time, it really work and people were very happy to use our Website for their sales !</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>June 2020</h4>
                  <h4 class="subheading">Phase Two Expansion</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">We started looking for partners to join us and expand our Website. At first it was really difficult to find them, but Tsopgni Duhamel thought about his friend at school who was the owner of NGAMSOLOGIE DESIGN. He contacted him and he accepted to join us, providing our clients with his sercices. <strong>That was the beginning of our Expansion</strong>!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">Always Having Fun.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <!-- <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
            <h4>Kay Garland</h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div> -->
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>Tsopgni Duhamel</h4>
            <p class="text-muted">Web Developper Frontend and Backend <br>Network administrator <br> Software Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/TsopgniD">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://web.facebook.com/tsopgni.duhamel">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/tsopgni-duhamel-1b0126161">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <!-- <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
            <h4>Diana Pertersen</h4>
            <p class="text-muted">Lead Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div> -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">You can join our team whenever your want, at the only condition that your should share your latter experience with us.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/ensp.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/uy1.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/pvalor.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/ngamsologie.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">We are available 7 days/7 <br> From 7:30 AM To 10:00 PM</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form method="POST" action="contact_me.php" id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Tsamelp 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/TsopgniD">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://web.facebook.com/tsopgni.duhamel">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/tsopgni-duhamel-1b0126161">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Alan Walker</h2>
                <p class="item-intro text-muted">Dark Side (Need For Speed).</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/8AG5xRgDUTY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>
                  We're not in love <br>
                  We share no stories<br>
                  Just something in your eyes<br>
                  Don't be afraid<br>
                  The shadows know me<br>
                  Let's leave the world behind<br><br>

                  Take me through the night<br>
                  Fall into the dark side<br>
                  We don't need the light<br>
                  We'll live on the dark side<br>
                  I see it, let's feel it<br>
                  While we're still young and fearless<br>
                  Let go of the light<br>
                  Fall into the dark side<br>
                  Fall into the dark side<br>
                  Give into the dark side<br>
                  Let go of the light<br>
                  Fall into the dark side<br><br>

                  Beneath the sky<br>
                  As black as diamonds<br>
                  We're running out of time (time, time)<br>
                  Don't wait for truth<br>
                  To come and blind us<br>
                  Let's just believe their lies<br><br>

                  Believe it, I see it<br>
                  I know that you can feel it<br>
                  No secrets worth keeping<br>
                  So fool me like I'm dreaming<br><br>

                  Take me through the night<br>
                  Fall into the dark side<br>
                  We don't need the light<br>
                  We'll live on the dark side<br>
                  I see it, let's feel it<br>
                  While we're still young and fearless<br>
                  Let go of the light<br>
                  Fall into the dark side<br>
                  Fall into the dark side<br>
                  Give into the dark side<br>
                  Let go of the light<br>
                  Fall into the dark side<br><br>

                  Take me through the night<br>
                  Fall into the dark side<br>
                  We don't need the light<br>
                  We'll live on the dark side<br>
                  I see it, let's feel it<br>
                  While we're still young and fearless<br>
                  Let go of the light<br>
                  Fall into the dark side<br>
                </p>
                <ul class="list-inline">
                  <li>Date: April 2020</li>
                  <li>Client: Tsopgni Duhamel</li>
                  <li>Category: Music</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Activity</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FJKFp7FvXeM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>
                  Fireflies, a million little pieces <br>
                  Feeds the dying light, and breathes me back to life<br>
                  In your eyes, I see something to believe in<br>
                  Your hands are like a flame<br>
                  Your palms the sweetest pain<br><br>

                  Let the darkness lead us into the light<br>
                  Let our dreams get lost, feel the temperature rise<br>
                  Baby, tell me one more beautiful lie<br>
                  One touch and I ignite<br>
                  Like a starship speeding into the night<br>
                  You and I get lost in the infinite lights<br>
                  Baby, tell me one more beautiful lie<br>
                  One touch and I ignite<br><br>

                  One touch and I ignite<br>
                  One touch and I ignite<br><br>

                  So alive, your touch is like the daylight<br>
                  Burning on my skin, it turns me on again<br>
                  You and I, survivors of the same kind<br>
                  And we're the only ones<br>
                  Dancing on the sun<br>
                  Let the darkness lead us into the light<br>
                  Let our dreams get lost, feel the temperature rise<br>
                  Baby, tell me one more beautiful lie<br>
                  One touch and I ignite<br>
                  Like a starship speeding into the night<br>
                  You and I get lost in the infinite lights<br>
                  Baby, tell me one more beautiful lie<br>
                  One touch and I ignite<br><br>

                  One touch and I ignite<br>
                  One touch and I ignite<br><br>

                  Diamonds are forever, but all we need is just tonight<br>
                  We're monumental tremors that can freeze the speed of life<br>
                  Just like particles that's falling from heaven all over the stars<br>
                  Hear you calling for me<br>
                  Hear you calling me on from afar<br><br>

                  Let the darkness lead us into the light<br>
                  Let our dreams get lost, feel the temperature rise<br>
                  Baby, tell me one more beautiful lie<br>
                  One touch and I ignite<br>
                  I feel the heat as we collide<br>
                  Like a fever that feels so right<br>
                  So baby, tell me one more beautiful lie<br>
                  One touch and I ignite<br><br>

                  One touch and I ignite<br>
                  One touch and I ignite<br>
                  One touch and I ignite<br>
                  One touch and I ignite<br>
                  One touch and I ignite <br><br>
                </p>
                <ul class="list-inline">
                  <li>Date: April 2020</li>
                  <li>Client: Tsopgni Duhamel</li>
                  <li>Category: Music</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Activity</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Seal</h2>
                <p class="item-intro text-muted">Love's Divine</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/iczaDcixBj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>
                  Then the rainstorm came, over me <br>
                  And I felt my spirit break<br>
                  I had lost all of my, belief you see<br>
                  And realized my mistake<br>
                  But time threw a prayer, to me<br>
                  And all around me became still<br><br>

                  I need love, love's divine<br>
                  Please forgive me now I see that I've been blind<br>
                  Give me love, love is what I need to help me know my name<br><br>

                  Through the rainstorm came sanctuary<br>
                  And I felt my spirit fly<br>
                  I had found all of my reality<br>
                  I realize what it takes<br><br>

                  'Cause I need love, love's divine<br>
                  Please forgive me now I see that I've been blind<br>
                  Give me love, love is what I need to help me know my name<br><br>

                  Oh I, don't bend (don't bend), don't break (don't break)<br>
                  Show me how to live and promise me you won't forsake<br>
                  'Cause love can help me know my name<br><br>

                  Well I try to say there's nothing wrong<br>
                  But inside I felt me lying all along<br>
                  But the message here was plain to see<br>
                  Believe me<br><br>

                  'Cause I need love, love's divine<br>
                  Please forgive me now I see that I've been blind<br>
                  Give me love, love is what I need to help me know my name<br><br>

                  Oh I, don't bend (don't bend), don't break (don't break)<br>
                  Show me how to live and promise me you won't forsake<br>
                  'Cause love can help me know my name<br><br>

                  Love can help me know my name.<br><br>

                </p>
                <ul class="list-inline">
                  <li>Date: April 2020</li>
                  <li>Client: Tsopgni Duhamel</li>
                  <li>Category: Music</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Activity</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Ellie Goulding</h2>
                <p class="item-intro text-muted">Love Me like You Do.</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AJtDXIazrMo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>
                  You're the light, you're the night <br>
                  You're the colour of my blood<br>
                  You're the cure, you're the pain<br>
                  You're the only thing I wanna touch<br>
                  Never knew that it could mean so much, so much<br><br>

                  You're the fear, I don't care<br>
                  'Cause I've never been so high<br>
                  Follow me to the dark<br>
                  Let me take you past our satellites<br>
                  You can see the world you brought to life, to life<br><br>

                  So love me like you do, la-la-love me like you do<br>
                  Love me like you do, la-la-love me like you do<br>
                  Touch me like you do, ta-ta-touch me like you do<br>
                  What are you waiting for?<br><br>

                  Fading in, fading out<br>
                  On the edge of paradise<br>
                  Every inch of your skin is a holy grail I've got to find<br>
                  Only you can set my heart on fire, on fire<br>
                  Yeah, I'll let you set the pace<br>
                  'Cause I'm not thinking straight<br>
                  My head's spinning around I can't see clear no more<br>
                  What are you waiting for?<br><br>

                  Love me like you do, la-la-love me like you do (like you do)<br>
                  Love me like you do, la-la-love me like you do<br>
                  Touch me like you do, ta-ta-touch me like you do<br>
                  What are you waiting for?<br><br>

                  Love me like you do, la-la-love me like you do (like you do)<br>
                  Love me like you do, la-la-love me like you do (yeah)<br>
                  Touch me like you do, ta-ta-touch me like you do<br>
                  What are you waiting for?<br><br>

                  I'll let you set the pace<br>
                  'Cause I'm not thinking straight<br>
                  My head's spinning around I can't see clear no more<br>
                  What are you waiting for?<br><br>

                  Love me like you do, la-la-love me like you do (like you do)<br>
                  Love me like you do, la-la-love me like you do (yeah)<br>
                  Touch me like you do, ta-ta-touch me like you do<br>
                  What are you waiting for?<br>

                  Love me like you do, la-la-love me like you do (like you do)<br>
                  Love me like you do, la-la-love me like you do (oh)<br>
                  Touch me like you do, ta-ta-touch me like you do<br>
                  What are you waiting for? <br><br>
                </p>
                <ul class="list-inline">
                  <li>Date: April 2020</li>
                  <li>Client: Tsopgni Duhamel</li>
                  <li>Category: Music</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Activity</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Conor Maynard</h2>
                <p class="item-intro text-muted">Hate How Much I Love You.</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/anNBvqzzbBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>
                  I crashed my car the other day <br>
                  Too busy thinking 'bout your face<br>
                  Even though I just saw you yesterday<br>
                  Yeah it's a hazard to my health<br>
                  I don't do nothing for myself<br>
                  You made me turn up late for work again<br><br>

                  Ooh, yeah<br>
                  I'm talking 'bout, talking 'bout, talking 'bout, talking 'bout you, yeah<br>
                  To all of my, all of my, all of my friends at the room yeah<br>
                  They won't go back<br><br>

                  Oh I hate how much I love you<br>
                  And I hate how much I care<br>
                  I spend all of my money and all my time<br>
                  'Cause I hate our love, I do<br>
                  I hate how much I love you<br>
                  Yeah, I hate how much I love you<br>
                  I hate how much I love you<br><br>

                  I emptied out my bank account<br>
                  Just so that I could take you out<br>
                  To somewhere that you've never been before<br>
                  And I told my friends a thousand lies<br>
                  So I could be with you tonight<br>
                  They don't believe a word I say no more<br><br>

                  Ooh, yeah<br>
                  I'm talking 'bout, talking 'bout, talking 'bout, talking 'bout you, yeah<br>
                  I told myself I wouldn't fall but I broke my own rule, yeah<br>
                  I can't come back<br><br>

                  Oh I hate how much I love you<br>
                  And I hate how much I care<br>
                  I spend all of my money and all my time<br>
                  'Cause I hate our love, I do<br>
                  I hate how much I love you<br>
                  Yeah, I hate how much I love you<br>
                  I hate how much I love you, yeah<br><br>

                  When you're not around me I swear I got nothing to do, yeah<br>
                  It's making me wonder what I did before I had you, yeah<br>
                  I can't go back<br><br>

                  Oh I hate how much I love you<br>
                  And I hate how much I care<br>
                  I spend all of my money and all my time<br>
                  'Cause I hate our love, I do<br>
                  I hate how much I love you<br>
                  Yeah, I hate how much I love you<br>
                  I hate how much I love you<br>
                  I hate how much I love you<br>
                  I hate how much I love you <br><br>
                </p>
                <ul class="list-inline">
                  <li>Date: April 2020</li>
                  <li>Client: Tsopgni Duhamel</li>
                  <li>Category: Music</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Activity</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Jonas Blue</h2>
                <p class="item-intro text-muted">Mama.</p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qPTfXwPf_HM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>
                  Where should we run to? <br>
                  We got the world in our hands and we're ready to play<br>
                  They say we're wasted<br>
                  But how can we waste it if we're loving every day?<br>
                  Okay, I got the keys to the universe<br>
                  So stay with me 'cause I got the keys, babe<br><br>

                  Don't wanna wake up one day wishing that we'd done more<br>
                  I wanna live fast and never look back, it's what we're here for<br>
                  Don't wanna wake up one day wondering where'd it all go<br>
                  'Cause we'll be home before we know, I wanna hear you singing<br><br>

                  Hey, mama, don't stress your mind<br>
                  We ain't coming home tonight<br>
                  Hey, ma, we're gonna be alright<br>
                  Dry those eyes<br>
                  We'll be back in the morning when the sun starts to rise<br>
                  So mama, don't stress your mind<br>
                  So mama, don't stress your mind<br><br>

                  Mama, mama, mama, yeah<br>
                  We ain't coming home tonight<br>
                  Mama, mama, mama, yeah<br>
                  We ain't coming home tonight<br><br>

                  Where should we run to?<br>
                  We got a ticket that takes us wherever we like<br>
                  We got our problems<br>
                  But just for the minute, let's push all our troubles aside<br>
                  Alright 'cause we got the keys to universe<br>
                  Inside our minds, yeah, we got the keys, babe<br><br>

                  Don't wanna wake up one day wishing that we'd done more<br>
                  I wanna live fast and never look back, it's what we're here for<br>
                  Don't wanna wake up one day wondering where'd it all go<br>
                  'Cause we'll be home before we know, I wanna hear you singing<br><br>

                  Hey, mama, don't stress your mind<br>
                  We ain't coming home tonight<br>
                  Hey, ma, we're gonna be alright<br>
                  Dry those eyes<br>
                  We'll be back in the morning when the sun starts to rise<br>
                  So mama, don't stress your mind<br>
                  So mama, don't stress your mind<br><br>

                  Hey, mama, don't stress your mind<br>
                  We ain't coming home tonight<br>
                  Hey, ma, we're gonna be alright<br>
                  Dry those eyes<br>
                  We'll be back in the morning when the sun starts to rise<br>
                  So mama, don't stress your mind<br>
                  So mama, don't stress your mind<br><br>

                  Mama, mama, mama, yeah<br>
                  We ain't coming home tonight<br>
                  Mama, mama, mama, yeah<br>
                  We ain't coming home tonight<br><br>

                </p>
                <ul class="list-inline">
                  <li>Date: April 2020</li>
                  <li>Client: Tsopgni Duhamel</li>
                  <li>Category: Music</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Activity</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
