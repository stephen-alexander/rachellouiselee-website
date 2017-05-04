<?php

class AboutController
{   
   function getTitle()
   {
       echo "about";
   }
   
   function getContent()
   {
	   $config = include('config/config.php');
	   echo $config['views']."/aboutView.php";
   }
}
?>