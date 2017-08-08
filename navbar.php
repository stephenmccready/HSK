<nav class="navbar navbar-default navbar-fixed-top">
<div class="navbar-header">
	<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
		<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
	</button>
	<span class="sr-only">Toggle navigation</span>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
	<li><a href="menu.php"><span class="glyphicon glyphicon-home"></span> home 家</a></li>
	<li class="navBtn navBtnPrev"><a href="#" onclick="prev();"> <span class="glyphicon glyphicon-triangle-left"></span> </a></li>
	<li id="leveltitle">Level &nbsp; - &nbsp;</li>
	<li class="navBtn navBtnNext"><a href="#" onclick="next();"> <span class="glyphicon glyphicon-triangle-right"></span> </a></li>
	<?php if (htmlentities($_SESSION['userid']) !== "0" ) { ?>
	<li id="profile" class="dropdown"><a class="dropdown-toggle profile" data-toggle="dropdown" href="#">
		<?php echo htmlentities($_SESSION['username']); ?> <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> my profile 个人资料</a></li>
			<li><a href="includes/logout.php" class="logout"><span class="glyphicon glyphicon-log-out"></span> log out 退出登录</a></li>
		</ul>
	</li>
	<?php }; ?>
</ul>
</div>
</nav>
