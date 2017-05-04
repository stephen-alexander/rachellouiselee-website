<?php

class PrintmakingController
{   
   function getTitle()
   {
       echo "printmaking";
   }
   
   function getContent()
   {
       	   $config = include('config/config.php');
	   echo $config['views']."/printmakingView.php";
   }
}
?>