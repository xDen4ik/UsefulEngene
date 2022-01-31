<?php

/* @var $this yii\web\View */
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<input id="users_count" value=<?=$users_count?> hidden></input>
<input id="users_visit" value=<?=$users_visit?> hidden></input>

<div class="site-index">
	<canvas id="myChart" width="95%" height="30px"></canvas>
</div>
