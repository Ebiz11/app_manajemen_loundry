
</script>
<script src="jquery.2.0.js"></script>
<script src="rapa.js"></script>
<script src="morris.js"></script>
<link href="morris.css" rel="stylesheet" type="text/css" />
<title>Statistik Pendapatan</title>
<script>
function realisasi(){

	$("#response").hide();

	$.ajax({
    url: "data.php",
    cache: false,
    type: "GET",
    dataType: "json",
    timeout:3000,
    beforeSend: function() {

			$("#response").show();
			$('#response').html("<center><img src='load.gif' /></center>");
		},
    success : function (data) {

	$("#response").hide();
     var graph = Morris.Line({
       element: 'contoh-chart',
       data: data,
        xkey: 'y',
        ykeys: ['jumlah'],
        labels: ['Order (kg)'],
        lineColors: ['red'],
    });
	}
	});
	}
$(document).ready(function()
{
	realisasi();
});
</script>

<div class="row">
<div class="box-header">
<h3 class="box-title"></h3>
</div>
<div class="box-body chart-responsive">
<div id="response"></div>
<div class="chart" id="contoh-chart" style="height: 300px;"></div>
</div>
</div>
