<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>

    body{
        margin: 0;
        padding: 0;
        font-family: 'Arial' , sans-serif;
    }

    .pdf{
        background-color: #f4d35e;
        height: 50px;
    }

    .text-center{
        text-align: center;
    }

</style>
</head>
<body>
<div class="pdf"></div>
	<div class="container">
        <div class="card-header" style="line-height: normal;">
            <div class="row text-center">
                <h2 class="text-center text-uppercase mt-3">Rosales-Libao Ortho-Dental Clinic</h3>
                <p>0918 419 8158 | corlibao@gmail.com</p>
            </div>
            <h3 class="card-title text-center">ONLINE SELF-SCREENING FORM</h3>
            <hr>
            <div class= "" style="line-height: normal;">
                <p><?php echo $request['user'] ?></p>
                <hr>
                <h3>Personal Information</h3>
                <p>Fullname: <?php echo $request['fullname'] ?></p>
                <p>Contact Number: <?php echo $request['cnumber'] ?></p>
                <p>Gender: <?php echo $request['sex'] ?></p>
            </div>
            <hr>
            <h3>Symptoms Experience</h5>
            <p><?php foreach($request['symptoms'] as $symptoms) {
                echo "*", $symptoms;?><br><?php
            }?></p>
            <h3>In the last 14 days, have you ever been tested for COVID-19?</h3>
            <p><?php echo $request['tested'] ?></p>
        </div>
	</div>

</body>