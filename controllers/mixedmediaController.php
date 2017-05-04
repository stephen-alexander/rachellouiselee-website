<?php

class MixedmediaController
{   
   function getTitle()
   {
       echo "mixed media";
   }
   
   function getContent()
   {
	   $config = include('config/config.php');
	   echo $config['views']."/mixedMediaView.php";
   }
}
?>