<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #009688;
  overflow: auto;
  height: 60px;
}

.navbar a {
  float: right;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 12px;
}
.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}



body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: inherit;
  left: 1;
  background-color: white;
  overflow-x: hidden;
  padding-top: 20px;
  
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 12px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}
  

}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
<body>

<div class="navbar">
   <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a> 
  <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
</div>


<div class="sidebar">
  <a href="#home"><i class="fa fa-fw fa-home"></i> Dashboard</a><br>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i>Products</a><br>
  <a href="#clients"><i class="fa fa-fw fa-user"></i>Expenses</a><br>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i>Production</a><br>
  <a href="#contact"><i class="fa fa-shopping-cart"></i> Orders</a><br>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i>Reports</a><br>
</div>

<div class="main">
 
</div>

</body>
</html> 
