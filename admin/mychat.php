<style>
	.but{
		background-color:#9933ff !important;
	}
	.b1{
		background-color:#bb33ff !important;
		border: 1px solid #bb33ff;
		transition-duration:0.4s;
	}
	.b1:hover{
		background-color:#cc66ff !important;
		border: 1px solid #bb33ff ;
	}
	.b2{
		background-color:#cc66ff !important;
		border: 1px solid #cc66ff;
		transition-duration:0.4s;
	}
	.b2:hover{
		background-color:#dd99ff !important;
		border: 1px solid #cc66ff ;
	}
	.b3{
		background-color:#dd99ff !important;
		border: 1px solid #dd99ff;
		transition-duration:0.4s;

	}
	.b3:hover{
		background-color: #eeccff!important;
		border: 1px solid #dd99ff;
	}
</style>

<div class="col-lg-4">
	<div class="panel panel-default">
	<?php
		$me=mysqli_query($conn,"select * from chat_member left join chatroom on chatroom.chatroomid=chat_member.chatroomid where chat_member.userid='".$_SESSION['id']."' order by chatroom.date_created desc");
		$numme=mysqli_num_rows($me);
	?>
		<div class="panel-heading"><center><strong>Admin Chatrooms <span class="badge"><?php echo $numme; ?></span></strong></center></div>
		<div class="panel-body">
		<table width="100%" class="table table-striped table-bordered table-hover" id="myChatRoom">
			<thead>
			<th>Chat Room Name</th>
			<th></th>
			</thead>
			<tbody>
			<?php
				$my=mysqli_query($conn,"select * from chat_member left join chatroom on chatroom.chatroomid=chat_member.chatroomid where chat_member.userid='".$_SESSION['id']."' order by chatroom.date_created desc");
					while($myrow=mysqli_fetch_array($my)){
						$nq=mysqli_query($conn,"select * from chat_member where chatroomid='".$myrow['chatroomid']."'");
						?>
						<tr>
							<td><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($nq); ?></span> <a href="chatroom.php?id=<?php echo $myrow['chatroomid']; ?>"><?php echo $myrow['chat_name']; ?></a></td>
							<td>
								<?php
									$memb=mysqli_query($conn,"select * from chatroom where userid='".$_SESSION['id']."' and chatroomid='".$myrow['chatroomid']."'");
									if (mysqli_num_rows($memb)>0){
										?>
										<button type="button" class="btn btn-danger btn-sm delete2 b2" value="<?php echo $myrow['chatroomid']; ?>">Delete</button>
										<?php
									}
									else{
										?>
										<button type="button" class="btn btn-warning btn-sm leave2 b1" value="<?php echo $myrow['chatroomid']; ?>">Leave</button>
										<?php
									}
								?>
							</td>
						</tr>
						<?php
					}
			?>
			</tbody>
		</table>
		</div>
	</div>
</div>