<?php
include "../../config.php";
session_start();

$email2 = $_SESSION['email'];
$sql = "SELECT * FROM admin WHERE email='$email2'";
$run = mysqli_query($con, $sql);
$row = mysqli_fetch_array($run);
$U_id = $row['id'];
$uname = $row['username'];
$email = $row['email'];
$password = $row['password'];
//$profile = $row['profile'];
if (!isset($_SESSION['email'])) {
    header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include 'Layout/header.php'; ?>
<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Edit Admin data</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputAddress">UserName</label>
                                    <input type="text" name="username" value="<?= $uname ?>" class="form-control" id="inputAddress" placeholder="Enter username For Blog">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Email</label>
                                    <input type="text" name="email" value="<?= $email ?>" class="form-control" id="inputAddress" placeholder="Enter Email For Blog">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Password</label>
                                    <input type="Password" name="password" value="<?= $password ?>" class="form-control" id="inputAddress" placeholder="Enter Password For Blog">
                                </div>
                                <button type="submit" name="User_edit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                        <?php

                        if (isset($_POST['User_edit'])) {
                            $username = mysqli_real_escape_string($con, $_POST['username']);
                            $email = mysqli_real_escape_string($con, $_POST['email']);
                            $password = mysqli_real_escape_string($con, $_POST['password']);
                            
                            $insertquery = " UPDATE admin SET username='$username', email='$email', password='$password' WHERE Id=$U_id ";
                            $query = mysqli_query($con, $insertquery);
                            if ($query) {
                            ?>
                               <div class="alert alert-success" role="alert">
                                   Profile Updated Successfully
                                </div>

                            <?php } else { ?>
                                <div class="alert alert-danger" role="alert">
                                  Profile Not Updated Successfully
                                </div>
                        <?php  }
                        }


                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'Layout/footer.php'; ?>
</body>


</html>