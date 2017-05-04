<?php

class IndexController
{   
   function getTitle()
   {
       echo "home";
   }
   
   function getContent()
   {
	   $config = include('config/config.php');
	   echo $config['views']."/indexView.php";
   }
}
?>