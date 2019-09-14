<?php
//Create Database Connection
	include("../../ginc/config.php");
	include("../../ginc/functions.php");
	
	$pageTitle = "ezDinero | Thank you!";
	$pageDesc = "Thank you for your Application!";
	$pageKeywords = "";
	$pageID = "";
	$altOne = "";
	$altTwo = "";
	
	
	include("ginc/header.php");	

?>
    
<div class="fullpage smallban_din"> <!--Banner-->
	<div class="bodywrap banwrap">
    </div>	          
</div> 

<div class="fullpage conwrap"> <!--Content-->
	<div class="bodywrap">
    	<div class="row group threebox">
        	<div class="contentbox_din clearfix">
            	<div class="grid8">
                    
                  <h1 class="congrats">Thank you and congratulations <? echo $json->fname; ?> <? echo $json->lname; ?>!</h1>
                  
                  <p>Your reference number is: <? echo $json->loanappid; ?></p>
                  
                  <p>Sit back and relax, we'll take it from here. You will be receiving a telephone call shortly to confirm you have been approved for a loan.</p>            
                  
                  <p>We will then guide you step by step until you have your money in hand!</p>
                  
                  <p>In the meantime, if you have any question at all, please contact us.  We are here for you 24/7. 866.854.7485</p>
                  
                  <h2>-ezDinero</h2>
                    
               </div>
               <div class="grid4">
               	<img src="<?php echo $imgPath; ?>callcenter.jpg" />
               </div>
          	</div>
       	</div>
    </div>
</div>

 
    
<?php include("ginc/footer.php"); ?>