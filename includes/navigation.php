
<nav class="navbar navbar-expand-lg main-navbar">
			<div class="container-fluid">			
			  <a class="navbar-brand" href="#">
				<!-- /	<img src="img/logo-light.png" alt="Logo"> -->
					<h5 class="text-secondary">POPULATION CENSUS SYSTEM </h5>
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon">
			    	<i class="ion-navicon"></i>
			    </span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				  <div class="mr-auto"></div>
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link smooth-link" href="#hero">Home</a>
						</li>
						
						<?php

						if ($_SESSION && $_SESSION['username']){

							echo "
							<li class='nav-item'>
							<a class='nav-link smooth-link' href='admin/'> Admin Dashboard </a>
							</li>

							<li class='nav-item'>
							<a class='nav-link smooth-link' href='#features'> Logout </a>
							</li>";
						

						} else {
							
							echo "
							<li class='nav-item'>
			        <a class='nav-link smooth-link' href='#features'> Login </a>
						</li>";

						}
						
						?>
			      <!-- <li class="nav-item">
			        <a class="nav-link smooth-link" href="#blog">Blog</a>
			      </li> -->
			      <li class="nav-item">
			        <a class="nav-link smooth-link" href="#project">Population Statistics</a>
			      </li>
			    </ul>
			    <form class="form-inline">
				    <a href="#contact" class="btn smooth-link align-middle btn-primary">Need Help?</a>
			    </form>
			  </div>
		  </div>
		</nav>


