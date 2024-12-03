<?php 
require_once('../../database.php');
require_once('../../classes.php'); 
$page_title = "Students";

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

$user_data = $_SESSION['user_data'];
include BASE_APP.'/admin/inc/header.php';

$article = new Articles();
$articles = $article->getArticles();

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
                        <a class="btn btn-primary" data-toggle="modal" data-target="#create-article">Create</a>
                    </div>
                    <div class="row">
                    <div class="col-12">
                            <table id="datatable">
                                <thead>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Article</th>
                                    <th>Content</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    <?php foreach($articles as $a): 
                                        $file = isset($a['attachment'])?base_url.$a['attachment']:base_url.'uploads/articles/bg-logo.png';
                                        ?>
                                       <tr>
                                           <td><?php echo $a['id']; ?></td>
                                           <td><img class="img-responsive" width="150" src="<?php echo $file; ?>" /></td>
                                           <td><?php echo $a['article']; ?></td>
                                           <td><?php echo $a['content']; ?></td>
                                           <td>
                                               <a class="btn btn-success" onclick="updateArticle(<?php echo $a['id']; ?>)" >Edit</a>
                                               <a href="delete.php?id=<?php echo $a['id']; ?>" onclick="if(confirm('Are you sure you want to delete this article?')){return true;}else{return false;}" class="btn btn-danger">Delete</a>
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
       $('button#create-article').click(function() {
          var article = $('#form-create-article').find('#article').val();
          var content = $('#form-create-article').find('#content').val();

          if(!article && !content) {
            alert('All fields are required.');
          }

          if(article && content) {
            $('#form-create-article').submit();
          }
       });

       $('button#update-article').click(function() {
          var article = $('#form-update-article').find('#article').val();
          var content = $('#form-update-article').find('#content').val();

          if(article && content) {
            $('#form-update-article').submit();
          }
       });
    });

    function updateArticle(article_id) {
        $('#edit-article').modal('show',true);

        var request = $.ajax({
          url: "<?php echo base_url.'requests/get-article-data.php'; ?>",
          type: "POST",
          data: {article_id: article_id},
          success: function(response){
            var obj = JSON.parse(response);
            $('#form-update-article').find('#article').val(obj[0].article);
            $('#form-update-article').find('#content').val(obj[0].content);
            $('#form-update-article').find('#id').val(obj[0].id);
          }
        });
    }
</script>
<?php include BASE_APP.'/admin/inc/footer.php'; ?>