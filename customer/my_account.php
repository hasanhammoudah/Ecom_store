<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce Store</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/styles.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    

<div id="top"><!--Top Starts-->
<div class="container"><!--Container Starts-->
<div class="col-md-6 offer"><!--col-md-6 offer Starts-->
<a href="#" class="btn btn-success btn-sm">
Welcome : Guest
</a>
<a href="#">
Shopping Cart Total Price: $100, Total Items 2
</a>
</div><!--col-md-6 offer Ends-->
<div class="col-md-6"><!--col-md-6 Starts-->
<ul class="menu"><!--menu Starts-->
<li>
<a href="../customer_register.php">
Register
</a>
</li>
<li>
<a href="my_account.php">
My Account
</a>
</li>
<li>
<a href="../cart.php">
Go to Cart
</a>
</li>
<li>
<a href="../checkout.php">
Login
</a>
</li>



</ul><!--menu Ends-->



</div><!--col-md-6 Ends-->
</div><!--Container Ends-->
</div><!--Top Ends-->


<div class="navbar navbar-default" id="navbar"><!--navbar navbar-default Starts-->
<div class="container"><!--container Starts-->
<div class="navbar-header"><!--navbar-header Starts-->
<a class="navbar-brand home" href="index.php"><!--navbar-brand home Starts-->
<img src="images/logo.png" alt="computerfever loho" class="hidden-xs">
<img src="images/logo-small.png" alt="computerfever logo" class="visible-xs">



</a><!--navbar-brand home Ends-->
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
<span class="sr-only">Toggle Navigation</span>
<i class="fa fa-align-justify"></i>
</button>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
    <span class="sr-only">Toggle</span>
    <i class="fa fa-search"></i>
</div><!--navbar-header Ends-->
<div class="navbar-collapse collapse" id="navigation"><!--navbar-collapse collapse Starts-->

<div class="padding-nav"><!--padding-nav Starts-->

<ul class="nav navbar-nav navbar-left"><!--nav navbar-nav navbar-left Starts-->

<li>
<a href="../index.php">Home</a>
</li>


<li>
<a href="../shop.php">shop</a>
</li>

<li class="active">
<a href="my_account.php">My Account</a>
</li>
<li>
<a href="../cart.php">Shopping Cart</a>
</li>

<li>
<a href="../contact.php">Contact Us</a>
</li>



</ul><!--nav navbar-nav navbar-left Ends-->

</div><!--padding-nav Ends-->
<a class="btn btn-primary navbar-btn right" href="cart.php"><!--btn btn-primary navbar-btn right Starts-->

<i class="fa fa-shopping-cart"></i>
<span> 4 items in cart</span>

</a><!--btn btn-primary navbar-btn right Ends-->

<div class="navbar-collapse collapse right"><!--navbar-collapse collapse right Starts-->

<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
<span class="sr-only">Toggle Search</span>
<i class="fa fa-search"></i>
</button>

</div><!--navbar-collapse collapse right Ends-->
<div class="collapse clearfix" id="search"><!--collapse clearfix Starts-->
<form class="navbar-form" method="get" action="result.php"><!--navbar-form Starts--> 
<div class="input-group"><!--input-group Starts-->
<input class="form-control" type="text" placeholder="Search" name="user_query" required>
<span class="input-group-btn"><!--input-group-btn Starts-->
<button type="submit" value="Search" name="search" class="btn btn-primary">
<i class="fa fa-search"></i>
</button>
</span><!--input-group-btn Ends-->
</div><!--input-group Ends-->
</form><!--navbar-form Ends--> 

</div><!--collapse clearfix Ends-->
</div><!--navbar-collapse collapse Ends-->
</div><!--container Ends-->
</div><!--navbar navbar-default Ends-->



<div id="content"><!--content Start--> 
<div class="container"><!--container Starts-->
<div class="col-md-12"> <!--col-md-12 Starts-->
<ul class="breadcrumb"><!--breadcrumb Starts-->
<li>
<a href="index.php">Home</a>
</li>
<li>My Account</li>

</ul><!--breadcrumb Ends-->

</div><!--col-md-12 Ends-->

<div class="col-md-3"><!--col-md-3 Starts--> 
<?php
include("includes/sidebar.php");
?>
</div><!--col-md-3 Ends--> 

<div class="col-md-9"><!--col-md-9 Starts-->
<div class="box"><!--Box Starts-->
<?php
if(isset($_GET['my_orders'])){
include("my_orders.php");

}

if(isset($_GET['pay_offline'])){
    include("pay_offline.php");
}
if(isset($_GET['edit_account'])){
    include("edit_account.php");
}

if(isset($_GET['change_pass'])){
    include("change_pass.php");
}

if(isset($_GET['delete_account'])){
    include("delete_account.php");
}


?>

</div><!--Box Ends-->

</div><!--col-md-9 Ends-->









</div><!--container Ends-->
</div><!--content Ends--> 


<?php
include("includes/footer.php");
?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>