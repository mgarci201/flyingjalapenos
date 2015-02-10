<?php include("partials/header.php"); ?>
<div class="container">
        
        <div class="col-sm-10 col-md-10">     
          <div class="row">
            <div class="col-xs-12">

              <div class="row">
                <div class="col-md-12">
                  <h1>Contact Us</h1>
                </div>
              </div>

              <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Inquiries</h3>
                  </div>
                  <div class="panel-body">
                  <form role="form" name="contact" method="post" action="#">

                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input id="name" type="text" name="name"  class="form-control" value="" placeholder="Name" />
                    </div>

                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input id="email" type="text" class="form-control" name="email"  value="" placeholder="Email" />
                    </div>

                    <div class="form-group">
                      <textarea id="message" rows="11" name="message" class="form-control" placeholder="Message here.."></textarea>
                    </div><br>

                    <div class="form-group" align="right">
                     <button type="submit" class="btn btn-primary">Send Message</button>
                   </div>
                 </form> <!--contacts form-->
               
               </div> 
             </div>
            </div>

             <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Our Contact Information</h3>
                </div>
                <div class="panel-body">
                <table class="table">
                  <tr>
                    <td><span class="glyphicon glyphicon-tower" aria-hidden="true"></span></td>
                    <td>Flyin Jalapenos (Breakdance Group)<br> Ground Floor SWG3 Studio Warehouse<br> 100 Eastvale Pl<br> Glasgow, G3 8QG<br></td>
                  </tr>

                  <tr>
                    <td><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></td>
                    <td>07811122233</td>
                  </tr>

                  <tr>
                    <td><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></td>
                    <td><a href="mailto:#">f.jalapenos@gmail.com</a></td>
                  </tr>
                </table><br>

                    <!-- Start Side Categories -->
                    <h4 align="middle">Our Social Network</h4>
                    <ul class="list-unstyled" align="middle">
                      <li><a href="#">Facebook Link</a></li>
                      <li><a href="#">Twitter Link</a></li>
                      <li><a href="#">LinkedIn Link</a></li>
                      <li><a href="#">Youtube Link</a></li>
                    </ul><!-- End Side Categories -->
                    </div>

                  </div>
                </div>

           </div>
         </div>
       </div>
</div>
       <?php include("partials/footer.php"); ?>