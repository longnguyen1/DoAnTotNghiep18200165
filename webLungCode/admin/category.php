<?php 
include 'header.php'; 

$key = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$cats = Category::leftJoin('id, name, status', 'category_id' ,'COUNT(experts.id) as total')
->groupBy('id, name, status')->get();

if($key){
  $cats = Category::leftJoin('id, name, status', 'category_id' ,'COUNT(experts.id) as total')
  ->where('name', 'LIKE', '%'. $key . '%')->groupBy('id, name, status')->get();

}

?>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            QL danh mục
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
                    
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search"></i>
                    </button>

                    <a href="category-create.php " class="btn btn-primary pull-right">
                        <i class="fa fa-plus"> Thêm mới</i>
                    </a>
                </form>
                <br>
               

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Trạng thái</th>
                            <th>Số chuyên gia</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cats as $cat) : ?>
                        <tr>
                            <td><?php echo $cat->id;?></td>
                            <td><?php echo $cat->name;?></td>
                            <td><?php echo $cat->status > 0 ? 'Hiển thị' : 'Tạm ẩn';?></td>
                            <td><?php echo $cat->total;?> (CG)</td>
                            <td class="text-right">
                                <a href="category-edit.php?id=<?php echo $cat->id;?>" class="btn btn-primary">sửa</a>
                                <a onclick="return confirm('Bạn có chắc muốn xoá không?')"
                                    href="category-delete.php?id=<?php echo $cat->id;?>" class="btn btn-danger">xoá</a>
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