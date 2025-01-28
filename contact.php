<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact </title>

<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"> -->
<?php require('inc/links.php'); ?>

</head>
<body class="bg-light">

 <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        We’re here to assist you with all your hotel booking needs. Whether you need help making a reservation, have a question about your booking, or need general support, we're here for you!
       <br><br>
        Contact Form:
        <br>
               If you prefer, please fill out the form below, and we will get back to you as soon as possible.
     </p>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 px-4">

                    <div class="bg-white rounded shadow p-4 border-dark pop">
                    <iframe class="w-100 rounded mb-4"  height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115330.45656856115!2d81.71918312197516!3d25.402240789283255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1736912405156!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/9JrrHeMDFob39gMS7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt"></i>   XYZ, Prayagraj, Uttar Pradesh
                    </a>

                    <h5 class="mt-4">Call us</h5> 
                    <a href="tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+917778889991
                    </a>
                    <br>
                    <a href="tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+917778889991
                    </a>

                    <h5 class ="mt-4">Email</h5>
                    <a href="mailto: ask.twinklemeher@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> ask.twinklemeher@gmail.com
                    </a>

                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                     <i class="bi bi-twitter me-1"></i> 
                    </a>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                     <i class="bi bi-facebook me-1"></i> 
                    </a>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5">
                     <i class="bi bi-instagram me-1"></i> 
                    </a>
                    </div>      
                </div>
            </div>

                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4">
                <form>
                    <h5>Send a message</h5>
                    <div class="mt-3">
                      <label class="form-label" style="font-weight: 500;">Name</label>
                      <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                      <label class="form-label" style="font-weight: 500;">Email</label>
                      <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                      <label class="form-label" style="font-weight: 500;">Subject</label>
                      <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                      <label class="form-label" style="font-weight: 500;">Message</label>
                      <textarea class="form-control shadow-none"  rows="1" style="resize: none;"></textarea>
                    </div> 
                    <button type="submit" class="btn text-white custom-bg mt-3 shadow-none">SEND</button>
                    </form>
                </div>
            </div>
        </div>
     </div>



  
        <?php require('inc/footer.php'); ?>


</body>
</html>