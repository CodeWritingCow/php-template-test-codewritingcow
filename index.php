<?php 
  $title="&#12296; Gary Pang  &#47; &#12297;";
  $description="Portfolio website for Gary Pang, web developer from Bloomsburg, Pennsylvania."; ?>

<?php require 'header.php'; ?>

    <link href="public/assets/css/animation.css" rel="stylesheet" media="all">

    <!--  Google Analytics tracking code -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-53154916-2', 'auto');
    ga('send', 'pageview');
    </script>
  </head>

  <body>

<?php include 'navbar.php'; ?>

<div class='container-fluid'>
    <div class='row text-center features resume well'>
        <div class='col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 text-center'>
            <img src="public/assets/img/gary-pang-mug.jpg" class="img-circle" style="margin-bottom: 20px;" alt="Gary Pang's picture" />
        <h1>Gary Pang</h1>
            <p><span class='resume-drop-cap'>I</span>&rsquo;m a Web developer who build websites in my free time. I make dynamic D3.js maps, and Web apps that consume data from third-party APIs. My day job is being a <a href="http://www.pressenterpriseonline.com/writers/gary-pang">newspaper reporter</a> in Pennsylvania. My sister and I are starting a Web design company, <a href="/itspangtastic">It's Pangtastic.</a></p>
        </div>

    </div>

    <div class="row text-center features">
        <div class='col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-0 col-lg-3 col-lg-offset-0 resume'>
            <i class="fa fa-html5 fa-3x"></i>
            <h3>My Front-End Skills</h3>
            <ul>
              <li>Create mobile-friendly webpages with Bootstrap.</li>
              <li>Optimize images, minify CSS and JavaScript files with Gulp.</li>
              <li>Scaffold projects with NPM, Bower and Yeoman.</li>
              <li>Add CSS animations to website.</li>
              <li>Post articles on <a href="http://www.gary-pang.com">food blog</a> with WordPress.</li>
            </ul>
        </div>

       <div class='col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-0 col-lg-3 col-lg-offset-0 resume'>
            
            <i class="fa fa-server fa-3x"></i>
            <h3>Back-End Development</h3>
            <ul>
              <li>Build web APIs with Node.js and Express.js.</li>
              <li>Deploy apps to Heroku cloud platform.</li>
              <li>Connect apps to MongoDB databases.</li>
              <li>Run JavaScript unit tests with Mocha and Chai.</li>
              <li>Test web APIs with Postman.</li>
            </ul>
        </div> 

      <div class='col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-0 col-lg-3 col-lg-offset-0 resume'>
            
            <i class="fa fa-wrench fa-3x"></i>
            <h3>My Tools</h3>
            <ul>
              <li><em>Code Editors:</em> Sublime Text 3, Notepad++, Microsoft WebMatrix</li>
              <li><em>Version Control:</em> <a href="https://github.com/CodeWritingCow">GitHub</a></li>
              <li><em>Content Management System:</em> WordPress, Drupal</li>
              <li><em>Photo Editors:</em> Adobe Photoshop, GIMP</li>
              <li><em>Movie Editor:</em> Sony Vegas Pro 13</li>
            </ul>
        </div>

      <div class='col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-0 col-lg-3 col-lg-offset-0 resume'>
          <i id="vibrating-phone" class="fa fa-mobile fa-5x animated"></i>
          <a id="contact-gary"></a>
          <h3>Contact Gary</h3>
          <p>Job recruiters can contact me at <a href="mailto:gary.pang@gmail.com">gary.pang@gmail.com</a> or through my <a href="https://www.linkedin.com/pub/gary-pang/41/938/681">LinkedIn</a> page.</p>
          <button type="button" id="email-button" class="btn btn-primary btn-lg" style="margin-top: 20px;"><a href="mailto:gary.pang@gmail.com">EMAIL GARY</a></button>
      </div>        
    </div>

</div>

  <?php include 'footer.php'; ?>

  <script src="public/assets/js/vibrate-phone.js"></script>

  </body>
</html>