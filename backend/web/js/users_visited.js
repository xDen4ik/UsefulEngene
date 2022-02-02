document.addEventListener("DOMContentLoaded", function (event) {
	var ctx = document.getElementById('myChart');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Статистика'],
			datasets: [{
				label: 'Количество пользователей',
				data: document.getElementById('users_count').value,
				backgroundColor: [
					'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgb(255, 159, 64)',
				],
				borderWidth: 1
			},
			{
				label: 'Посещения сегодня',
				data: document.getElementById('users_visit').value,
				backgroundColor: [
					'rgba(153, 102, 255, 0.2)'
				],
				borderColor: [
					'rgb(153, 102, 255)'
				],
				borderWidth: 1
			}
			]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			},
			legend: {
				position: 'top',
			},
			responsive: true,
		}
	});
});
