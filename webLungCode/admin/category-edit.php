
<?php 
include 'header.php'; 
$error = '';
$cat = Category::select()->where('id', $_GET['id'])->find();
if(isset($_POST['name'])){
  $name = $_POST['name'];

  if($error == ''){
    $error = 'Tên danh mục để trống';
  }
  if(!$error && Category::update($_GET['id'],$_POST)){
    header('location: Category.php');
  }

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
          <?php if ($error) : ?>{
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Title!</strong> Alert body ...
          </div>
          <?php endif;?>
          <div class="row">
            <div class="col-md-4">
              <form action="" method="POST">

                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input class="form-control"value="<?php echo $cat->name; ?> name="name" placeholder="Input field">
                </div>   

                <div class="form-group">
                <div class="radio">
                  <label>
                    <input type="radio" name="status" value="1" <?php echo $cat->status==1 ? 'checked' : '';?>>
                    Hiện thị
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="status" value="0" <?php echo $cat->status==1 ? 'checked' : '';?>>
                    Tạm ẩn
                  </label>
                </div>
                
            </div>        
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> Lưu lại
            </button>

            <a href="category-create.php " class="btn btn-danger pull-right">
                <i class="fa fa-plus"></i> Quay lại
            </a>
              </form>
            </div>
          </div>        
          
                   
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'footer.php'; ?>
