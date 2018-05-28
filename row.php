<tr id="<?php echo $b;?>">
					<td class="data<?php echo $id;?>"><?php echo $dated;?></td>
					<td class="data<?php echo $id;?>"><?php echo $day;?></td>
					<td class="data<?php echo $id;?>"><?php echo $subject;?></td>
				</tr>
				<tr id="<?php echo $b;?>">
					<td id="<?php echo $id;?>1"></td>
					<td id="<?php echo $id;?>2"></td>
					<td id="<?php echo $id;?>3"></td>					
				</tr>
				
				<script>
								var current_date<?php echo $id;?>=<?php echo $date;?>;
								// Set the date we're counting down to
								var countDownDate<?php echo $id;?> = new Date(current_date<?php echo $id;?>).getTime();

								// Update the count down every 1 second
								var u<?php echo $id;?> = setInterval(function() {

									// Get todays date and time
									var now<?php echo $id;?> = new Date().getTime();

									// Find the distance between now an the count down date
									var distance<?php echo $id;?> = countDownDate<?php echo $id;?> - now<?php echo $id;?>;

									// Time calculations for days, hours, minutes and seconds
									var days<?php echo $id;?> = Math.floor(distance<?php echo $id;?> / (1000 * 60 * 60 * 24));
									var hours<?php echo $id;?> = Math.floor((distance<?php echo $id;?> % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
									var minutes<?php echo $id;?> = Math.floor((distance<?php echo $id;?> % (1000 * 60 * 60)) / (1000 * 60));
									var seconds<?php echo $id;?> = Math.floor((distance<?php echo $id;?> % (1000 * 60)) / 1000);

									// Output the result in an element with id="demo"
									document.getElementById("<?php echo $id;?>1").innerHTML = "<span style='font-family:digital;color:#e41a1a'> "+ days<?php echo $id;?> + "</span> days  "+"<span style='font-family:digital;color:#e41a1a'>" + hours<?php echo $id;?>+"</span> hrs ";
									
									document.getElementById("<?php echo $id;?>2").innerHTML ="<t><span style='font-family:digital;color:#e41a1a'>" + minutes<?php echo $id;?> + "</span> min "+"<span style='font-family:digital;color:#e41a1a'>" + seconds<?php echo $id;?> + "</span> sec ";
									
									document.getElementById("<?php echo $id;?>3").innerHTML = "<img src='Images/before.png' id='redled<?php echo $id;?>' style='width:20px'/>";
									//if distance is less than 
									if (distance<?php echo $id;?> < (8*60*60*1000+30*60*1000)) {
										document.getElementById("redled<?php echo $id;?>").src="Images/redblinkingled.gif_c200";
										
									}
									
									// If the count down is over, write some text
									if (distance<?php echo $id;?> < 0) 
									{
									clearInterval(u<?php echo $id;?>);
									document.getElementById("<?php echo $id;?>1").innerHTML = "<img src='Images/after.png' style='width:20px'/>";
									document.getElementById("<?php echo $id;?>2").innerHTML = "<img src='Images/coconut.gif' style='width:30px'/>";
									//document.getElementById("<?php echo $id;?>3").innerHTML = "";
									document.getElementById("redled<?php echo $id;?>").src="Images/after.png";
									document.getElementById("<?php echo $id;?>2").parentElement.style.display='none';
									var done<?php echo $id;?>=document.getElementsByClassName("data<?php echo $id;?>");
										for(i<?php echo $id;?>=0;i<?php echo $id;?><done<?php echo $id;?>.length;i<?php echo $id;?>++)
										{
											//done<?php echo $id;?>[i<?php echo $id;?>].style.backgroundColor = "red";
											done<?php echo $id;?>[i<?php echo $id;?>].style.setProperty("text-decoration", "line-through");
										}
									}
								}, 1000);
			</script>