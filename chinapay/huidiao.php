<?php

 define('IN_ECS', true);
 
 
 require('../includes/init.php');

require(ROOT_PATH . 'includes/lib_payment.php');
require(ROOT_PATH . 'includes/lib_order.php');



 include_once(ROOT_PATH ."chinapay/SecssUtil.class.php");
 $securityPropFile=ROOT_PATH."chinapay/security.properties";

$mm=array();

 foreach ($_REQUEST as $k=>$v){


     $mm[$k]=urldecode($v);


 }


$log_id = trim($mm['MerResv']);

        $secssUtil = new SecssUtil();
       
        $secssUtil->init($securityPropFile);
       
        if ($secssUtil->verify($mm)) {
           
         

		   order_paid($log_id,2);
				
		    return true;
        } else {
           return false;
        }

