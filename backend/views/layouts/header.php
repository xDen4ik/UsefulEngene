<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<header class="main-header">

	<?= Html::a('<span class="logo-mini">UN</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

	<nav class="navbar navbar-static-top" role="navigation">

		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Навигация</span>
		</a>

		<a href="/" class="sidebar-toggle off">
			<span class="sr-only">На сайт</span>
		</a>

		<div class="navbar-custom-menu">

			<ul class="nav navbar-nav">

				<!-- Messages: style can be found in dropdown.less-->
				<li class="dropdown messages-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope-o"></i>
						<span id="message-count" class="label label-success"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">Сообщения</li>
						<li>
							<!-- inner menu: contains the actual data -->
							<ul class="menu">
							</ul>
						</li>
						<li class="footer"><a href="/admin/feedback">Все сообщения</a></li>
					</ul>
				</li>
				<!-- <li class="dropdown notifications-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell-o"></i>
						<span class="label label-warning">10</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">You have 10 notifications</li>
						<li>
							<ul class="menu">
								<li>
									<a href="#">
										<i class="fa fa-users text-aqua"></i> 5 new members joined today
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-warning text-yellow"></i> Very long description here that may
										not fit into the page and may cause design problems
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-users text-red"></i> 5 new members joined
									</a>
								</li>

								<li>
									<a href="#">
										<i class="fa fa-shopping-cart text-green"></i> 25 sales made
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user text-red"></i> You changed your username
									</a>
								</li>
							</ul>
						</li>
						<li class="footer"><a href="#">View all</a></li>
					</ul>
				</li> -->
				<!-- Tasks: style can be found in dropdown.less -->
				<!-- 	<li class="dropdown tasks-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-flag-o"></i>
						<span class="label label-danger">9</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">You have 9 tasks</li>
						<li>
							<ul class="menu">
								<li>
									<a href="#">
										<h3>
											Design some buttons
											<small class="pull-right">20%</small>
										</h3>
										<div class="progress xs">
											<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">20% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<h3>
											Create a nice theme
											<small class="pull-right">40%</small>
										</h3>
										<div class="progress xs">
											<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">40% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<h3>
											Some task I need to do
											<small class="pull-right">60%</small>
										</h3>
										<div class="progress xs">
											<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<h3>
											Make beautiful transitions
											<small class="pull-right">80%</small>
										</h3>
										<div class="progress xs">
											<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">80% Complete</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="footer">
							<a href="#">View all tasks</a>
						</li>
					</ul>
				</li> -->

				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?= Yii::$app->user->identity->img ?>" class="user-image" alt="User Image" />
						<span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="<?= Yii::$app->user->identity->img ?>" class="img-circle" alt="User Image" />

							<p>
								<?= Yii::$app->user->identity->username ?>
								<small>Email: <a href="mailto:<?= Yii::$app->user->identity->email ?>"><?= Yii::$app->user->identity->email ?></a></small>
							</p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="/admin/users/view?id=<?= Yii::$app->user->id ?>" class="btn btn-default btn-flat">Профиль</a>
							</div>
							<div class="pull-right">
								<?= Html::a(
									'Выход',
									['/site/logout'],
									['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
								) ?>
							</div>
						</li>
					</ul>
				</li>
				<!-- User Account: style can be found in dropdown.less -->
				<li>
					<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				</li>
			</ul>
		</div>
	</nav>
</header>