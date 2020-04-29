<?php
$user_name=$_SESSION['user_name'];
?>
<div class="menu-right order-lg-2 order-sm-2">
	<div class="author-area">
		<div class="author__access_area">
			<ul class="d-flex list-unstyled align-items-center">
				<li>
					<a href="#" class="dropdown-toggle" id="drop3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="img/user.png" alt="" class="rounded-circle" height="30px" width="30px">
					</a>
					<ul class="dropdown-menu" style="margin-top: 10px;";>
						<li  style="width: 150px;"><a href="#" data-toggle="modal" data-target="#changepass_modal"><i class="la la-cog"></i>&nbsp;Change Password</a></li>
						<li><a href="include/logout.php"><i class="la la-sign-out"></i>&nbsp;Logout</a></li>
					</ul>
				</li>
				<li style="color: white;margin-left: -25px;"><?php echo $user_name; ?></li>
			</ul>
		</div>
	</div>
</div>
