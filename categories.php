<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>
  
<?php include('./constant/connect');
$sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1";
$result = $connect->query($sql);
//echo $sql;exit;

?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <!-- <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Các loại thuốc</h3> </div> -->
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                      <h3 class="text-primary" style="font-size: 30px"> CÁC LOẠI THUỐC</h3>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Các loại thuốc</li> -->
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add-category.php"><button class="btn btn-primary">Thêm loại thuốc</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table  class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th class="text-center">Stt</th>
                                                <th>Tên loại thuốc</th>
                                                <th>Trạng Thái</th>
                                                <th>Chỉnh sửa - Xóa</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
foreach ($result as $row) {
    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $row['categories_id'] ?></td>
                                            <td><?php echo $row['categories_name'] ?></td>
                                            <td><?php  if($row['categories_active']==1)
                                            {
                                                echo"Có sẵn";
                                            }
                                            else{
                                                echo"Không có sẵn";
                                            }?></td>
                                            <td>
            
                                                <a href="editcategory.php?id=<?php echo $row['categories_id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                              

             
                                                <a href="php_action/removeCategories.php?id=<?php echo $row['categories_id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
                                           
                                                
                                                </td>
                                        </tr>
                                      
                                    </tbody>
                                   <?php    
}
?>
                               </table>
                                </div>
                            </div>
                        </div>

 
<?php include('./constant/layout/footer1.php');?>
 .


