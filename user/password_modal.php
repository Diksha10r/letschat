<!-- Chat Room Password -->
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
    <div class="modal fade" id="join_chat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Input Password</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="confirm_password.php">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Password:</span>
						<input type="text" style="width:350px;" class="form-control" name="chat_pass" required>
						<input type="hidden" id="chatid" name="chatid">
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default b3" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary b1"><span class="glyphicon glyphicon-check"></span> Confirm</button>
				</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->


<!-- Add Chat Room -->
    <div class="modal fade" id="add_chatroom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Chat Room</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Chat Room Name:</span>
						<input type="text" style="width:350px;" class="form-control" id="chat_name" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Password:</span>
						<input type="text" style="width:350px;" class="form-control" id="chat_password">
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default b3" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" class="btn btn-primary b1" id="addchatroom"><span class="glyphicon glyphicon-check"></span> Add</button>
				</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->