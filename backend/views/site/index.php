<?php

/* @var $this yii\web\View */
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<input id="users_count" value=<?= $users_count ?> hidden></input>
<input id="users_visit" value=<?= $users_visit ?> hidden></input>

<div class="site-index">
	<canvas id="myChart" width="95%" height="30px"></canvas>
</div>