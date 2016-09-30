<?php 
  $title="&#12296; It's Pangtastic  &#47; &#12297;";
  $description="It's Pangastic is a Web design company founded by Esther and Gary Pang, a sister-and-brother team. itspangtastic@gmail.com"; ?>


    <meta charset="utf-8"> 
    <link href="../public/assets/css/animation.css" rel="stylesheet" media="all">

    <!--  Google Analytics tracking code -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53154916-2', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>
  
  <?php include '../navbar.php'; ?>
  
<div class='container-fluid'>
    <div class='row text-center features resume well'>
        <div class='col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 text-center'>
            <img src="../public/assets/img/itspangtastic.jpg" class="img-rounded" style="margin-bottom: 20px;" alt="Gary Pang's picture" />
            <h1>It's Pangtastic</h1>
            <p><span class='resume-drop-cap'>W</span>e are Esther and Gary Pang, a sister-and-brother team of Web developers based in New York and Pennsylvania. We build websites to promote your personal and professional work!</p>
            <button type="button" id="email-button" class="btn btn-primary btn-lg" style="margin-top: 20px;"><a href="mailto:itspangtastic@gmail.com">CONTACT US</a></button>
        </div>
</div>

<div class="row text-center features">
  <a id="services"></a>

      <div class='col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 resume'>
            <i class="fa fa-laptop fa-3x"></i>
            <h3>What We Do</h3>
            <ul>
            <li>Are you a non-profit trying to attract volunteers and donors? An artist who need an online portfolio for your masterpieces? Or a small business looking to advertise to customers online? We can help you out!</li>
            <li>We build mobile-friendly websites. Your audience can visit your website with ease whether they're using computers or smartphones.</li>
            </ul>
        </div>

        <a id="about"></a>
        <div class='col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 resume'>
            <i class="fa fa-3x">彭</i>
            <h3>About Us</h3>
            <ul>
              <li>Esther has worked as a full-time Web developer in New York City. She's also a business manager for a major financial corporation. She ensures projects are finished within budget and schedule.</li>        
              <li>Gary builds websites in his free time. He works as a reporter at a daily newspaper. He's also worked as a newspaper page designer. See a <a href="/">summary</a> of his Web skills.</li>
            </ul>
        </div>

        <a id="contact-us"></a>
        <div class='col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 resume'>
            <i class="fa fa-child fa-3x animated jumping-kids"></i> <i class="fa fa-child fa-3x animated jumping-kids"></i>
            <h2>Work With Us!</h2>
            <p style="text-align: center;">Let us design and build your website! Email us at <a href="mailto:itspangtastic@gmail.com">itspangtastic@gmail.com</a></p>
            <button type="button" id="email-button" class="btn btn-primary btn-lg" style="margin-top: 20px;"><a href="mailto:itspangtastic@gmail.com">CONTACT US</a></button>
        </div>
  </div>
</div>

  <?php include '../footer.php'; ?>  

  <script src="../public/assets/js/animateKidsJump.js"></script>

  </body>
</html>