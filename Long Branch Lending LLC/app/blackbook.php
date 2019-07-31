<?
include 'curl_tool.php';
$params=array();
foreach($_REQUEST as $key=>$value) $params[] = urlencode($key).'='.urlencode($value);
$params2 = implode('&',$params);
//echo "<br>PARAM:".$params;
$url = 'http://www.ezloanlookup.com/application/blackbook.php?'.$params2;
$outp = CurlTool::fetchContent($url);
     
echo $outp;

?>