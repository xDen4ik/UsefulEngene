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
					<a class="header--logo" href='/
					<? if (Yii::$app->user->identity && Yii::$app->user->identity->id_user_role == 1) {
						echo ('admin');
					} ?>'>
						<p class="header-name" id="header-name">Denis Pacha</p>
					</a>

					<div class=" header--nav-toggle">
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
								<div class="model-display"></div>
								<!-- <img src="/frontend/web/img/frontend/introduction-visual.png" alt="Welcome"> -->
							</div>
							<h1 class="skills-title">С чем работал</h1>
							<div class="intro--options">
								<ul class="list6a">
									<li>HTML</li>
									<li>Ajax</li>
									<li>Javascript</li>
									<li>MySQL</li>
									<li>CSS</li>
									<li>JSON</li>
									<li>Composer</li>
									<li>Git console</li>
									<li>PHP</li>
									<li>Bootstrap</li>
									<li>SMS Aero</li>
									<li>Jquery</li>
									<li>Yii2</li>
									<li>Joomla 3</li>
									<li>Docker</li>
									<li>Osclass</li>
									<li>Slim 3</li>
									<li>Symfony</li>
									<li>Robokassa</li>
									<li>Bepaid</li>
									<li>Bitrix</li>
									<li>Gitlab</li>
									<li>Data parsing</li>
									<li>TimeDoctor</li>
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
									<li class="slider--item">
										<a href="https://ladybug.com/" target="_blank">
											<div class="slider--item-image">
												<img src="/frontend/web/img/frontend/travel.jpg" alt="Travel">
											</div>
											<p class="slider--item-title">Путешествия</p>
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
								<a href="https://ladybugs.com/" target="_blank">
									<h3>Ladybugs</h3>
								</a>
								<a href="http://svetofore.ru/" target="_blank">
									<h3>ООО Витал</h3>
								</a>
								<a href="https://sunadv.agency/" target="_blank">
									<h3>SunAdv</h3>
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
										<a href="tel:+79888922072">+7 (988) 892-20-72 </a>
									</div>
									<ul class="modal--options">
										<li><a href="https://github.com/xDen4ik" target="_blank">GitHub</a></li>
										<li><a href="https://vk.com/dennnnnnnnnnn" target="_blank">VK</a></li>
										<li><a href="https://t.me/onlyglobalelite" target="_blank"> Telegram</a></li>
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


<script type="module">
	import {
		OrbitControls
	} from 'https://cdn.jsdelivr.net/npm/three@0.121.1/examples/jsm/controls/OrbitControls.js';
	import {
		GLTFLoader
	} from 'https://cdn.skypack.dev/three@0.128.0/examples/jsm/loaders/GLTFLoader.js';

	let scene;
	let camera;
	let renderer;

	function init() {
		let container = document.querySelector('.model-display');

		//Scene
		scene = new THREE.Scene()
		scene.background = new THREE.Color(0x0C0C0C);

		//Camera
		camera = new THREE.PerspectiveCamera(5, 430 / 500, 0.1, 500);
		camera.position.z = 500;
		camera.position.y = 0;
		camera.position.x = 100;

		//render
		renderer = new THREE.WebGLRenderer({
			antialias: true
		})
		if (window.innerWidth > 775) {
			renderer.setSize(430, 500);
		} else {
			renderer.setSize(0, 0);
		}

		container.appendChild(renderer.domElement)

		//OrbitControls
		const controls = new OrbitControls(camera, renderer.domElement);
		controls.update();
		controls.enableDamping = true;
		controls.minDistance = 50;
		controls.maxDistance = 55;
		//light
		const ambient = new THREE.AmbientLight(0xffffff, 1);
		scene.add(ambient)

		let light = new THREE.PointLight(0xc4c4c4, 1);
		light.position.set(0, 430, 500);
		scene.add(light)

		let light2 = new THREE.PointLight(0xc4c4c4, 1);
		light2.position.set(500, 300, 500);
		scene.add(light2)

		let light3 = new THREE.PointLight(0xc4c4c4, 1);
		light3.position.set(0, 300, -500);
		scene.add(light3)

		let light4 = new THREE.PointLight(0xc4c4c4, 1);
		light4.position.set(-500, 300, 500);
		scene.add(light4)

		//model
		const loader = new GLTFLoader();
		loader.load('./model/scene.gltf', gltf => {
				scene.add(gltf.scene);
			},
			function(error) {
				console.log('Error: ' + error)
			}
		)

		//Resize
		window.addEventListener('resize', onWindowResize, false)

		function onWindowResize() {
			if (window.innerWidth < 775) {
				renderer.setSize(0, 0)
			} else {
				camera.aspect = 430 / 500;
				camera.updateProjectionMatrix();
				renderer.setSize(430, 500)
			}
		}

		function animate() {
			requestAnimationFrame(animate)
			controls.update();
			renderer.render(scene, camera)
		}
		animate();

		const setBg = () => {
			var colors = [
				'white',
				'#0f33ff'
			];
			var randomNumber = Math.floor(Math.random() * colors.length);
			//const randomColor = Math.floor(Math.random() * 16777215).toString(16);
			$('.header--logo').css("color", colors[randomNumber]);
		}

		function setColor() {
			setBg();
			setTimeout(setColor, 3000);
		}
		setColor();
	}

	init();
</script>