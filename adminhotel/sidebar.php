		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="/<?= $baseurl ?>/assets/img/profile_user/nophoto.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="/<?= $baseurl ?>/adminhotel/" class="d-block font-weight-bold"><?= $nama ?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="/<?= $baseurl ?>/adminhotel/" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link  active">
								<i class="nav-icon fas fa-hotel"></i>
								<p>
									Hotels
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pages/charts/chartjs.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>ChartJS</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/charts/flot.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Flot</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="pages/charts/inline.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Inline</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- /.sidebar -->
		</aside>