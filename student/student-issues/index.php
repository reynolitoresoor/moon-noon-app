<?php 
require_once('../../database.php');
require_once('../../classes.php'); 
$page_title = "Student Issues";

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

$user_data = $_SESSION['user_data'];
include BASE_APP.'/admin/inc/header.php';

$issue = new Issues();
$issues = $issue->getAllStudentIssues();
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
                        <h1 class="h3 mb-0 text-gray-800">Student Issues</h1>
                        <a class="btn btn-primary" data-toggle="modal" data-target="#create-modal">Create</a>
                    </div>
                    <div class="row">
                    <div class="col-12">
                            <table id="datatable">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Issues</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    <?php foreach($issues as $i): ?>
                                       <tr>
                                           <td><?php echo $i['id']; ?></td>
                                           <td><?php echo $i['first_name'].' '.$i['last_name']; ?></td>
                                           <td><?php echo $i['email']; ?></td>
                                           <td><?php echo $i['issue']; ?></td>
                                           <td>
                                               <a onclick="updateStudentIssue(<?php echo $i['id']; ?>)" class="btn btn-success">Edit</a>
                                               <a href="delete.php?id=<?php echo $i['id']; ?>" onclick="if(confirm('Are you sure you want to delete this issue?')){return true;}else{return false;}" class="btn btn-danger">Delete</a>
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
       $('button#create-student-issue').click(function() {
          $('#form-create-student-issue').submit();
       });

       $('button#update-student-issue').click(function() {
          $('#form-update-student-issue').submit();
       });
    });

    function updateStudentIssue(id) {
        $('#edit-modal').modal('show',true);

        var request = $.ajax({
          url: "<?php echo base_url.'requests/get-student-issue-data.php'; ?>",
          type: "POST",
          data: {id: id},
          success: function(response){
            var obj = JSON.parse(response);
            $('#form-update-student-issue').find('#user_id').val(obj[0].user_id);
            $('#form-update-student-issue').find('#issue').val(obj[0].issue);
            $('#form-update-student-issue').find('#issue_id').val(obj[0].id);
          }
        });
    }
</script>
<?php include BASE_APP.'/admin/inc/footer.php'; ?>