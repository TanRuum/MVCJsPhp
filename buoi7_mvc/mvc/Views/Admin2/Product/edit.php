<form role="form" method="POST" enctype="multipart/form-data" style="width:70%">
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">1</label>
            <input type="text" class="form-control" value="<?php echo $data['tensp'] ?>"
             id="" placeholder="Username" name="tensp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">2</label>
            <input type="text" class="form-control" value="<?php echo $data['soluong'] ?>"
             id="" placeholder="password" name="soluong">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">3</label>
            <input type="text" class="form-control" value="<?php echo $data['xuatxu'] ?>"
             id="" placeholder="Level" name="xuatxu">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">4</label>
            <input type="text" class="form-control" value="<?php echo $data['gia'] ?>"
             id="" placeholder="Level" name="gia">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">5</label>
            <input type="file" class="form-control" value="<?php echo $data['img'] ?>"
             id="" placeholder="Level" name="anh">
        </div>
    </div>
    <div class="card-footer">
        <button type='submit' class="btn btn-primary" name="editProduct">Done</button>
    </div>
</form>