
<?php 
include 'header.php'; 
$error = '';
if(empty($_GET['id'])){
    $error = 'Bạn chưa chọn danh mục để xoá' ;
  }else{  
    Expert::delete(($_GET['id']));
    header('location: expert.php');
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
          <?php if ($error) : ?>{
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Title!</strong> Alert body ...
          </div>
          <a href="expert.php " class="btn btn-danger pull-right">
                <i class="fa fa-plus"></i> Quay lại
            </a>
          <?php endif;?>

                   
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'footer.php'; ?>
