<?php
	include('db_connect.php');
	require 'dompdf/dompdf_config.inc.php';

$sqlinv="SELECT * FROM teach_clmi";
$res_inv = mysql_query($sqlinv) or die(mysql_error());
while ($sql3=mysql_fetch_array($res_inv)) {
			$sr = $sql3['Teach_Clmi_TOA'];
			$part = $sql3['Teach_Clmi_YSR'];
			$size = $sql3['Teach_Clmi_API'];
			//$qty = $sql3['qty'];
			//$rate = $sql3['rate'];
			//$amt = $sql3['amt'];
}

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
<tbody>
<tr>
			<td class=''>" . $sr ."</td>
			<td class=''>" . $part . "</td>
			<td class=''>" . $size . "</td>
			
		</tr>
</tbody>
</table>
</body>
</html>";

$dompdf->load_html($html);
$dompdf->render();
//$dompdf->stream("sample.pdf");

$dompdf->stream("media_inv_".$invno."_".$date.".pdf", array("Attachment" => false));

exit(0);
?>