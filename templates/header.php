<?php
$config = include('../config/config.php');
?>
<div class="banner">
	<div class="logo">
      <a href="<?php echo $config['baseURL']; ?>">
        <img src="<?php echo $config['images'].'/title_banner.png'; ?>" />
      </a>
	</div>
	<hr />
	<div class="nav-menu">
		<div class="nav-container">
			<h1 class="nav-title" id="nav-title"></h1>
			<span class="nav-trigger" onclick="toggleNav()">&#9776;</span>
		</div>
		<div>
			<hr />
		</div>
	</div>
</div>

<script>
function toggleNav() {
    var sidebar = document.getElementById("sidebar");
	var width = sidebar.style.width;
	
	if (width == "100%")
	{
		sidebar.style.width = "0px";
	}
	else
	{
		sidebar.style.width = "100%";
	}
}
</script>