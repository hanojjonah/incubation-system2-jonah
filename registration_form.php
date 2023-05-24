<?php 
include('validation/validate_registration_form.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- JSquery Ui datepicker links -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

  <title>Registration Form</title>
  <style>
    body{
      background-color: #0F416F;
    }
    .btn-color{
      background-color: #0F416F;
    }
  </style>
</head>
<body class="">
  <div class="container">
    <div class="row d-flex justify-content-center my-5">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <form class="row g-3 border rounded p-4 my-1 bg-body-secondary text-body needs-validation"
         method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" novalidate enctype="multipart/form-data">
          <h3 class="text-center border-bottom pb-2 border-dark text-body-secondary">REGISTRATION FORM</h3>

          <!-- fname field -->
          <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name=" fname" autocomplete="off" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['fname']; ?></div>
          </div>
          <!-- lname -->
          <div class="col-md-6">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" autocomplete="off" required>
            <div class="invalid-feedback">
               Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['lname']; ?></div>
          </div>
          
          <!-- KU student -->
          <div class="form-group">
            <label for="kuOrNonKuStudent">Are you a KU student?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ku_student" id="ku_student" value="yes" required>
              <label class="form-check-label" for="ku_student">
                Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ku_student" id="nonKUstudent" value="no" required>
              <label class="form-check-label" for="nonKUstudent">
                No
              </label>
            </div>

            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['ku_student']; ?></div>
          </div>
   
          <!-- ID Number -->
          <div class="col-12">
            <label for="id_number" class="form-label">ID Number:</label>
            <input type="text" class="form-control" id="id_number" name="id_number" autocomplete="off" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['id_number']; ?></div>
          </div>
          <!-- date Incubated -->
          <div class="col-12">
            <label for="date_incubated" class="form-label">Date Incubated</label>
            <input type="text" class="form-control" id="date_incubated" name="date_incubated" readonly autocomplete="off" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['date_incubated']; ?></div>
          </div>

          <!-- Stage of innovation -->
          <div class="col-12">
            <label for="innovation_stage" class="form-label">Stage of Innovation</label>
            <select name="innovationStage" id="innovation_stage" class="form-select" required>
              <option value="" selected disabled>Choose...</option>
              <option value="Idea phase">Idea phase</option>
              <option value="Research and Development">Research and Development</option>
              <option value="Prototype phase">Prototype phase</option>
              <option value="Start up">Start Up</option>
              <option value="Market phase">Market phase</option>
              <option value="Scaling pu phase">Scaling up phase</option>
              <option value="Other">Other</option>
            </select>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['innovationStage']; ?></div>
          </div>

          <!-- phone number -->
          <div class="col-12">
            <label for="tel" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="tel" id="tel" autocomplete="off" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['tel']; ?></div>
          </div>

          <!-- email -->
          <div class="col-12">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" name="email" id="email" autocomplete="off" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['email']; ?></div>
          </div>

          <!-- passport size -->
          <div class="col-12">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" id="photo" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['photo']; ?></div>
          </div>

          <!-- Names of key partners / investors if any -->
          <div class="col-12">
            <label for="partner" class="form-label">Names of key partners/investors if any</label>
            <input type="text" class="form-control" id="partner" name="partner" autocomplete="off">
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['partner']; ?></div>
          </div>

          <!-- IP -->
          <div class="form-group">
            <label for="RegisteredIP">Is your IP registered?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="IP_registered" id="IPregistered" value="yes" required>
              <label class="form-check-label" for="IPregistered">
                Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="IP_registered" id="IPnotregistered" value="no" required>
              <label class="form-check-label" for="IPnotregistered">
                No
              </label>
            </div>

            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['ku_student']; ?></div>
          </div>

          <!-- description -->
          <div class="col-12">
            <label for="description" class="form-label">A Brief description of your Innovation.(not exceeding 250 words)</label>
            <textarea class="form-control" name="description" id="description" cols="40" rows="5" autocomplete="off" required></textarea>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['description']; ?></div>
          </div>

          <!-- category of Innovation -->
          <div class="col-12">
            <label for="innovation_category">Category of your innovation</label>
            <select name="innovation_category" id="innovation_category" class="form-select" required>
              <option value="" selected disabled>Choose...</option>
              <option value="Business and Professional Services">Business and Professional Services</option>
              <option value="Information  and Communication Technology">Information  and Communication Technology</option>
              <option value="Marketing and Communication">Marketing and Communication</option>
              <option value="Manufacturing and Construction">Manufacturing and Construction</option>
              <option value="Transport and Logistics">Transport and Logistics</option>
              <option value="Bio and Nano-Technology">Bio and Nano-Technology</option>
              <option value="Health and Nutrition">Health and Nutrition</option>
              <option value="Green and ecological business">Green and ecological business</option>
              <option value="Tourism and eco-tourism">Tourism and eco-tourism</option>
              <option value="Fine and Performing Arts">Fine and Performing Arts</option>
              <option value="Sports, Leisure and Entertainment">Sports, Leisure and Entertainment</option>
              <option value="Water and Sanitation">Water and Sanitation</option>
              <option value="Energy">Energy</option>
              <option value="Media and entertainment">Media and entertainment</option>
            </select>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
                        <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['innovation_category']; ?></div>
          </div>
          
          <!-- submit button -->
          <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary border-0 btn-color">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Bootstrap Js links -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <!--datepicker -->
  <script>
    $( function() {
      $( "#date_incubated" ).datepicker({
        maxDate: 0
      });
    });


    // // Example starter JavaScript for disabling form submissions if there are invalid fields
    // (() => {
    //   'use strict'
    // 
    //   // Fetch all the forms we want to apply custom Bootstrap validation styles to
    //   const forms = document.querySelectorAll('.needs-validation')
    // 
    //   // Loop over them and prevent submission
    //   Array.from(forms).forEach(form => {
    //     form.addEventListener('submit', event => {
    //       if (!form.checkValidity()) {
    //         event.preventDefault()
    //         event.stopPropagation()
    //       }
    //     
    //       form.classList.add('was-validated')
    //     }, false)
    //   })
    // })()
  </script>
</body>
</html>
