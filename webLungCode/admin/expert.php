<?php 
include 'header.php'; ?>

<?php
$cats = Category::select('id, name')->get();
$key = isset($_GET['keyword']) ? $_GET['keyword'] :'';
$cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : 0;
$experts = Expert::join('id, name, email, descriptions, image', 'category_id' , 'categories.name as cat_name')
->get();

  if($key && !$cat_id){
    $cats = Expert::join('id, name, email, descriptions, image', 'category_id' ,'categories.name as cat_name')
  ->where('name', 'LIKE', '%'.$key.'%')->get();
  }else if(!$key && $cat_id){
    $cats = Expert::join('id, name, email, descriptions, image', 'category_id' ,'categories.name as cat_name')
  ->where('category_id', $cat_id)->get();
  }else if($key && $cat_id){
    $cats = Expert::join('id, name, email, descriptions, image', 'category_id' ,'categories.name as cat_name')
  ->where('name', 'LIKE', '%'.$key.'%')-> andWhere('category_id', $cat_id)->get();
  }

?>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            QL chuyên gia
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <form action="" method="get" class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="">label</label>
                        <input class="form-control" name="keyword" placeholder="Input field">
                    </div>
                    <div class="form-group">
                    <select name="cat_id" id="input" class="form-control">
                        <option value="">Chọn 1 --------</option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                        <?php endforeach; ?>
            </select>


                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>

                        <a href="expert-create.php " class="btn btn-primary pull-right">
                            <i class="fa fa-plus"> Thêm mới</i>
                        </a>
                </form>
                <br>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên chuyên gia</th>
                            <th>Email</th>
                            <th>Miêu tả</th>
                            <th>Hình ảnh</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($experts as $expert) : ?>
                        <tr>
                            <td><?php echo $expert->id;?></td>
                            <td><?php echo $expert->name;?></td>
                            <td><?php echo $expert->email;?></td>
                            <td><?php echo $expert->descriptions;?></td>

                            <td>
                                <img src="../uploads/<?php echo $expert->image; ?>" width="40">
                            </td>

                            <td class="text-right">
                                <a href="expert-edit.php?id=<?php echo $expert->id;?>" class="btn btn-primary">sửa</a>
                                <a onclick="return confirm('Bạn có chắc muốn xoá không?')" 
                                href="expert-delete.php?id=<?php echo $expert->id; ?>" class="btn btn-danger">xoá</a>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>