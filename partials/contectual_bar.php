<?php
include_once('include_teach.php');
?>
<div class="main-panel">
        <div class="content-wrapper">
         <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Teachers record</h4>
                  <button class="btn btn-outline-primary" type="button" id="btn-add"> <span class="mdi mdi-account-plus">&nbsp;Add Staff onclick(ad);</span></button>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Teachers identity
                          </th>
                          <th>
                            Fullname
                          </th>
                          <th>
                            Department code
                          </th>
                          <th colspan="2">
                          Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                           <?php
                           include_once('db.php');
                          $result=mysqli_query($conn,"SELECT * FROM teach_rec")or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($result)){
                          ?>
                            <td><?php echo $row['teacher id'];?></td>
                            <td><?php echo $row['fullname'];?></td>
                            <td><?php echo $row['dept code'];?></td>
                            <td class="mdi mdi-account-convert"><a <?php echo 'Edit';?> href="edit.php"></a></td>
                            <td class="mdi mdi-account-remove"><a <?php echo 'Delete';?> href="delete.php"></a></td>
                          <?php
                          }
                          ?>

                        </tr>
                        <tr class="table-warning">
                          
                        </tr>
                        <tr class="table-danger">
                          
                        </tr>
                        <tr class="table-success">
                          
                        </tr>
                        <tr class="table-primary">
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      