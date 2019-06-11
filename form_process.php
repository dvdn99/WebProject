<?php

// define variables and set to empty values
$name_error = $email_error = $phone_error = $guests_error = $comments_error = "";
$name = $email = $phone1 = $phone2 = $phone3 = $guests = $comments= "";
$message_body = "";

//form is submitted with post method
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST["name"])){
        $name_error = "Name is required";
    }else{
        $name = test_input($_POST["name"]);

        if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            $name_error = "Only letters allowed";
        }
    }

    if(empty($_POST["phone1"]) && empty($_POST["phone2"]) && empty($_POST["phone3"]) ) {
        $phone_error = "Phone number is required";
    }else if(empty($_POST["phone1"]) || empty($_POST["phone2"]) || empty($_POST["phone3"])){
        $phone_error = "Invalid phone number";
    }else{
        $phone1 = test_input($_POST["phone1"]);
        $phone2 = test_input($_POST["phone2"]);
        $phone3 = test_input($_POST["phone3"]);

        $phonesize = strlen($phone1) + strlen($phone2) + strlen($phone3);

        if($phonesize > 10 || $phonesize < 9){
            $phone_error = "Invalid phone number";
        }else{
            if(strlen($phone1) > 3){
                $phone_error = "Invalid phone number";
            }
            if(strlen($phone2) > 3){
                $phone_error = "Invalid phone number";
            }
            if(strlen($phone3) > 4){
                $phone_error = "Invalid phone number";
            }
        }

    }

    if(empty($_POST["email"])){
        $email_error = "E-mail is required";
    }else{
        $email = test_input($_POST["email"]);

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email_error = "Invalid email format";
        }
    }

    if(empty($_POST["guests"])){
        $guests_error = "Number of guests is required";
    }else{
        $guests = test_input($_POST["guests"]);

        if($guests <= 0){
            $guests_error = "Invalid number of guests";
        }
    }


    $comments = test_input($_POST["comments"]);

    if(strlen($comments) > 200){
        $comments_error = "Up to 200 characters only!";
    }else{
        $comments_error = 200 - strlen($comments) . " Character left";
    }

    if($phone_error == '' && $email_error == '' && $guests_error == '' && $name_error == ''){
        $message_body .= "Thank you " . $name . ", for registering to my event.</br>Number of participants: " . $guests;
        $name = $email = $phone1 = $phone2 = $phone3 = $guests = $comments= "";
    }

}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

