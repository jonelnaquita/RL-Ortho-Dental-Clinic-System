<?php include 'includes/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body{
        margin: 0;
        padding: 0;
    }

    .logo{
        width: 100px;
        object-fit: cover;
    }

    .pdf{
        background-color: #f4d35e;
        height: 50px;
    }

</style>
</head>
<body>
<div class="pdf design"></div>
	<div class="container">
        <div class="card-header" style="line-height: 1.4;">
            <div class="row text-center">
                <img src="assets/img/logo.jpg" class="mr-5 logo mx-auto rounded-circle">
                <h5 class="text-center text-uppercase mt-3">Rosales-Libao Ortho-Dental Clinic</h5>
                <h7>REACH US:</h7>
                <p>0918 419 8158 <br>corlibao@gmail.com</p>
            </div>
            <h2 class="card-title text-center">ONLINE SELF-SCREENING FORM</h2>
            <hr>
            <div class="pdftemplate">
                <p><?php echo $request['user'] ?></p>
                <h5>Personal Information</h5>
                <p>Fullname: </p> <p><?php echo $request['fullname'] ?></p>
                <p>Contact Number: </p><p><?php echo $request['cnumber'] ?></p>
                <p>Gender: </p><p><?php echo $request['sex'] ?></p>
            </div>
            <hr>
            <h5>Symptoms Experience</h5>
            <p><?php echo $request['cnumber'] ?></p>
            <h5>In the last 14 days, have you ever been tested for COVID-19?</h5>
            <p><?php echo $request['tested'] ?></p>
        </div>
	</div>
</div>
</body>
</html>