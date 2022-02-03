<aside class="main-sidebar">

	<section class="sidebar">

		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= Yii::$app->user->identity->img ?>" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p><?= Yii::$app->user->identity->username ?></p>
				<!--  <a href="/admin/users/view?id=<?= Yii::$app->user->id ?>"><i class="fa fa-circle text-success"></i></a> -->
			</div>
		</div>

		<!-- search form -->
		<div class="sidebar-form">
			<?php
			Yii::$app->formatter->defaultTimeZone = "Europe/Moscow";
			Yii::$app->formatter->locale = 'ru-RU';
			?>

			<p class="time" id="time"><?= Yii::$app->formatter->asDate('now', 'yyyy-MM-dd HH:mm:ss'); ?></p>
		</div>
		<!-- /.search form -->

		<?= dmstr\widgets\Menu::widget(
			[
				'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
				'items' => [
					['label' => 'Меню', 'options' => ['class' => 'header']],
					['label' => 'Сообщения', 'icon' => 'envelope', 'url' => ['/feedback']],
					['label' => 'Пользователи', 'icon' => 'users', 'url' => ['/users']],
					['label' => 'Посетители сайта', 'icon' => 'eye', 'url' => ['/visitors']],
					['label' => 'Меню разработчика', 'options' => ['class' => 'header']],
					                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
					['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
					['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
					[
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
					],
				],
			]
		) ?>

	</section>

</aside>