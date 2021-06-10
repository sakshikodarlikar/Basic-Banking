<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yes bank</title>
    <link rel="shortcut icon" href="img/yeslogo.png.png" >

    <style>
        .header-right{
        position: relative;
        bottom: 250px;
    }
    .header {
        /* overflow: hidden; */
        background-color: transparent;
        padding: 300px 10px;
    }

    .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        /* line-height: 25px; */
        border-radius: 4px;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }

    .header a:hover {
        background-color: #ddd;
        color: black;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .header-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }
    .logo{
        position: relative;
        bottom: 250px;
    }
    #slogan{
        position: relative;
        right: 90px;
        color: black;
        bottom: 200px;
    }

        table{
           
border-bottom: 1px solid #ddd;
border-collapse: collapse;
width: 100%;
font-size: 25px;
text-align: left;
border: 1px solid black;


}
td,tr,th{
    border: 1px solid black;

}

#sen{
    position: absolute;
            top: 200px;
}
#rec{
    position: absolute;
    top: 400px;
}
#from{
    position: absolute;
    top: 160px;
}
#to{
    position: absolute;
    top: 360px;
}
#money{
    position: absolute;
    top: 500px;
    right: 540px;
}
#submit{
    position: absolute;
    top: 570px;
    right: 690px;
}
input[type=number] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid blue;
  border-radius: 4px;
}
button{
    border-radius: 12px;
  
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  /* border-radius: 15px; */
  box-shadow: 0 9px #999;
}

</style>

</head>
<body>
<div class="header">
        <a href="index.php" class="logo" style="height: 50px; width: 90px;"><img src="img/yeslogo.png.png" alt="yes"></a>
        <p id="slogan">Say yes to connecting people!</p>
        <div class="header-right">
            <a class="active" href="index.php">Home</a>
            <!-- <a href="#contact">Contact</a> -->
            <!-- <a href="#about" id="about">About</a> -->
        </div>

    </div>
<table id="sen">
<tr>
<th>Number</th>
<th>Name</th>
<th>Email</th>
<th>Balance</th>
</tr>

    <p id="from">From:</p>
    <?php
$id=$_GET['sender'];
$selected_val = 0;
$conn = mysqli_connect("localhost", "root", "", "banking");

$sql = "SELECT * FROM customer WHERE number = '$id' ";

$result = $conn -> query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<tr><td>" . $row["number"]. "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>". $row["balance"]. "</td><tr>" ;
    }
}
?>
</table>
<table id="rec">
<tr>
<th>Number</th>
<th>Name</th>
<th>Email</th>
<th>Balance</th>
</tr>

<p id="to">To:</p>

<?php

$rec=$_POST['taskOption'];
$selected_val = 0;
$conn = mysqli_connect("localhost", "root", "", "banking");

$sql = "SELECT * FROM customer WHERE number = '$rec' ";

$result = $conn -> query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<tr><td>" . $row["number"]. "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>". $row["balance"]. "</td><tr>" ;
    }
}
?>


</table>
<form method="post" action="money.php?sender=<?php echo $id ; ?>&receiver=<?php echo $rec ; ?>">
<input type="number" id="money" name="money" value="100"><br>
<button type="submit" value="Submit" id="submit">Transfer</button>
</form>

</body>
</html>