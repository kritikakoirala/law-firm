<?php
require 'header.php';
require 'navigation.php';
?>
<!-- contact details -->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5 class="mt-4 mb-4 text-center">Contact Details</h5>
            <p class="mb-4">Feel free to contact us during our office hours if you have any queries.</p>
          </div>
          <div class="card-body">
            <p> <span>Phone:</span> 9851087276</p>

            <p><span> Email:</span> binkoirala@gmail.com</p>

            <p><span>Address:</span> Sinamangal</p>
          </div>
          <div class="card-footer">
            <p>You can also send us a message. <br> Please fill out the form below to mail us.</p>
          </div>
        </div>


      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <!-- iframe map -->

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.5887265169313!2d85.34910351453811!3d27.699103532462253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1986ea6e4ded%3A0x884b8d2f520224bb!2sPancha%20Kumari%20Temple!5e0!3m2!1sen!2snp!4v1593844069541!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</section>

<div class="contact_form">
  <h4 class="text-center">Send us a message</h4>
  <p class="text-center pb-4">Leave us a message if you have any queries. We will try our best to reply as soon as possisble.</p>
  <form action="" method="post">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <input type="text" placeholder="Name" name="name" class="form-control">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <input type="submit" name="send_message" value="Send us a message" class="btn">
        </div>
      </div>
    </div>
  </form>
</div>
<?php require 'footer.php'; ?>