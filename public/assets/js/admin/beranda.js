// config chart
var config = {
  type: 'doughnut',
  data: {
    labels: labels,
    datasets: [{
      data: data,
      backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
    }]
  }
};

// render chart
var ctx = document.getElementById('donutChart').getContext('2d');
new Chart(ctx, config);

$(document).ready( function () {
    $('#dataBeranda').DataTable();
} );