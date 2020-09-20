<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Excel(CSV) file with PHP - CodingBirdsOnline.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
</head>
<body>

    <style type="text/css">
        
table { 
  width: 100%; 
  border-collapse: collapse; 
  font-family: "Times New Roman", Times, serif;
  background-color: #fff;
}
s
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
 
  text-align: left; 
}</style>
<div class="jumbotron text-center">
    <h1>Upload Excel(CSV)</h1>
    <p></p>
</div>
<div class="container">
    <form action="excel-script.php" method="post" enctype="multipart/form-data">
       <div class="row">
           <div class="col-md-4">
               <div class="form-group">
                   <input type="file" name="excelDoc" id="excelDoc" class="form-control" />
               </div>
           </div>
           <div class="col-md-4">
               <input type="submit" name="uploadBtn" id="uploadBtn" value="Upload Excel" class="btn btn-success" />
           </div>
       </div>
    </form>
</div>


<?php
$con=mysqli_connect("localhost","root","root","intership");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM raw_data");

echo "<table >
<tr>
<th>ID</th>
<th >Institution</th>
<th>State</th>
<th>Branch</th>
<th>Category</th>
<th>Gender</th>
<th>Openning Rank</th>
<th>Closing Rank</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['Institution'] . "</td>";
echo "<td>" . $row['State'] . "</td>";
echo "<td>" . $row['Branch'] . "</td>";
echo "<td>" . $row['Category'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['Openning_Rank'] . "</td>";
echo "<td>" . $row['Closing_Rank'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>