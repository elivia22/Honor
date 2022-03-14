<?php
use yii\helpers\Html;
use Yii;

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
			<a class="side-menu__item" href="<?php echo \yii\helpers\Url::to(['/site/index']) ?>"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span></a>
		</li>																		
		<li class="slide">
			<span class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-plus-square-o"></i><span class="side-menu__label">Product</span><i class="angle fa fa-angle-right"></i></span>
			<ul class="slide-menu">
				<li><a class="slide-item" href="<?=\yii\helpers\Url::to(['/product/index'])?>">Add Product</a></li>
				<li><a class="slide-item" href="<?=\yii\helpers\Url::to(['/product-category/index'])?>">Product Category</a></li>
			</ul>
		</li>

		<li class="slide">
			<a class="side-menu__item" href="<?php echo \yii\helpers\Url::to(['/payment/index']) ?>"><i class="side-menu__icon fa fa-cc-mastercard"></i><span class="side-menu__label">Payment</span></a>
		</li>

		<li class="slide">
			<a class="side-menu__item" href="<?php echo \yii\helpers\Url::to(['/supplier/index']) ?>"><i class="side-menu__icon fa fa-wpforms"></i><span class="side-menu__label">Supplier</span></a>
		</li>

		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-wpforms"></i><span class="side-menu__label">User</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="<?php echo \yii\helpers\Url::to(['/manager/index']) ?>">Manager</a></li>
				<li><a class="slide-item" href="<?php echo \yii\helpers\Url::to(['/employee/index']) ?>">Staff</a></li>
			</ul>
		</li>
								
		<li>
			<a class="side-menu__item" href="<?php echo \yii\helpers\Url::to(['quotation/index']) ?>"><i class="side-menu__icon fa fa-cc-mastercard"></i><span class="side-menu__label">Quotations</span></a>
		</li>

		<li class="slide">
			<a class="side-menu__item" href="<?php echo \yii\helpers\Url::to(['quotation/index'])?>"><i class="side-menu__icon fa fa-commenting-o"></i><span class="side-menu__label">Receipts</span></a>
		</li>

		<li class="slide">
			<a class="side-menu__item" href="<?php echo \yii\helpers\Url::to(['/location/index']) ?>"><i class="side-menu__icon fa fa-wpforms"></i><span class="side-menu__label">Location</span></i></a>
		</li>
				
		<li class="slide">
			<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-wpforms"></i><span class="side-menu__label">REPORTS</span><i class="angle fa fa-angle-right"></i></a>
			<ul class="slide-menu">
				<li><a class="slide-item" href="<?php echo \yii\helpers\Url::to(['/report/index']) ?>">Products</a></li>
				<li><a class="slide-item" href="<?php echo \yii\helpers\Url::to(['/report/index']) ?>">Staff</a></li>
			</ul>
		</li>
	</ul>
</aside>
