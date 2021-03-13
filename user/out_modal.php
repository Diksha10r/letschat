<!-- Leave Room -->
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
    <div class="modal fade" id="leave_room2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Leaving Room!</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h3><center>Are you sure you want to leave?</center></h3>
					<span style="font-size: 11px;"><center><i>Note: Once you leave the room and you wanted to come back, password is needed for a locked room.</i></center></span>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default b3" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning b1" id="confirm_leave2"><span class="glyphicon glyphicon-check"></span> Leave</button>
				
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Delete Room -->
    <div class="modal fade" id="delete_room2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Deleting Room!</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h3><center>Are you sure you want to delete?</center></h3>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default b3" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-danger b1" id="confirm_delete2"><span class="glyphicon glyphicon-check"></span> Delete</button>
				
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Add Member -->
    <div class="modal fade" id="add_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Member</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="addnewmember.php?id=<?php echo $id; ?>">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Select:</span>
						<select style="width:350px;" class="form-control" name="user">
							<?php
							include('../conn.php');
								$mem=array();
								$um=mysqli_query($conn,"select * from `chat_member` where chatroomid='$id'");
								while($umrow=mysqli_fetch_array($um)){
									$mem[]=$umrow['userid'];
								}
								$users=implode($mem, "', '");
								
								$u=mysqli_query($conn,"select * from `user` where userid not in ('".$users."')");
								if(mysqli_num_rows($u)<1){
									?>
									<option value="">No User Available</option>
									<?php
								}
								else{
								while($urow=mysqli_fetch_array($u)){
									?>
										<option value="<?php echo $urow['userid']; ?>"><?php echo $urow['uname']; ?></option>	
									<?php
								}
								}
							
							?>
						</select>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default b3" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary b1"><span class="glyphicon glyphicon-check"></span> Add</button>
					</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->