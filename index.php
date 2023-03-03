<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Chirag</title>
		<link href="includes/style.css" rel="stylesheet">
	<style>
		
		.home 
		{
			/* background-color:green; */
			height:600px;
			margin-top:0px;
			position: relative;
			z-index:-1;

		}
		.works 
		{
			/* background-color:blue; */
			height:600px;
			margin-top:0px;
			position:relative;
			z-index:-1;
			
	
		}

		
		.projects {
  /* background-color: yellow; */
  width: 78%;
  height:auto;
  display:flex;
  align-items:center;
  margin-left:12%;
  color:white;


}


.flex-container {
  padding: 0;
  margin: 0;
  width:100%;
  right:0;
  list-style: none;
  /* border: 1px solid silver; */
  -ms-box-orient: horizontal;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -moz-flex;
  display: -webkit-flex;
  display: flex;
  justify-content:space-evenly
  
}

.flex-item {
  /* background: tomato; */
  /* position:relative; */
  width: 300px;
  height: 430px;
  margin-top:40px;
  border-radius:7%;
  border: 1px solid #04C4C4;
  /* margin-right:53px */
  
  /* line-height: 100px;
  color: white;
  font-weight: bold;
  font-size: 2em;
  text-align: center; */
}


.description
{
	/* background-color:red; */
	/* margin-left:10%; */
	margin-top:8%;
	/* margin-right:10%; */
	color:rgba(255, 255, 255, 0.5);
}
.tech-used {
  color: #04C4C4;
  background-color: rgba(4, 196, 196, 0.1);
  padding-top: 3%;
  padding-bottom: 3%;
  padding-left: 10px;
  padding-right: 10px;
  display: inline-block;
  border-radius:20%;
}

.wrap    { 
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
} 

.inner-outline
{
	margin-left:10%;
	margin-top:8%;
	margin-right:10%;
	/* justify-content: flex-end; */
}
.project-image
{
	background-color:red;
	height:160px;
	width:240px;
	border-radius:5%;
	bottom:0;
 	

}
</style>
	</head>
	<body >
			
			
			<?php
			include('includes\navbar.php')	;	
			include('includes\page-design.php')	;	
			?>
			
			<section class="home">
			<div class="introduction">
				<h1>
					Hi,<br>I'm Chirag,<br><span>Full-stack developer</span>
				</h1>
			</div>
			</section>
<section class="works">
<div class="projects">
<div class="flex-container wrap">
  <div class="flex-item">
	<div class="inner-outline">
	<h1>Waver</h1>
	<p class="description">Attendance tracking system using RFID vgv gvgn htgnfg vhgdfg</p>
	<p class="tech-used">HTML</p>
	<p class="tech-used">CSS</p>
	<p class="tech-used">Javascript</p>	
	<div class="project-image"></div>
	</div>
	
  </div>
  <div class="flex-item">
  <h1>Secure +</h1>
  </div>
  <div class="flex-item"></div>
  <div class="flex-item"></div>
  <div class="flex-item"></div>
  <div class="flex-item"></div>
  <div class="flex-item"></div>
  <div class="flex-item"></div>
</ul>
				
</div>
</section>
			
	</body>
</html>
