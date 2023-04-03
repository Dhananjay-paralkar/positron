<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
        html {
          box-sizing: border-box;
        }
        
        *, *:before, *:after {
          box-sizing: inherit;
        }
        
        .column {
          float: left;
          width: 33.3%;
          margin-bottom: 16px;
          padding: 0 8px;
        }
        
        @media screen and (max-width: 650px) {
          .column {
            width: 100%;
            display: block;
          }
        }
        
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        
        .container {
          padding: 0 16px;
        }
        
        .container::after, .row::after {
          content: "";
          clear: both;
          display: table;
        }
        
        .title {
          color: grey;
        }
        
        .button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
        }
        
        .button:hover {
          background-color: #555;
        }
        </style>

<body>
<h3 style="margin-right: 50%">Product details</h3>
    <div class="container mt-3">
      <form method="post">
          <label>Category Name:-</label>
          <select>
          <?php
          $sql = "SELECT Distinct CategoryName FROM category";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          ?>

              <option value=" style= margin-left: 90% <?php echo $row['CategoryName']?>"><?php echo $row['CategoryName']?></option>

              <?php

          }
          } else {
              echo "0 results";
          }


          ?>

          </select>
          
          <label>Sub Category Name:-</label>
          <select >             
             <?php
              $sql = "SELECT SubCategory FROM category";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      ?>

                      <option value="<?php echo $row['SubCategory']?>"><?php echo $row['SubCategory']?></option>

                      <?php

                  }
              } else {
                  echo "0 results";
              }
              
              ?>

            </select>
            

      </form>
    </div>
    <br>
    <!-- card -->
    <div class="card">
    
<div class="container p-3 my-3">
    <?php
        $sql="SELECT ProductName,ProductImage,ProductPrice,ProductDescription FROM category";
        $result = $conn->query($sql);
        if ($result->num_rows>0){

          while($row=$result->fetch_assoc()){
            ?>
            <!--<div class="row">-->
            
              <div class="column">
            <div class="card" div  style="width: 18rem;display: flex;">
            <img src="oneplus9_1.jpg" alt="one plus"  width="100" height="100">
            
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $row['ProductName']?></h5>
                    <p class="card-text">"<b>Discription</b><?php echo $row['ProductDescription']?>"</p>
                    <p class="card-text">"<b>Price</b><?php echo $row['ProductPrice']?>"</p>
                    
                     <!-- <form action="C:\xampp\htdocs\php_practice\order_detail.html">  -->
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
            </div>
        
           <?php
           }
        }else {
          echo "0 result";
        }
        ?>
  </body>
</html>



































































































<!-- <form action="welcome.php" method="post"> -->
<!-- <div class="container mt-3"> 
        <h2>Category Details</h2>
        <form method="post">
        <label for="fruits">Select category:</label>
        <select id="category" name="CategoryName">
            <!-- category
            <?php
              $sql = "SELECT Distinct CategoryName FROM  tblproduct";
              $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               // output data of each row
                  while($row = $result->fetch_assoc()) {
                ?>
                <option value=" style= margin-left: 90% <?php echo $row['CategoryName']?>"><?php echo $row['CategoryName']?></option>
                <?php
                 }
                } else {
                    echo "0 results";
                }
                ?>
                </select> 

                <!-- subcategory -->
                <!-- <label for="fruits">Select :</label>
                <select id="Subcategory" name="txtSubcategoryName">
                     <?php
                    $sql = "SELECT txtSubcategoryName FROM  tblproduct";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $row['txtSubcategoryName']?>"><?php echo $row['txtSubcategoryName']?></option>
                            <?php

                             }
                            } else {
                                 echo "0 results";

                                  } 
                                  ?>
                               </select>
                               </div> -->  





 



































































































