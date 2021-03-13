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

<div class="col-lg-12">
    <div class="panel panel-default" style="height:50px;">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span class="glyphicon glyphicon-user"></span> User List</strong></span>
		<div class="pull-right" style="margin-right:10px; margin-top:7px;">
			<a href="#add_user" data-toggle="modal" class="btn btn-primary but"><span class="glyphicon glyphicon-plus"></span> Add</a>
		</div>
	</div>
	<table width="100%" class="table table-striped table-bordered table-hover" id="userList">
        <thead>
            <tr>
                <th>Name</th>
				<th>Username</th>
				<th>Password</th>
				<th>Photo</th>
				<th>Access</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$query=mysqli_query($conn,"select * from `user` order by uname asc");
			while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><input type="hidden" id="ename<?php echo $row['userid']; ?>" value="<?php echo $row['uname']; ?>"><?php echo $row['uname']; ?></td>
				<td><input type="hidden" id="eusername<?php echo $row['userid']; ?>" value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></td>
				<td><input type="hidden" id="epassword<?php echo $row['userid']; ?>" value="<?php echo $row['password']; ?>"><?php echo $row['password']; ?></td>
				<td><img src="../<?php if(empty($row['Photo'])){echo "upload/profile.jpg";}else{echo $row['Photo'];} ?>" height="30px;" width="30px;"></td>
				<td>
					<?php 
						if ($row['access']==1){
							echo "Admin";
						}
						else{
							echo "User";
						}
					?>
				</td>
				<td> 
					<button type="button" class="btn btn-warning edituser b1" value="<?php echo $row['userid']; ?>"><span class="glyphicon glyphicon-pencil"></span> Edit</button> || 
					<button type="button" class="btn btn-danger deleteuser b2" value="<?php echo $row['userid']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</button>
				</td>
			</tr>
			<?php
			}
		?>
        </tbody>
    </table>                     
</div>