<?php
	$link = mysqli_connect("localhost", "anhuypha", "anhuypharma1233018281", "anhuypharmaDB");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO contacts (fullname, email, phonenumber, fbcontent) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[phonenumber]','$_POST[fbcontent]');";

    if ($result = mysqli_query($link, $sql)){
        echo 'Hello ',$_POST['fullname'],'! ';
        echo 'Your comment was added to the database.';
    } else {
        echo "Sorry, something went wrong...";
    }
?>