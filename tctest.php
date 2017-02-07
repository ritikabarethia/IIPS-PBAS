<?php
//require_once('tcpdf/lang/eng.php')
require_once 'tcpdf/tcpdf.php';
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
$pdf->SetFont('helvetica', '', 9);
$pdf->AddPage();

error_reporting(E_ALL) ; ini_set('display_errors', '1');  
$con=mysql_connect("localhost","root","");   
if(!$con)  
{  
 die('Could not connect: ' . mysql_error());  
}   
mysql_select_db("pbas_db");  
$result = mysql_query("SELECT * from gen_info where User_Id='n'");  
if (($result))  
{  

  $html = '';  
 $html .= "<table width='100%'><tr>";  
 if (mysql_num_rows($result)>0)    
{  

       $i = 0;  
      while ($i < mysql_num_fields($result))  
     {  

  $html .="<th>". mysql_field_name($result, $i) . "</th>";  
       $i++;  
    }  
     "</tr>";  
 while ($rows = mysql_fetch_array($result,MYSQL_ASSOC))  
    {  
      $html .= "<tr>";  
      foreach ($rows as $data)  
      {  
         $html .="<td align='center'>". $data . "</td>";  
      }  
    }  
  }else{  
     $html .="<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>";  
  }  
   $html .="</table>";  
}else{  
   "Error in running query :". mysql_error();  
}  
$pdf->writeHTML($html, true, 0);

 $pdf->lastPage();
$pdf->Output('htmlout.pdf', 'I');
?>