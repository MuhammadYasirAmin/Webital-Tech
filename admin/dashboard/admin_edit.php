<?php
include "../../config.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../');
}
else{
   $permission = $_SESSION['is_admin']; 
}
if ($permission == 2) {
    header("location: javascript://history.go(-1)");
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
                                <h3 class="m-0">Insert Category data</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            <?php
                                $ide = $_GET['Id'];
                                        $sql = "SELECT * FROM admin WHERE is_admin in (1,2) and id=$ide";
                                        $run = mysqli_query($con, $sql);
                                        $row = mysqli_fetch_array($run);
                                        $id = $row['id'];
                                        $username = $row['username'];
                                        $email = $row['email'];
                                        $is_admin = $row['is_admin'];

                                        ?>
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="inputAddress">UserName</label>
                                    <input type="text" name="username" value="<?= $username ?>" class="form-control" id="inputAddress" placeholder="Enter username For Blog">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Email</label>
                                    <input type="text" name="email" value="<?= $email ?>" class="form-control" id="inputAddress" placeholder="Enter Email For Blog">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Password</label>
                                    <input type="Password" name="password" value="<?= $password ?>" class="form-control" id="inputAddress" placeholder="Enter Password For Blog">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Permission</label>
                                    <select id="inputState" name="permission" class="form-control" value="<?= $is_admin ?>" required>
                                        <option value="<?= $is_admin ?>">Choose...</option>
                                        <option value="1">Full Control</option>
                                        <option value="2">Restricted Control</option>
                                    </select>
                                </div>
                                <button type="submit" name="User_edit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                        <?php

                        if (isset($_POST['User_edit'])) {
                            $username = mysqli_real_escape_string($con, $_POST['username']);
                            $email = mysqli_real_escape_string($con, $_POST['email']);
                            $password = mysqli_real_escape_string($con, $_POST['password']);
                             $per = mysqli_real_escape_string($con, $_POST['permission']);
                            if ($per=='1') {
                                $is_admin=1;
                            }
                            elseif ($per=='2') {
                                $is_admin=2;
                            }
                            $insertquery = " UPDATE admin SET username='$username', email='$email', password='$password', is_admin=$is_admin WHERE Id=$ide ";
                            $query = mysqli_query($con, $insertquery);
                            if ($query) {
                                ?>
                                    <script>
                                        window.location.href = "admin_table.php";
                                    </script>
                                <?php
                            } else { ?>
                                <div class="alert alert-danger" role="alert">
                                    User Accounct Not Updated Successfully
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