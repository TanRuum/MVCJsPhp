<form role="form" method="POST" style="width:70%">
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" class="form-control" value="<?php echo $data['username'] ?>"
             id="" placeholder="Username" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" value="<?php echo $data['password'] ?>"
             id="" placeholder="password" name="password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" value="<?php echo $data['lv'] ?>"
             id="" placeholder="Level" name="lv">
        </div>
    </div>
    <div class="card-footer">
        <button type='submit' class="btn btn-primary" name="edituser" id="edituser">Done</button>
    </div>
</form>