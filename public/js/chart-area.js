( function ( $ ) {

	var charts = {
		init: function () {
			// -- Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#292b2c';

			this.ajaxGetSalesMonthlyData();

		},

		ajaxGetSalesMonthlyData: function () {
			var urlPath =  'http://' + window.location.hostname + ':8000/get-sales-chart-data';
			var request = $.ajax( {
				method: 'GET',
				url: urlPath
		} );

			request.done( function ( response ) {
				console.log( response );
				charts.createCompletedJobsChart( response );
			});
		},

		/**
		 * Created the Completed Jobs Chart
		 */
		createCompletedJobsChart: function ( response ) {

			var ctx = document.getElementById("myAreaChart");
			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: response.months, // The response got from the ajax request containing all month names in the database
					datasets: [
            {
              label: "Vendas",
              lineTension: 0.3,
              backgroundColor: "rgba(2,117,216,0.2)",
              borderColor: "rgba(2,117,216,1)",
              pointRadius: 6,
              pointBackgroundColor: "rgba(2,117,216,1)",
              pointBorderColor: "rgba(255,255,255,0.8)",
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(2,117,216,1)",
              pointHitRadius: 50,
              pointBorderWidth: 2,
              data: response.sales_count_data,
			},
			{
				label: "Delivery",
				lineTension: 0.3,
				backgroundColor: "rgba(50,205,50,0.2)",
				borderColor: "rgba(50,205,50,1)",
				pointRadius: 6,
				pointBackgroundColor: "rgba(50,205,50,1)",
				pointBorderColor: "rgba(255,255,255,0.8)",
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(50,205,50,1)",
				pointHitRadius: 50,
				pointBorderWidth: 2,
				data: response.sales_delivery_data,
			  },
			  /*
				{
					label: "Delivery",
					lineTension: 0.3,
					backgroundColor: "rgba(255,0,0,0.2)",
					borderColor: "rgba(255,0,0,1)",
					pointRadius: 6,
					pointBackgroundColor: "rgba(255,0,0,1)",
					pointBorderColor: "rgba(255,255,255,0.8)",
					pointHoverRadius: 5,
					pointHoverBackgroundColor: "rgba(255,0,0,1)",
					pointHitRadius: 50,
					pointBorderWidth: 2,
					data: [15, 30, 22, 0, 0, 0, 0],
				} 
			  */
						
        ],
				},
				options: {
					scales: {
						xAxes: [{
							time: {
								unit: 'date'
							},
							gridLines: {
								display: false
							},
							ticks: {
								maxTicksLimit: 7
							}
						}],
						yAxes: [{
							ticks: {
								min: 0,
								max: response.max, // The response got from the ajax request containing max limit for y axis
								maxTicksLimit: 5
							},
							gridLines: {
								color: "rgba(0, 0, 0, .125)",
							}
						}],
					},
					legend: {
						display: true
					}
				}
			});
		}
	};

	charts.init();

} )( jQuery );