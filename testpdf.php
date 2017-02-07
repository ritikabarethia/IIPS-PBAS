<?php
	include('db_connect.php');
	require 'dompdf/dompdf_config.inc.php';
$dompdf= new DOMPDF();
$html .="<html>
	<head>
	<style>
body {
	font-family: arial;
	font-size: 13px;
}
table {
	width: 100%;
	border-collapse: collapse;
}
th {
	font-weight: bold;
	font-size: 14px;
	border: 1px solid #333333;
}
tr {
	width: 100%;
}
td {
	border: 1px solid #333333;
	text-align: center;
	padding: 10px;
	font-weight: normal!important;
}
</style>
</head><body>";
$html .="
<table>
<thead>
	<tr>
	<th class=''>Sr.</th>
	<th class=''>Particulars</th>
	<th class=''>Size</th>
	</tr>
</thead>
</table>
</body>
</html>";

$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");

//$dompdf->stream("sample.pdf", array("Attachment" => false));

exit(0);
?>