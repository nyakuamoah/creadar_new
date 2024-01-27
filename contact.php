<?php 
require "includes/en/contact_helper_en.php"; 
require "includes/en/header_en.php";
require "includes/en/nav_en.php";
?> 

    <div class="row fullwidth topo-interna">
      <div class="col-md-6 padding-1 block">
        <h2 class="italico-preto essential">Contact Creadar</h2>
        <h4 class="italico-preto">
          <span class="success"><?php echo $status_success; ?></span>
          <span class="failure"><?php echo $status_failure; ?></span>
        </h4>
      </div>
      <div class="col-md-6 padding-1 block bg-brand t-white">
        <p class="essential">If you have an inquiry about our activities, incubator or want to discuss how we may be useful 
            on your next project,</p><br />
        <a class="t-white" href="#" data-toggle="modal" data-target="#message-form">Send us a mail</a>
      </div>
    </div>

    <!-- Modal -->
    <div id="message-form" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content scrollable">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-header col-md-3"></div>

          <div class="modal-body col-md-6">
            <div role="form" class="wpcf7">
              <div class="screen-reader-response"></div>
                <form action="contact.php" method="post" class="wpcf7-form" onchange="updateInputClass()">
                  <p>
                  <span class="wpcf7-form-control-wrap"><input id="mail-subject" name="subject" value="<?php echo $subject; ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Subject" type="text" autofocus validate></span><br>

                  <span class="wpcf7-form-control-wrap"><textarea name="message" cols="40" rows="8" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message" type="text"><?php echo $message; ?></textarea></span><br>
                          
                  <span class="wpcf7-form-control-wrap"><input id="sender-name" name="sender_name" value="<?php echo $sender_name; ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Fullname" type="text"></span><br>

                  <span class="wpcf7-form-control-wrap"><input name="sender_email" value="<?php echo $sender_email; ?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" type="email"></span><br><br>

                  <input value="Send Message" class="wpcf7-form-control wpcf7-submit" type="submit">
                  <img style="visibility: hidden;" alt="Sending ..." src="img/ajax-loader.gif" class="ajax-loader">
                  </p>
                  <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
              </div>         
            </div>

            <div class="col-md-3"></div>
          </div>

        </div>
      </div>



    <div class="row fullwidth">
        <div id="content-infinite">         
          
          <div class="col-md-6 no-padding">
            
            <div class="col-md-12 padding-2 bg-grey">
              <p>For domain-specfic demands, please use the following contacts for an accelerated feedback:<br /><br /></p>
              <p>
                Design Support & Business Incubation:<br />
                <span class="text">nanayaw@creadar.com</span><br /><br />

                Partnerships & Collaborations:<br />
                <span class="text">julian@creadar.com</span><br /><br />

                Press & Communications:<br />
                <span class="text">audrey@creadar.com</span><br /><br />
              </p>
            </div>
            <div class="col-md-6 no-padding">
              <img src="img/creadar_wall.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 padding-2">
                <p>
                Office Hours:<br />
                Mondays &mdash; Thursdays, <br >
                08:00 &mdash; 14:00 (GMT +00:00)<br /><br />
                
                </p>
            </div> 

          </div>


          <div id="location" class="col-md-6 no-padding">
            
          </div>


        </div>
    </div>
     
    <?php require "includes/en/footer_en.php"; ?>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWNlfY1zJrDLfC9Jm2yLaeF7YR4fqd34g&sensor=false"></script>
    <script type="text/javascript" src="js/maps.js"></script>
 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type='text/javascript' src='js/jquery.form.min.js'></script><!-- Form Plugin-->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
