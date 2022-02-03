<!-- notification for small viewports and landscape oriented smartphones -->
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use  yii\helpers\Url;
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="device-notification">
	<a class="device-notification--logo" href="/">
		<!-- <img src="/frontend/web/img/frontend/logo.png" alt="Denis Pacha"> -->
		<p>Global</p>
	</a>
	<p class="device-notification--message">Хммм. Так не очень удобно смотреть, попробуйте сделать разрешение больше!</p>
</div>
<div class="perspective effect-rotate-left">
	<div class="container">
		<div class="outer-nav--return"></div>
		<div id="viewport" class="l-viewport">
			<div class="l-wrapper">
				<header class="header">
					<a class="header--logo" href='/<? if (Yii::$app->user->identity && Yii::$app->user->identity->id_user_role == 1) {
															echo ('admin');
														} ?>'>
						<p>Denis Pacha</p>
					</a>

					<div class="header--nav-toggle">
						<span></span>
					</div>
				</header>
				<nav class="l-side-nav">
					<ul class="side-nav">
						<li class="is-active"><span>Главная</span></li>
						<li><span>Проекты</span></li>
						<li><span>Опыт</span></li>
						<li><span>Контакты</span></li>
						<li><span>Напиши мне</span></li>
					</ul>
				</nav>
				<ul class="l-main-content main-content">
					<li class="l-section section section--is-active">
						<div class="intro">
							<div class="intro--banner">
								<h1>Привет</h1>
								<p>Меня зовут Денис.<br></p>
								<p>Мне <?php echo (date("Y") - 1997) ?>.<br></p>
								<p>Я PHP Developer.</p>
								<button class="cta">
									Напиши мне
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
										<g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
											<path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
										</g>
									</svg>
									<span class="btn-background"></span>
								</button>
								<img src="/frontend/web/img/frontend/introduction-visual.png" alt="Welcome">
							</div>
							<div class="intro--options">
								<ul class="list6a">
									<li>HTML</li>
									<li>CSS</li>
									<li>PHP</li>
									<li>MySQL</li>
									<li>JSON</li>
									<li>AJAX</li>
									<li>Composer</li>
									<li>GIT</li>
									<li>Slimphp 3</li>
									<li>Bootstrap</li>
									<li>Javascript</li>
									<li>Jquery</li>
									<li>Osclass</li>
									<li>Joomla 3</li>
									<li>YII2</li>
								</ul>

							</div>
							<!-- <div class="intro--options">
								<a href="/">
									<h3>Проекты работы с API</h3>
									<p>
										Yandex maps, 2gis, sms.ru, Sendpulse, Redsms, Google api (maps), Facebook api, Vk api, Smartomato, Remonline. Robokassa, Unitpay, Bepaid, Jsssmart.
									</p>
								</a>
							</div> -->
						</div>
					</li>
					<li class="l-section section">
						<div class="work">
							<h2>Проекты в которых принимал участие</h2>
							<div class="work--lockup">
								<ul class="slider">
									<li class="slider--item slider--item-left">
										<a href="https://safehouse.moscow/" target="_blank">
											<div class="slider--item-image">
												<img src="/frontend/web/img/frontend/safehouse.jpg" alt="Safehouse">
											</div>
											<p class="slider--item-title">Виодеонаблюдение</p>
										</a>
									</li>
									<li class="slider--item slider--item-center">
										<a href="http://martinkids.mcdir.ru/" target="_blank">
											<div class="slider--item-image">
												<img src="/frontend/web/img/frontend/duplom.jpg" alt="Duplom">
											</div>
											<p class="slider--item-title">Дипломы</p>
											<p class="slider--item-description"></p>
										</a>
									</li>
									<li class="slider--item slider--item-right">
										<a href="http://xn--80aclb1abqfcfh0agd.xn--p1ai/" target="_blank">
											<div class="slider--item-image">
												<img src="/frontend/web/img/frontend/beton.jpg" alt="Beton">
											</div>
											<p class="slider--item-title">Cтройматериалы</p>
										</a>
									</li>
									<li class="slider--item">
										<a href="https://ilab73.ru/" target="_blank">
											<div class="slider--item-image">
												<img src="/frontend/web/img/frontend/remonline.jpg" alt="Remonline">
											</div>
											<p class="slider--item-title">Телефоны</p>
										</a>
									</li>
									<li class="slider--item">
										<a href="https://hlc.com.cy/" target="_blank">
											<div class="slider--item-image">
												<img src="/frontend/web/img/frontend/cosmetics.jpg" alt="Сosmetics">
											</div>
											<p class="slider--item-title">Косметика</p>
										</a>
									</li>
								</ul>
								<h3>И многое другое...</h3>
								<div class="slider--prev">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
										<g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
											<path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
																		c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
																		c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z" />
										</g>
									</svg>
								</div>
								<div class="slider--next">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
										<g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
											<path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
										</g>
									</svg>
								</div>
							</div>
						</div>
					</li>
					<li class="l-section section">
						<div class="about">
							<div class="about--banner">
								<h2>Компании<br>в которых<br>работал<br></h2>
								<a href="/">
									Навыки
									<span>
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
											<g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
												<path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
											</g>
										</svg>
									</span>
								</a>
							</div>
							<div class="about--options">
								<a href="https://wsteam.com.ru/" target="_blank">
									<h3>WebStormTeam</h3>
								</a>
								<a href="https://ua.linkedin.com/company/secure12-inc?trk=public_profile_experience-item_result-card_subtitle-click" target="_blank">
									<h3>Secure12</h3>
								</a>
							</div>
						</div>
					</li>
					<li class="l-section section">
						<div class="contact">
							<div class="contact--lockup">
								<div class="modal">
									<div class="modal--information">
										<a href="mailto:cool.den0@yandex.ru">cool.den0@yandex.ru</a>
										<a href="tel:+380713302521">+38 071 330 25 21</a>
									</div>
									<ul class="modal--options">
										<li><a href="https://github.com/xDen4ik" target="_blank">GitHub</a></li>
										<li><a href="https://vk.com/dennnnnnnnnnn" target="_blank">VK</a></li>
										<li><a href="https://t.me/KekTor" target="_blank"> Telegram</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="l-section section">
						<div class="hire">
							<h2>Если хочешь посотрудничать</h2>
							<!-- checkout formspree.io for easy form setup -->
							<?php $form = ActiveForm::begin([
								'id' => 'contact-form',
								'fieldConfig' =>
								['template' => "{input}", 'options' => ['tag' => false, "class" => "work-request"]]
							]);
							?>
							<div class="work-request--information">
								<div class="information-name">
									<?= $form->field($feedback, 'name')->textInput(['maxlength' => true, 'id' => 'name', 'spellcheck' => "false", "class" => ""]); ?>
									<label for="name">Имя</label>
								</div>
								<div class="information-email">
									<?= $form->field($feedback, 'email')->input('email')->textInput(['id' => 'email', 'spellcheck' => false, "class" => "",])->label(false); ?>
									<label for="email">Email</label>
								</div>
							</div>
							<div class="message">
								<?= $form->field($feedback, 'message')->textarea(["id" => "message", 'spellcheck' => false])->label(false) ?>
							</div>
							<?= Html::button('Отправить', ['class' => 'btn-send', "type" => "button", "id" => "btn-send"]) ?>
							<? ActiveForm::end(); ?>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<ul class="outer-nav">
		<li class="is-active">Главная</li>
		<li>Проекты</li>
		<li>Опыт</li>
		<li>Контакты</li>
		<li>Напиши мне</li>
	</ul>
</div>