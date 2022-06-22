



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Appointment</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<nav>
    <img src="loginRegister/assets/painto logo 1.png" alt="">
    <ul>
      <a href="../loginRegister/painters.php"><li>Home</li></a>
      <a href=""><li>services</li></a>
      <a href="./painters.php"><li>painters</li></a>
      <a href="./contact.php"><li>contact</li></a>
    </ul>
    <input type="button" value="Login" id="login">
  </nav>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Your Appointment</h2>








                    
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Reservation Date" name="reservationDate">
                            <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                        </div>
                
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="ladder">
                                    <option disabled="disabled" selected="selected">Ladder</option>
                                
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Start Date" name="startDate">
                            <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="End Date" name="endDate">
                            <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 " type="text" placeholder="Description" name="description">

                        </div>

                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" name="submit">Make Appointment</button>
                        </div>
                    </form>






















                
               


                </div>
            </div>
        </div>
    </div>
    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


      
 <?php
        include"../connection.php";
        if (isset($_POST['submit'])){

      

                  //data  info
               
                  $description = $_POST['description'];      
                  $ladder = $_POST['ladder'];
                  $reservationDate = $_POST['reservationDate'];
                  $startDate= $_POST['startDate'];
                  $endDate = $_POST['endDate'];

                  $sql = "INSERT INTO reservation( `description`,`ladder`, `reservationDate`, `startDate`, `endDate` ) VALUES ( '$description','$ladder', '$reservationDate','$startDate','$endDate' )";
						
                  $query = mysqli_query($conn, $sql);
                  mysqli_close($conn);
                  die();
                

         }

                  ?>

    

                 

</body>

</html>
