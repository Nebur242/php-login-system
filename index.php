<?php 

    define('__CONFIG__' , true);
    require_once("inc/config.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.0/css/uikit.min.css" integrity="sha512-GcujYvLvDEr0V+LbgkfmAMYFjcKGfuuDNhOyUhoeSMDcINpUFdcJaIlNYBxtQAIk3ehoH1/+x4o9KkFcH16a8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <title>Document</title>
</head>
<body>

<div class="uk-section uk-container">
        <?php 
            echo "Hello world !"; 
            echo date('Y m d');
        ?>

        <p>
            <a href="./login.php">Login</a>
            <a href="./register.php">Register</a>
        </p>
  	
  	</div>

    <?php require_once('inc/footer.php') ?>
</body>
</html>