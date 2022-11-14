<?php include "includes/conn.php"; ?>
<?php include "includes/header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>

        .symptomsCheckbox input[type="radio"]:checked + label,
        .symptomsCheckbox input[type="checkbox"]:checked + label {
            padding: 5px 15px;
            background: #f8de7e;
            border-radius: 2px;
            color: #000;
        }
    </style>

</head>
<body>
<?php include "includes/navbar-noLabel.php";?>

<div class="container card" style="margin-top: 100px;">
    <div class="card-header">
        <h2 class="card-title text-center">ONLINE SELF-SCREENING FORM</h2>
    </div>
    <div class="card-body">
        <!-- QUESTION 1 -->

        <h6> Please choose one:</h6>
    <form method="POST" action="downloadPDF.php">
        <div class="row">
            <div class="symptomsCheckbox form-group">
                <div class="form-check">
                    <input class="form-check-input" name="user" type="radio" value="Patient" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Patient
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="user" type="radio" value="Companion" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Companion
                    </label>
                </div>
            </div>
        </div>
        <hr class="hr">

        <!-- QUESTION 1 -->

        <h6> Have you experienced any of the following symptoms in the past 14 days? Please choose all that apply.</h6>
        <div class="row">
            <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Fever" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck1">
                        Fever
                    </label>
                </div>
            </div>
            <div class="col">
            <div class="symptomsCheckbox form-check form-check-inline">
                <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Headache" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Headache
                </label>
            </div>
            </div>
            <div class="col">
            <div class="symptomsCheckbox form-check form-check-inline">
                <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Shortness of Breath" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                Shortness of Breath
                </label>
            </div>                              
            </div>
        </div>
        <div class="row">
        <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Cough" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Cough
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Diarrhea" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Diarrhea
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Decreased Sense of Smell or Taste" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Decreased Sense of Smell or Taste
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Cold" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Cold
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Muscle or Body Pain" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Muscle or Body Pain
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Muscle or Body Pain" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    General Weakness or Fatigue
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Sore throat" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Sore throat
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Nause or Vomiting" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Nause or Vomiting
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="symptomsCheckbox form-check form-check-inline">
                    <input class="form-check-input defaultCheck2" name="symptoms[]" type="checkbox" value="Nause or Vomiting" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                    Altered Mental Status
                    </label>
                </div>
            </div>
        </div>
        <h6 class="mt-3"> If you do not have any symptoms, please check below. </h6>
        <div class="symptomsCheckbox form-check form-check-inline">
            <input class="form-check-input" name="symptoms[]" type="checkbox" value="None" id="noSymptoms">
            <label class="form-check-label" for="defaultCheck2">
            None
            </label>
        </div>

        <hr class="hr">

        <!-- QUESTION 3 --> 
        <h6>In the last 14 days, have you ever been tested for COVID-19?</h6>
        <div class="row">
            <div class="form-group">
                <div class="symptomsCheckbox form-check">
                    <input class="form-check-input" name="tested" type="radio" value="Yes" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                    </label>
                </div>
                <div class="symptomsCheckbox form-check">
                    <input class="form-check-input" name="tested" type="radio" value="No" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        No
                    </label>
                </div>
            </div>
        </div>

        <hr class="hr">

        <div class="col mb-3">
            <label for="exampleInputEmail1" class="form-label">Complete Name:</label>
            <input type="text" class="form-control" placeholder="Enter Full Name" name="fullname" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="exampleInputEmail1" class="form-label">Contact Number:</label>
                <input type="tel" class="form-control" placeholder="+639" id="phone" name="cnumber">
            </div>
            <div class="col form-group">
                <label for="exampleInputEmail1" class="form-label">Sex:</label>
                <div class="symptomsCheckbox form-check">
                    <input class="form-check-input" name="sex" type="radio" value="Male" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="symptomsCheckbox form-check">
                    <input class="form-check-input" name="sex" type="radio" value="Femaile" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Female
                    </label>
                </div>
            </div>
        </div>

        <hr class="hr">
        <div class="row">
            <div class="col">
                <a href="index.php" type="button" class="btn btn-primary"><i class="fa-solid fa-backward-fast mr-2"></i>BACK</a>
            </div>
            <div class="col">
                <button type="button" name="submit" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">NEXT<i class="fa-solid fa-forward-fast ml-2"></i></button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">CONSENT FORM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="icon d-flex align-items-center justify-content-center">
                    <img src="assets/img/logo.jpg" class="logo rounded-circle mb-3">
                </div>
                <p class="text-center"> By accomplishing this form, I confirm that: </p>
                <ol>
					<li class="mb-2">
						I have been informed that The Rosales-Libao Ortho-dental Clinic is undertaking these measures to
						ensure that the well-being and protection of everyone, myself included and is prioritized.
					</li>

					<li class="mb-2">
						I understand that information about COVID-19 is constantly changing and despite the diligent
						efforts of the clinic to minimize transmission, there is still a risk of acquiring the infection.
					</li>

					<li class="mb-2">
						And, that the information I have provided are <b>TRUE</b> and <b>CORRECT</b> and I am aware that any untruthful statements
						I make may have serious consequences on public health and safety for which I may be held liable under the law.
					</li>
				</ol>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="agreeCheck">
                    <label class="form-check-label" for="defaultCheck2">I agree and understand the statement above</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="downloadButton" id="downloadButton" class="btn btn-primary" disabled>Download</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
</body>
<?php include "includes/footer.php";?>
</html>

<script type="text/javascript">
    jQuery(document).ready(function () {
    $("#agreeCheck").click(function () {
        if ($(this).is(":checked")) {
                $("#downloadButton").removeAttr("disabled");
                $("#downloadButton").focus();
            } else {
                $("#downloadButton").attr("disabled", "disabled");
            }
    });
    });
    
    $(document).ready(function () {
        $('#noSymptoms').on('change', function() {
        $('.defaultCheck2').not(this).prop('checked', false);  
        });
    });
</script>

<script>
    
</script>