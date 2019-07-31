<?
include 'curl_tool.php';
$temp = isset($_REQUEST['temp']) ? $_REQUEST['temp'] : '';
$url = 'http://www.ezloanlookup.com/application/contactengine8.php?';
$_REQUEST['cell'] = str_replace('+1', '', $_REQUEST['cell']);


$c = 0;foreach ($_REQUEST as $k => $v){ 
    if($c == 0){		
        $url .= $k.'='.urlencode($v);
        $c++;	
    }else 		
        $url .= '&'.$k.'='.urlencode($v);
    }
    
    $keys=array('REMOTE_ADDR','SERVER_NAME','HTTP_USER_AGENT');
    
    foreach ($keys as $k){	
        if ($c == 0){ $url .= "S_$k=".urlencode($_SERVER[$k]); $c++;
    }else 		
        $url .= '&'."S_$k=".urlencode($_SERVER[$k]);}$outp = CurlTool::fetchContent($url);

    $json = json_decode($outp);


    $State = "state=".$json->state. "&";
    $customerName = "customerName=".$json->name."&";
    $cash = "amount=".$json->amount."&";
    $loanAppId = "loanappid=".$json->loanappid;
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

    header("Location: ".$actual_link."/installment-loan-thank-you.php/?" .$State .$customerName. $cash. $loanAppId);
 
?>