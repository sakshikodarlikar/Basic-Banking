<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yes bank</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/yeslogo.png.png" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    * {
        box-sizing: border-box;
        

    }
    body{
        background-image: url("img/back.png");
    background-repeat: no-repeat;
    background-size: cover;
    /* background-position: ; */
    }
    .logo{
        position: relative;
        bottom: 250px;
    }
    #slogan{
        position: relative;
        top: 200px;
        right: 70px;
        color: yellow;
    }
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
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

    #get{
        position: relative;
        bottom: 100px;
        left: 30px;
        color: white;
    }
    .row{
        position: relative;
        top: 120px;
    }
    .button{
        
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
    }
    #about{
        color: yellow;
    }    
    .card{
        width:50%;
        position: relative;
        left: 400px;
        top: 120px;
    }
    .card-title{
        position: relative;
        left: 50px;
    }
    .card-text{
        /* position: relative; */
        text-align: center;
    }
    @import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300);

body {
    font-family: 'Alegreya Sans', sans-serif;
}

/* Sticky footer position and size
-------------------------------------------------- */
/* html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 300px;
} */

.footer {
  position: absolute;
  top: 1200px;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 300px;
}

/* Taller footer on small screens */
@media (max-width: 34em) {
    body {
      margin-bottom: 500px;
    }
    .footer {
      height: 500px;
    }
}
footer {
  padding-top: 30px;
  background-color: #292c2f;
  color: #bbb;
}

footer a {
  color: #999;
  text-decoration:none;
}

footer a:hover, footer a:focus {
  color: #aaa;
  text-decoration:none;
  border-bottom:1px dotted #999;
}

footer .form-control {
    background-color: #1f2022;
    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
    border: none;
    resize: none;
    color: #d1d2d2;
    padding: 0.7em 1em;
}
.container{
    position: relative;
    bottom: 120px;
}
#cont{
    position: absolute;
    left: 180px;
    width: 100%;
}
    </style>
</head>

<body>
    <div class="header">
        <a href="#default" class="logo" style="height: 50px; width: 90px;"><img src="img/yeslogo.png.png" alt="yes"></a>
        <p id="slogan">Say yes to connecting people!</p>
        <div class="header-right">
            <a class="active" href="#home">Home</a>
            <!-- <a href="#contact">Contact</a> -->
            <a href="#features" id="about" >Features</a>
        </div>

    </div>
    <a href="view.php" class="button" id="get">Get Started</a>
    <div class="row" id="features">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="img/icon-bank.png" height="150px" width="100px"></h5>
        <p class="card-text">Banking in simple steps.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><img src="img/icon-security.png" height="150px" width="100px"></h5>
        <p class="card-text">Safe and secure way.</p>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row" id="cont">
            <div class="col-md-2">
                <h5 class="text-md-right">Contact Us</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>

    
	

</body>

</html>