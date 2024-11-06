<!-- Create Student Modal -->
<div class="modal" id="create-modal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header btn-primary">
        <h4 class="modal-title">Create Student Issue</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
         <form action="create.php" method="POST" id="form-create-student-issue">
           <div class="row">
              <div class="col">
                  <smal><span class="text-danger">*</span> All fields are required.</smal>
                  <div class="form-group">
                    <label for="username">Student <span class="text-danger">*</span></label>
                    <select name="user_id" class="form-control" id="user_id" required>
                      <option value="" selected disabled>Select Student</option>
                      <?php foreach($students as $student): ?>
                      <option value="<?php echo $student['user_id']; ?>"><?php echo $student['username']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="username">Student Issue <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="issue" id="issue" rows="10"></textarea>
                  </div>
              </div>
           </div>
         </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="create-student-issue">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

<!-- Edit Student Modal -->
<div class="modal" id="edit-modal">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header btn-primary">
        <h4 class="modal-title">Update Student Issue</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
         <form action="edit.php" method="POST" id="form-update-student-issue">
           <div class="row">
              <div class="col">
                  <smal><span class="text-danger">*</span> All fields are required.</smal>
                  <div class="form-group">
                    <label for="username">Student <span class="text-danger">*</span></label>
                    <select name="user_id" class="form-control" id="user_id" required>
                      <option value="" selected disabled>Select Student</option>
                      <?php foreach($students as $student): ?>
                      <option value="<?php echo $student['user_id']; ?>"><?php echo $student['username']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="username">Student Issue <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="issue" id="issue" rows="10"></textarea>
                  </div>
                  <input type="hidden" name="issue_id" value="" id="issue_id" />
              </div>
           </div>
         </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="update-student-issue">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

