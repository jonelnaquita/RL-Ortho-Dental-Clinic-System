<header>
<nav class="navbar fixed-top navbar-expand-lg">
	
	<div class="container">
		<img src="assets/img/logo.jpg" class="img-fluid logo rounded-circle" alt="Townhouses and Skyscrapers" width: 80px;>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nvbCollapse" aria-controls="nvbCollapse" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"><i class="fa-solid fa-bars" style="color: #fff;"></i></span>
  		</button>
		<div class="collapse navbar-collapse" id="nvbCollapse">
			<ul class="navbar-nav ml-auto mx-auto">
				<li class="nav-item pl-1">
					<a class="nav-link" href="#home"><i class="fa fa-home fa-fw mr-1"></i>HOME</a>
				</li>
				<li class="nav-item pl-1">
					<a class="nav-link" href="#feedback"><i class="fa fa-info-circle fa-fw mr-1"></i>ABOUT US</a>
				</li>
				<li class="nav-item pl-1">
					<a class="nav-link" href="#services"><i class="fa fa-th-list fa-fw mr-1"></i>SERVICES</a>
				</li>
				<!--<li class="nav-item pl-1">
					<a class="nav-link" href="#screening"><i class="fas fa-hand-holding-medical fa-fw fa-rotate-180 mr-1"></i>SCREENING</a>
				</li>-->
				<li class="nav-item pl-1">
					<a class="nav-link" href="patient/index.php"><i class="fas fa-file-import fa-fw mr-1"></i>LOGIN</a>
				</li>
			</ul>
			<?php
				$sql = "SELECT * FROM tbladmin";
				$query = $conn->query($sql);
				$row = $query->fetch_assoc();
			?>
			<ul class="navbar-nav sm-icons" style="flex-direction: row;">
				<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
				<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
				<h6 class="text-light" style="font-size: 13px; margin-top: 15px;">Clinic is <span class="badge badge-secondary"><?php echo $row['clinicStatus'];?></span></h6>
			</ul>
		</div>
	</div>
</nav>
</header>
