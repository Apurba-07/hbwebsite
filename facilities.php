<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel Sunshine - facilities</title>

<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"> -->
<?php require('inc/links.php'); ?>
<style>
    .pop:hover{
        border-top-color:var(--teal) !important;
        transform:scale(1.03);
        transition:all 0.3s;
    }
    </style>
</head>
<body class="bg-light">

 <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">AMENITIES </h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        Hospitality is making our guests feel at home, even if you wish they were
     </p>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <h5 class=" text-center m-2 mt-2">DINING</h5>
                        <div class="d-flex align-items-center mb-2">
                        <img src="fac_images/image14.jpg" width="400px" height="200px">
                        
                        </div>
                        <p>
                        "Delicious moments await—bring your appetite and we’ll handle the rest."
                        </p>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <h5 class="text-center m-2 mt-2">SWIMMING</h5>
                        <div class="d-flex align-items-center mb-2">
                        <img src="fac_images/image4.jpg" width="440px" height="200px">
                        
                        </div>
                        <p>
                        "Make a splash and let your worries float away." 
                        </p>
                </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <h5 class=" text-center m-2 mt-2">GAMES</h5>
                        <div class="d-flex align-items-center mb-2">
                        <img src="fac_images/image10.webp" width="400px" height="200">
                        
                        </div>
                        <p>
                        "Let the good times roll! The games are on, and so is the fun."
                        </p>
                </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <h5 class=" text-center m-2 mt-2">SPA</h5>
                        <div class="d-flex align-items-center mb-2">
                        <img src="fac_images/image6.jpg" width="400px" height="200">
                        
                        </div>
                        <p>
                        "Unwind, rejuvenate, and let us pamper you like never before." 
                        </p>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <h5 class=" text-center m-2 mt-2">BAR</h5>
                        <div class="d-flex align-items-center mb-2">
                        <img src="fac_images/image8.jpg" width="350px" height="200">
                        
                        </div>
                        <p>
                        "Raise your spirits with a glass of your favorite drink."
                        </p>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <h5 class=" text-center m-2 mt-2">GYM</h5>
                        <div class="d-flex align-items-center mb-2">
                        <img src="fac_images/image1.jpeg" width="400px" height="200">
                        
                        </div>
                        <p>
                        "Burn calories, not your vacation vibes—stay fit while you indulge!"
                        </p>
                </div>
                </div>
            </div>
        </div>



  
        <?php require('inc/footer.php'); ?>


</body>
</html>