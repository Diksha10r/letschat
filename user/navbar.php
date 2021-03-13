<!doctype html>
<html>
	<head>
		<style>
	.navi{
		background:linear-gradient(to bottom, #9933ff 0%, #cc00ff 100%);
	}
	.w{
		color:white !important;
	}
		</style>
	</head>

<nav class="navbar navbar-default navi">
    <div class="container-fluid navi">
		<div class="navbar-header">
			<a class="navbar-brand w" href="">LetsChat</a>
		</div>
		
		<ul class="nav navbar-nav">
			<li><a class="w" href="index.php"><span class="glyphicon glyphicon-home w"></span> Lobby</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a class="w" href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock w"></span> <?php echo $user; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle w" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Update Photo</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
			</li>
		</ul> 
    </div>
</nav>