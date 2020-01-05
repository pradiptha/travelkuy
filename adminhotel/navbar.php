		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<?php if ($status == 0) : ?>
							<span class="badge badge-warning navbar-badge">1</span>
						<?php endif ?>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<?php if ($status == 0) : ?>
							<a href="#" class="dropdown-item type=" button" data-toggle="modal" data-target="#editprofil"">
								<i class=" fas fa-envelope mr-2"></i>
								<p>Akun anda belum aktif, Aktifkan dengan cara mengupload foto identitas</p>
							</a>
						<?php elseif ($status == 1) : ?>
							<a href="#" class="dropdown-item">
								<i class="fas fa-envelope mr-2"></i>Tidak Ada Notifikasi
							</a>
						<?php endif ?>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-cog"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="" class="dropdown-item" type="button" data-toggle="modal" data-target="#editprofil">
							<i class="fas fa-user-circle mr-2"></i> Edit Profile
						</a>
						<div class="dropdown-divider"></div>
						<a href="/<?= $baseurl ?>/php/login.php?act=logout" class="dropdown-item dropdown-footer">Logout</a>
					</div>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->