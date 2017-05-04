<?php

class ExhibitionsController
{   
   function getTitle()
   {
       echo "exhibitions";
   }
   
   function getContent()
   {
       	   $config = include('config/config.php');
	   echo $config['views']."/exhibitionsView.php";
   }
}
?>