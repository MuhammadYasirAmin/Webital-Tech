<!-- backend for package order -->
  <?php
  include '../config.php';
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $number = mysqli_real_escape_string($con, $_POST['number']);
        $country = mysqli_real_escape_string($con, $_POST['country']);
        $checkbox1=$_POST['packages'];  
        $chk="";  
        foreach($checkbox1 as $chk1)  
           {  
              $chk .= $chk1.",";  
           }  
        $insertquery = " INSERT INTO orders(username, email, number, country, packages) VALUES('$name', '$email', '$number', '$country', '$chk') ";
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