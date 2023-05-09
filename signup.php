<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
        
    <title>Sign Up</title>
    
</head>
<body>
<?php

//learn from w3schools.com
//Unset all the server side variables

session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Europe/London');
$date = date('Y-m-d');

$_SESSION["date"]=$date;



if($_POST){

    

    $_SESSION["personal"]=array(
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'address'=>$_POST['address'],
        'GPNumber'=>$_POST['GPnumber'],
        'dob'=>$_POST['dob'],
		'weight'=>$_POST['weight'],
		'height'=>$_POST['height'],
		'tital'=>$_POST['tital'],
		'ethnicOrigin'=>$_POST['ethnicOrigin'],
		'smoker'=>$_POST['smoker'],
		'drinker'=>$_POST['drinker'],

    );


    print_r($_SESSION["personal"]);
    header("location: create-account.php");




}

?>
</head>

    <center>
    <div class="container">
        <table border="0">
            <tr>
                <td colspan="2">
                    <p class="header-text">GP Registration Form</p>
                    <p class="sub-text">Add Your Personal Details to Continue</p>
                </td>
            </tr>
            <tr>
                <form action="" method="POST" >
                <td class="label-td" colspan="2">
                    <label for="name" class="form-label">Name: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                </td>
                <td class="label-td">
                    <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="address" class="form-label">Address: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="address" class="input-text" placeholder="Address" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="GPNumber" class="form-label">GP Number: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="GPNumber" class="input-text" placeholder="GP Number" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="dob" class="form-label">Date of Birth: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="date" name="dob" class="input-text" required>
                </td>
            </tr>
			<tr>
                <td class="label-td" colspan="2">
                    <label for="weight" class="form-label">weight: </label>
                </td>
            </tr>
        
            <tr>
                <td class="label-td" colspan="2">
                    <input type="number" name="weight" min="10" max="300" class="input-number" required>
                </td>
            </tr>
			<tr>
                <td class="label-td" colspan="2">
                    <label for="heigh" class="form-label">height: </label>
                </td>
            </tr>

			<tr>
                <td class="label-td" colspan="2">
                    <input type="number" name="height" min="10" max="300" class="input-number" required>
                </td>
            </tr>

			<tr>
                <td class="label-td" colspan="2">
                    <label for="smoker" class="form-label">smoker: </label>
                </td>
            </tr>
			<tr>
                <td class="label-td" colspan="2">
                    <input type="radio" name="smoker" class="form-label">yes  </label>
                </td>
            </tr>
			<tr>
                <td class="label-td" colspan="2">
                    <input type="radio" name="smoker"  class="form-label">no  </label>
                </td>
            </tr>

			<tr>
                <td class="label-td" colspan="2">
                    <label for="drinker" class="form-label">drinker: </label>
                </td>
            </tr>

			<tr>
                <td class="label-td" colspan="2">
                    <input type="radio" name="drinker"  class="form-label">yes  </label>
                </td>
            </tr>
			<tr>
                <td class="label-td" colspan="2">
                    <input type="radio" name="drinker"  class="form-label">no  </label>
                </td>
            </tr>
			
            <tr>
                <td class="label-td" colspan="2">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
                </td>
                <td>
                    <input type="submit" value="Next" class="login-btn btn-primary btn">
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                    <a href="login.php" class="hover-link1 non-style-link">Login</a>
                    <br><br><br>
                </td>
            </tr>

                    </form>
            </tr>
        </table>

    </div>
</center>
</body>
</html>