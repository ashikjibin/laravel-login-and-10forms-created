<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 5.8 CRUD Example Tutorial</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style type="text/css">
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'poppins', sans-serif;
	text-decoration: none;
	
}
body{
	background-color: white;
	position: relative;
	min-height: 100%;
	width: 100%;
	display: flex;
	line-height: 100%;
	text-align: center;
	overflow-y: auto;
	overflow-x: hidden;
	float: left;
	
}
.sidebar{
	position: fixed;
	width: 220px;
	height: 100%;
	left: 0;
	top: 0;
	background: red;
	padding: 2px 10px;
	overflow-y: auto;
	float: left;
	
}
.sidebar #btn{
	position: relative;
	color: white;
	font-size: 18px;
	height: 50px;
	width: 50px;
	text-align: center;
	line-height: 50px;
	transform: translate(-50%);
	
}
.sidebar ul{
	margin-top: 15px;
	
}
.sidebar ul li{
	position: relative;
	height: 50px;
	width: 100%;
	margin: 0 5px;
	list-style: none;
	line-height: 40px;

}
.sidebar ul li a{
	color: white;
	display: flex;
	align-items: center;
	text-decoration: none;
	transition: all 0.4s ease;
	font-size: 11px;
	
}
.sidebar ul li a:hover{
	color: ;
	background: lightblue;
}
.sidebar ul li a i{
	height: 50px;
	min-width: 50px;
	border-radius: 12px;
	line-height: 50px;
	text-align: center;

}
.container-fluid{
	display: block;
	position: absolute;
	top: 125px;
	left: 20%;  
	text-transform: uppercase;
    font-size: 15px;
    cursor: pointer;
    padding: 6px 12px;
    margin: 
    background-color: white;
}
.menu-bar
{
	height: 80px;
	width: 100%;
	background: green;
}
.logo
{
	font-size: 35px;
	font-weight: bold;
	color: white;
	padding: 0 100px;
	line-height: 80px;
	left: 10px;
}
.menu-bar ul 
{
	float: right;
	margin-right: 40px;
}
.menu-bar li
{
	display: inline-block;
	margin: 0 8px;
}
.menu-bar a 
{
	color: white;
	font-size: 35px;
	top: 20px;
}
</style>

</head>
<body>
	<div class="menu-bar">
			<label class="logo">Ten Forms</label>
			
		</div>
	<div class="sidebar">		
		
			<ul class="nav_list"><br>
				
				<li><a href="<?php echo e(route('cruds.create')); ?>"><i></i>CRUDS</a></li>
			
				<li><a href="<?php echo e(route('customers.create')); ?>"><i></i>CUSTOMER</i></a></li>
				<li><a href="<?php echo e(route('datas.create')); ?>"><i></i> DATA</li></a>
				<li><a href="<?php echo e(route('forms.create')); ?>"><i></i>FORM</li></a> 
				<li><a href="<?php echo e(route('informs.create')); ?>"><i></i>INFORM</li></a> 

				<li><a href="<?php echo e(route('posts.create')); ?>"><i></i>POST</li></a> 
				<li><a href="<?php echo e(route('products.create')); ?>"><i></i>PRODUCT</li></a> 
				<li><a href="<?php echo e(route('projects.create')); ?>"><i></i>PROJECT</li></a>
				<li><a href="#"><i></i>LEADS</li></a>
				<li><a href="#"><i></i></li></a> 
				
			</ul>
				<a href="logout"><button>logout</button></a>
		</div>
	<div class="container-fluid">
		<?php echo $__env->yieldContent('content'); ?>
		
	</div>
  
</body>
</html>