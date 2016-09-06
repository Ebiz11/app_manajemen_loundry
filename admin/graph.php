<script src="jquery.2.0.js"></script>
<script src="rapa.js"></script>
<script src="morris.js"></script>
<link href="morris.css" rel="stylesheet" type="text/css" />
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Statistik Order </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                          <div class="box-body chart-responsive">
                          <div id="response"></div>
                          <div class="chart" id="contoh-chart" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
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
        			$('#response').html("<center><img src='loading.gif' /></center>");
        		},
            success : function (data) {

        	$("#response").hide();
             var graph = Morris.Line({
               element: 'contoh-chart',
               data: data,
                xkey: 'y',
                ykeys: ['jumlah'],
                labels: ['Pendapatan'],
                lineColors: ['green'],
            });
        	}
        	});
        	}
        $(document).ready(function()
        {
        	realisasi();
        });
        </script>
