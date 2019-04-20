<?php
include_once("./header.php");
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.css">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css " />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" />

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

<!--
  https://datatables.net/extensions/responsive/examples/display-types/bootstrap-modal.html
  -->
 <style>
.dtr-details tr td {
padding-top: 1em;
vertical-align:top;
}
.dtr-details tr td:first-child {
font-weight:bold;
}
 </style>

	<script type="text/javascript" class="init">
		jQuery(document).ready(function($) {
			$('#example').DataTable( {
				"ajax": "https://api.atlantia.sca.org/calendar",
				"columns": [
					{ "data": "start_date" },
                    { "data": "gmap", "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                                                           if(oData.gmap===''){
                                                               $(nTd).html("");
                                                           } else {
                                                               $(nTd).html("<a href='"+oData.gmap+"' target='_blank'>GMap Link</a>");
                                                           }
                                                       }
                    },
                    { "data": "name" },
					{ "data": "gname" },
					{ "data": "end_date" },
					{ "data": "site_name" },
                                        { "data": "website", "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
                                            if(null != oData.website){
                                                if(oData.website.startsWith('http')){
                                                    $(nTd).html("<a href='"+oData.website+"' target='_blank'>"+oData.website+"</a>");
                                                }else{
                                                    $(nTd).html( oData.website );
                                                }
                                            }
                                            } },
                                        { "data": "address" },
                                        { "data": "city" },
                                        { "data": "state" },
                                        { "data": "restrictions" }
				],
				responsive: {
                                    details: {
                                        renderer: function ( api, rowIdx, columns ) {
                                            var data = $.map( columns, function ( col, i ) {
						                        if(!col.hidden){
						                            return '';
                                                }else if(null == col.data || '' === col.data){
                                                    return '';
                                                }else{
                                                    return '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'" style="word-wrap:break-word;">'+
                                                       '<td><b>'+col.title+': </b></td> '+
                                                       '<td>'+col.data+'</td>'+
                                                       '</tr>';
                                                }
                                            } ).join('');

                                            return data ?
                                                $('<table/>').append( data ) :
                                                false;
                                        }


                                   }
                               }
			} );
		} );
	</script>
</head>
<body class="wide comments example">
    <div style="width:100%;">
				<table id="example" class="display nowrap" style="width:100%">
					<thead>
						<tr>
							<th>Start Date</th>
							<th>Map</th>
							<th>Name</th>
							<th>Group</th>
							<th>End Date</th>
							<th>Site Name</th>
							<th>Website</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>Restrictions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Start Date</th>
							<th>Map</th>
							<th>Name</th>
							<th>Group</th>
							<th>End Date</th>
							<th>Site Name</th>
							<th>Website</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>Restrictions</th>
						</tr>
					</tfoot>
				</table>
    </div>

<?php
include("./footer.php");
?>
