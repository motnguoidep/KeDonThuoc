<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>
  

<?php include('./constant/connect.php');

$sql="SELECT * from product where  product_id='".$_GET['id']."'";
  $result=$connect->query($sql)->fetch_assoc();  
  ?> 


  
 <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Thuốc Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Edit Thuốc</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                

                
                
                
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form action="php_action/editProductImage.php?id=<?php echo $_GET['id'];?>" method="POST" id="updateProductImageForm" class="form-horizontal" enctype="multipart/form-data">

                                        <fieldset>
                        <h1>Cập nhật< hình ảnh Photo</h1>
<div class="changeUsenrameMessages"></div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Hình ảnh của thuốc</label>
                                                <div class="col-sm-9">
                                                 
                                                   <img src="assets/myimages/<?php echo $result['product_image']?>" style="width:250px; height:250px;" >
                                                     <input type="hidden" name="old_image" value="<?php echo $result['product_image']?>">



                                                   
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                      <div class="row">
                                                <label for="editProductImage" class="col-sm-3 control-label">Select Photo: </label>
                                               
                                                <div class="col-sm-9">
                                                  
                                                  <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>              
                                                  <div class="kv-avatar center-block">                  
                                                      <input type="file" class="form-control" id="productImage" placeholder="Thuốc Name" name="productImage" class="file-loading" style="width:auto;"/>
                                                  </div>
                                                  
                                                </div>
                                              </div> 
                                            </div>
                                            <div class="col-md-2 mx-auto">
                                        <button type="submit"  name="btn" id="changeUsernameBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Save Changes</button></div>
                                        </fieldset>
 .

                                    </form>
                                     <form method="POST"  id="submitProductForm" action="php_action/editProduct.php?id=<?php echo $_GET['id'];?>"enctype="multipart/form-data">

                                    <fieldset>
                                        <h1>Thuốc Info</h1>

                                       
                                <div class="row">
                                    <div class="form-group col-md-6">
                                                <label class="control-label">Tên thuốc</label>
                                                  <input type="text" class="form-control" id="editProductName" value="<?php echo $result['product_name']?>"  name="editProductName" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Số lương</label>
                                                  <input type="text" class="form-control" id="editQuantity" value="<?php echo $result['quantity']?>" name="editQuantity" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Giá</label>
                                                   <input type="text" class="form-control" id="editRate" value="<?php echo $result['rate']?>" name="editRate" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Giá</label>
                                                   <input type="text" class="form-control" id="mrp" placeholder="MRP" name="mrp" autocomplete="off" value="<?php echo $result['mrp']?>" required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Mã thuốc</label>
                                                   <input type="text" class="form-control" id="Batch No" placeholder="Batch No" name="bno" autocomplete="off" value="<?php echo $result['bno']?>" required="" pattern="^[Aa-Zz]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Ngày hết hạn</label>
                                                   <input type="date" class="form-control" id="expdate" placeholder="Expiry Date" name="expdate" value="<?php echo $result['expdate']?>" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Nhà phân phối</label>
                                                 <select  id="editBrandName" name="editBrandName"  required class="form-control">
<?php
     $sql = ("SELECT * FROM brands  where brand_status=1 ");
     //echo $sql;exit;
     $results = mysqli_query($connect, $sql);
     //echo "23";exit;
 while ($rows = mysqli_fetch_assoc($results)){
  //echo $row['categories_name'];exit;?>
     <option value="<?php echo $rows['brand_id']; ?>"<?php if($result['brand_id']==$rows['brand_id']){echo "selected";}?>><?php echo $rows['brand_name']; ?></option>";
 <?php   }                    
?></select>
                                    </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Tên loại thuốc</label>
                                                     <select  id="editCategoryName" name="editCategoryName"  required class="form-control">
<?php
     $sql = ("SELECT * FROM categories  where categories_status=1 ");
     //echo $sql;exit;
     $result1 = mysqli_query($connect, $sql);
     //echo "23";exit;
 while ($row = mysqli_fetch_assoc($result1)){
  //echo $row['categories_name'];exit;?>
     <option value="<?php echo $row['categories_id']; ?>"<?php if($result['categories_id']==$row['categories_id']){echo "selected";}?>><?php echo $row['categories_name']; ?></option>";
 <?php   }                    
?></select>
                                        </div>

                                        <div class="form-group col-md-6">
                                                <label class="control-label">Trạng Thái</label>
                                                     <select class="form-control" id="editProductStatus" name="editProductStatus">
                        <option value="1" <?php 
                                                        if($result['active']=="1") 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Có sẵn</option>
                                                        <option value="2" <?php if($result['active']=="2"){ echo "selected";}?>>Không có sẵn</option>
                      </select>
                                        </div>

                                        <div class="col-md-12 mx-auto text-center">
                                             <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Cập nhật</button>
                                        </div>
                                       
                                        </fieldset>
 .

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


 
<?php include('./constant/layout/footer1.php');?>
 .

<script src="custom/js/product.js"></script>
