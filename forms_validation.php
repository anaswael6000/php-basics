<?php
function adjust_input($data){
    return htmlspecialchars(trim(stripslashes($data)));
}
$name = $email = $website = $comment = $gender = "";
$name_error = $email_error = $website_error = $gender_error = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['name']) == "TRUE"){
        $name_error = "Name is required";
    } else{
        $name = adjust_input($_POST['name']);
        if(preg_match("/^[a-zA-Z-' ]*$/",$name) == 0){
            $name_error = "Only letters and white space allowed in the name";
        }
    }
    if(empty($_POST['email']) == "TRUE"){
        $email_error = "Email is required";
    } else{
        $email = adjust_input($_POST['email']);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error = "Email is not valid";
        }
    }

    if(empty($_POST['website']) == "TRUE"){
        $website = "";
    } else{
        $website = adjust_input($_POST['website']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
            $website_error = "URL is not valid";
        }
    }

    if(empty($_POST['commment']) == "FALSE"){
        $comment = adjust_input($_POST['comment']);
    }

    if(empty($_POST['gender']) == "TRUE"){
        $gender_error = "Gender is required";
    }else{
        $gender = $_POST['gender'] ;
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>index.php</title>
    </head>   
    <body>
        <form action= "<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            <label for="name">Enter your name please:</label>
            <input type="text" id="name" name="name" value="<?= $name;?>" autofocus>
            <span>*<?php echo " " . $name_error; ?></span><br><br>

            <label for="email">Enter your email please:</label>
            <input type="text" id="email" name="email" value="<?= $email;?>">
            <span>*<?php echo " " .  $email_error; ?></span><br><br>

            <label for="website">Enter your website's URL please:</label>
            <input type="text" id="website" name="website" value="<?= $website;?>">
            <span><?php echo " " . $website_error; ?></span><br><br>

            <label for="comment">Enter your comment please:</label><br><br>
            <textarea id="comment" name="comment" rows="4" cols="50"><?php echo $comment;?></textarea><br><br>

            Please select your gender:  
            <input type="radio" id="male" name="gender" value="male" <?php if($gender == "male"){echo "checked";}?>>
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="female" <?php if($gender == "female"){echo "checked";}?>>
            <label for="female">Female</label>

            <input type="radio" id="other" name="gender" value="other" <?php if($gender == "other"){echo "checked";}?>>
            <label for="other">Other</label>
            <span> *<?php echo " " . $gender_error; ?></span><br><br>
             
            <input type="submit" value="Submit">
        </form>
        <h2>Your input is:</h2>
        <?php echo $name . "<br>" . $email . "<br>" . $website . "<br>" . $comment ."<br>" . $gender;?>
    </body>
</html>
