<?php
include "../../config.php";

if (isset($_POST['post_id'])) {
  $Ids = $_POST['post_id'];
  $selquery = " SELECT * FROM orders WHERE id = $Ids ";
  $result = mysqli_query($con, $selquery) or die("Query Failed: Select from fetch");
  $row = mysqli_fetch_array($result);
  $packages = $row['packages'];
  // use of explode
  $string = "$packages";
  $str_arr = explode (",", $string); 
  
}
?>

 <div class="modal-header">
        <h5 class="modal-title" id="BlogModalLabel">Service Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <h2>Custom Packages</h2>
        <?php 
          foreach ($str_arr as $key) {
            ?>
        <p><?php echo htmlspecialchars($key);?></p>
        <?php
          }

           ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>