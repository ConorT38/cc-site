<!-- begin #header -->
		<div data-current-theme="navbar-inverse" id="header" class="header navbar navbar-fixed-top navbar-inverse">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="http://<?=$_SERVER['HTTP_HOST']."/Admin"?>" class="navbar-brand"><img src="Admin_files/logo-white.png" class="logo" alt=""> Celtic Chocolates</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin navbar-right -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form form-input-flat">
							<div class="form-group">
								<input class="form-control" placeholder="Enter keyword..." type="text">
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="image"><img src="Admin_files/user_profile.jpg" alt=""></span>
							<span class="hidden-xs"><?php echo $name;?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Admin/Edit/Profile">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="http://<?=$_SERVER['HTTP_HOST']?>/AdminSettings">Setting</a></li>
							<li class="divider"></li>
							<li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Logout">Log Out</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;" data-click="right-sidebar-toggled">
							<i class="fa fa-align-left"></i>
						</a>
					</li>
				</ul>
				<!-- end navbar-right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div style="position: relative; overflow: hidden; width: auto; height: 100%;" class="slimScrollDiv"><div data-init="true" style="overflow: hidden; width: auto; height: 100%;" data-scrollbar="true" data-height="100%">
				<!-- begin sidebar nav -->
				<ul class="nav">
				    <li class="nav-user">
				        <div class="image">
				            <img src="Admin_files/user_profile.jpg" alt="">
				        </div>
				        <div class="info">
				            <div class="name dropdown">
				                <a href="javascript:;" data-toggle="dropdown"><?php echo $name;?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Admin/Edit/Profile">Edit Profile</a></li>
                                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                    <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Admin/New/Admin">New Admin</a></li>
                                    <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Admin/Settings">Setting</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Logout">Log Out</a></li>
                                </ul>
				            </div>
				            <div class="position">Management Admin</div>
				        </div>
				    </li>
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-home"></i>
						    <span>Dashboard <span class="label label-theme m-l-3">Home</span></span>
					    </a>
					    <ul class="sub-menu">
					        <li class="active"><a href="http://<?=$_SERVER['HTTP_HOST']."/Admin"?>">Home</a></li>
					    </ul>
					</li>
					<li class="has-sub">
						<a href="http://<?=$_SERVER['HTTP_HOST']."/Admin/Invoice"?>">
							<i class="fa fa-inbox"></i> 
							<span>Invoices</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-align-left"></i> 
						    <span>Operations</span>
						</a>
						<ul class="sub-menu">
							<li class="has-sub">
								<a href="javascript:;">
						            Add/Remove Product
						        </a>
								<ul class="sub-menu">
									<li><a href="http://<?=$_SERVER['HTTP_HOST']."/Admin/Add/Product"?>">Add Product</a></li>
									<li><a href="http://<?=$_SERVER['HTTP_HOST']."/Admin/Remove/Product"?>">Remove Product</a></li>
								</ul>
							</li>
							<li class="has-sub">
								<a href="javascript:;">
						            Blog
						        </a>
								<ul class="sub-menu">
									<li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Admin/Add/Blog">New Blog</a></li>
									<li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Admin/Remove/Blog">Remove Blog</a></li>
								</ul>
							</li>
							<li class="has-sub"><a href="javascript:;">Users/Admins</a>
							<ul class="sub-menu">
									<li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Admin/Add/User">New User</a></li>
									<li><a href="http://<?=$_SERVER['HTTP_HOST']?>/Admin/Remove/User">Remove User</a></li>
								</ul>

							</li>
						</ul>
					</li>
					<li class="divider has-minify-btn">
                        <!-- begin sidebar minify button -->
                        <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-left"></i></a>
                        <!-- end sidebar minify button -->
					</li>
					<li class="nav-header">Projects</li>
					<li class="nav-project">
					    <ul class="project-list">
					        <li>
                                <div class="icon"><i class="fa fa-circle-o text-success"></i></div>
                                <div class="info">
                                    <div class="title"><a href="javascript:;">iPhone Apps Development</a></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 60%"></div>
                                    </div>
                                    <div class="desc">Donec tristique malesuada nibh quis lobortis. Quisque viverra faucibus hendrerit.</div>
                                </div>
					        </li>
					        <li>
                                <div class="icon"><i class="fa fa-circle-o text-danger"></i></div>
                                <div class="info">
                                    <div class="title"><a href="javascript:;">Website Redesign</a></div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 30%"></div>
                                    </div>
                                    <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                </div>
					        </li>
					    </ul>
					</li>
				</ul>
				<!-- end sidebar nav -->
			</div><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 0px; height: 821.944px;" class="slimScrollBar ui-draggable"></div><div style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 0px;" class="slimScrollRail"></div></div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->