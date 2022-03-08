<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
       if(isset($_POST['username'])){
         if(isset($_POST['color']) && isset($_POST['dish'])){

            echo "Hi " . $_POST['username'] . "<br>You really enjoy " . $_POST['dish'] . " specially with a nice " . $_POST['color'] . " wine.";
        }
       }
       else{
        echo "No data available!";
       }
    ?> 
</body>
</html> 