<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>
  
<?php include('./constant/connect');
$sql = "SELECT product_id, product_name,product_image,rate,quantity,brand_id,expdate,categories_id,active,status FROM product WHERE status = 1";
$result = $connect->query($sql);
//echo $sql;exit;

?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <!-- <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Thuốc</h3> 
                </div> -->
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                       <h3 class="text-primary" style="font-size: 30px"> DANH SÁCH BỆNH NHÂN</h3>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thuốc</li> -->
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                 <div class="card text-center">
                            <div class="card-body">
                              
                            <!-- <a href="add-product.php"><button class="btn btn-primary">Thêm thuốc</button></a> -->
                         
                                <div class="table-responsive m-t-40">
                                    <table  class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th class="text-center">Stt</th>
                                                <!-- <th style="width:10%;">Hình ảnh</th> -->
                                                <th>Họ tên bệnh nhân</th>
                                                <th>Giới tính</th>                           
                                                <th>Ngày sinh</th>
                                                <th>Số điên thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Trạng Thái</th>
                                                <th class="text-center">Chỉnh sửa - Xóa</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
foreach ($result as $row) {
    
    $sql="SELECT * from brands where brand_id='".$row['brand_id']."'";
    $result1 = $connect->query($sql);
    $row1=$result1->fetch_assoc();


    $sql="SELECT * from categories where categories_id='".$row['categories_id']."'";
    $result2 = $connect->query($sql);
    $row2=$result2->fetch_assoc();
    
    
    ?>
                                        <tr style='width: 100px; height: 100px'>
                                            
                                                
                                            <td class="text-center"><?php echo $row['product_id'] ?></td>
                                           

                                            <?php $d1=date('Y-m-d');
                                            //echo $d1.$row['expdate'];exit;
                                             if($row['expdate']>=$d1)
                                           { //echo "abc1"; ?>
                                               
                                               <td> <label class="label label-success"><?php echo $row['product_name'];?></label></td> 
                                         <?php  }
                                            if($row['expdate']<$d1) { //echo "abc"; ?>
                                               <td><label class="label label-danger"><?php echo $row['product_name'];?></label></td> 
                                               
                                           <?php
                                               } 
                                           ?>
                                             <td><?php echo $row['rate'] ?></td>
                                              <td><?php echo $row['quantity'] ?></td>
                                              <td><?php echo $row1['brand_name'] ?></td>
                                             <td><?php echo $row2['categories_name'] ?></td>
                                            <td><?php  if($row['active']==1)
                                            {
                                                 
                                                $activeBrands = "<label class='label label-success' style='width: 100px;'><h4>Tiếp đón</h4></label>";
                                                 echo $activeBrands;
                                            }
                                            else{
                                                $activeBrands = "<label class='label label-danger'><h4>Không tiếp đón</h4></label>";
                                                echo $activeBrands;
                                            }?></td>
                                            <td class="text-center">
            
                                                <a href="editproduct.php?id=<?php echo $row['product_id']?>"><button type="button" style="width: 70px" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                              

             
                                                <a href="php_action/removeProduct.php?id=<?php echo $row['product_id']?>" ><button type="button" style="width: 70px" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
                                           
                                                
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
                        -- ---------------------------------------------------------
-- Table 'patient'
-- CREATE TABLE `patient` (
--   `patient_id` int(11) NOT NULL,
--   `patient_name` varchar(255) NOT NULL,
--   `gender_id` int(11) NOT NULL,
--   `dateOfBirth_id` int(11) NOT NULL,
--   `phone` varchar(255) NOT NULL,
--   `address` varchar(255) NOT NULL,
--   `status` int(11) NOT NULL DEFAULT 0
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

-- INSERT INTO `patient` (`patient_id`, `patient_name`, `gender_id`, `dateOfBirth_id`, `phone`, `address`, `status`) VALUES
-- (1, 'Ngo Thi Xuan Thuong ','Nu', '19/07/2003', 0398321759, 'Quang Nam', 1),
-- (1, 'Ngo Thi Xuan Thuong ','Nam', '19/07/2003', 0398321759, 'Quang Nam', 1),
-- (1, 'Ngo Thi Xuan Thuong ','Nu', '19/07/2003', 0398321759, 'Quang Nam', 1),
-- (1, 'Ngo Thi Xuan Thuong ','Nu', '19/07/2003', 0398321759, 'Quang Nam', 1),
-- (1, 'Ngo Thi Xuan Thuong ','Nu', '19/07/2003', 0398321759, 'Quang Nam', 1)


 
<?php include('./constant/layout/footer1.php');?>
 .


