
<?php
	$link = mysqli_connect("localhost", "root", "", "webdatabase");
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>

<html>
    <body>
        <?php
            echo "hello",$_POST['fullname'];
            $sql = "INSERT INTO feedback (fullname, email, phonenumber, fbcontent) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[phonenumber]','$_POST[fbcontent]');";

            if ($result = mysqli_query($link, $sql)){
                echo 'Hello',$_POST['fullname'],'! </br>';
                echo 'Your comment was added to the database.';
            } else {
                echo "Sorry, something went wrong...";
            }
        ?>
    </body>
</html>