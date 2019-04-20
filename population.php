<?php
include_once("./header.php");

?>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

	<link rel="stylesheet" type="text/css" href="https://api.atlantia.sca.org/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://api.atlantia.sca.org/responsive.dataTables.min.css">

	<script type="text/javascript" language="javascript" src="https://api.atlantia.sca.org/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://api.atlantia.sca.org/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://api.atlantia.sca.org/dataTables.responsive.min.js"></script>

	<script type="text/javascript" class="init">
		$(document).ready(function() {
		//https://api.atlantia.sca.org/population.json
			$('#example').DataTable( {
				"ajax": "https://api.atlantia.sca.org/populationReport/active",
				"pageLength": 50,
				"columns": [
					{ "data": "group" },
					{ "data": "active" }
				]
			} );
		} );
	</script>
</head>
<center>
<div  style="width:600px;">
Kingdom of Atlantia: Population Data<br/>
<b>IMPORTANT REMINDER: These numbers only reflect paid, active, membership and values are assigned to groups by zip codes and not the groups that they may actually play with.</b>
				<table id="example" class="display nowrap" style="width:400px;">
					<thead>
						<tr>
							<th>Group</th>
							<th>Count</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Group</th>
							<th>Count</th>
						</tr>
					</tfoot>
				</table>
</div>
</center>

<?php
include("./footer.php");
?>
