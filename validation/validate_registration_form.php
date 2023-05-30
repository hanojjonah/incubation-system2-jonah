<?php


$errors = array(
    'fname' => '', 'lname' => '', 'ku_student' => '', 'id_number' => '', 'date_incubated' => '',
    'innovationStage' => '', 'tel' => '', 'email' => '', 'photo' => '', 'partner' => '', 'IP_registered' => '',
    'description' => '', 'innovation_category' => ''
);

// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // validation to check if field are filled
    if (empty($_POST['fname'])) {
        $errors['fname'] = "This field is required";
    } else {
        $fname = $_POST['fname'];
        // second validation
        if (!preg_match('/^[a-zA-Z]{2,15}$/', $fname)) {
            $errors['fname'] = "Enter a Valid Name";
        }
    }
    // validation of last name
    if (empty($_POST['lname'])) {
        $errors['lname'] = "This field is required";
    } else {
        $lname = $_POST['lname'];
        // second validation
        if (!preg_match('/^[a-zA-Z]{2,15}$/', $lname)) {
            $errors['lname'] = "Enter a Valid last name";
        }
    }
    // validation of KU student
    if (empty($_POST['ku_student'])) {
        $errors['ku_student'] = "This field is required";
    } else {
        $ku_student = $_POST['ku_student'];
    }
    // validation ID number
    if (empty($_POST['id_number'])) {
        $errors['id_number'] = "This field is required";
    } else {
        $id_number = $_POST['id_number'];
        // second validation
        if (!preg_match('/^[\d]{8}$/', $id_number)) {
            $errors['id_number'] = "ID should be a number with 8 digits";
        }
    }
    // validate date Incubated
    if (empty($_POST['date_incubated'])) {
        $errors['date_incubated'] = "This field is required";
    } else {
        $date_incubated = $_POST['date_incubated'];
    }
    // validate stage of innovation
    if (isset($_POST['innovationStage']) && !empty($_POST['innovationStage'])) {
        $innovationStage = $_POST['innovationStage'];
    } else {
        $errors['innovationStage'] = "This field is required";
    }
    // validate phone number
    if (empty($_POST['tel'])) {
        $errors['tel'] = "This field is required";
    } else {
        $tel = $_POST['tel'];
        // second validation
        if (!preg_match('/^0(1|7)[\d]{8}$/', $tel)) {
            $errors['tel'] = "please enter a valid phone number";
        }
    }
    // validate email
    if (empty($_POST['email'])) {
        $errors['email'] = "This field is required";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "please enter a valid email address";
        }
    }

    // validate the passport
    if (empty($_FILES['photo']['name'])) {
        $errors['photo'] = "This field is required";
    } else {
        $files = $_FILES['photo'];

        $fileName = $files['name'];
        $fileSize = $files['size'];
        $fileTmpLoc = $files['tmp_name'];
        $fileError = $files['error'];

        // allowed only jpg jpeg png files
        $f = explode('.', $fileName);
        $fileExt = strtolower($f[1]);

        $allowedExt = array('jpg', 'jpeg', 'png');
        if (!in_array($fileExt, $allowedExt)) {
            $errors['photo'] = "File Type not supported";
        } else {
            // checking the size of the image
            if ($fileSize > 2000000) {
                $errors['photo'] = "File size too large";
            } else {
                $dest = 'uploads/' . $fileName;
                move_uploaded_file($fileTmpLoc, $dest);
            }
        }
    }

    // validate the key partner
    if (!empty($_POST['partner'])) {
        $partner = $_POST['partner'];
        if (is_string($partner)) {
            $errors['partner'] = "Enter valid names, comma separated";
        } else {
            if (str_word_count($partner) > 20) {
                $errors['partner'] = "Thats a very Large value";
            }
        }
    }
    // validate the IP registered
    if (empty($_POST['IP_registered'])) {
        $errors['IP_registered'] = "This field is required";
    } else {
        $IP_registered = $_POST['IP_registered'];
    }
    // validate the description
    if (empty($_POST['description'])) {
        $errors['description'] = "This field is required";
    } else {
        $description = $_POST['description'];
        // check if it is string
        if (!is_string($description)) {
            $errors['description'] = "Description should be a string only";
        } else {
            $maxLength = 250;
            if (str_word_count($description) > $maxLength) {
                $errors['description'] = "Description should not exceed 250 words";
            }
        }
    }
    // category of Innovation
    if (isset($_POST['innovation_category']) && !empty($_POST['innovation_category'])) {
        $innovation_category = $_POST['innovation_category'];
    } else {
        $errors['innovation_category'] = "This field is required";
    }

    // check if there is errors in the form
    if (!array_filter($errors)) {
        echo ('
        ?>

        <script>
            swal("Good job!", "You clicked the button!", "success");
        </script>
        <?php ');
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
