<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>

</head>
<body>
    <?php
        echo "<h1>Preview</h1><br/>";

        if (empty($_POST["name"]) == true) {
            echo "Name: Not Provided"."<br/>";
        }
        else{
            echo $_POST["name"]."<br/>";
        }

        if (empty($_POST["username"]) == true) {
            echo "Username: Not Provided"."<br/>";
        }
        else{
            echo $_POST["username"]."<br/>";
        }
        if (empty($_POST["password"]) == true) {
            echo "Password: Not Provided"."<br/>";
        }
        else{
            echo $_POST["password"]."<br/>";
        }
        if (empty($_POST["address"] == true)){
            echo "Address: Not Provided"."<br/>";
        }
        else{
            echo $_POST["address"]."<br/>";
        }

        echo $_POST["country"]."<br/>";
        
        if (empty($_POST["zip"]) == true) {
            echo "ZIP Code: Not Provided"."<br/>";
        }
        else{
            echo $_POST["zip"]."<br/>";
        }
        if (empty($_POST["email"]) == true) {
            echo "Email: Not Provided"."<br/>";
        }
        else{
            echo $_POST["email"]."<br/>";
        }
        if (empty($_POST["sex"]) == true) {
            echo "Sex: Not Provided"."<br/>";
        }
        else{
            echo $_POST["sex"]."<br/>";
        }
        if (empty($_POST['language']) == true) {
            echo "Language: Not Provided"."<br/>";
        }
        else{
            for ($i=0; $i <sizeof($_POST['language']) ; $i++) { 
                echo $_POST['language'][$i]."<br/>";
            }
        }
        if (empty($_POST["area"]) == true) {
            echo "About: Not Provided"."<br/>";
        }
        else{
            echo $_POST["area"]."<br/>";
        }

    ?>
    
</body>
</html>