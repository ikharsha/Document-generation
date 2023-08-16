<?php
	if(isset($_POST['sub']))
	{
		$font="garet/Garet-Heavy.ttf";
		$font1="garet/Garet-Book.ttf";
		$im=imagecreatefromjpeg("temp4.jpg");
		
		"<b>".$name="".$_POST['name']."";  
		
		$nameu=$_POST['name'];
		"<b>".$event="".$_POST['event']."";
		$eventu=$_POST['event'];
		"<b>".$organizer="".$_POST['organizer']."";
		$organizeru=$_POST['organizer'];
		$output=$nameu.'.jpg';
		
		
		$textColor=imagecolorallocate($im,255,0,0);
		$textColor1=imagecolorallocate($im,0,0,0);
		
		
		imagefttext($im,40,0,750,720,$textColor,$font,ucwords($name));
        imagefttext($im,25,0,850,950,$textColor,$font,ucwords($event));
		imagefttext($im,28,0,900,825,$textColor,$font,ucwords($organizer));
	
		
		
		if (file_exists($output)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($output).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($output));
    readfile($output);
    exit;
      }
	  
	}

if(isset($_POST['view']))
	{
		$font="garet/Garet-Heavy.ttf";
		$font1="garet/Garet-Book.ttf";
		$im=imagecreatefromjpeg("temp4.jpg");
		
		"<b>".$name="".$_POST['name']."";
		
		$nameu=$_POST['name'];
		"<b>".$event="".$_POST['event']."";
		$eventu=$_POST['event'];
		"<b>".$organizer="".$_POST['organizer']."";
		$organizeru=$_POST['organizer'];
		$output=$nameu.'.jpg';
		
	
		$textColor=imagecolorallocate($im,255,0,0);
		$textColor1=imagecolorallocate($im,0,0,0);
		
		
		imagefttext($im,40,0,750,720,$textColor,$font,ucwords($name));
        imagefttext($im,25,0,850,950,$textColor,$font,ucwords($event));
		imagefttext($im,28,0,900,825,$textColor,$font,ucwords($organizer));
		
		
		header('content-type: image/jpeg');

        imagejpeg($im);
		
	  
	}


?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>CERTIFICATE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
  body{ 
  padding:0;
  margin:0;
  height:auto;
  background-image: url("image/bg.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size:auto 285%;
 

  }
  .footer{
	margin:0;  
	width:100%;
	height:80px;
    background-color:black;
	opacity:0.6;
  	position:fixed;
	bottom:0px;
	left:0;
    padding:1%;
	text-align:center;
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
    background-color: black!important;
}

.btn-primary{
	background-color:black;
	border-color:black;
}

.btn-primary:hover{
	background-color:#ddd;
	color:black;
	border-color:black;
}
	
  
  
  
  
  </style>
</head>
<body>
	 <!-- Navigation bar start  -->
    
	 <div class="topnav">
   
  

 
   <a class="active" href="certificate.php">CERTIFICATE </a>


   


</div>

<!-- Navigation bar end  -->
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card" style="margin-top:15% ">
				<div class="card-header bg-success">
					<h3 class="text-center text-white">CERTIFICATE</h3>	
				</div>
				<div class="card-body">
					<form id="form" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Enter your first Name:</label>
							<input type="text" name="name" autocomplete="off" class="form-control" required >
                            <label>year/course</label>
							<input type="text" name="organizer" autocomplete="off" class="form-control" required >
							<label>Project name</label>
							<input type="text" name="event" autocomplete="off" class="form-control" required >
							
						</div>
						<div class="form-group">
							<input type="submit" value="View CERTIFICATE" name="view" class="btn btn-primary"><br><br>
							<input type="submit" value="Download CERTIFICATE" name="sub" class="btn btn-primary">
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
