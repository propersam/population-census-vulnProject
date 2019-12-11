
<?php include "includes/header.php"; ?>

		<?php include "includes/navigation.php"; ?>


		<section class="hero bg-overlay" id="hero" data-bg="img/people.jpg">

			<?php include "includes/landing.php"; ?>

		</section>


		<section class="padding" id="features">
		<?php

		if(!$_SESSION || !$_SESSION['username']) {
			
			include "includes/features.php";

		} else {

			echo "

			<div class='cta'>
				<h4 class='text-center text-secondary'>
					 {$_SESSION['username']} you are Logged In as '{$_SESSION['user_role']}'
				</h4>
			</div>
			<div class='cta absolute-center '>
				<a href='includes/logout.php'> 
					<h5 class='text-center text-primary'> Click Here to Logout </h5> </a>
			</div>
		";
		}
		?>

		</section>

		<section class="bg-overlay padding" id="project" data-bg="img/projects.jpeg">
		
			<?php include "includes/features2.php"; ?>

		</section>


		<section class="padding bg-grey" id="contact">
			
			<?php include "includes/contact.php"; ?>

		</section>

		

		<?php include "includes/footer.php" ?>