<?php 
require_once('../database.php');
require_once('../classes.php'); 
$page_title = "Profile";

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

$user = new User();
$user_data = $user->getUserData($_SESSION['user_data']['user_id']);

if($_POST) {
  $update = $user->update($_POST);
  $user_data = $user->getUserData($_SESSION['user_data']['user_id']);
}

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

                <div class="bg-secondary">
                    <div class="container">
                        <div class="row p-5 bg-secondary">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <?php if(isset($update)): ?>
                                    <div class="row">
                                      <h3 class="text-success">Profile successfully saved</h3>  
                                    </div>
                                    <?php endif; ?>
                                    <div class="row">
                                      <div class="col-lg-6 form-group">
                                        <label class="form-label" for="profile">Upload Profile</label>
                                        <input type="file" name="profile" id="profile" onchange="loadFile(event)" class="form-control">
                                      </div>
                                      <div class="col-lg-6">
                                        <img id="preview-profile" src="" width="100" height="100" class="img-responsive profile" style="display: none;">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm form-group">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="email" name="username" value="<?= isset($user_data[0]['username']) ? $user_data[0]['username'] : '' ?>" />
                                      </div>
                                      <div class="col-sm form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= isset($user_data[0]['email']) ? $user_data[0]['email'] : '' ?>" />
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm form-group">
                                        <label class="form-label" for="old-password">Old Password</label>
                                        <input type="password" class="form-control" id="old-password" name="old_password" />
                                      </div>
                                      <div class="col-sm form-group">
                                        <label class="form-label" for="new-password">New Password</label>
                                        <input type="password" class="form-control" id="new-password" name="new_password" />
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm form-group">
                                        <label class="form-label" for="first-name">First Name</label>
                                        <input type="text" class="form-control" id="first-name" name="first_name" value="<?= isset($user_data[0]['first_name']) ? $user_data[0]['first_name'] : '' ?>" />
                                      </div>
                                      <div class="col-sm form-group">
                                        <label class="form-label" for="last-name">Last Name</label>
                                        <input type="text" class="form-control" id="last-name" name="last_name" value="<?= isset($user_data[0]['last_name']) ? $user_data[0]['last_name'] : '' ?>" />
                                      </div>
                                      <div class="col-sm form-group">
                                        <label class="form-label" for="middle-name">Middle Name</label>
                                        <input type="text" class="form-control" id="middle-name" name="middle_name" value="<?= isset($user_data[0]['middle_name']) ? $user_data[0]['middle_name'] : '' ?>"/>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm form-group">
                                        <label class="form-label" for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="<?= isset($user_data[0]['phone']) ? $user_data[0]['phone'] : '' ?>" />
                                      </div>
                                      <div class="col-sm form-group">
                                        <label class="form-label" for="age">Age</label>
                                        <input type="number" class="form-control" id="age" name="age" value="<?= isset($user_data[0]['age']) ? $user_data[0]['age'] : '' ?>"/>
                                      </div>
                                    </div>
                                    <div class="mt-3" style="text-align: left;">
                                      <input type="hidden" name="user_id" value="<?php echo $user_data[0]['user_id']; ?>">
                                      <button type="submit" class="btn btn-primary p-3">Update Profile</button>
                                    </div>
                                  </form>
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