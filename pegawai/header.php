			<header class="header">
				<div class="logo-container">
					<a href="" class="logo">
						<img src="../assets/images/KAI1.jpg" height="40" width="130" alt="JSOFT Admin" />
						<img src="../assets/images/KAI2.png" height="40" width="140" alt="JSOFT Admin" />
						<img src="../assets/images/putih.jpg" height="40" width="300" alt="JSOFT Admin" />
					</a>
					
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>

					</div>
				</div>
			

			<div class="logo-container">
					<a href="" class="logo">
					
						<img src="../assets/images/judul.jpg" height="40" width="190" alt="JSOFT Admin" />
						<img src="../assets/images/judul3.jpg" height="40" width="270" alt="JSOFT Admin" />
					</a>
					
					<div class="visible-xs toggle-sidebar-center" data-toggle-class="sidebar-center-opened" data-target="html" data-fire-event="sidebar-center-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>

					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<!--<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>-->
			
					
			
					<span class="separator"></span>

			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="../assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="../assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span  style="color:blue" class="name"><?php echo $_COOKIE["nama"];?></span>
								<span  style="color:blue" class="name"><?php echo $_COOKIE["user"];?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>