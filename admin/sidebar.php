<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info text-white">
				<?= $data['username'] ?>
			</div>
			<div class="editprofile">
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
		          	with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="/<?= $baseurl ?>/admin/" class="nav-link <?= ($view == "Dashboard" ? 'active' : ''); ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/<?= $baseurl ?>/admin/index.php?view=validasi" class="nav-link <?= ($view == "validasi" ? 'active' : ''); ?>">
						<i class="far fa-circle nav-icon"></i>
						<p>
							Validasi
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/<?= $baseurl ?>/admin/index.php?view=destinasi" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Destinasi</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/<?= $baseurl ?>/admin/default_package.php" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Master Paket</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="/<?= $baseurl ?>/admin/index.php?view=slideshow" class="nav-link <?= ($view == "slideshow" ? 'active' : ''); ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Slideshow
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>