<?php
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
	{
		 if ($_SESSION['level'] == "admin")
		   {

		   }
		   else if ($_SESSION['level'] == "user")
		   {
		       header('location:../user/');
		   }
	}
else if (!isset($_SESSION['level']))
{
	header('location:../index.php');
}

  	include("../koneksi.php");
?>
<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/plugins/steps/jquery.steps.css" rel="stylesheet">
      <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
      <link href="../css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
      <link href="../css/plugins/dropzone/basic.css" rel="stylesheet">
      <link href="../css/plugins/dropzone/dropzone.css" rel="stylesheet">
      <!-- Data Tables -->
      <link href="../css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
      <link href="../css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
      <link href="../css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
      <link href="../css/plugins/datapicker/datepicker3.css" rel="stylesheet">
      <link href="../css/animate.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
      <link href="../css/plugins/iCheck/custom.css" rel="stylesheet">

			<script src="../js/jquery-2.1.1.js"></script>
</head>

	    <title>Loundry</title>
<body>
    <div id="wrapper">
			<nav class="navbar-default navbar-static-side" role="navigation">
			    <div class="sidebar-collapse">
			        <ul class="nav" id="side-menu">
			            <li class="nav-header">
			                <div class="dropdown profile-element"> <span>
			                        <img alt="image" class="img-circle" src="../img/tasya.jpg" />
			                         </span>
			                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
			                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Administrator</strong>
			                        </span> <span class="text-muted text-xs block">Manager<b class="caret"></b></span> </span> </a>
			                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
			                        <li><a href="logout.php">Logout</a></li>
			                    </ul>
			                </div>
			                <div class="logo-element">
			                    IN+
			                </div>
			            </li>
                  <li>
			                <a href="index?page=home"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
			            </li>
                  <li>
			                <a href="index?page=masuk"><i class="fa fa-desktop"></i> <span class="nav-label">Cucian Masuk</span></a>
			            </li>
									<li>
			                <a href="index?page=proses"><i class="fa fa-exchange"></i> <span class="nav-label">Cucian diproses</span></a>
			            </li>
									<li>
			                <a href="index?page=finish"><i class="fa fa-check-square-o"></i> <span class="nav-label">Cucian Selesai</span></a>
			            </li>
									<li>
			                <a href="index?page=diskonku"><i class="fa fa-cogs"></i> <span class="nav-label">Settings</span></a>
			            </li>
									<li>
			                <a href="#"><i class="fa fa-folder-o"></i> <span class="nav-label">Master Barang</span><span class="fa arrow"></span></a>
			                <ul class="nav nav-second-level">
			                    <li><a href="index?page=barang">Data Barang</a></li>
			                    <li><a href="index?page=stok_bahan">Stok Bahan</a></li>
			                    <li><a href="index?page=jasa">Pemakaian Bahan</a></li>
			                </ul>
			            </li>
										<li>
				                <a href="#"><i class="fa fa-stack-overflow"></i> <span class="nav-label">Data </span><span class="fa arrow"></span></a>
												<ul class="nav nav-second-level">
				                    <li><a href="index?page=investor">Investor</a></li>
				                    <li><a href="index?page=karyawan">Karyawan</a></li>
				                    <li><a href="index?page=member">Member</a></li>
				                    <li><a href="index?page=supplier">Supplier</a></li>
				                </ul>
				            </li>
				            <li>
			                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Laporan Pendapatan</span><span class="fa arrow"></span></a>
			                <ul class="nav nav-second-level">
			                    <li><a href="index?page=lap">Pendapatan Masuk</a></li>
			                    <li><a href="index?page=lap_ditahan">Pendapatan Ditahan</a></li>
			                    <li><a href="index?page=graph">Statistik Pendapatan</a></li>
											</ul>
			            </li>
									<li>
										<a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Laporan Pengeluaran</span><span class="fa arrow"></span></a>

										<ul class="nav nav-second-level">
												<li><a href="index?page=pembelian">Pembelian Barang</a></li>
												<li><a href="index?page=pengeluaran_gaji">Gaji Karyawan</a></li>
												<li><a href="index?page=graphout">Statistik Pengeluaran</a></li>
										</ul>
								</li>

								<li>
										<a href="index?page=pembukuan"><i class="fa fa-clipboard"></i> <span class="nav-label">Pembukuan</span></a>
								</li>
			    </div>
			</nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to Administrator</span>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
				<div class="row wrapper border-bottom white-bg page-heading">
				    <div class="col-lg-10">
				        <h2>Administrator</h2>
				    </div>
				    <div class="col-lg-2">

				    </div>
				</div>
            <?php
              if (@$_GET['page'] != "")
              {
                include(@$_GET['page'].".php");
              }
              else
              {
                include("home.php");
              }
            ?>
        <div class="wrapper wrapper-content animated fadeInRight">

        </div>
        <div class="footer">
            <div class="pull-right">
							  <strong>Copyright</strong> LOUNDRY KU &copy; 2016
            </div>
            <div>

            </div>
        </div>

        </div>
        </div>

				<script src="../js/jquery-2.1.1.js"></script>
				<script src="../js/bootstrap.min.js"></script>
				<script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
				<script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
				<script src="../js/plugins/jeditable/jquery.jeditable.js"></script>

				<!-- Data Tables -->
				<script src="../js/plugins/dataTables/jquery.dataTables.js"></script>
				<script src="../js/plugins/dataTables/dataTables.bootstrap.js"></script>
				<script src="../js/plugins/dataTables/dataTables.responsive.js"></script>
				<script src="../js/plugins/dataTables/dataTables.tableTools.min.js"></script>

				<script src="../js/plugins/dropzone/dropzone.js"></script>

				<!-- iCheck -->
				<script src="../js/plugins/iCheck/icheck.min.js"></script>

				<!-- Custom and plugin javascript -->
				<script src="../js/inspinia.js"></script>
				<script src="../js/plugins/pace/pace.min.js"></script>

				<!-- Steps -->
				<script src="../js/plugins/staps/jquery.steps.min.js"></script>

				<!-- Jquery Validate -->
				<script src="../js/plugins/validate/jquery.validate.min.js"></script>
				<!-- Page-Level Scripts -->

				<!-- blueimp gallery -->
				<script src="../js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

				<script>
				    $(document).ready(function() {
				        $('.dataTables-example').dataTable({
				            responsive: true,
				            "dom": 'T<"clear">lfrtip',
				            "tableTools": {
				                "sSwfPath": "../js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
				            }
				        });

				        /* Init DataTables */
				        var oTable = $('#editable').dataTable();

				        /* Apply the jEditable handlers to the table */
				        oTable.$('td').editable( '../example_ajax.php', {
				            "callback": function( sValue, y ) {
				                var aPos = oTable.fnGetPosition( this );
				                oTable.fnUpdate( sValue, aPos[0], aPos[1] );
				            },
				            "submitdata": function ( value, settings ) {
				                return {
				                    "row_id": this.parentNode.getAttribute('id'),
				                    "column": oTable.fnGetPosition( this )[2]
				                };
				            },

				            "width": "90%",
				            "height": "100%"
				        } );


				    });

				    function fnClickAddRow() {
				        $('#editable').dataTable().fnAddData( [
				            "Custom row",
				            "New row",
				            "New row",
				            "New row",
				            "New row" ] );

				    }
				</script>

				<script>
				    $(document).ready(function(){
				        $('.i-checks').iCheck({
				            checkboxClass: 'icheckbox_square-green',
				            radioClass: 'iradio_square-green',
				        });
				    });

				    $(document).ready(function(){
				        $("#wizard").steps();
				        $("#form").steps({
				            bodyTag: "fieldset",
				            onStepChanging: function (event, currentIndex, newIndex)
				            {
				                // Always allow going backward even if the current step contains invalid fields!
				                if (currentIndex > newIndex)
				                {
				                    return true;
				                }

				                // Forbid suppressing "Warning" step if the user is to young
				                if (newIndex === 3 && Number($("#age").val()) < 18)
				                {
				                    return false;
				                }

				                var form = $(this);

				                // Clean up if user went backward before
				                if (currentIndex < newIndex)
				                {
				                    // To remove error styles
				                    $(".body:eq(" + newIndex + ") label.error", form).remove();
				                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
				                }

				                // Disable validation on fields that are disabled or hidden.
				                form.validate().settings.ignore = ":disabled,:hidden";

				                // Start validation; Prevent going forward if false
				                return form.valid();
				            },
				            onStepChanged: function (event, currentIndex, priorIndex)
				            {
				                // Suppress (skip) "Warning" step if the user is old enough.
				                if (currentIndex === 2 && Number($("#age").val()) >= 18)
				                {
				                    $(this).steps("next");
				                }

				                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
				                if (currentIndex === 2 && priorIndex === 3)
				                {
				                    $(this).steps("previous");
				                }
				            },
				            onFinishing: function (event, currentIndex)
				            {
				                var form = $(this);

				                // Disable validation on fields that are disabled.
				                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
				                form.validate().settings.ignore = ":disabled";

				                // Start validation; Prevent form submission if false
				                return form.valid();
				            },
				            onFinished: function (event, currentIndex)
				            {
				                var form = $(this);

				                // Submit form input
				                form.submit();
				            }
				        }).validate({
				                    errorPlacement: function (error, element)
				                    {
				                        element.before(error);
				                    },
				                    rules: {
				                        confirm: {
				                            equalTo: "#password"
				                        }
				                    }
				                });
				   });
				</script>

				<script>
				    $(document).ready(function(){

				        Dropzone.options.myAwesomeDropzone = {

				            autoProcessQueue: false,
				            uploadMultiple: true,
				            parallelUploads: 100,
				            maxFiles: 100,

				            // Dropzone settings
				            init: function() {
				                var myDropzone = this;

				                this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
				                    e.preventDefault();
				                    e.stopPropagation();
				                    myDropzone.processQueue();
				                });
				                this.on("sendingmultiple", function() {
				                });
				                this.on("successmultiple", function(files, response) {
				                });
				                this.on("errormultiple", function(files, response) {
				                });
				            }

				        }

				   });
				</script>

 <style>
     body.DTTT_Print {
         background: #fff;

     }
     .DTTT_Print #page-wrapper {
         margin: 0;
         background:#fff;
     }

     button.DTTT_button, div.DTTT_button, a.DTTT_button {
         border: 1px solid #e7eaec;
         background: #fff;
         color: #676a6c;
         box-shadow: none;
         padding: 6px 8px;
     }
     button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
         border: 1px solid #d2d2d2;
         background: #fff;
         color: #676a6c;
         box-shadow: none;
         padding: 6px 8px;
     }

     .dataTables_filter label {
         margin-right: 5px;

     }
 </style>
</body>

</html>
