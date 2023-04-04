<!-- updated product category page -->
<?php
error_reporting(0);

$CategoryName=$_POST['txtcategoryName'];
$SubCategory=$_POST['txtSubcategoryName'];
$BrandName=$_POST['txtBrandName'];
$CategoryName=$_POST['txtCategoryName'];
 $ProductName=$_POST['txtProductName'];
// $ProductImage=$_POST['ProductImage'];
 $frontProductImage=$_POST['frontProductImage'];
 $backProductImage=$_POST['backProductImage'];
 $sideProductImage=$_POST['sideProductImage'];
$ProductColor=$_POST['txtProductColor'];
$ProductSize=$_POST['txtProductSize'];
$ProductPrice=$_POST['txtProductPrice'];
$MrpPrice=$_POST['txtMrpPrice'];
$SellingPrice=$_POST['txtSellingPrice'];
$ProductDescription=$_POST['txtProductDescription'];
// $term=$_POST['txtterm'];


$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["ProductImage"]["name"]);
$frontimg = $target_dir . basename($_FILES["frontfileToUpload"]["name"]);

$backimg = $target_dir . basename($_FILES["backfileToUpload"]["name"]);
$sideimg = $target_dir . basename($_FILES["sidefileToUpload"]["name"]);

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

if (move_uploaded_file($_FILES["ProductImage"]["tmp_name"], $target_file)) {
  //echo "The product file ". htmlspecialchars( basename( $_FILES["ProductImage"]["name"])). " has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
}   


// front image
  if (move_uploaded_file($_FILES["frontfileToUpload"]["tmp_name"], $frontimg)) {
    //echo "The front file ". htmlspecialchars( basename( $_FILES["frontfileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }   

// back image
  if (move_uploaded_file($_FILES["backfileToUpload"]["tmp_name"], $backimg)) {
    //echo "The back file ". htmlspecialchars( basename( $_FILES["backfileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

// side image
  if (move_uploaded_file($_FILES["sidefileToUpload"]["tmp_name"], $sideimg)) {
    //echo "The side file ". htmlspecialchars( basename( $_FILES["sidefileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }


    // connection
$conn = mysqli_connect('localhost:3306','root', '','rental system');

$sql = "INSERT INTO  tblproduct(BrandName,CategoryName,ProductName,ProductImage,frontProductImage,backProductImage,sideProductImage,ProductColor,ProductSize,ProductPrice,MrpPrice,SellingPrice,ProductDescription) 
VALUES('$BrandName','$CategoryName','$ProductName','$target_file','$frontimg','$backimg','$sideimg','$ProductColor','$ProductSize','$ProductPrice','$MrpPrice','$SellingPrice','$ProductDescription')";
if ($conn->query($sql) === TRUE) {
  echo " Record inserted successfully.";
 } 
else
 {
  echo "not inserted.";
 }


?>
<table border="1" align="center" width="80%">
  <tr>
    <th>ProductID</th>
    <th>BrandName</th>
    <th>CategoryName</th>
    <th>ProductName</th>
    <th>ProductImage</th>
    <th>frontProductImage</th>
    <th>backProductImage</th>
    <th>sideProductImage</th>
    <th>ProductColor</th>
    <th>ProductSize</th>
    <th>ProductPrice</th>
    <th>MrpPrice</th>
    <th>SellingPrice</th>
    <th>ProductDescription</th>
  </tr>


  <?php
//  select the data 
$s="SELECT ProductID,BrandName,CategoryName,ProductName,ProductImage,frontProductImage,backProductImage,sideProductImage,ProductColor,ProductSize,ProductPrice,MrpPrice,SellingPrice,ProductDescription FROM tblproduct";
$result = $conn->query($s);

if ($result->num_rows > 0) 
{
   // output data of each row
   while($row = $result->fetch_assoc()) {
?>
 <tr>
  <td><?php echo $row["ProductID"];?></td>
  <td><?php echo $row["BrandName"];?></td>
  <td><?php echo $row["CategoryName"];?></td>
  <td><?php echo $row["ProductName"];?></td>
  <td><img src="<?php echo $row['ProductImage']?>" height='50px;' width="50px"alt='<?php echo $row["BrandName"]; ?>' ></td>
  <td><img src="<?php echo $row['frontProductImage']?>" height='50px;' width="50px"alt='<?php echo $row["BrandName"]; ?>' ></td>
  <td><img src="<?php echo $row['backProductImage']?>" height='50px;' width="50px"alt='<?php echo $row["BrandName"]; ?>' ></td>
  <td><img src="<?php echo $row['sideProductImage']?>" height='50px;' width="50px"alt='<?php echo $row["BrandName"]; ?>' ></td>
  <td><?php echo $row["ProductColor"];?></td>
  <td><?php echo $row["ProductSize"];?></td>
  <td><?php echo $row["ProductPrice"];?></td>
  <td><?php echo $row["MrpPrice"];?></td>
  <td><?php echo $row["SellingPrice"];?></td>
  <td><?php echo $row["ProductDescription"];?></td>
  
    <?php
   }
  }
  else {
    echo "0 results";
    }
    ?>
  </tr>
</table>

<?php
$conn->close();
?>