<!-- <button type="button">Click Me!</button> -->
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
border: 1px solid black;

border-collapse: collapse;
width: 100%;
font-size: 25px;
text-align: left;
position: absolute;
top: 200px;}
#transfer{
  position: absolute;
  top: 300px;
  left: 700px;
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
#receive{
  position: absolute;
  top: 400px;
  left: 700px;
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
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#op{
  width: 30%;
  border: 3px solid #555;

}
#submit{
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
select{
  width: 30%;
  height: 10%;
  position: absolute;
  top: 500px;
  left: 550px;
  font-size: large;
}
#submit{
  position: absolute;
  top: 600px;
  left: 715px;
}
td,tr,th{
    border: 1px solid black;

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
<table>
<tr>
<th>Number</th>
<th>Name</th>
<th>Email</th>
<th>Balance</th>
</tr>


<?php

$id=$_GET['id'];
$selected_val = 0;
$conn = mysqli_connect("localhost", "root", "", "banking");

$sql = "SELECT * FROM customer WHERE number = '$id' ";

$result = $conn -> query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<tr><td>" . $row["number"]. "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>". $row["balance"]. "</td><tr>" ;
    }
}
$sql = "SELECT number,name FROM customer ";
$result = $conn -> query($sql);
?>
<form method="post" action="transferpage.php?sender=<?php echo $id ; ?>"><select id='op' name='taskOption'>
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<option value='". $row['number'] ."'>". $row['number'] ."-" .$row['name'] ."</option>"; // displaying data in option menu

    }
}
echo "<input type='submit' id='submit' value='Select' />";
echo "</select></form>";
$conn->close();
?>



<br>
<button type="button" id="transfer" onclick="myfun()">Transfer</button>
<button type="button" id="receive" onclick="myop()">Receiver</button>

<script>

var x = document.getElementById("receive");
x.style.display = "none";

function myfun() {
  var x = document.getElementById("receive");
  if (x.style.display === "none") {
    x.style.display = "block";
  } 
}

var y = document.getElementById('op');
y.style.display = "none";

var z = document.getElementById('submit');
z.style.display = "none";

function myop() {
  var y = document.getElementById('op');
  if (y.style.display === "none") {
    y.style.display = "block";
  } 
  var z = document.getElementById('submit');
  if (z.style.display === "none") {
    z.style.display = "block";
  }
}


</script>

</body>
</html>

