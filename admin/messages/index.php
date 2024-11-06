<?php 
require_once('../../database.php');
require_once('../../classes.php'); 
$page_title = "Message";

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

$user_data = $_SESSION['user_data'];
include BASE_APP.'/admin/inc/header.php';
?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include BASE_APP.'/admin/inc/sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include BASE_APP.'/admin/inc/topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                </div>
            </div>
      </div>

<?php include BASE_APP.'/admin/inc/footer.php'; ?>