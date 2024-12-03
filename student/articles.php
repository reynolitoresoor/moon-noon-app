<?php 
require_once('../database.php');
require_once('../classes.php'); 
$page_title = "Messages";

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

$user = new User();
$user_data = $user->getUserData($_SESSION['user_data']['user_id']);

$article = new Articles();
$articles = $article->getArticles();

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
                            <?php if($articles): 
                                    foreach($articles as $article):
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card" style="width:20rem;margin:20px 0 24px 0">
                                  <img class="card-img-top" height="180" src="<?php echo base_url.$article['attachment']; ?>" alt="image" style="width:100%">
                                  <div class="card-body">
                                    <h4 class="card-title"><?php echo ucfirst($article['article']); ?></h4>
                                    <p class="card-text text-dark"><?php echo $article['content']; ?></p>
                                  </div>
                                </div>
                            </div>
                            <?php endforeach; endif; ?>
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