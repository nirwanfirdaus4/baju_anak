
	<div class="page-container row-fluid">

		<div class="page-sidebar " id="main-menu">

			<div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
				<p class="menu-title sm">NAVIGATION</p>
				<ul>
					<li class="<?php if($this->uri->segment(2)=="Index_admin"){echo "open active";}?>">
						<a href="widgets.html"> <i class="material-icons">home</i> <span class="title">Dashboard</span></a>
					</li>
					<li class="<?php if($this->uri->segment(2)=="Produk"){echo "open active";}?>">
						<a href="widgets.html"> <i class="material-icons">panorama_horizontal</i> <span class="title">Produk</span></a>
					</li>
					<li class="<?php if($this->uri->segment(2)=="Transaksi"){echo "open active";}?>">
						<a href="email.html"> <i class="fa fa-shopping-cart"></i> <span class="title">Transaksi</span>
						</a>
					</li>
					<li>
						<a href="javascript:;"> <i class="material-icons">invert_colors</i> <span class="title">Themes</span> <span class=" arrow"></span> </a>
						<ul class="sub-menu">
							<li> <a href="theme_coporate.html">Coporate </a> </li>
							<li> <a href="theme_simple.html">Simple</a> </li>
							<li> <a href="theme_elegant.html">Elegant</a> </li>
						</ul>
					</li>
					
					<li>
						<a href=""><i class="fa fa-sign-out"></i><span class="title"> Logout</span></a>
					</li>
					
				</ul>
				<div class="side-bar-widgets">
					
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		<!-- <a href="#" class="scrollup">Scroll</a> -->
		<div class="footer-widget">
			<center>envadev.com</center>
			
		</div>