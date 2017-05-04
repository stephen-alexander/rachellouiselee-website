<?php

class ContactController
{   
   function getTitle()
   {
       echo "contact";
   }
   
   function getContent()
   {
	   $config = include('config/config.php');
	   echo $config['views']."/contactView.php";
   }
}
?>