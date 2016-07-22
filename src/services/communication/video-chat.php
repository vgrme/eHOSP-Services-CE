<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>


<html class="no-js" lang="en">
<head>
	<title>Video Communication</title>
	<?php
		include '../../includes/php/head.php';
	?>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <script src="js/dashboard.js"></script>
</head>
<body>
	<div id="container">
		<?php
			include '../../includes/php/header.php';
		?>

		<?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {
        ?>


		<div class="row">
	        <h1>Video Communication</h1>
	        <br>

            <div class="dashboard-container">
                <div class="dashboard-header">
                    <span>Video Chat Dashboard</span>
                    <hr>
                </div>
                <div class="dashboard-sidebar">
                    
                </div>
                <div class="dashboard-main">
                    <video class="my-video dashboard-video" controls autoplay>Test</video>
                </div>
                <i class="fa fa-arrows-alt fa-lg dashboard-fullscreen" aria-hidden="true"></i>
            </div>

            <div class="blank-space"></div>
            <script src="js/video-chat.js"></script>
			
      	</div>

      	<?php
        } else {
        ?>
        <div class="row">
        	<h1>
	        	Error
	        </h1>
        	<p>
        		You are currently not Signed In!<br>
        		Please <a href='sign.php'>Sign In</a> or <a href='register.php'>Register</a>
        	</p>
        </div>
        <?php
        }
        ?>

	</div>

	<?php include '../../includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
