<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>
 

 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <!-- <div class="col-md-5 align-self-center">
                    <h3 class="text-primary" style="font-size: 30px">Thêm thuốc</h3> 
                </div> -->
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                    <h3 class="text-primary" style="font-size: 30px">THÊM THUỐC</h3> 

                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm thuốc</li> -->
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
                                    <form class="row" method="POST"  id="submitProductForm" action="php_action/createProduct.php" method="POST" enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                        <div class="form-group col-md-6">
                                                <label class="control-label">Hình ảnh của thuốc</label>
                                                 <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>                         
                                                    <div class="kv-avatar center-block">             
                                                    <input type="file" class="form-control" id="MedicineImage" placeholder="Thuốc Name" name="Thuốc" class="file-loading" >
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="ontrol-label">Tên thuốc</label>
                                                  <input type="text" class="form-control" id="productName" placeholder="Tên thuốc" name="productName" autocomplete="off" required="" />
                                                </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Số lương</label>
                                                  <input type="text" class="form-control" id="quantity" placeholder="Số lượng" name="quantity" autocomplete="off"  required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Giá</label>
                                                   <input type="text" class="form-control" id="rate" placeholder="" name="rate" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Giá</label>
                                                   <input type="text" class="form-control" id="mrp" placeholder="" name="mrp" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Mã thuốc</label>
                                                   <input type="text" class="form-control" id="Batch No" placeholder="Lô thuốc" name="bno" autocomplete="off" required="" pattern="^[Aa-Zz]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Ngày hết hạn</label>
                                                   <input type="date" class="form-control" id="expdate" placeholder="Expiry Date" name="expdate" autocomplete="off" required="" pattern="^[0-9]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Nhà phân phối</label>
                                                  <select class="form-control" id="brandName" name="brandName">
                        <option value="">Tùy chọn</option>
                        <?php 
                        $sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1 AND brand_active = 1";
                                $result = $connect->query($sql);

                                while($row = $result->fetch_array()) {
                                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                } // while
                                
                        ?>
                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                           
                                                <label class="control-label">Tên loại thuốc</label>
                                                  <select type="text" class="form-control" id="categoryName"  name="categoryName" >
                        <option value="">Tùy chọn</option>
                        <?php 
                        $sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
                                $result = $connect->query($sql);

                                while($row = $result->fetch_array()) {
                                    echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                } // while
                                
                        ?>
                      </select>
                                    </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">Trạng Thái</label>
                                                     <select class="form-control" id="productStatus" name="productStatus">
                        <option value="">Tùy chọn</option>
                        <option value="1">Có sẵn</option>
                        <option value="2">Không có sẵn</option>
                      </select>
                                        </div>

                                        <div class="col-md-1 mx-auto">
                                        <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Thêm</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


 
<?php include('./constant/layout/footer1.php');?>
 .


1