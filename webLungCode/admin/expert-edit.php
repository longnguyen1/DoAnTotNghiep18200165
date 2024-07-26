<?php include 'header.php' ; 
$cats = Category::select('id, name')->get();
$expert = Expert::select()->where('id', $_GET['id'])->find();
$errors= [] ; 

if(isset($_POST['name'])){ 
    $name=$_POST['name'];
    $birthday = $_POST['birthday'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $description=$_POST['description'];
    $category_id = $_POST['category_id'];
    $image = File::upload('img');
    $image = $image ? $image : $expert->image;
    $_POST['image'] = $image;
    
    if($name == ''){
      $errors['name'] = 'Tên chuyên gia không để trống';
    }
    if($category_id == ''){
      $errors['category_id'] = 'Danh mục không để trống';
    }
    if($email == ''){
      $errors['email'] = 'Email không để trống';
    }
    if($description == ''){
      $errors['descriptions'] = 'Miêu tả không để trống';
    }

    if(!$errors && Expert::update($_GET['id'],$_POST)){
      header('location: expert.php');
    }else {
        $errors['faild'] = 'Thêm mới không thành công, vui lòng thử lại';
    }

}
?>
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                QLchuyên gia
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        <?php echo File::upload('img');?>
            <!-- Default box -->
            <div class="box">
                <form class="box-body">
                    <?php if ($errors) : ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php foreach($errors as $error) : ?>
                          <li><?php echo $error;?></li>
                        <?php endforeach;?>
                    </div>
                    <?php endif;?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="panel panel-success">
                                <div class="panel-body">
                                    <div class="col_md_8">
                                        <div class="form-group">
                                            <label for="">Tên chuyên gia</label>
                                            <input value="<?php echo $expert->name?>" class="form-control" name="name" placeholder="Input field">
                                            <?php if(isset($errors['name']))  :?>
                                                <div class="help-block text-danger"><?php echo $errors['name'];?></div>
                                                <?php endif;?>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="">Mô tả chuyên gia</label>
                                            <textarea name="descriptions" class="form-control" value="<?php echo $expert->descriptions?>" 
                                                placeholder="Nhập mô tả chuyên gia"></textarea>
                                                <?php if(isset($errors['descriptions']))  :?>
                                                <div class="help-block text-danger"><?php echo $errors['descriptions'];?></div>
                                                <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col_md_4">
                                <div class="panel panel-success">
                                 <div class="panel-body">
                                    <div class="form-group">
                                        <label for="">Trạng thái</label>
                                        
                                        <select name="category_id" id="input" class="form-control">
                                          <option value="">Chọn 1 --------</option>
                                          <?php foreach($cats as $cat): ?>
                                          <option <?php echo $cat->id == $expert->category_id? 'selected' : '';?>
                                          value="<?php echo $cat->id?>"><?php echo $cat->name?></option>
                                          <?php endforeach;?>
                                        </select>
                                        <?php if(isset($errors['category_id']))  :?>
                                                <div class="help-block text-danger"><?php echo $errors['category_id'];?></div>
                                                <?php endif;?>
                                    </div>
                                    <div class="form-group">
                                            <label for="">email</label>
                                            <input value="<?php echo $expert->email?>" class="form-control" name="email" placeholder="Input field">
                                            <?php if(isset($errors['email']))  :?>
                                                <div class="help-block text-danger"><?php echo $errors['email'];?></div>
                                                <?php endif;?>
                                        </div>
                                        
                                    <div class="form-group">
                                        <label for="">Trạng thái</label>

                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="status" value="1" <?php echo $expert->status == 1 ? 'checked' : '';?>>
                                                Hiện thị
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="status" value="0" checked>
                                                Tạm ẩn
                                            </label>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="">Hình ảnh</label>
                                        
                                        <input type="file" name="img">
                                        <img src="../uploads/<?php echo $expert->image;?>" width="100%">
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save"></i> Lưu lại
                                    </button>

                                    <a href="expert.php " class="btn btn-danger pull-right">
                                        <i class="fa fa-plus"></i> Quay lại
                                    </a>
                                </div>
                            </di>
                        </div>
            </div>


    </div>


    </form>

    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include 'footer.php';?>