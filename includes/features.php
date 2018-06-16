
<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 col-sm-12">
						<div class="list-item">
							<div class="icon">
								<i class="ion-code"></i>
							</div>
							<div class="desc">

							<?php include "login.php"; ?>

								<h2 class = "text-center"> Admin Login </h2>
								<form class="contact row" method="post" action="">

									<div class="form-group col-12">
										<input type="text" class="form-control" placeholder="ADMIN USERNAME" name="admin_username" required>
									</div>

									<div class="form-group col-12">
										<input type="password" class="form-control" placeholder="ADMIN PASSWORD" name="admin_password" required>
									</div>
									
									<div class="form-group col-12 mt-2">
										<input class="btn btn-primary" type="submit" name="admin_login" value="Admin Login">			
									</div>
							</form>
							</div>
						</div>
					</div>
					<!-- <div class="col-12 col-md-4 col-sm-12">
						<div class="list-item">
							<div class="icon">
								<i class="ion-social-github"></i>
							</div>
							<div class="desc">
								<h2>Open Source</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore.
								</p>
								<a href="#" class="more">Learn More</a>
							</div>
						</div>
					</div> -->
					<div class="col-12 col-md-6 col-sm-12">
						<div class="list-item no-spacing">
							<div class="icon">
								<i class="ion-paintbrush"></i>
							</div>
							<div class="desc">
							<h2 class = "text-center"> Family Head Login </h2>

							<form class="contact row" method="post" action="includes/login.php">
							
								<div class="form-group col-12">
									<input type="text" class="form-control" placeholder="FAMILY LOGIN_ID" name="family_id" required>
								</div>

								<div class="form-group col-12">
									<input type="password" class="form-control" placeholder="LOGIN PASSWORD" name="family_password" required>
								</div>
								
								<div class="form-group col-12 mt-2">
									<input class="btn btn-primary" type="submit" name="admin_login" value="Admin Login">			
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>