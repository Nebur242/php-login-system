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
   
    <title>Register</title>
</head>
<body>

    <div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
			<form class="uk-form-stacked js-register">
				
				<h2>Login</h2>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" type="email" name="email" required='required' placeholder="email@email.com">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" type="password" name="password" required='required' placeholder="Your Password">
			        </div>
			    </div>

				<!-- <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;"></div> -->

				<div class="js-errors"></div>


			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">Login</button>
			    </div>

			</form>
  		</div>
  	</div>

    <?php require_once('inc/footer.php') ?>
</body>
</html>