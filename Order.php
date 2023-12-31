<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>
.

<?php include('./constant/connect');
$user = $_SESSION['userId'];
$sql = "SELECT  uno, orderDate, clientName, clientContact,paymentStatus,id FROM orders WHERE delete_status = 0";
$result = $connect->query($sql);

//echo $sql;exit;

//echo $itemCountRow;exit; 
?>
<div class="page-wrapper">

    <div class="row page-titles">
        <!-- <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Order</h3> </div> -->
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <h3 class="text-primary" style="font-size: 30px"> QUẢN LÝ HÓA ĐƠN</h3>
                <!-- 
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                        <li class="breadcrumb-item active">View Order</li> -->
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <a href="add-order.php"><button class="btn btn-primary" >Thêm hóa đơn</button></a>

                <div class="table-responsive m-t-40 text-center">
                    <!-- id="myTable"  -->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr >
                                <th class="text-center">Stt</th>
                                <th>Ngày thêm</th>
                                <th>Tên Khách Hàng</th>
                                <th>Số điện thoại</th>

                                <th>Tình trạng thanh toán</th>
                                <th class="text-center">Chỉnh sửa - Xóa</th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php
                            foreach ($result as $row) {

                                $no += 1;
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <?= $no; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['orderDate'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['clientName'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['clientContact'] ?>
                                    </td>

                                    <td>
                                        <?php if ($row['paymentStatus'] == 1) {

                                            $paymentStatus = "<label class='label label-success' ><h4>Đã Thanh Toán</h4></label>";
                                            echo $paymentStatus;
                                        } else if ($row['payment_status'] == 2) {
                                            $paymentStatus = "<label class='label label-danger'><h4>Trả trước</h4></label>";
                                            echo $paymentStatus;
                                        } else {
                                            $paymentStatus = "<label class='label label-warning'><h4>Chưa Thanh Toán</h4></label>";
                                            echo $paymentStatus;
                                        } // /els
                                        ?>
                                    </td>
                                    <td class="text-center"> 
                                        <a href="editorder.php?id=<?php echo $row['id'] ?>"><button type="button"
                                                class="btn btn-xs btn-primary" style="width: 70px" ><i class="fa fa-pencil"></i></button></a>
                                        <a href="php_action/removeOrder.php?id=<?php echo $row['id'] ?>"><button
                                                type="button" style="width: 70px" class="btn btn-xs btn-danger"
                                                onclick="return confirm('Are you sure to delete this record?')"
                                                ><i
                                                    class="fa fa-trash"></i></button></a>
                                        <!-- <a href="invoiceprint.php?id=<?php echo $row['id'] ?>" ><button type="button" class="btn btn-xs btn-success" ><i class="fa fa-print"></i></button></a>
                                           
                                                 -->
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


        <?php include('./constant/layout/footer1.php'); ?>
        .