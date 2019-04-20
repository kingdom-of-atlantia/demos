<?php
include_once("./header.php");

?>

<!-- some common stuff that is special for testing the demos, mostly jQuery stuff -->
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

	<link rel="stylesheet" type="text/css" href="https://api.atlantia.sca.org/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://api.atlantia.sca.org/responsive.dataTables.min.css">

	<script type="text/javascript" language="javascript" src="https://api.atlantia.sca.org/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://api.atlantia.sca.org/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://api.atlantia.sca.org/dataTables.responsive.min.js"></script>

	<script type="text/javascript" class="init">
		$(document).ready(function() {
			$('#example').DataTable( {
				"ajax": "https://api.atlantia.sca.org/allGroups",
				"columns": [
					{ "data": "zip" },
					{ "data": "branch" },
					{ "data": "website" },
					{ "data": "state" }
				]/*, ### TODO : need to work on this when I have time. Should be straight forward.
				responsive: {
					details: {
						display: $.fn.dataTable.Responsive.display.modal( {
							header: function ( row ) {
								var data = row.data();
								return 'Details for '+data[0]+' '+data[1];
							}
						} ),
						renderer: $.fn.dataTable.Responsive.renderer.tableAll()
					}
				}*/
			} );
		} );
	</script>
</head>


<!-- here's where the fun starts -->
				<table id="example" class="display nowrap" style="width:100%">
					<thead>
						<tr>
							<th>Zip</th>
							<th>Branch</th>
							<th>Website</th>
							<th>State</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Zip</th>
							<th>Branch</th>
							<th>Website</th>
							<th>State</th>
						</tr>
					</tfoot>
				</table>




<?php
include("./footer.php");
?>
