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
    $data['to'] = $_GET['email'];
    $data['from'] = $user_data[0]['email'];

    $result = $message->message($data);
}

if($_GET['email']) {
    $email = $_GET['email'];
    $user_messages = $message->getUserMessages($user_data[0]['email'], $email);
    $profile = $user->getUserByEmail($email);

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
                                <div class="mt-3" style="height: 80vh;overflow: auto;">
                                    <?php if(count($messages) > 0): foreach($messages as $message): 
                                        if(isset($_GET['email']) && $_GET['email'] == $message['to_user']) {
                                            $active_message = "active";
                                        } else {
                                            $active_message = '';
                                        }

                                        $name = isset($message['first_name'])?ucfirst($message['first_name']).' '.ucfirst($message['last_name']):$message['username'];
                                    ?>
                                    <div class="mt-3 p-2 messages <?php echo $active_message; ?>">
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
                                <form id="message-form" action="" method="POST">
                                    <?php if(isset($result)): ?>
                                    <div class="col">
                                        <h4 class="text-white">Your message sent successfully!</h4>
                                    </div>
                                    <?php endif; ?>
                                    <div class="col d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img class="img-responsive rounded-circle" height="80" src="<?php echo isset($profile[0]['profile'])?base_url.$profile[0]['profile']:base_url.'uploads/profile/profile.png'; ?>" />
                                            <div class="ml-1">
                                                <h3 class="text-white"><?php echo ucfirst($profile[0]['first_name']).' '.ucfirst($profile[0]['last_name']); ?></h3>
                                                <?php 
                                                   if($profile[0]['type'] == 2) {
                                                      echo '<p>@Teacher</p>';
                                                   } else if($profile[0]['type'] == 3) {
                                                      echo '<p>@Student</p>';
                                                   } else {
                                                      echo '<p>@Councilor</p>';
                                                   }
                                                ?>
                                            </div>
                                        </div>
                                        <div>
                                            <a class="text-white" href="user-profile.php?email=<?php echo $profile[0]['email']; ?>"><i class="fa fa-info"></i></a>
                                        </div>
                                    </div>
                                    <div class="col mt-5" style="border-top: 1px solid #fff;">
                                        <div class="row" style="overflow: auto;max-height: 600px;">
                                            <?php foreach($user_messages as $m): ?>
                                            <div class="col-12 p-0 mt-2" <?php if($m['from_user'] == $user_data[0]['email']){ echo 'style="display: flex; justify-content: right;"';} ?>>
                                                <div class="<?php if($m['from_user'] == $user_data[0]['email']){ echo 'from-message';}else{echo 'to-message';} ?>">
                                                    <p class="text-white"><?php echo $m['message']; ?></p>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col p-0">
                                                <div class="form-group">
                                                    <input type="text" name="message" id="send-message" class="form-control" placeholder="Start a new message." style="width: 100%;padding: 25px 10px;border-radius: 25px;" /><i style="position: absolute;right: 25px;font-size: 2em;color:#18392b;top:5px" class="fa fa-paper-plane"></i>
                                                </div>
                                            </div>
                                        </div>
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
        });

        $.fn.enterKey = function (fnc) {
            return this.each(function () {
                $(this).keypress(function (ev) {
                    var keycode = (ev.keyCode ? ev.keyCode : ev.which);
                    if (keycode == '13') {
                        fnc.call(this, ev);
                    }
                })
            })
        }

        $('#send-message').enterKey(function(e) {
            $('form#message-form').submit();
        })

        function onSelectUser(user_id,e) {
            var email = $(e).data('email');
            $('#to').val(email);
            $('#user-results').removeClass('show');
        }
    </script>
<?php include 'inc/footer.php'; ?>