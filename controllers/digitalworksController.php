<?php

class DigitalworksController
{   
   function getTitle()
   {
       echo "digital works";
   }
   
   function getContent()
   {
	   $config = include('config/config.php');
	   echo $config['views']."/digitalWorksView.php";
   }
}
?>