<?php

/* @var $this yii\web\View */
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<input id="users_count" value=<?=$users_count?> hidden></input>
<input id="users_visit" value=<?=$users_visit?> hidden></input>


<div class="site-index">
    <canvas id="myChart" width="100%" height="30px"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Статистика'],
                datasets: [{
                    label: 'Количество пользователей',
                    data: [$("#users_count").val()],
                    backgroundColor: [
                        'rgb(237, 14, 14)',
                    ],
                    borderColor: [
                        'rgb(237, 14, 14)',
                    ],
                    borderWidth: 1
                },
                {
                    label: 'Посещения сегодня',
                    data: [$("#users_visit").val()],
                    backgroundColor: [
                        'rgb(125, 232, 19)',
                    ],
                    borderColor: [
                        'rgb(125, 232, 19)',
                    ],
                    borderWidth: 2
                }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                legend: {
                    position: 'top',
                },
                responsive: true,
            }
        });
    </script>
</div>
