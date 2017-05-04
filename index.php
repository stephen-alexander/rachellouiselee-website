<!DOCTYPE html>
<?php
	$config = include('config/config.php');
	$requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	$controllerName = '';
	$req = '';
	
	if ($requestUrl === ($config['baseURL']))
	{
		$controllerName = 'IndexController';
	}
	else
	{
		$requestString = substr($requestUrl, strlen($config['baseURL']));
		$urlParams = explode('/', $requestString);		
		$controllerName = ucfirst(array_shift($urlParams)).'Controller';
	}
	$req = 'controllers/'.lcfirst($controllerName).'.php';

	if (!file_exists($req))
	{
		$req = 'controllers/notFoundController.php';
		$controllerName = 'NotFoundController';
	}
	
	require_once($req);
	$controller = new $controllerName;

	$header = $config['templates'].'/header.php';
	$sidebar = $config['templates'].'/sidebar.php';
	
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo $config['style'];?>"/>
    <link href="<?php echo $config['lightbox'].'/css/lightbox.css';?>" rel="stylesheet" />
    <script src="<?php echo $config['lightbox'].'/js/jquery-1.11.0.min.js';?>"></script>
    <script src="<?php echo $config['lightbox'].'/js/lightbox.min.js';?>"></script>
	<script> 
    $(function(){
		$("#header").load("<?php echo $header; ?>", function(){
			document.getElementById("nav-title").innerHTML = "<?php $controller->getTitle(); ?>";
			}
		);
		
		$("#sidebar").load("<?php echo $sidebar; ?>");
        $("#pageContent").load("<?php echo $controller->getContent(); ?>");
		
    });
    </script> 
    <title><?php $controller->getTitle(); ?></title>
  </head>
  <body>
    <div class="content">
      <div id="header"></div>	  
	  <div class="content-row">
        <div class="content-column-menu">
          <div id="sidebar" class="sidebar"></div>
		</div>
        <div id="pageContent" class="content-column-content" ></div>
      </div>
    </div>
  </body>
</html>