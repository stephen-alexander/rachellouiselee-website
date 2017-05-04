<?php

class NotFoundController
{  	
   function getTitle()
   {
       echo "404";
   }
   
   function getContent()
   {
	   $config = include('config/config.php');
	   echo $config['views']."/notFoundView.php";
   }
}
?>