<?php

/* @var $this yii\web\View */

$this->title = 'Useful Engene';
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<input id="users_count" value=<?=$users_count?> hidden></input>
<div class="site-index">
    <canvas id="myChart" width="100%" height="45px"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Пользователи'],
                datasets: [{
                    label: 'Количество пользователей',
                    data: [$("#users_count").val()],
                    backgroundColor: [
                        'rgba(255, 255, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 255, 132, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</div>
