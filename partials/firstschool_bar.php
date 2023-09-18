<?php
session_start();
$users=$_SESSION['user'];
?>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kontec international school </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<?php
include_once('_settings-panel.html');


include_once('_navbar.html');
include_once('_sidebar.html');
?>
 <div class="main-panel">
        <div class="content-wrapper">
          
            <div class="col-lg-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Student Record</h4>
                  <button class="btn btn-outline-info" type="button" id="btn-add" font-color="#fff"> <span class="mdi mdi-account-plus"></span> &nbsp;<a href="admin_form.php">Add Student</a></button>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Admission number
                          </th>
                          <th>
                            Fullname
                          </th>
                          <th>
                            Date Of Birth
                          </th>
                          <th>
                            Gender
                          </th>
                          <th>
                          Contact address
                          </th>
                          <th>
                            Admission Date
                          </th>
                          <th>
                            Class
                          </th>
                          <th colspan="2">
                          Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include_once('db.php');

                          $result=mysqli_query($conn,"SELECT * FROM stud_rec")or die(mysqli_error($conn));
                          while($row=mysqli_fetch_array($result))
                          {
                          ?>
                            <td><?php echo $row['ad_no'];?></td>
                            <td><?php echo $row['fullname'];?></td>
                            <td><?php echo $row['dob'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['cont_address'];?></td>
                            <td><?php echo $row['ad_date'];?></td>
                            <td><?php echo $row['klass'];?></td>
                            <td class="mdi mdi-account-convert"><a <?php echo $row['Edit'];?> href="edit.php"></a></td>
                            <td class="mdi mdi-account-remove"><a <?php echo $row['Delete'];?> href="delete.php"></a></td>
                          <?php
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
include_once('_footer.html');
?>
</html>