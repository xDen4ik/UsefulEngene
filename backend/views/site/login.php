<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->registerCss('@import url(https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
body,
html {
    height: 100%;
}

body {
    font-family: "Open Sans";
    font-weight: 100;
    display: flex;
    overflow: hidden;
}

input ::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.7);
}

input ::-moz-placeholder {
    color: rgba(255, 255, 255, 0.7);
}

input :-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.7);
}

input:focus {
    outline: 0 transparent solid;
}

input:focus ::-webkit-input-placeholder {
    color: rgba(0, 0, 0, 0.7);
}

input:focus ::-moz-placeholder {
    color: rgba(0, 0, 0, 0.7);
}

input:focus :-ms-input-placeholder {
    color: rgba(0, 0, 0, 0.7);
}

.login-form {
    min-height: 10rem;
    margin: auto;
    max-width: 50%;
    padding: 0.5rem;
}

.login-text {
    color: white;
    font-size: 1.5rem;
    margin: 0 auto;
    max-width: 50%;
    padding: 0.5rem;
    text-align: center;
}

.login-text .fa-stack-1x {
    color: black;
}

.remember {
	color: white !important;
	margin: 0px;
}

.login-username,
.login-password {
    background: white;
    border: 0 solid;
    border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    color: white;
    display: block;
    margin: 1rem;
    padding: 0.5rem;
    transition: 250ms background ease-in;
    width: calc(100% - 3rem);
}

.login-username:focus,
.login-password:focus {
    background: white;
    color: black;
    transition: 250ms background ease-in;
}

.login-forgot-pass {
    bottom: 0;
    color: white;
    cursor: pointer;
    display: block;
    font-size: 75%;
    left: 0;
    opacity: 0.6;
    padding: 0.5rem;
    position: absolute;
    text-align: center;
    width: 100%;
}

.login-forgot-pass:hover {
    opacity: 1;
}

.login-submit {
    border: 1px solid white;
    background: transparent;
    color: white;
    display: block;
    margin: 1rem auto;
    min-width: 1px;
    padding: 0.25rem;
    transition: 250ms background ease-in;
}

.login-submit:hover,
.login-submit:focus {
    background: white;
    color: black;
    transition: 250ms background ease-in;
}

[class*=underlay] {
    left: 0;
    min-height: 100%;
    min-width: 100%;
    position: fixed;
    top: 0;
}

.underlay-photo {
    -webkit-animation: hue-rotate 6s infinite;
    animation: hue-rotate 6s infinite;
    background: url("/backend/web/img/login_background.jpg");
    background-size: cover;
    -webkit-filter: grayscale(30%);
    z-index: -1;
}

.underlay-black {
    background: rgb(0 0 0 / 90%);
    z-index: -1;
}

@-webkit-keyframes hue-rotate {
    from {
        -webkit-filter: grayscale(30%) hue-rotate(0deg);
    }
    to {
        -webkit-filter: grayscale(30%) hue-rotate(360deg);
    }
}

@keyframes hue-rotate {
    from {
        -webkit-filter: grayscale(30%) hue-rotate(0deg);
    }
    to {
        -webkit-filter: grayscale(30%) hue-rotate(360deg);
    }
}');

$this->title = 'Вход в админ панель';
?>
<div class="login-box">
	<!-- /.login-logo -->
	<div class="login-box-body">

		<?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'login-form', 'enableClientValidation' => false]); ?>

		<p class="login-text">
			<span class="fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-2x"></i>
				<i class="fa fa-lock fa-stack-1x"></i>
			</span>
		</p>

		<?= $form->field($model, 'username')->textInput(
			[
				'maxlength' => 255,
				'class' => 'login-username',
				'autofocus' => "true",
				'placeholder' => "Логин",
				'autocomplete' => "on"
			]
		)->label(false); ?>

		<?= $form->field($model, 'password')->textInput(
			[
				'maxlength' => 255,
				'class' => 'login-username',
				'autofocus' => "true",
				'placeholder' => "Пароль",
				'type' => 'password',
				'autocomplete' => "on"
			]
		)->label(false); ?>

		<div class="row remember">
			<div class="col-xs-8">
				<?= $form->field($model, 'rememberMe')->checkbox() ?>
			</div>
			<!-- /.col -->
			<div class="col-xs-4">
				<?= Html::submitButton('Вход', ['class' => 'login-submit', 'name' => 'login-button']) ?>
			</div>
			<!-- /.col -->
		</div>

		<?php ActiveForm::end(); ?>
		<div class="underlay-photo"></div>
		<div class="underlay-black"></div>
		<!-- /.social-auth-links -->

	</div>
	<!-- /.login-box-body -->
</div><!-- /.login-box -->