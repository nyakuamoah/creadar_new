<?php 
require "includes/en/header_en.php";
require "includes/en/nav_en.php";
?>

    <div id="carousel-home" class="carousel slide carousel-fade">

      <div class="carousel-inner">
             
          <div class="slide-home item" style="background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 100%), url('img/index_1.jpg'); background-size:cover; background-position:center center; background-repeat:no-repeat;" data-animation="animated fadeIn">
            <div class="slide-title" data-animation="animated fadeIn"></div>
          </div>
         
          <div class="slide-home item" style="background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 100%), url('img/index_3.jpg');background-size:cover; background-position:center center; background-repeat:no-repeat;" data-animation="animated fadeIn">
            <div class="slide-title" data-animation="animated fadeIn"></div>
          </div>
            
      </div>
      <div class="container-fluid container-indicators">
          <ol class="carousel-indicators">
            <li data-target="#carousel-home" data-slide-to="0"></li>
            <li data-target="#carousel-home" data-slide-to="1"></li>
          </ol>
      </div>
    </div><!-- /.carousel -->

    <div class="row fullwidth">
      <div class="col-md-6 padding-1 block">
        <h2 class="italico-preto essential">Enhancing Organizational Performance Using Design</h2>
      </div>
      <div class="col-md-6 padding-1 block bg-brand t-white">

        <p class="essential">We are a nonprofit dedicated to creating design-led value and innovation for organizations and entrepreneurs through 
        Business Incubation & Design Support (project collaborations, service enhancement, design skill training & design research)</p>
        <br>
        <a class="t-white essential" href="about.php">more</a>
      </div>
    </div>


    <div class="row fullwidth bg-grey">
        <div id="content-infinite">         
          
            <div class="col-md-6 padding-1 pic-text block" id="item-infinite">
              <h4>How we can be useful to your organization</h4>
              <p>&mdash; Our expertise can help your business implement design as a strong differentiator through the creation of customer-focused experiences (branding, packaging, retail, web & product design). <br />
              &mdash; Our guidance can help your team achieve best results by using design perspectively (as style, as development process or as strategy).<br /><br />
              <a href="support.php">find out how</a>
              </p>
            </div>

            <div class="col-md-3 project-entry no-padding" id="item-infinite">
              <img class="img-responsive" src="img/meet_1.jpg" alt="">
              <a href="#" class="hover-block">
                <div class="project-title padding-check"><h4>We collaborate with:</h4></div>
              </a>
              <div class="project-info padding-check">
                <h4>
                - Businesses<br />
                - Social enterprises<br>
                - Institutions (Educational, Creative, Legal, Financial, Social & Research)
                </h4>
              </div>
            </div>

            <div class="col-md-3 block padding-1" id="item-infinite">
              <h4>Business incubation</h4>
              <p>
                We use a design-led approach to grow startups into businesses that have design deeply embedded in their culture.<br /><br />
                 <a href="incubator.php">more</a>
              </p>
            </div>

        </div>
    </div>

<?php 
require "includes/en/footer_en.php";
?>

 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/viewportchecker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>