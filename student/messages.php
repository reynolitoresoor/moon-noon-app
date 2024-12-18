<?php 
require_once('../database.php');
require_once('../classes.php'); 
$page_title = "Messages";

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

$user = new User();
$user_data = $user->getUserData($_SESSION['user_data']['user_id']);

$message = new Message();
$messages = $message->getMessages($user_data[0]['email']);

if($_POST) {
    $data = $_POST;
    $data['from'] = $user_data[0]['email'];

    $result = $message->message($data);
    if($result) {
        header('Location: ?message=sent');
    }
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
                                <div class="mt-3 p-2 messages" style="height: 80vh;overflow: auto;">
                                    <?php if(count($messages) > 0): foreach($messages as $message): 
                                            $name = isset($message['first_name'])?ucfirst($message['first_name']).' '.ucfirst($message['last_name']):$message['username'];
                                        ?>
                                    <div class="mt-3">
                                        <a class="d-flex" href="message.php?email=<?php echo $message['to_user']; ?>">
                                            <img class="img-responsive rounded-circle" height="80" src="<?php echo isset($message['profile'])?base_url.$message['profile']:base_url.'uploads/profile/profile.png'; ?>" />
                                            <div class="ml-3">
                                                <p class="text-white" style="margin-bottom: 0;"><span><?php echo $name; ?></span> <span>@ . <?php $date = date_create($message['created_at']); echo date_format($date, 'M d'); ?></span></p>
                                                <div class="message text-gray-400"><?php echo $message['message']; ?></div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endforeach; 
                                        else:
                                    ?>
                                    <div class="d-flex mt-3">
                                        <p>No message available.</p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <form action="" method="POST">
                                    <?php if(isset($result)): ?>
                                    <div class="col">
                                        <h4 class="text-white">Your message sent successfully!</h4>
                                    </div>
                                    <?php endif; ?>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-label">Write Message</label>
                                            <input type="text" name="to" id="to" class="form-control" placeholder="Search user" />
                                            <div id="user-results" class="dropdown-menu ml-3" style="width: 95%;">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" rows="10" placeholder="Write your message..."></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send Message</button>
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
    
    <script type="text/javascript">
        $('#to').keyup(function() {
            var user = $(this).val();
            $.ajax({
              type: "POST",
              url: "<?php echo base_url.'requests/actions.php'; ?>",
              data: {
                action: 'search-user',
                user: $('#to').val()
              },
              success: function(data){
                 var obj = JSON.parse(data);
                 var toHTML = '';
                 for(var i = 0; i < obj.length; i++) {
                    toHTML+="<a class='dropdown-item' style='cursor: pointer;' data-email='"+obj[i].email+"' onclick='onSelectUser("+obj[i].user_id+",this)'>"+obj[i].email+"</a><div class='dropdown-divider'></div>";
                 }
                 $('#user-results').html(toHTML);
                 $('#user-results').addClass('show');
              }
            });
        })

        function onSelectUser(user_id,e) {
            var email = $(e).data('email');
            $('#to').val(email);
            $('#user-results').removeClass('show');
        }
    </script>
<?php include 'inc/footer.php'; ?>