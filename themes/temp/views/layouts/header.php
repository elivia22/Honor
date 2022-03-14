<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<!-- <header class="main-header"> -->

<div id="global-loader" ></div>
	<div class="page">
		<div class="page-main">
			<div class="app-header header py-1 d-flex">
				<div class="container-fluid">
					<div class="d-flex">
						<a class="header-brand" href="dashboard.html">
							<span style="font-weight: bold; color:#007bff; font-family:Gill Sans"> HONOR </span>

							<!-- = Html::img('@web/images/logo/logo.png',['class'=>"header-brand-img d-none d-sm-block",'alt'=>"Spain logo"]) -->
							<!-- <img src="@web/images/brand/logo.png" class="header-brand-img d-none d-sm-block" alt="Spain logo">
							<img src="@app/web/images/brand/logo.png" class="header-brand-img-2 d-sm-none" alt="Spain logo"> -->
						</a>
						<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
						<div class="d-none d-lg-block horizontal">
							<ul class="nav">
								<li class="">
									<div class="dropdown d-none d-md-flex">
										<a href="#" class="d-flex nav-link pr-0 mt-3 country-flag1">
											<h4 style="font-weight: bold; color:#007bff; font-family:Gill Sans">INVENTORY MANAGEMENT SYSTEM</h4>
										</a>
									</div>
								</li>
							</ul>
						</div>

						<div class="d-flex order-lg-2 ml-auto">
															<div class="dropdown d-none d-md-flex">
										<a href="#" class="d-flex nav-link pr-3 mt-3 country-flag1">
											<h4 style="font-weight: bold; color:#007bff; font-family:Gill Sans"><i class="fa fa-map-marker"></i> UBUNGO</h4>
										</a>
									</div>
							<div class="dropdown d-none d-md-flex " >
								<a  class="nav-link icon full-screen-link">
									<i class="mdi mdi-arrow-expand-all"  id="fullscreen-button"></i>
								</a>
							</div>
							<div class="dropdown d-none d-md-flex">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="mdi mdi-bell-outline "></i>
									<span class="nav-unread bg-success"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="notifyimg">
											<i class="fa fa-thumbs-o-up"></i>
										</div>
										<div>
											<strong>Someone likes our posts.</strong>
											<div class="small text-muted">3 hours ago</div>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex pb-3">
										<div class="notifyimg">
											<i class="fa fa-commenting-o"></i>
										</div>
										<div>
											<strong> 3 New Comments</strong>
											<div class="small text-muted">5  hour ago</div>
										</div>
									</a>

									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item text-center">View all Notification</a>
								</div>
							</div>								
							<div class="dropdown">
								<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
									<span class="avatar avatar-md brround"><?= Html::img('@web/images/faces/male/40.jpg',['class'=>"avatar avatar-md brround",'alt'=>"Profile-img"])?></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
									<div class="text-center">
										<a href="#" class="dropdown-item text-center font-weight-sembold user">Anthony</a>

										<div class="dropdown-divider"></div>
									</div>
									<a class="dropdown-item" href="<?php echo \yii\helpers\Url::to(['site/login'])?>">
										<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon  mdi mdi-settings"></i> Settings
									</a>
									<a class="dropdown-item" href="#">
										<span class="float-right"><span class="badge badge-primary">6</span></span>
										<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
									</a>
									<!-- <i class="dropdown-icon mdi  mdi-logout-variant">  -->

									<?php 
									echo Html::a(
                                    // 'Sign out',
									'<i class="dropdown-icon mdi  mdi-logout-variant"> </i> Sign out ',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'dropdown-item']
                                ); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
