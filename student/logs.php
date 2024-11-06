<?php 
require_once('../database.php');
require_once('../classes.php'); 
$page_title = "Logs";

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

$user_data = $_SESSION['user_data']; 
include 'inc/header.php';
?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'inc/topbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="bg-secondary">
                    <div class="container">
                        <div class="row p-3">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="border-right: 1px solid #fff;">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h1 class="text-white font-weight-bold">Messages</h1>
                                    <span>
                                        <i style="font-size: 2em;" class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                        <i style="font-size: 2em;" class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i>
                                    </span>
                                </div>
                                <div class="mt-3">
                                    <input type="text" id="search" placeholder="Search Messages" style="width:100%;padding: 10px;border-radius: 25px;border: 0;" />
                                </div>
                                <div class="mt-3" style="height: 80vh;overflow: auto;">
                                    <div class="d-flex mt-3">
                                        <img class="img-responsive rounded-circle" height="80" src="<?php echo base_url.'uploads/profile/profile.png'; ?>" />
                                        <div class="ml-3">
                                            <p class="text-white" style="margin-bottom: 0;"><span>Test Name</span> <span>@ . <?php echo date('M d'); ?></span></p>
                                            <div class="message text-gray-400">Thank you pre.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <img class="img-responsive rounded-circle" height="80" src="<?php echo base_url.'uploads/profile/profile.png'; ?>" />
                                        <div class="ml-3">
                                            <p class="text-white" style="margin-bottom: 0;"><span>Test Name</span> <span>@ . <?php echo date('M d'); ?></span></p>
                                            <div class="message text-gray-400">Thank you pre.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <img class="img-responsive rounded-circle" height="80" src="<?php echo base_url.'uploads/profile/profile.png'; ?>" />
                                        <div class="ml-3">
                                            <p class="text-white" style="margin-bottom: 0;"><span>Test Name</span> <span>@ . <?php echo date('M d'); ?></span></p>
                                            <div class="message text-gray-400">Thank you pre.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <img class="img-responsive rounded-circle" height="80" src="<?php echo base_url.'uploads/profile/profile.png'; ?>" />
                                        <div class="ml-3">
                                            <p class="text-white" style="margin-bottom: 0;"><span>Test Name</span> <span>@ . <?php echo date('M d'); ?></span></p>
                                            <div class="message text-gray-400">Thank you pre.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <img class="img-responsive rounded-circle" height="80" src="<?php echo base_url.'uploads/profile/profile.png'; ?>" />
                                        <div class="ml-3">
                                            <p class="text-white" style="margin-bottom: 0;"><span>Test Name</span> <span>@ . <?php echo date('M d'); ?></span></p>
                                            <div class="message text-gray-400">Thank you pre.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <img class="img-responsive rounded-circle" height="80" src="<?php echo base_url.'uploads/profile/profile.png'; ?>" />
                                        <div class="ml-3">
                                            <p class="text-white" style="margin-bottom: 0;"><span>Test Name</span> <span>@ . <?php echo date('M d'); ?></span></p>
                                            <div class="message text-gray-400">Thank you pre.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <img class="img-responsive rounded-circle" height="80" src="<?php echo base_url.'uploads/profile/profile.png'; ?>" />
                                        <div class="ml-3">
                                            <p class="text-white" style="margin-bottom: 0;"><span>Test Name</span> <span>@ . <?php echo date('M d'); ?></span></p>
                                            <div class="message text-gray-400">Thank you pre.</div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <img class="img-responsive rounded-circle" height="80" src="<?php echo base_url.'uploads/profile/profile.png'; ?>" />
                                        <div class="ml-3">
                                            <p class="text-white" style="margin-bottom: 0;"><span>Test Name</span> <span>@ . <?php echo date('M d'); ?></span></p>
                                            <div class="message text-gray-400">Thank you pre.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 d-flex align-items-center justify-content-center">
                                <div style="padding-left: 200px">
                                    <h1 class="font-weight-bold text-white">Choose a message</h1>
                                    <p class="text-gray-600">Pick one from your existing conversations, start a new one, or don't do anything just yet. Your call.</p>
                                    <a href="messages.php" class="btn btn-white p-3 btn-message">New Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website <?php echo date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url.'logout.php'; ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

<?php include 'inc/footer.php'; ?>