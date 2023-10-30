<?php
require_once('./constant/connect.php');


?>


<div class="left-sidebar">

    <div class="scroll-sidebar" style="padding-top: 20px">

        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Trang chủ</li>
                <!-- <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Thống kê</a>
                </li> -->

                <!-- <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-industry"></i><span class="hide-menu">Manufacturer</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-brand.php">Add Manufacturer</a></li>
                           
                                <li><a href="brand.php">Manage Manufacturer</a></li>
                                 <li><a href="importbrand.php">Import Manufacturer</a></li>
                            </ul>
                        </li> -->
                <?php } ?>
                <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                    <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span
                                class="hide-menu">Loại thuốc</span></a>
                        <ul aria-expanded="false" class="collapse">

                            <li><a href="add-category.php">Thêm loại thuốc</a></li>

                            <li><a href="categories.php">Quản lý loại thuốc</a></li>
                        </ul>
                    </li>
                <?php } ?>
                <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                    <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-medkit"></i><span
                                class="hide-menu">Thuốc</span></a>
                        <ul aria-expanded="false" class="collapse">

                            <li><a href="add-product.php">Thêm thuốc</a></li>

                            <li><a href="product.php">Quản lý thuốc</a></li>
                        </ul>
                    </li>
                <?php } ?>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Hóa đơn</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-order.php">Thêm hóa đơn</a></li>
                           
                                <li><a href="Order.php">Quản lý hóa đơn</a></li>
                            </ul>
                        </li>

                <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                    <!-- <li><a href="report.php" href="#" aria-expanded="false"><i class="fa fa-print"></i><span class="hide-menu">Reports</span></a></li> -->






                    <!-- <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-flag"></i><span class="hide-menu">Báo cáo</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="report.php">Order Report</a></li>
                           <li><a href="sales_report.php">Báo cáo doanh thu</a></li>
                                <li><a href="productreport.php">Báo cáo thuốc</a></li>
                                <li><a href="expreport.php">Báo cáo thuốc hết hạn</a></li>
                            </ul>
                        </li>
                  <?php } ?> -->



            </ul>
        </nav>

    </div>

</div>