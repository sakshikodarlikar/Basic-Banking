<!DOCTYPE html>
<html>
<head>
<title>yes</title>
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
        /* top: 200px; */
        right: 90px;
        color: black;
        bottom: 200px;
    }
/* table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2} */
table{
border-bottom: 1px solid #ddd;
border-collapse: collapse;
width: 100%;
font-size: 25px;
text-align: left;
position: absolute;
top: 200px;
border: 1px solid black;

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
<table id="tab">
<tr>
<th>Number</th>
<th>Name</th>
<th>Email</th>
<th>Balance</th>
<th>View</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "banking");
$sql = "SELECT * FROM customer";
$result = $conn -> query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["number"]. "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>". $row["balance"]. "</td><td>" ;?>
          <a href ="transfer.php?id=<?php echo $row["number"];?>">View</a></td></tr>
          <?php 
    }
}
else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>