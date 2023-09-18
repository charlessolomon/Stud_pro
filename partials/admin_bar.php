<?php
include_once('include.php');
?>
<div class="main-panel">
        <div class="content-wrapper">
          
          <div class="col-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form action="create.php" method="POST">
                    <div class="form-group">
                      <label for="ad_no">Admin number</label>
                      <input type="text" class="form-control" id="ad_no" name="ad_no" placeholder="Admin no">
                    </div>
                    <div class="form-group">
                      <label for="fullname">Fullname</label>
                      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="dobb">Date of birth</label>
                      <input type="date" class="form-control" id="dobb" name="dobb" placeholder="Dob">
                    </div>
                    <div class="form-group">
                      <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Contact address</label>
                      <input type="text" class="form-control" id="cont_address" name="cont_address" placeholder="Address">
                      
                    </div>
                    <div class="form-group">
                      <label for="ad_date">Admission date</label>
                      <input type="date" class="form-control" id="ad_date" name="ad_date" placeholder="Date">
                    </div>
                    <div class="form-group">
                     <label for="Choice of Course">Choice of Course:</label>    
                     <input type="text" id="course" name="course" list="bck" placeholder='Course Name' class='form-control'><datalist id="bck">
                     <?php $result=mysqli_query($conn,"SELECT * FROM course_reg");
                                    
                    while($row = mysqli_fetch_array($result))
                    {?>
                     <option> <?php echo $row['course'];?>
                     <?php }?>
                    </option></datalist>
                    </div>
                    <div class="form-group">
                      <label for="klass">Class</label>
                      <input type="text" class="form-control" id="klass" name="klass" placeholder="Class">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
      