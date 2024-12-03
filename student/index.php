<?php 
require_once('../database.php');
require_once('../classes.php'); 
$page_title = "Home";

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
                <div class="container">
                    <div class="row p-5">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <p>display chart</p>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                             <h1 class="text-dark">90% of Students Have Increased Stress</h1>
                             <p class="text-dark">Based on the current statistics report, students (like you) have increased stress due to the upcoming midterms.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-secondary">
                    <div class="container">
                        <div class="row p-5 bg-secondary">
                            <div class="col-12">
                               <h3 class="text-white font-weight-bold">Recommended articles, based on current data</h3> 
                            </div>
                            <?php if($articles): 
                                    $counter = 1;
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
                            <?php if($counter == 2){break;} $counter++; endforeach; endif; ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex align-items-center text-center">
                                <a href="<?php echo base_url.'student/articles.php'; ?>" class="text-white" style="font-size: 1.5em;">Read other articles <br/><i class="fas fa-arrow-circle-right fa-sm fa-fw mr-2 text-gray-400" style="font-size: 2.5em;"></i></a>
                            </div>
                        </div>
                        <div class="row p-5 bg-secondary">
                            <div class="col-12 mb-5">
                               <h3 class="text-white font-weight-bold">Services</h3> 
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                                <img class="card-img-top rounded-circle mb-2" src="<?php echo base_url.'uploads/images/sample.jpg' ?>" height="250"alt="image">
                                <h4 class="font-weight-bold text-white">Find a Peer</h4>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                                <a href="<?php echo base_url.'students/find-a-councilor.php'; ?>">
                                    <img class="card-img-top rounded-circle mb-2" src="<?php echo base_url.'uploads/images/sample.jpg' ?>" height="250"alt="image">
                                    <h4 class="font-weight-bold text-white">Find a Councilor</h4>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                                <a href="<?php echo base_url.'students/appointments.php'; ?>">
                                    <img class="card-img-top rounded-circle mb-2" src="<?php echo base_url.'uploads/images/sample.jpg' ?>" height="250"alt="image">
                                    <h4 class="font-weight-bold text-white">Appointments</h4>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                                <a href="<?php echo base_url.'student/articles.php'; ?>">
                                    <img class="card-img-top rounded-circle mb-2" src="<?php echo base_url.'uploads/images/sample.jpg' ?>" height="250"alt="image">
                                    <h4 class="font-weight-bold text-white">Explore Articles</h4>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 text-center mt-5">
                                <img class="card-img-top rounded-circle mb-2" src="<?php echo base_url.'uploads/images/sample.jpg' ?>" height="250"alt="image">
                                <h4 class="font-weight-bold text-white">Podcast</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-secondary">
                    <div class="container">
                        <div class="row p-5 bg-secondary">
                            <div class="col-12 text-center">
                               <img class="img-responsive" src="<?php echo base_url.'uploads/images/logo-title.png'; ?>" />
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