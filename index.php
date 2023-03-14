<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <title>Chirag</title>
      <link href="includes/style.css" rel="stylesheet">
     
      <style>
       
       #home 
{
/* background-color:green; */
height:600px;
margin-top:0px;
position: relative;
z-index:-1;
}
#works 
{
/* background-color:blue; */
height:auto;
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
margin-bottom:12%;
}
.flex-container {
padding: 0;
margin:15% 0px 0px 0px;
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
color:rgba(255, 255, 255, 0.5);
padding:0%;
margin-top:0%;
margin-bottom:20%;
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
margin-top:0%;
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
margin-bottom:0%;
/* justify-content: flex-end; */
}
.project-image
{
background-color:red;
height:160px;
width:240px;
border-radius:5%;
bottom:0;
overflow: hidden;
}
.heading 
{
   /* background-color:red; */
   display:flex;
	 align-items: center;
   position:absolute;
   top:0;
   font-size: 25px;

}
.straight-line
{
  /* flex-wrap:wrap; */
   background-color:#04C4C4;
   width:500px;
   height:2px;
   margin-left:1%;

   
   
}

#about-me{
/* background-color:green; */
height:auto;
margin-top:0px;
position:relative;
z-index:-1;
}
.about {
/* background-color: brown; */
width: 78%;
height:auto;
display:flex;
align-items:center;
margin-left:12%;
color:white;
margin-bottom:12%;
}

.heading h1 {
  white-space: nowrap;
}

.about-desc 
{
  margin-top:15%;
  margin-bottom:0px;
  color:white;
  font-size:25px;
}
      </style>
   </head>
   <body >
      <?php
         include('includes\navbar.php')	;	
         include('includes\page-design.php')	;	
         ?>
      <section id="home">
         <div class="introduction">
            <h1>
               Hi,<br>I'm Chirag,<br><span>Full-stack developer</span>
            </h1>
         </div>
      </section>
      <section id="works">
         <div class="projects">
			<div class="heading">
			<h1>project</h1>
			<div class="straight-line"></div>
			</div>
		 
         <div class="flex-container wrap">
            <div class="flex-item">
               <div class="inner-outline">
                  <h1>Waver</h1>
                  <p class="description">Attendance tracking system using RFID vgv gvgn htgnfg vhgdfg</p>
                  <p class="tech-used">HTML</p>
                  <p class="tech-used">CSS</p>
                  <p class="tech-used">Javascript</p>
                  <p class="tech-used">Javascript</p>
                  <div class="project-image"><img src="images\waver.png" alt="Waver "></div>
               </div>
            </div>
			<div class="flex-item">
               <div class="inner-outline">
                  <h1>Waver</h1>
                  <p class="description">Attendance tracking system using RFID vgv gvgn htgnfg vhgdfg</p>
                  <p class="tech-used">HTML</p>
                  <p class="tech-used">CSS</p>
                  <p class="tech-used">Javascript</p>
                  <p class="tech-used">Javascript</p>
                  <div class="project-image"><img src="images\waver.png" alt="Waver "></div>
               </div>
         </div>
		 <div class="flex-item">
               <div class="inner-outline">
                  <h1>Waver</h1>
                  <p class="description">Attendance tracking system using RFID vgv gvgn htgnfg vhgdfg</p>
                  <p class="tech-used">HTML</p>
                  <p class="tech-used">CSS</p>
                  <p class="tech-used">Javascript</p>
                  <p class="tech-used">Javascript</p>
                  <div class="project-image"><img src="images\waver.png" alt="Waver "></div>
               </div>
         </div>
		 <div class="flex-item">
               <div class="inner-outline">
                  <h1>Waver</h1>
                  <p class="description">Attendance tracking system using RFID vgv gvgn htgnfg vhgdfg</p>
                  <p class="tech-used">HTML</p>
                  <p class="tech-used">CSS</p>
                  <p class="tech-used">Javascript</p>
                  <p class="tech-used">Javascript</p>
                  <div class="project-image"><img src="images\waver.png" alt="Waver "></div>
               </div>
         </div>
		 <div class="flex-item">
               <div class="inner-outline">
                  <h1>Waver</h1>
                  <p class="description">Attendance tracking system using RFID vgv gvgn htgnfg vhgdfg</p>
                  <p class="tech-used">HTML</p>
                  <p class="tech-used">CSS</p>
                  <p class="tech-used">Javascript</p>
                  <p class="tech-used">Javascript</p>
                  <div class="project-image"><img src="images\waver.png" alt="Waver "></div>
               </div>
      </section>

      <section id="about-me">
        <div class="about">
        <div class="heading">
			<h1>about-me</h1>
			<div class="straight-line"></div>          
        </div>
        <div class="about-desc">
          <p>
          Hello there! My name is Chirag, and I am currently pursuing my Bachelor's in Engineering (Information Science) from Sahyadri College of Engineering and Management in Mangaluru.</p>
          <p> I have a strong passion for web development and blockchain technology, and I am always looking to expand my knowledge in these areas. I enjoy taking on new projects and challenges, and I am excited to see where my skills will take me in the future. Thank you for taking the time to read a little about me!
          </p>
        </div>
      </section>
      

      

      
    </script>
   </body>
</html>



