<html>
  <head> 
    <style>
         html,body 
 {
    padding:0;
    margin:0;
    height:100%;
    min-height:100%;
  /* The image used */
  background-image: url("./../image/certificatebg.jpg");

  /* Full height */
  width:auto; 

  /* Center and scale the image nicely */
  background-position: center
  background-repeat: no-repeat;
  background-size: cover;
}
   
   
.part1 { width:50%; height:50%;  float:left; background-size: 100%; 
  
	
	}
  .part1:hover { 
    transform: scale(1.1);
    opacity: .8;
    
}
.part2 { width:50%; height:50%;  background-size: 100%;   float:left}
.part2:hover { 
  transform: scale(1.1);
    opacity: .8;
    
}
.part3 { width:50%; height:50%;  background-size: 100%;  float:left}
.part3:hover { 
  transform: scale(1.1);
    opacity: .8;
    
}
    
.part4 {  width:50%; height:50%;  background-size: 100%;  float:left}
.part4:hover { 
    transform: scale(1.1);
    opacity: .8;
    
}

.topnav {
  overflow: hidden;
  background-image: linear-gradient(to right, rgb(0,0,0), rgb(0,0,0));;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;
}

.topnav a.active {
  background-color: #ddd;
  color: black;
  border:2px solid black;
   text-decoration: none;
}


.bg-success {
    background-color: #151e9d!important;
}
.certi{ margin-left: 7%;
    margin-top: 2.5%;}




        </style>
  </head>
  <body>
    	 <!-- Navigation bar start  -->
    
	 <div class="topnav">
   
   <a href="./../home.php">HOME </a>

 
   <a class="active" href="certificate.php">CERTIFICATE </a>


   <a  href="./../report/input.php">REPORT</a>


</div>

<!-- Navigation bar end  -->
    <div class="certi">
    
      <div class="part1">
      <a href="template1.php"><img src="temp1.jpg" style="border:2px solid black;" height="80%" width="80%"></a>
    </div>
    <div class="part2">
    <a href="template2.php"><img style="border:2px solid black;" src="temp2.jpg" height="80%" width="80%"  ></a>
     
    </div>
    <div class="part3">
    <a href="template3.php"><img style="border:2px solid black;" src="temp3.jpg" height="80%" width="80%"  ></a>
    </div>
    <div class="part4">
    <a href="template4.php"><img style="border:2px solid black;" src="temp4.jpg" height="80%" width="80%"></a>
    </div>
</div>
  </body>
</html>