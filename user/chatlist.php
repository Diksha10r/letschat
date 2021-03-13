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

<div class="col-lg-8">
    <div class="panel panel-default" style="height:50px;">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span class="glyphicon glyphicon-list"></span> List of Chat Rooms</strong></span>
		<div class="pull-right" style="margin-right:10px; margin-top:7px;">
			<a href="#add_chatroom" data-toggle="modal" class="btn btn-primary b1"><span class="glyphicon glyphicon-plus"></span> Add</a>
		</div>
	</div>
	<table width="100%" class="table table-striped table-bordered table-hover" id="chatRoom">
        <thead>
            <tr>
                <th>Chat Room Name</th>
				<th>Date Created</th>
				<th><span class="glyphicon glyphicon-lock"></span> Password || <span class="glyphicon glyphicon-user"></span> Member</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$query=mysqli_query($conn,"select * from chatroom order by date_created desc");
			while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<input type="hidden" value="
				<?php
				$usera=array();
				$m=mysqli_query($conn,"select * from chat_member where chatroomid='".$row['chatroomid']."'");
				while($mrow=mysqli_fetch_array($m)){
					$usera[]=$mrow['userid'];
				}
				//1 member
				if (in_array($_SESSION['id'], $usera)){
					echo "1";
				}	
				else{
					//2 not member w/ pass
					if (!empty($row['chat_password'])){
						echo "2";
					}
					else{
					//3 not member w/o pass
						echo "3";
					}
				}
				?>
				
				"  id="status<?php echo $row['chatroomid']; ?>">
				<td>
					<?php
					$num=mysqli_query($conn,"select * from chat_member where chatroomid='".$row['chatroomid']."'");
					?>
					<span class="badge"><?php echo mysqli_num_rows($num); ?></span> <?php echo $row['chat_name']; ?>
				</td>
				<td><?php echo date('M d, Y - h:i A', strtotime($row['date_created'])); ?></td>
				<td><button value="<?php echo $row['chatroomid']; ?>" class="btn btn-info join_chat b1"><span class="glyphicon glyphicon-comment"></span> Join</button> &nbsp;
					<?php
					if (!empty($row['chat_password'])){
						echo '<span class="glyphicon glyphicon-lock"></span>&nbsp;';
					}
					$qq=mysqli_query($conn,"select * from chat_member where chatroomid='".$row['chatroomid']."' and userid='".$_SESSION['id']."'");
					if (mysqli_num_rows($qq)>0){
						echo '<span class="glyphicon glyphicon-user"></span>';
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