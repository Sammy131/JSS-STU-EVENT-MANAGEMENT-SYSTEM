<?php
	//Connect database
	include "database/connect.php";
	
	//Read session
	include 'session.php';

	//Read button script
	include "top_button.html";
?>

</!DOCTYPE html>
<html>
<head>
	<title>JSS STU EVENTS</title>
	<style type="text/css">
		a:hover{
			font-size: 24px;
		}
		a{
			color: blue;
		}
		.top{
			font-size: 34px;
			font-family: Helvetica;
			text-align: center;
		}
		form{
			margin-left: 60px;
			margin-top: 15px;
			margin-right: 60px;
		}
		input[type=submit]{
			padding: 12px;
			color: black;
			border: none;
			background-color: #66CDAA;
			font-weight: 900;
			font-family: Times New Roman;
			font-size: 16px;
			text-align: center;
			width: auto;
		}
		input[type=submit]:hover{
			background-color: #20B2AA;
		}
		table{
			margin-left:60px
			margin-right:60px;
			text-align:justify;
			border-bottom:dashed;
			background-color: orange ;
		}
		.event_name{
			font-family: Times New Roman;
			border-style: none;
			font-size: 30px;
			margin-top: 10px;
		}
		
		.box2 {
    		background-color: rgba(0,0,0,.7);
    		color: #fff;
		}
    

	</style>
</head>
<body background="image\in.png" >
	<button onclick="topFunction()" id="myBtn" title="Go to top"></button>
	<hr width="auto" size="10" style="background: orange">
	<div class="top" >
	<h1><img src="image/logo.png" alt="logo" ALIGN=CENTER >  JSS STU EVENTS </h1>
	</div>
	<hr width="auto" size="10" style="background: orange">

	<!--Search event form-->
	<div class="search" style="text-align: center">
		<form action="event_detail.php" method="POST" >
			<input type="text" size="40" name="searchevent" placeholder="Enter event name to search event" style="font-size: 16px;padding: 10px" />
			<input type="submit" name="search" value="Search"/>
		</form>
	</div>
	<hr width="auto" size="4" style="background: #808000">

	<!--Display all event area-->
	<div class="content" align="center">
		<?php
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			//Read all event
			$read_DB = "SELECT * FROM event_details ORDER BY EventDate DESC";
			$result = mysqli_query($conn, $read_DB);
			
			//Display all result
			if($result){
    			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    				echo "<form action='event_detail.php' method='POST'><table>";
        			echo "<tr><td><input class ='event_name'  type='text' name='eventname' value='".$row['EventName']."' size=80 readonly ></td></tr>";
        			echo "<tr><td><span  style='font-size:16px'><hr>". $row['EventDescription']."</td></tr>";
        			echo "<tr><td><br></td></tr>";
        			echo "<tr><td style='text-align:center'><input type='submit' name='more_detail' value='More Details'/></td></tr>";
        			echo "<tr><td><br></td></tr>";
        			echo "</table></form><br>";
    			}
			}
		?>
	</div>
	<div class="wrapper">
	<div class="box box2" style="text-align: center"><span style= "font-size: 20px">ABOUT JSSSTU</div>
    <div class="box box2"><span style= "font-size: 20px">JSS Science and Technology University is a private university located in Mysore, Karnataka, India. Established in 1963 as SJCE has 12 departments in engineering, a Master of Computer Applications department. It was affiliated to the Visvesvaraya Technological University, Belgaum, but now it's a part of JSS Science and Technology University from 2016 - 2017 academic year. SJCE is accredited by the All India Council for Technical Education (AICTE), all its departments are accredited by the National Board of Accreditation (NBA). It was founded and is managed by the JSS Mahavidyapeetha.JSS STU University is built on a strong reputation of SJCE, Mysuru, and passionately committed for providing education in Science, Technology, Engineering & Mathematics (STEM) and Management.</div>
	</div>            
    
</body>
</html>