<!DOCTYPE html>
<html lang="en-IN">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>DATESHEET</title>
		
		<link rel="stylesheet" href="Design/datesheet_style1.css">
		<style>
					@font-face
					{
						font-family: digital;
						src: url(digital.ttf);
					}

		</style>
	</head>
	
	<body style="background-image:url('Images/background.gif');">
	
		<div class="datesheet">
			<table class="datesheet_t" style="opacity: 0.95">
				<tr>
					<th>Date</th>
					<th>Day</th>
					<th>Exam</th>
				</tr>
				
				<?php
					$b='one';//For tr to change background colours (one/two)
					$date='"May 22, 2018 14:30:00"';//Date for JS
					$dated='22 May 2018';//Date Display
					$day='Tuesday';
					$subject='Satellite Comm.';
					$id='1';//ID for timer td and image ID redledn
					include "row.php";
				?>
				<?php
					$b='two';//For tr to change background colours (one/two)
					$date='"May 30, 2018 14:30:00"';//Date for JS
					$dated='30 May 2018';//Date Display
					$day='Wednesday';
					$subject='Human Values-II';
					$id='2';//ID for timer td and image ID redledn
					include "row.php";
				?>
				<?php
					$b='one';//For tr to change background colours (one/two)
					$date='"Jun 1, 2018 14:30:00"';//Date for JS
					$dated='1 Jun 2018';//Date Display
					$day='Friday';
					$subject='Mobile Computing';
					$id='3';//ID for timer td and image ID redledn
					include "row.php";
				?>
				<?php
					$b='two';//For tr to change background colours (one/two)
					$date='"Jun 5, 2018 14:30:00"';//Date for JS
					$dated='5 June 2018';//Date Display
					$day='Tuesday';
					$subject='NGN';
					$id='4';//ID for timer td and image ID redledn
					include "row.php";
				?>
				<?php
					$b='one';//For tr to change background colours (one/two)
					$date='"Jun 7, 2018 14:30:00"';//Date for JS
					$dated='7 June 2018';//Date Display
					$day='Thursday';
					$subject='Adhoc SN';
					$id='6';//ID for timer td and image ID redledn
					include "row.php";
				?>
				<tr id="two">
					<td><a href="https://drive.google.com/file/d/1EqBXWd52Ty5ByaWcJrOOEoQpQqZKdA6q/view" target="_blank">Datesheet</a></td>
					<td><a href="http://coconutc.com/DOWNLOADS/TheoryExaminationCentres.pdf" target="_blank">Exam Centre</a></td>
					<td></td>
				</tr>
				
			<table>
			
		</div>
	</body>
</html>