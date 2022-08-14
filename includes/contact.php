<!-- backend for Contact Us -->
  <?php
  include '../config.php';
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $number = mysqli_real_escape_string($con, $_POST['number']);
        $country = mysqli_real_escape_string($con, $_POST['country']);
        $interest = mysqli_real_escape_string($con, $_POST['interest']);
        $budget = mysqli_real_escape_string($con, $_POST['budget']);
        $description = mysqli_real_escape_string($con, $_POST['description']);

        if ($interest == '') {
          $interest = " - ";
        }
        if ($budget == '') {
          $budget = " - ";
        }

        if ($country == '') {
          $country = " - ";
        }
        
        $insertquery = " INSERT INTO contact(username, email, number, country, interested, budget, message) VALUES('$name', '$email', '$number', '$country', '$interest', '$budget', '$description') ";
        $query = mysqli_query($con, $insertquery);
        if ($query) {
      ?>
        <script>
          window.location.href = "thank-you.php";
        </script>
     <?php } else { ?>
            <script>
              alert("Not Submit Successfully");
            </script>
    <?php  }
    }


    ?>
  <!-- backend end -->

  <!-- backend for Book A Call -->
  <?php
    if (isset($_POST['book'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $number = mysqli_real_escape_string($con, $_POST['number']);
        $date = mysqli_real_escape_string($con, $_POST['date']);
        $description = mysqli_real_escape_string($con, $_POST['description']);
        
        $insertquery = " INSERT INTO booking(username, email, number, date, description) VALUES('$name', '$email', '$number', '$date', '$description') ";
        $query = mysqli_query($con, $insertquery);
        if ($query) {
      ?>
        <script>
          window.location.href = "thank-you.php";
        </script>
     <?php } else { ?>
            <script>
              alert("Not Submit Successfully");
            </script>
    <?php  }
    }


    ?>
  <!-- backend end -->