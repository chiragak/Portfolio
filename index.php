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
  background-color: yellow;
  width: 78%;
  display:flex;
  align-items:center;
  margin-left:12%;
  color:white;


}

.line {
  display:flex;
  width:500px;
  height:2px;
  background-color:#04C4C4;;
  position:relative;
  margin-left:6px;
  margin-top:5px;
  margin-right:500px;



}

.project-box
{
	height:460px;
	width:360px;
	background-color:red;
	border-radius:10%;
	display:flex;
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
				<h1>projects</h1>
				<div class="line"></div>
			<div class="project-box">

			</div>
</div>
</section>
			
	</body>
</html>
