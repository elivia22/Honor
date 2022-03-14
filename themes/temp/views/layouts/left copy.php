<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
	<div class="app-sidebar__user">
		<div class="dropdown user-pro-body">
			<div>
				<!-- <img src="assets/images/faces/male/40.jpg" alt="user-img" class="avatar avatar-xl brround mCS_img_loaded"> -->
				<?= Html::img('@web/images/faces/male/40.jpg',['class'=>"avatar avatar-xl brround mCS_img_loaded",'alt'=>"user-img"])?>
				<a href="#" class="profile-img">
					<span class="fa fa-pencil" aria-hidden="true"></span>
				</a>
			</div>
			<div class="user-info mb-2">
				<h4 class="font-weight-semibold text-dark mb-1">User</h4>
				<!-- <span class="mb-0 text-muted">Ui Designer</span> -->
			</div>
			<a href="#" title="User Profile" class="user-button"><i class="fa fa-cog"></i></a>
			<a href="#" title="Change Password" class="user-button"><i class="fa fa-key"></i></a>
			<a href="#" title="logout" class="user-button"><i class="fa fa-power-off"></i></a>
		</div>
	</div>
	<ul class="side-menu">
							
		<li>
			<a class="side-menu__item" href="dashboard.html"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span></a>
		</li>	
		<li>
			<a class="side-menu__item" href="/site/contact"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">login</span></a>
		</li>																		
		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-plus-square-o"></i><span class="side-menu__label">Product</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="new_application.html">New Product</a></li>
				<li><a class="slide-item" href="name_change.html">Change of Name</a></li>
				<li><a class="slide-item" href="general_service.html">General Service</a></li>
			</ul>
		</li>

		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-wpforms"></i><span class="side-menu__label">Customer</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="assess_application.html">Applications</a></li>
				<li><a class="slide-item" href="assess_name_change.html">Change of Name</a></li>
				<li><a class="slide-item" href="assess_service.html">Lodged Service</a></li>
			</ul>
		</li>

		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-wpforms"></i><span class="side-menu__label">Supplier</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="assess_application.html">Applications</a></li>
				<li><a class="slide-item" href="assess_name_change.html">Change of Name</a></li>
				<li><a class="slide-item" href="assess_service.html">Lodged Service</a></li>
			</ul>
		</li>
								
		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-wpforms"></i><span class="side-menu__label">Location</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="assess_application.html">Applications</a></li>
				<li><a class="slide-item" href="assess_name_change.html">Change of Name</a></li>
				<li><a class="slide-item" href="assess_service.html">Lodged Service</a></li>
			</ul>
		</li>
		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-wpforms"></i><span class="side-menu__label">User</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="assess_application.html">Manager</a></li>
				<li><a class="slide-item" href="assess_name_change.html">Staff</a></li>
				<li><a class="slide-item" href="assess_service.html">Job</a></li>
			</ul>
		</li>
								
		<!--<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-plus-square-o"></i><span class="side-menu__label">Lodge</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="name_change.html">Change of Name</a></li>
				<li><a class="slide-item" href="general_service.html">General Service</a></li>
			</ul>
		</li>-->
								
		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-search"></i><span class="side-menu__label">Search</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="search_application.html">Applications</a></li>
				<li><a class="slide-item" href="search_name_change.html">Change of Name</a></li>
				<li><a class="slide-item" href="search_service.html">Lodged Service</a></li>
			</ul>
		</li>
								
		<li>
			<a class="side-menu__item" href="search_application_quotation.html"><i class="side-menu__icon fa fa-cc-mastercard"></i><span class="side-menu__label">Quotations</span></a>
		</li>
								
		<li>
			<a class="side-menu__item" href="track.html"><i class="side-menu__icon fa fa-question-circle-o"></i><span class="side-menu__label">Track Application</span></a>
		</li>
		
		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-commenting-o"></i><span class="side-menu__label">Tickets</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="ticket_log.html">Log Ticket</a></li>
				<li><a class="slide-item" href="ticket_supervisor.html">Supervisor Incharge</a></li>
				<li><a class="slide-item" href="ticket_section.html">Section Incharge</a></li>
				<li><a class="slide-item" href="ticket_assigned.html">Assigned Tickets</a></li>
				<li><a class="slide-item" href="ticket_search.html">Search</a></li>
			</ul>
		</li>
								
	</ul>
</aside>
