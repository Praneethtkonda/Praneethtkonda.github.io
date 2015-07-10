<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

  <title>Tss Kart</title>
  <link rel="stylesheet" type="text/css" href="sk.css">
  <script src="sk.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
  <body background="Photos/back1.jpg">
<!-- Header photo -->
    <div class="header">
      <h1><img src="Photos/WE.png" height="200" width="200"><strong>     Welcome to T-kart</strong></h1>
      <p class="k"><h4 id="date"></h4></p>
      <p style="color:black;"><?php 
		echo "Welcome  ". $_SESSION['name'];
       ?>
     </p>
  </div>
<!-- Navigational bar -->  
  <nav class="navbar navbar-default">
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href=index.html>Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">categories
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Pc Games</a></li>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">External Harddisks</a></li> 
          </ul>
        </li>
        <li><a href="contact.html"><span class="change">Contact us</span></a></li>
        <li><a href="http://www.praneethtkonda.wordpress.com"><span class="change"> Visit my blog</span></a></li>
        <ul class="nav navbar-nav navbar-right">
        	<li><a href="http://localhost/reg/Project1/l.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
     </ul>   
    </div>    
  </nav>
  <script>
    var s;
  s=new Date();
  document.getElementById("date").innerHTML = s.toDateString();
  </script>
<div class="main">  
<!-- Pc games -->   
<h1 class="jumbotron">PC Games</h1>   
<div class="row">
    <div class="col-md-3">
      <div class="dropdown">
        <img src="Photos/gm1.jpeg" height="250" width="220" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px"> 
          <ul class="dropdown-menu">
            <li><h2 class="pj">Grand Theft Auto V Pc</h2></li>
            <li><h3 class="pj">Rs. 2499</h3></li>
            <li><p class="pj">MRP</li>
            <li><h2 class="pj">Minimum System Requirements</h2>
                  <ol>
                    <li>59 GB HDD space</li>
                    <li>4 GB RAM</li>
                    <li>1 GB Nvidia GTS Graphics</li>
                  </ol>
           </li>      
         </ul>
     </div> 
  </div>
  <div class="col-md-3">
    <div class="dropdown">
      <img src="Photos/gm2.jpeg" height="250" width="220" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px"> 
         <ul class="dropdown-menu" role="menu">
           <li><h2 class="pj">ACC Unity Pc</h2></li>
           <li><h3 class="pj">Rs. 1775</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj">Minimum System Requirements</h2>
                  <ol>
                    <li>35 GB HDD space</li>
                    <li>6 GB RAM</li>
                    <li>2 GB Nvidia GTX Series Graphics</li>
                  </ol>
           </li>      
         </ul>
    </div>
  </div>
  <div class="col-md-3">
    <div class="dropdown">
    <img src="Photos/gm3.jpeg" height="250" width="220" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px"> 
         <ul class="dropdown-menu">
           <li><h2 class="pj">Battlefield 4 Pc </h2></li>
           <li><h3 class="pj">Rs. 1879</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj">Minimum System Requirements</h2>
                  <ol>
                    <li>50 GB HDD space</li>
                    <li>4 GB RAM</li>
                    <li>1 GB Nvidia GTX Series Graphics</li>
                  </ol>
           </li>      
           <li></li> 
         </ul>
    </div>
 </div>   
  <div class="col-md-3">
    <div class="dropdown">
      <img src="Photos/gm4.jpeg" height="250" width="220" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px"> 
         <ul class="dropdown-menu">
           <li><h2 class="pj">Call Of Duty MW3 Pc</h2></li>
           <li><h3 class="pj">Rs. 1299</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj">Minimum System Requirements</h2>
                  <ol>
                    <li>25 GB HDD space</li>
                    <li>4 GB RAM</li>
                    <li>1 GB Nvidia GTX Series Graphics</li>
                  </ol>
           </li>      
         </ul>
    </div>
  </div>
</div>
<!--End of first row -->
<!-- Mobile phones -->
<br>
<h1 class="jumbotron">Smart phones</h1>
<div class="row">
   <div class="col-md-3">
      <img src="Photos/mb1.jpeg" height="400" width="213" style="margin:10px">
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px">know more</button> 
          <ul class="dropdown-menu">
            <li><h2 class="pj">Nexus 6 MidNight Blue 32 GB</h2></li>
            <li><h3 class="pj">Rs. 36999</h3></li>
            <li><p class="pj">MRP</li>
            <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Android v5 lollipop</li>
                    <li>6 inch Quad HD Display/2560x1440 pixel resolution</li>
                    <li>Qual comm Snapdragon 805/ Quad core Processor</li>
                    <li>3 GB RAM</li>
                    <li>Dual LED Flash with 13 MP Primary Camera and 5 MP Secondary Camera/Full HD Video Recording</li>
                    <li>Single Enabled Sim with 4G LTE Enabled</li>
                    <li>3220 MAH Battery with Quick Turbo Charging/24 hours of talktime (2G)</li>
                  </ol>
           </li>      
         </ul>
     </div> 
  </div>
  <div class="col-md-3">
    <img src="Photos/mb2.jpeg" height="400" width="213" style="margin:10px">
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px">know more</button> 
          <ul class="dropdown-menu">
            <li><h2 class="pj">Apple Iphone 6 Space Grey 16 GB</h2></li>
            <li><h3 class="pj">Rs. 43999</h3></li>
            <li><p class="pj">MRP</li>
            <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>IOS v8 </li>
                    <li>8 MP Primary Camera/1.2 MP Secondary Camera</li>
                    <li>11.94 CM Touchscreen/with 5-inch Brilliant Display</li>
                    <li>Single Nano Sim option Available/3G Connectivity</li>
                    <li>Battery/Talktime(14hrs) 3G/Standby(120hrs)/Type:- Li-Ion</li>
                    <li>Additional Feautures:- With M8 Coprocessor/Accelerometer,Proximity sensor and Compass</li>
                    <li>129 grams With light weight dimensions:-67x138.1x6.9 mm</li>
                  </ol>
           </li>      
         </ul>
     </div> 
  </div>
  <div class="col-md-3">
    <img src="Photos/mb3.jpeg" height="400" width="213" style="margin:10px">
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px">know more</button> 
          <ul class="dropdown-menu">
            <li><h2 class="pj">Moto X (2nd Generation)</h2></li>
            <li><h3 class="pj">Rs. 29999</h3></li>
            <li><p class="pj">MRP</li>
            <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>Android v4.4.4(Kitkat) OS</li>
                    <li>2 GB RAM/16 GB ROM</li>
                    <li>2.5 GHz Qualcomm Snapdragon 801 MSM8974-AC Quad Core Processor</li>
                    <li>13 MP Primary Camera/2 MP Secondary Camera with Dual LED Flash</li>
                    <li>13.21 cm Capacitive Touchscreen</li>
                    <li>Single Enabled Nano Sim (GSM)</li>
                    <li>Weight:-144g With 72.4x140.8x9.97</li>
                    <li>Li-Ion,2300MAH Battery
                  </ol>
            </li>      
          </ul>
     </div> 
  </div>
  <div class="col-md-3">
    <img src="Photos/mb4.jpeg" height="400" width="213" style="margin:10px">
     <div class="dropdown">
       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px">know more</button> 
         <ul class="dropdown-menu">
           <li><h2 class="pj">Asus Zenfone 2</h2></li>
           <li><h3 class="pj">Rs. 18999</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj"><legend>Specs</legend></h2>
                  <ol>
                    <li>ASUS Zen UI with android lollipop</li>
                    <li>13.97 cm Touchscreen</li>
                    <li>4 GB RAM with 1.8 GHZ Intel Atom processor</li>
                    <li>32 GB Internal memory with expandable upto 64 GB slots</li>
                    <li>13 MP primaty camera and 5 MP Front facing camera</li>
                    <li>Dual sim capability GSM+LTE</li>
                    <li>Poweful 3000 MAH battery</li>
                  </ol>
           </li>      
         </ul>
     </div> 
 </div>
</div>
<!--End of second row-->
<!--Hard disks -->
<br>
<h1 class="jumbotron">External Harddisks</h1>
<div class="row">
  <div class="col-md-3">
    <img src="Photos/hd1.jpeg" style="margin:10px">
     <div class="dropdown">
       <br><br><br>
       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px">know more</button> 
         <ul class="dropdown-menu">
           <li><h2 class="pj">WD My Passport Ultra 1TB External Hardrive</h2></li>
           <li><h3 class="pj">Rs. 4800</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj">General Specifications</h2>
                  <ol>
                    <li>1 TB Cloud storage to share your personal files,Media etc..</li>
                    <li>High Speed Connectivity with 2.0 and 3.0 connectors</li>
                    <li>2.5 inch Ultra sleek Design with 15.4 mm thick body</li>
                    <li>Special Features:- With WD high Security to protect the data/WD Smart Pro to recovering the data</li>
                    <li>This Device is compatible with Windows and Macintosh OS</li>
                  </ol>
           </li>      
         </ul>
     </div> 
 </div>
 <div class="col-md-3">
    <img src="Photos/hd2.jpeg" style="margin:10px">
     <div class="dropdown">
       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px">know more</button> 
         <ul class="dropdown-menu">
           <li><h1 class="pj">Seagate Backup Plus</h1></li>
           <li><h3 class="pj">Rs. 4900</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj">Specifications</h2>
                  <ol>
                    <li>1 TB Cloud storage</li>
                    <li>USB 3.0 and 2.0 Compatible</li>
                    <li>Windows: XP SP3, Vista, 7, 8, Mac OS X 10.6, Android 2.3, iOS 6 OS Supported</li>
                    <li>Weight:-159 g/Dimensions:-12.1 x 76 x 113.5 mm</li>
                    <li>2.5 inch Total Area</li>
                  </ol>
           </li>      
         </ul>
     </div> 
 </div>
 <div class="col-md-3">
    <img src="Photos/hd3.jpeg" alt="jeffa" style="margin:10px">
     <div class="dropdown">
       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px">know more</button> 
         <ul class="dropdown-menu">
           <li><h1 class="pj">Sony HD-E1/BC</h1></li>
           <li><h3 class="pj">Rs. 5100</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj">General Specifications</h2>
                  <ol>
                    <li>1 TB Cloud Storage</li>
                    <li>USB 2.0: 480 Mbps, USB 3.0: 5 Gbps Transfer Speed</li>
                    <li>Windows XP, Windows Vista, Windows 7,(Mac OS supports only USB 2.0) OS Supported</li>
                    <li>Weight:-220 g/Dimensions:-80 x 16 x 126 mm</li>
                    <li>2.5 inch Total Area
                  </ol>
           </li>      
         </ul>
     </div> 
 </div>
 <div class="col-md-3">
    <img src="Photos/hd4.jpeg" style="margin:10px">
     <div class="dropdown">
       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin:10px">know more</button> 
         <ul class="dropdown-menu">
           <li><h1 class="pj">Dell SRD00F1</h1></li>
           <li><h3 class="pj">Rs. 6100</h3></li>
           <li><p class="pj">MRP</li>
           <li><h2 class="pj">General Specifications</h2>
                  <ol>
                    <li>2 TB Cloud storage</li>
                    <li>USB 2.0: 480 Mbps, USB 3.0: 5 Gbps Transfer Speed</li>
                    <li>Windows: 7, 8 OS Supported</li>
                    <li>Weight:-158.5 g/Dimensions:-12.19 x 75.9 x 113.5 mm</li>
                    <li>2.5 inch Total Area
                  </ol>
           </li>      
         </ul>
     </div> 
 </div>
</div>
<!--Last row of  -->
</div>
<div class="footer">
   <h4>T Kart © 2015 All Rights Reserved</h4>  
</div>
</body>
</html>

