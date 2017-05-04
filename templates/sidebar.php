<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=716390788470837";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<?php $config = include('../config/config.php'); ?>
<div>
	<ul style="list-style-type:none">
	    <li class="menu-block-bottom">
            <a href="https://www.curiousegg.com/artist-profile-rachel-lee/" target="_blank" >purchase</a>
        </li>
        <li class="menu-block-item">
            <a href="<?php echo $config['baseURL'].'about'?>"><?php echo ($_SERVER['REQUEST_URI'] == '/about/')?'<b>about</b>':'about';?></a>
        </li>
        <li class="menu-block-item">
            <a href="<?php echo $config['baseURL'].'printmaking'?>" ><?php echo ($_SERVER['REQUEST_URI'] == '/printmaking/')?'<b>print</b>':'print';?></a>
			<?php if($_SERVER['REQUEST_URI'] == 'printmaking/'):?>
			<ul style="list-style-type:none">
			  <li class="menu-block-sub-item">
			  <a HREF="#2015">&nbsp;&nbsp;&nbsp;-&nbsp;2015</a>
			  </li>
			  <li class="menu-block-sub-item">
			  <a HREF="#2014">&nbsp;&nbsp;&nbsp;-&nbsp;2014</a>
			  </li>
			  <li class="menu-block-sub-item">
			  <a HREF="#2013">&nbsp;&nbsp;&nbsp;-&nbsp;2013</a>
			  </li>
			</ul>
			<?php endif;?>
        </li>
        <li class="menu-block-item">
            <a href="<?php echo $config['baseURL'].'digitalworks'?>"><?php echo ($_SERVER['REQUEST_URI'] == '/digitalworks/')?'<b>digital</b>':'digital';?></a>
        </li>
        <li class="menu-block-item">
		<a href="<?php echo $config['baseURL'].'mixedmedia'?>" ><?php echo ($_SERVER['REQUEST_URI'] == 'mixedmedia/')?'<b>mixed media / paintings</b>':'mixed media / paintings';?></a>
		<?php if($_SERVER['REQUEST_URI'] == 'mixedmedia/'):?>
		<ul>
			  <li class="menu-block-sub-item">
			  <a HREF="#2015">&nbsp;&nbsp;&nbsp;-&nbsp;2015</a>
			  </li>
			  <li class="menu-block-sub-item">
			  <a HREF="#2014">&nbsp;&nbsp;&nbsp;-&nbsp;2014</a>
			  </li>
			</ul>
						<?php endif;?>
        </li>					
        <li class="menu-block-bottom">
			<a href="<?php echo $config['baseURL'].'exhibitions'?>"><?php echo ($_SERVER['REQUEST_URI'] == '/exhibitions/')?'<b>exhibitions</b>':'exhibitions';?></a>
			<?php if($_SERVER['REQUEST_URI'] == 'exhibitions/'):?>
			<ul>
			  <li class="menu-block-sub-item">
				<a HREF="#2016">&nbsp;&nbsp;&nbsp;-&nbsp;2016</a>
			  </li>
			  <li class="menu-block-sub-item">
				<a HREF="#2015">&nbsp;&nbsp;&nbsp;-&nbsp;2015</a>
			  </li>
			 </ul>
			 			<?php endif;?>
		</li>
        <li class="menu-block-bottom">
            <a href="<?php echo $config['baseURL'].'contact'?>"><?php echo ($_SERVER['REQUEST_URI'] == '/contact/')?'<b>contact</b>':'contact';?></a>
        </li>
		<li class="menu-block-item">
             <a href="https://www.facebook.com/RachelLouiseLeeArt/" target="_blank" >facebook</a>
             <div class="fb-like" data-href="https://www.facebook.com/RachelLouiseLeeArt/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
        </li>
    </ul>
<br>
</div>