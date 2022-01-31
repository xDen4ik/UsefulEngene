var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: ['Статистика'],
		datasets: [{
			label: 'Количество пользователей',
			data: document.getElementById('users_count').value,
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
			data: document.getElementById('users_visit').value,
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