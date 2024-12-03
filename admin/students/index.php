<?php 
require_once('../../database.php');
require_once('../../classes.php'); 
$page_title = "Students";

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

$user_data = $_SESSION['user_data'];
include BASE_APP.'/admin/inc/header.php';

$user = new User();
$students = $user->getAllStudents();


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
                        <h1 class="h3 mb-0 text-gray-800">Students</h1>
                        <a class="btn btn-primary" data-toggle="modal" data-target="#create-student">Create</a>
                    </div>
                    <div class="row">
                    <div class="col-12">
                            <table id="datatable">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    <?php foreach($students as $student): ?>
                                       <tr>
                                           <td><?php echo $student['user_id']; ?></td>
                                           <td><?php echo $student['first_name'].' '.$student['last_name']; ?></td>
                                           <td><?php echo $student['email']; ?></td>
                                           <td>
                                               <a class="btn btn-success" onclick="updateStudent(<?php echo $student['user_id']; ?>)" >Edit</a>
                                               <a href="delete.php?id=<?php echo $student['user_id']; ?>" onclick="if(confirm('Are you sure you want to delete this student?')){return true;}else{return false;}" class="btn btn-danger">Delete</a>
                                           </td>
                                       </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
      </div>
<?php include 'modals.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
       $('button#create-student').click(function() {
          var password = $('#password').val();
          var confirm_password = $('#confirm_password').val();

          $('input[type=text]:required').each(function() {
            if ($(this).val() === '')
              alert('All fields are quired.');
          });

          if(password != confirm_password){
            alert('Password is not matched!');
          }

          if(password == confirm_password) {
            $('#form-create-student').submit();
          }
       });

       $('button#update-student').click(function() {
          var password = $('#form-upate-student').find('#password').val();
          var confirm_password = $('#form-upate-student').find('#confirm_password').val();

          if(password != confirm_password){
            alert('Password is not matched!');
          }

          if(password == confirm_password) {
            $('#form-update-student').submit();
          }
       });
    });

    function updateStudent(user_id) {
        $('#edit-student').modal('show',true);

        var request = $.ajax({
          url: "<?php echo base_url.'requests/get-student-data.php'; ?>",
          type: "POST",
          data: {user_id: user_id},
          success: function(response){
            var obj = JSON.parse(response);
            $('#form-update-student').find('#email').val(obj[0].email);
            $('#form-update-student').find('#username').val(obj[0].username);
            $('#form-update-student').find('#user_id').val(obj[0].user_id);
          }
        });
    }
</script>
<?php include BASE_APP.'/admin/inc/footer.php'; ?>