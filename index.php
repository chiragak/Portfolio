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
/* background-color:red; */
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
#contacts{
/* background-color:green; */
height:auto;
margin-top:0px;
position:relative;
z-index:0;

}
.contact {
/* background-color: brown; */
width: 78%;
height:auto;
display:flex;
align-items:center;
margin-left:12%;
color:white;
margin-bottom:12%;
position:relative;
/* z-index:  -1; */


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


/* ------------------------------------------------------- */
form{
   width:100%;
   margin-top:28%;
   /* display:flex; */
   
}
.container {
  width: 80%;
  padding: 0 20px;
  /* align-items: center; */
  display:block;
  /* margin-top:15%; */

}

.container h2 {
  width: 100%;
  color: #04C3C3;
  font-size: 36px;
  text-align: center;
  margin-bottom: 10px;
  position: fixed;
}

.container .row100 {
  width: 100%;
  display: grid;
  

}

.container .row100 .col {
  position: relative;
  width: 80%;
  padding: 0 10px;
  margin: 30px 50px 10px;
  transition: 0.5s;
  
}

.container .row100 .inputBox {
  position: relative;
  width: 100%;
  height: 40px;
  color: #04C3C3;
  
}

.container .row100 .inputBox input,
.container .row100 .inputBox.textarea textarea {
  position: absolute;
  width: 98%;
  height: 100%;
  background: transparent;
  box-shadow: none;
  border: none;
  outline: none;
  font-size: 18px;
  padding: 0 10px;
  z-index: 1;
  color: #000;
}

.container .row100 .inputBox .text {
  position: absolute;
  top: 0;
  left: 0;
  line-height: 40px;
  font-size: 18px;
  padding: 0 10px;
  display: block;
  transition: 0.5s;
  pointer-events: none;
  
  
}

.container .row100 .inputBox input:focus + .text,
.container .row100 .inputBox input:valid + .text {
  top: -35px;
  left: -10px;
  
}

.container .row100 .inputBox .line {
  position: absolute;
  bottom: 0;
  display: block;
  width: 100%;
  height: 2px;
  background: #04C3C3;
  transition: 0.5s;
  border-radius: 2px;
  pointer-events: none;
  
}

.container .row100 .inputBox input:focus ~ .line,
.container .row100 .inputBox input:valid ~ .line {
  height: 100%;
  
}

.container .row100 .inputBox.textarea {
  position: relative;
  width: 100%;
  height: 100px;
  padding: 10px 0;
  
}

.container .row100 .inputBox.textarea textarea {
  height: 100%;
  resize: none;
  
}

.container .row100 .inputBox textarea:focus + .text,
.container .row100 .inputBox textarea:valid + .text {
  top: -35px;
  left: -10px;
  
}

.container .row100 .inputBox textarea:focus ~ .line,
.container .row100 .inputBox textarea:valid ~ .line {
  height: 100%;
  
  
}

input[type="submit"] {
  border: none;
  padding: 7px 35px;
  cursor: pointer;
  outline: none;
  background: #04C3C3;
  color: #000;
  font-size: 18px;
  border-radius: 2px;
  
}


/* ------------------------------------------- */
/* footer {
  display: flex;
  width: 100%;
  height: 250px;
  justify-content: center;
  
  background-color: red;
  color: white;

}

footer .container {
  width: 100%;
  align-items: center;
}


.foo-straight {
  width: 70%;
  height: 2px;
  background-color: white;
  margin: 0 auto;
  position: relative;
  top:0;

} */

footer {

  width: 100%;
  height: 250px;
  position: relative;
  /* background-color:red; */
}

.foo-straight {
  width: 70%;
  height: 2px;
  background-color: white;
  position: absolute;
  top: 0;
  left: 15%;
}

footer .container {
  position: absolute;
  top: 50%;
  left: 50%;
  width:auto;
  transform: translate(-50%, -50%);
  color:white;
  text-align:center;
}


.p-logo{
  font-family: 'Kaushan Script', cursive;
  font-size:25px;
}
.contact-p
{  font-size:25px;
  position:absolute;
  width: 100%;
  margin: 0;
  padding: 0;
  top:0;
  margin-top:13%;
}

#clubs{
/* background-color:green; */
height:auto;
margin-top:0px;
position:relative;
z-index:-1;
}
.club {
/* background-color: brown; */
width: 78%;
height:auto;
display:flex;
align-items:center;
margin-left:12%;
color:white;
margin-bottom:12%;
}
.club-images
{
  width:100%;
  position:relative;
  height:auto;
}
.club-images img {
  margin: 20% 8% 0%;
  
}

img {
  transition: transform 0.2s;
}

img:hover {
  transform: scale(1.1);
}







@media screen and (max-width: 768px){
  .straight-line
{
 
   width:225px;
   height:2px;
   margin-left:1%;

   
   
}
.introduction 
{
  margin-top:15%;
}
.contact-p 
{
  /* background-color:yellow; */
  margin-top:20%;
  margin-bottom:10%;
 
}
form
{
  margin-top:65%;
  /* position:absolute; */
}
.about-desc 
{

  margin-top:30%;
}
}



      </style>
   </head>
   <body >
      <?php
         include('includes\navbar.php')	;	
         include('includes\page-design.php')	;	
         ?>


<header class="codrops-header">
				<a href="https://github.com/chiragak" class="github-corner">
					<svg width="80" height="80" viewBox="0 0 250 250" class="github-icon">
						<path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
						<path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
						<path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path>
					</svg>
				</a>
			</header>

            <div class="left-sidebar">
				<div class="left-line"></div>
				<a href="https://linkedin.com/in/chiragak"><img src="images\linkedin.png" alt="linkedin" width="35px"></a>
				<a href="https://twitter.com/chirag_a_k"><img src="images/Twitter.png" alt="Twitter" width="35px"></a>
				<a href="https://www.instagram.com/_chiragak/"><img src="images/Instagram.png" alt="Instagram" width="35px"></a>
			</div>
			<div class="right-sidebar">
				<a href="mailto:chiragajekar@gmail.com"><h2 class="email">chiragajekar@gmail.com</h2></a>
				<div class="right-line"></div>
			</div>













<!-- page design ends -->
      <section id="home">
        <div class="intro">
         <div class="introduction">
            <h1>
               Hi,<br>I'm Chirag,<br><span>Full-stack developer</span>
            </h1>
         </div>
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
                  <h1>License Verifier</h1>
                  <p class="description">License verification device integrated in automobiles</p>
                  <p class="tech-used">Arduino</p>
                  <p class="tech-used">RFID</p>
                  <p class="tech-used">Sensors</p>
                  <p class="tech-used">LCD screen</p>
                  <div class="project-image"><img src="images\\License.png" alt="License Verifier "></div>
               </div>
            </div>
			<div class="flex-item">
               <div class="inner-outline">
                  <h1>Aasha</h1>
                  <p class="description">Early detction of breast cancer using Artificial Intelligence</p>
                  <p class="tech-used">Machine Learning</p>
                  <p class="tech-used">HTML</p>
                  <p class="tech-used">CSS</p>
                  <p class="tech-used">Javascript</p>
                  <p class="tech-used">Mongo DB</p>
                  <div class="project-image"><img src="images\\Aasha.png" alt="Aasha "></div>
               </div>
         </div>
		 <div class="flex-item">
               <div class="inner-outline">
                  <h1>Waver</h1>
                  <p class="description">Attendance tracking system using RFID</p>
                  <p class="tech-used">Python</p>
                  <p class="tech-used">Raspberrypi</p>
                  <p class="tech-used">HTML</p>
                  <p class="tech-used">CSS</p>
                  <p class="tech-used">Bootstrap</p>
                  <p class="tech-used">MySQL</p>
                  <div class="project-image"><img src="images\waver.png" alt="Waver "></div>
               </div>
         </div>
		 <div class="flex-item">
               <div class="inner-outline">
                  <h1>E-learning Platform</h1>
                  <p class="description">Attendance tracking system using RFID </p>
                  <p class="tech-used">HTML</p>
                  <p class="tech-used">CSS</p>
                  <p class="tech-used">Bootstrap</p>
                  <p class="tech-used">Javascript</p>
                  <p class="tech-used">MySQL</p>
                  <div class="project-image"><img src="images\\e-learning.png" alt="E-learning Platform"></div>
               </div>
         </div>
		 <div class="flex-item">
               <div class="inner-outline">
                  <h1>Taal</h1>
                  <p class="description">IOT based device to learn music instruments</p>
                  <p class="tech-used">HTML</p>
                  <p class="tech-used">CSS</p>
                  <p class="tech-used">Javascript</p>
                  <p class="tech-used">Javascript</p>
                  <div class="project-image"><img src="images\Taal.png" alt="Taal"></div>
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

      <section id="clubs">
        <div class="club">
        <div class="heading">
			<h1>associated clubs</h1>
			<div class="straight-line"></div>          
        </div>
        <div class="club-images">
          <img src="images/coe-logo.png" alt="Coe Cybersecurity" width="150px">
          <img src="images/nscc-logo.png" alt="NSCC" width="150px">
          <img src="images/sosc-logo.svg" alt="SOSC" width="150px">
        </div>
        
      </section>

      <section id="contacts">
        <div class="contact">
        <div class="heading">
			<h1>contact</h1>
    
			<div class="straight-line"></div>          
        </div>
        <div class="contact-p">
        <p>If you'd like to chat about a project or just have a question, Please fill in the form below <br>  I will get back to you within 2 days</p>
        </div>
              
        <form action="https://formsubmit.co/el/ducebi" method="POST">
        <div class="container">
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input type="text" name="" required="required">
            <span class="text">First Name</span>
            <span class="line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox">
            <input type="text" name="" required="required">
            <span class="text">Last Name</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox">
            <input type="text" name="" required="required">
            <span class="text">Email</span>
            <span class="line"></span>
          </div>
        </div>
       
      <div class="row100">
        <div class="col">
          <div class="inputBox textarea">
            <textarea required="required"></textarea>
            <span class="text">Type your message Here...</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      
      <div class="row100">
        <div class="col">
          <input type="submit" value="Send">
        </div>
      </div>
    </div>
    </form>
       
       
        </div>
      </section>
      
      <footer>
<div class="foo-straight"></div>
  <div class="container">
    <p class="p-logo">Chirag</p>
    <p>&copy; 2023 Chirag</p>
    
  </div>
</footer>

   </body>
</html>


      

      


