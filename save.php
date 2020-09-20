<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form</title>
  <link rel="stylesheet" href="style.css">
  <script   src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  
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
<body>

<div class="container">
    <form class="well form-horizontal" method="post" >
<fieldset>
<!-- Form Name -->
<legend class="center">FORM!</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" id="name" placeholder=" Name" class="form-control"  type="text" maxlength="15">
  </div>
  </div>
</div>



<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Email ID</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" id="email" placeholder="@gmail.com" maxlength="25" class="form-control" type="email">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
   <option> Andaman & Nicobar</option>
	<option>Andhra Pradesh</option>
	<option>Arunachal Pradesh</option>
	<option>Assam</option>
	 <option>Bihar</option>
	<option>Chandigarh (UT</option>)
	 <option>Chattisgarh</option>
	 <option>Dadar & Nagar Haveli</option>
	 <option>Daman & Diu</option>
	<option>Delhi</option>
	<option>Goa</option>
	<option>Gujarat</option>
	<option>Haryana</option>
	<option>Himachal Pradesh</option>
	<option>Jammu & Kashmir</option>
	<option>Jharkhand</option>
	<option>Karnataka</option>
	<option>Kerala</option>
	<option>Lakshadweep</option>
	<option>Madhya Pradesh</option>
	<option>Maharashtra</option>
	<option>Manipur</option>
	<option>Meghalaya</option>
	<option>Mizoram</option>
	<option>Nagaland</option>
	<option>Orissa</option>
	<option>Puducherry</option>
	<option>Punjab</option>
	<option>Rajasthan</option>
	<option>Sikkim</option>
	<option>Tamil Nadu</option>
	<option>Telengana</option>
	<option>Tripura</option>
	<option>UP</option>
	<option>Uttarakhand</option>
	<option>West Bengal</option>


    </select>
  </div>
</div>
</div>



<div class="form-group"> 
  <label class="col-md-4 control-label">Category</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="category" class="form-control selectpicker" >
      <option value=" " >Please select Gneder</option>
     	 <option>GEN-EWS</option>
		 <option>GEN-EWS(PwD)</option>
		 <option>OBC-NCL</option>
		<option>OBC-NCL(PwD)</option>
		<option>OPEN</option>
		<option>OPEN (PwD)</option>
		<option>SC</option>
		<option>SC (PwD)</option>
		<option>ST</option>
		<option>ST (PwD)</option>


    </select>
  </div>
</div>
</div>



<div class="form-group"> 
  <label class="col-md-4 control-label">Gender</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="gender" class="form-control selectpicker" >
      <option value=" " >Please select Gender </option>
      <option>Male</option>
      <option>Female</option>
  

    </select>
  </div>
</div>
</div>
      
<div class="form-group">
  <label class="col-md-4 control-label">JEE Main Rank</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="rank" id="address" placeholder="Rank" maxlength="40" class="form-control" type="number">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group"> 
  <label class="col-md-4 control-label">Type of Institutions</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="type" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>All</option>
      <option>IIIT</option>
      <option>IIT</option>
      <option>NIT</option>
      <option>Others</option>
    </select>
  </div>
</div>
</div>



<div class="form-group"> 
  <label class="col-md-4 control-label">Institutions</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="inst" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
All
<option>Assam University, Silchar</option>
<option>BIT, Mesra</option>
<option>Central University, Rajasthan</option>
<option>CIT, Kokrajar, Assam</option>
<option>GKCIET, Malda (WB)</option>
<option>GKV, Haridwar</option>
<option>HNB Garhwal University</option>
<option>IICT, Bhadohi</option>
<option>IIEST, Shibpur</option>
<option>IIIT, Agartala</option>
<option>IIIT, Allahabad</option>
<option>IIIT, Bhagalpur</option>
<option>IIIT, Bhopal</option>
<option>IIIT, Bhubaneswar</option>
<option>IIIT, Chitoor</option>
<option>IIIT, Dharwad</option>
<option>IIIT, Guwahati</option>
<option>IIIT, Kalyani</option>
<option>IIIT, Kota</option>
<option>IIIT, Kottayam</option>
<option>IIIT, Lucknow</option>
<option>IIIT, Manipur</option>
<option>IIIT, Nagpur</option>
<option>IIIT, Naya Raipur</option>
<option>IIIT, Pune</option>
<option>IIIT, Raichur</option>
<option>IIIT, Ranchi</option>
<option>IIIT, Sonepat</option>
<option>IIIT, Surat</option>
<option>IIIT, Tiruchirapali</option>
<option>IIIT, Una</option>
<option>IIIT, Vadodara</option>
<option>IIITDM, Jabalpur</option>
<option>IIITDM, Kancheepuram</option>
<option>IIITDM, Kurnool, AP</option>
<option>IIITM, Gwalior</option>
<option>IIT (ISM) Dhanbad</option>
<option>IIT BHU, Varanasi</option>
<option>IIT Bhubaneswar</option>
<option>IIT, Bhilai</option>
<option>IIT, Bombay</option>
<option>IIT, Delhi</option>
<option>IIT, Dharwad</option>
<option>IIT, Gandhinagar</option>
<option>IIT, Goa</option>
<option>IIT, Guwahati</option>
<option>IIT, Hyderabad</option>
<option>IIT, Indore</option>
<option>IIT, Jammu</option>
<option>IIT, Jodhpur</option>
<option>IIT, Kanpur</option>
<option>IIT, Kharagpur</option>
<option>IIT, Madras</option>
<option>IIT, Mandi</option>
<option>IIT, Palakkad</option>
<option>IIT, Patna</option>
<option>IIT, Roorkee</option>
<option>IIT, Ropar</option>
<option>IIT, Tirupati</option>
<option>IITRM, Ahmedabad</option>
<option>IT GGV, Bilaspur</option>
<option>JKIAPT, Allahabad</option>
<option>JNU, Delhi</option>
<option>Mizoram University, Aizawl</option>
<option>NIEIT, Aurangabad</option>
<option>NIFFT, Ranchi</option>
<option>NIFTEM, Sonepat</option>
<option>NIT, Agartala</option>
<option>NIT, Allahabad (MNNIT)</option>
<option>NIT, Andhra Pradesh</option>
<option>NIT, Arunachal</option>
<option>NIT, Bhopal</option>
<option>NIT, Calicut</option>
<option>NIT, Delhi</option>
<option>NIT, Durgapur</option>
<option>NIT, Goa</option>
<option>NIT, Hamirpur</option>
<option>NIT, Jaipur (M<option>NIT)</option>
<option>NIT, Jalandhar</option>
<option>NIT, Jamshedpur</option>
<option>NIT, Kurukshetra</option>
<option>NIT, Manipur</option>
<option>NIT, Meghalaya</option>
<option>NIT, Mizoram</option>
<option>NIT, Nagaland</option>
<option>NIT, Nagpur (V<option>NIT)</option>
<option>NIT, Patna</option>
<option>NIT, Puducherry</option>
<option>NIT, Raipur</option>
<option>NIT, Rourkela</option>
<option>NIT, Sikkim</option>
<option>NIT, Silchar</option>
<option>NIT, Srinagar</option>
<option>NIT, Surat (SVNIT)</option>
<option>NIT, Surathkal</option>
<option>NIT, Tiruchirapalli</option>
<option>NIT, Uttarakhand</option>
<option>NIT, Warangal</option>
<option>PEC, Chandigarh</option>
<option>PEC, Puducherry</option>
<option>School of Engineering, Tezpur</option> 
<option>SLIET</option>
<option>SMVDU, Katra</option>
<option>SPA, Bhopal</option>
<option>SPA, New Delhi</option>
<option>SPA, Vijayawada</option>
<option>University of Hyderabad</option>

    </select>
  </div>
</div>
</div>




<div class="form-group"> 
  <label class="col-md-4 control-label">Branch</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="branch" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
<option>Aerospace Engineering</option>
<option>Aerospace Engineering (5 year)</option>
<option>Agricultural and Food Engineering</option>
<option>Agricultural and Food Engineering (5 Year)</option>
<option>Agriculture Engineering</option>0
<option>Applied Geology (MSc 5 yr)</option>
<option>Applied Geology (MTech 5 yr)</option>
<option>Applied Mathematics (MSc 5 yr)</option>
<option>Architecture  (5 Yrs)</option>
<option>Artificial Intelligence </option>
<option>Bio Medical</option>
<option>Biochemics (5yr. M.Tech)</option>
<option>Bio-Engineering</option>
<option>Bio-Engineering (5 yr. M.Tech)</option>
<option>Biological Engineering (5 yr. M.Tech)</option>
<option>Biological Sciences (5 yr. M.Sc)</option>
<option>Biotechnology</option>
<option>Biotechnology (5 yr. M.Tech)</option>
<option>Ceramic Engineering</option>
<option>Ceramic Engineering (5 yrs. M.Tech)</option>
<option>Chemical Engineering</option>
<option>Chemical Engineering (5 yr. M.Tech)</option>
<option>Chemical Science (B.Tech)</option>
<option>Chemistry (5yr. MS)</option>
<option>Chemistry (BS)</option>
<option>Civil Engineering</option>
<option>Civil Engineering (5 yr. M.Tech)</option>
<option>CSE</option>
<option>CSE (5yr. M.Tech)</option>
<option>Data Science & AI (B.Tech)</option>
<option>Data Science (B.Tech)</option>
<option>Earth Sciences (BS)</option>
<option>ECE</option>
<option>ECE (5yr M.Tech)</option>
<option>Economics (5yr. MS)</option>
<option>Economics (BS)</option>
<option>EEE</option>
<option>Electrical</option>
<option>Electrical & Electronics</option>
<option>Electrical (5 yr. M.Tech)</option>
<option>Electronics</option>
<option>Electronics (Instrumentation)</option>
<option>Electronics (System)</option>
<option>Energy Engineering (5 yr. M.Tech)</option>
<option>Engineering Design (5 yr. M.Tech)</option>
<option>Engineering Physics (5 yr. M.Tech)</option>
<option>Engineering Physics (B.Tech)</option>
<option>Engineering Science (B.Tech)</option>
<option>Environmental Engineering </option>
<option>Environmental Engineering (5 y. M.Tech)</option>
<option>Food Technology</option>
<option>Geological Technology (5 yr. M.Tech)</option>
<option>Geophysical Technology (5 yr. M.Tech)</option>
<option>Geophysics (5 yr. MS)</option>
<option>Industrial Chemistry (5 yr. M.Tech)</option>
<option>Industrial Design</option>
<option>Industrial Engineering</option>
<option>Industrial Engineering (5 yr. M.Tech)</option>
<option>Instrumentation</option>
<option>Instrumentation & Control</option>
<option>Integrated B.Tech + MBA (IT)</option>
<option>IT</option>
<option>Life Science (5 yr. MS)</option>
<option>Manufacturing Engineering</option>
<option>Manufacturing Engineering (5 yr. M.Tech)</option>
<option>Material Science (5 yr. M.Tech)</option>
<option>Materials Science (B.Tech)</option>
<option>Mathematics (5 yr. MS)</option>
<option>Mathematics and Computing (B.Tech)</option>
<option>Mathematics and Computing (BS)</option>
<option>Mathematics and Computing (M.Tech)</option>
<option>Mathematics and Computing (MS)</option>
<option>Mathematiics (BS)</option>
<option>Mechanical</option>
<option>Mechanical (5 yr. M.Tech)</option>
<option>Mechatronics</option>
<option>Metallurgy</option>
<option>Metallurgy (5 yr. M.Tech)</option>
<option>Mineral Engineering</option>
<option>Mining Engineering</option>
<option>Mining Engineering (5 yr. M.Tech)</option>
<option>Mining Machinery Engineering</option>
<option>Mining Safety Engineering (5 yr. M.Tech)</option>
<option>Naval Architecture and Ocean Engineering</option>
<option>Naval Architecture and Ocean Engineering (5 yr. M.Tech)</option>
<option>Petroleum Engineering</option>
<option>Pharmaceutical Engineering</option>
<option>Pharmaceutical Engineering (5 yr. M.Tech)</option>
<option>Physics (BS)</option>
<option>Physics (MS)</option>
<option>Planning (B.Plan)</option>
<option>Polymer Engineering</option>
<option>Production Engineering</option>
<option>Quality Engineering Design (5 yr. M.Tech)</option>
<option>Textile Technology</option>

    </select>
  </div>
</div>
</div>
<center>
<button class="btn btn-success" type="Submit" name="save">Submit</button></center>
</form>




<?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $Name = $_POST['name'];
	 $email = $_POST['email'];
	 $state = $_POST['state'];
	 $Category = $_POST['category'];
	 $Gender = $_POST['gender'];
	 $Rank = $_POST['rank'];
	 $Type_of_Institution = $_POST['type'];
	 $Inst = $_POST['inst'];
	 $Branch = $_POST['branch'];
	 $sql = "INSERT INTO raw_data (Name,email,State,Category,Gender,Rank,Type_of_Institution,Institution,Branch)
	 VALUES ('$Name','$email','$state','$Category','$Gender','$Rank','$Type_of_Institution','$Inst','$Branch')";
	 if (mysqli_query($connection, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
}
?>



<?php
$con=mysqli_connect("localhost","root","root","intership");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM raw_data LIMIT 25");

echo "<table >
<tr>
<th >Institution</th>
<th>Branch</th>
<th>Last Rank</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>" . $row['Institution'] . "</td>";
echo "<td>" . $row['Branch'] . "</td>";
echo "<td>" . $row['Rank'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>



</body>
</html>