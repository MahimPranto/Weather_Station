<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
	<title>Weather Station</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include 'info.php'?>
	<!-- navbar starts -->
	<nav class="navbar navbar-dark navbar-expand-sm fixed-top ">
        <div class="container">
         <a class="navbar-brand mr-auto" href="./weather.php"><img src="image/weatherLogo.png" height="50" width="50"> Weather Station </a>
        </div>	       
    </nav> <!-- navbar ends -->

	<div class="jumbotron">
		<div class="container">
			<div class="row select align-items-center">
				<div class="col ">
					<img class="dec" src="image/decoration.png">
				</div>
				<div class="col ">
					<!-- form starts -->
					<form method="POST"> 
						<div class="form-group">
							<label for="selection">Select Your City</label> 
							<input type="text" name="selection" placeholder="City Name" class="form-control" value="" /> 
							<div class="submit">
								<input type="submit" name="submit" class="btn btn-info" value="Search" />
							</div>
						</div>
					</form> <!-- form ends -->
				</div>
				<div class="col lanlon">
					<img class="icon" src="image/lonlan.png">
					<?php echo "<br> Longitude: ". $lon. "<br> Latitude: ". $lat; ?>
				</div>	
			</div>
			<!-- present day info  -->
			<div class="row">
				<div class="col-12 col-sm-12 order-sm-first col-md-10">
					<div class="row top border-bottom">
						<div class="col items">
							<i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $cityname."," .$country."<br>";?> <i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $today;?>
						</div>
					</div>
					<div class="row border-bottom">
						<div class="col  mid3">
							<?php echo "Feels Like: ".$feels_like. "&deg;c";?>
							
						</div>
						<div class="col  mid1">
							<?php echo $weather1. "," .$weather2;?>		
						</div>
					</div>
					<div class="row border-bottom">
						<div class="col  mid1">
							<?php echo "Dew Point: ".$dew_point. "&deg;c";?>
						</div>
						<div class="col mid2">
							<?php echo "Wind Speed: ".$wind_speed. "m/s";?>
						</div>
						<div class="col  mid3">
							<?php echo "UVI: ".$uvi;?>	
						</div>
					</div>	
						
					<div class="row content">
						<div class="col items">
							<div class="card">
								  <div class="card-body">
								    <h3 class="card-title"><img class="icon" src="image/maxTemp.png"> Maximum Temperature</h3>
								    <p class="card-text"><?php echo $temp_max. "&deg;c";?> </p>
								  </div>
							</div>
						</div>
						<div class="col items">
							<div class="card">
								  <div class="card-body">
								    <h3 class="card-title"><img class="icon" src="image/minTemp.png"> Minimum Temperature</h3>
								    <p class="card-text"><?php echo $temp_min. "&deg;c";?> </p>
								  </div>
							</div>
						</div>
					</div>
					<div class="row content">
						<div class="col items">
							<div class="card">
								  <div class="card-body">
								   <h3 class="card-title"> <img class="icon" src="image/pressure.png"> Pressure</h3>
								    <p class="card-text"><?php echo $pressure . "hPa";?> </p>
								  </div>
							</div>
						</div>
						<div class="col items">
							<div class="card">
								  <div class="card-body">
								    <h3 class="card-title"><img class="icon" src="image/humidity.png"> Humidity</h3>
								    <p class="card-text"><?php echo $humidity. "%";?> </p>
								  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-sm  order-sm-last col-md d-none d-lg-block align-self-center">
						<h1 class="heading"><a href="#in" class="btn btn-warning btn-dark" role="button" aria-pressed="true">8-day Forcast</a></h1>		
				</div>
			</div> <!-- present day info ends  -->
		</div>
		<!-- container for 8 days info  -->
		<div class="container">
			<div class="row">
				<div class="col align-self-center">
					<h1>8-Days Forcast </h1>
				</div>
			</div>
			<div class="row" id="in">
				<div class="col details">
					<!-- accordion starts -->
						<div id="accordion">
                    		<div class="row">
                    			<!-- day 1 info starts -->
                    			<div class="col">
                    				<div class="card">
		                       			<div class="card-header" role="tab" id="day1head">
		                        			<h3 class="mb-0">
		                            		<a data-toggle="collapse" data-target="#day1"><?php echo $day1[0];?></a>
		                        			</h3>
		                        		</div>
		                        		<div class="collapse" id="day1" data-parent="#accordion">
		                            		<div class="card-body">
		                            			<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo $day1[11].",".$day1[12];?> </p>
													</div>
												</div>
			                                	<div class="row">
													<div class="col order-sm-first">
														<p class="info">
														   <?php echo "Minimum Temperature: ". $day1[1]. "&deg;c";?> </p>
													</div>
													<div class="col order-sm-last">
														<p class="info">
														   <?php echo "Maximum Temperature: ". $day1[2]. "&deg;c";?> </p>
													</div>
												</div>
												
												<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo "Morning: ".$day1[6]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Afternoon: ".$day1[3]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Evening: ".$day1[5]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Night: ".$day1[4]."&deg;c";?> </p>
													</div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Pressure: ".$day1[7]."hPa";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Humidity: ".$day1[8]."%";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Dew Point: ".$day1[9]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Wind Speed: ".$day1[10]."m/s ";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Cloud: ".$day1[13]."mm/h";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Uvi: ".$day1[14];?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
			                            	</div>
		                        		</div>
                   				 	</div>
                   				</div> <!-- day 1 info ends -->

                   				<!-- day 2 info starts -->
                   				<div class="col">
			                   		<div class="card">
		                       			<div class="card-header" role="tab" id="day2head">
		                        			<h3 class="mb-0">
		                            		<a data-toggle="collapse" data-target="#day2"><?php echo $day2[0];?></a>
		                        			</h3>
		                        		</div>
		                        		<div class="collapse" id="day2" data-parent="#accordion">
		                            		<div class="card-body">
		                            			<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo $day2[11].",".$day2[12];?> </p>
													</div>
												</div>
			                                	<div class="row">
													<div class="col order-sm-first">
														<p class="info">
														   <?php echo "Minimum Temperature: ". $day2[1]. "&deg;c";?> </p>
													</div>
													<div class="col order-sm-last">
														<p class="info">
														   <?php echo "Maximum Temperature: ". $day2[2]. "&deg;c";?> </p>
													</div>
												</div>
												
												<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo "Morning: ".$day2[6]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Afternoon: ".$day2[3]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Evening: ".$day2[5]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Night: ".$day2[4]."&deg;c";?> </p>
													</div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Pressure: ".$day2[7]."hPa";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Humidity: ".$day2[8]."%";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Dew Point: ".$day2[9]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Wind Speed: ".$day2[10]."m/s ";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Cloud: ".$day2[13]."mm/h";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Uvi: ".$day2[14];?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
			                            	</div>
		                        		</div>
		                   			 </div>
		                   		</div> <!-- day 2 info ends -->
		                   	</div>
		                   	<div class="row">
		                   		<!-- day 3 info starts -->
		                   		<div class="col">
		                   			 <div class="card">
		                       			<div class="card-header" role="tab" id="day3head">
		                        			<h3 class="mb-0">
		                            		<a data-toggle="collapse" data-target="#day3"><?php echo $day3[0];?></a>
		                        			</h3>
		                        		</div>
		                        		<div class="collapse" id="day3" data-parent="#accordion">
		                            		<div class="card-body">
		                            			<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo $day3[11].",".$day3[12];?> </p>
													</div>
												</div>
			                                	<div class="row">
													<div class="col order-sm-first">
														<p class="info">
														   <?php echo "Minimum Temperature: ". $day3[1]. "&deg;c";?> </p>
													</div>
													<div class="col order-sm-last">
														<p class="info">
														   <?php echo "Maximum Temperature: ". $day3[2]. "&deg;c";?> </p>
													</div>
												</div>
												
												<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo "Morning: ".$day3[6]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Afternoon: ".$day3[3]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Evening: ".$day3[5]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Night: ".$day3[4]."&deg;c";?> </p>
													</div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Pressure: ".$day3[7]."hPa";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Humidity: ".$day3[8]."%";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Dew Point: ".$day3[9]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Wind Speed: ".$day3[10]."m/s ";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Cloud: ".$day3[13]."mm/h";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Uvi: ".$day3[14];?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
			                            	</div>
		                        		</div>
		                   			 </div>
		                   		</div> <!-- day 3 info ends -->

		                   		<!-- day 4 info starts -->
		                   		<div class="col">
		                   			 <div class="card">
		                       			<div class="card-header" role="tab" id="day4head">
		                        			<h3 class="mb-0">
		                            		<a data-toggle="collapse" data-target="#day4"><?php echo $day4[0];?></a>
		                        			</h3>
		                        		</div>
		                        		<div class="collapse" id="day4" data-parent="#accordion">
		                            		<div class="card-body">
		                            			<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo $day4[11].",".$day4[12];?> </p>
													</div>
												</div>
			                                	<div class="row">
													<div class="col order-sm-first">
														<p class="info">
														   <?php echo "Minimum Temperature: ". $day4[1]. "&deg;c";?> </p>
													</div>
													<div class="col order-sm-last">
														<p class="info">
														   <?php echo "Maximum Temperature: ". $day4[2]. "&deg;c";?> </p>
													</div>
												</div>
												
												<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo "Morning: ".$day4[6]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Afternoon: ".$day4[3]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Evening: ".$day4[5]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Night: ".$day4[4]."&deg;c";?> </p>
													</div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Pressure: ".$day4[7]."hPa";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Humidity: ".$day4[8]."%";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Dew Point: ".$day4[9]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Wind Speed: ".$day4[10]."m/s ";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Cloud: ".$day4[13]."mm/h";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Uvi: ".$day4[14];?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
			                            	</div>
		                        		</div>
		                   			 </div>
		                   		</div>	<!-- day 4 info ends --> 
                   			</div>
                   			<div class="row">
                   				<!-- day 5 info starts -->
                   				<div class="col"> 
		                   			<div class="card">
		                       			<div class="card-header" role="tab" id="day5head">
		                        			<h3 class="mb-0">
		                            		<a data-toggle="collapse" data-target="#day5"><?php echo $day5[0];?></a>
		                        			</h3>
		                        		</div>
		                        		<div class="collapse" id="day5" data-parent="#accordion">
		                            		<div class="card-body">
		                            			<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo $day5[11].",".$day5[12];?> </p>
													</div>
												</div>
			                                	<div class="row">
													<div class="col order-sm-first">
														<p class="info">
														   <?php echo "Minimum Temperature: ". $day5[1]. "&deg;c";?> </p>
													</div>
													<div class="col order-sm-last">
														<p class="info">
														   <?php echo "Maximum Temperature: ". $day5[2]. "&deg;c";?> </p>
													</div>
												</div>
												
												<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo "Morning: ".$day5[6]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Afternoon: ".$day5[3]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Evening: ".$day5[5]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Night: ".$day5[4]."&deg;c";?> </p>
													</div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Pressure: ".$day5[7]."hPa";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Humidity: ".$day5[8]."%";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Dew Point: ".$day5[9]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Wind Speed: ".$day5[10]."m/s ";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Cloud: ".$day5[13]."mm/h";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Uvi: ".$day5[14];?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
			                            	</div>
		                        		</div>
		                   			</div>
		                   		</div> <!-- day 5 info ends -->

		                   		<!-- day 6 info starts -->
		                   		<div class="col">
		                   			<div class="card">
		                       			<div class="card-header" role="tab" id="day6head">
		                        			<h3 class="mb-0">
		                            		<a data-toggle="collapse" data-target="#day6"><?php echo $day6[0];?></a>
		                        			</h3>
		                        		</div>
		                        		<div class="collapse" id="day6" data-parent="#accordion">
		                            		<div class="card-body">
		                            			<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo $day6[11].",".$day6[12];?> </p>
													</div>
												</div>
			                                	<div class="row">
													<div class="col order-sm-first">
														<p class="info">
														   <?php echo "Minimum Temperature: ". $day6[1]. "&deg;c";?> </p>
													</div>
													<div class="col order-sm-last">
														<p class="info">
														   <?php echo "Maximum Temperature: ". $day6[2]. "&deg;c";?> </p>
													</div>
												</div>
												
												<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo "Morning: ".$day6[6]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Afternoon: ".$day6[3]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Evening: ".$day6[5]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Night: ".$day6[4]."&deg;c";?> </p>
													</div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Pressure: ".$day6[7]."hPa";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Humidity: ".$day6[8]."%";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Dew Point: ".$day6[9]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Wind Speed: ".$day6[10]."m/s ";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Cloud: ".$day6[13]."mm/h";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Uvi: ".$day6[14];?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
			                            	</div>
		                        		</div>
		                   			</div>
		                   		</div> <!-- day 6 info ends -->
		                   	</div>
		                   	<div class="row">
		                   		<!-- day 7 info starts -->
		                   		<div class="col">
		                   			<div class="card">
		                       			<div class="card-header" role="tab" id="day7head">
		                        			<h3 class="mb-0">
		                            		<a data-toggle="collapse" data-target="#day7"><?php echo $day7[0];?></a>
		                        			</h3>
		                        		</div>
		                        		<div class="collapse" id="day7" data-parent="#accordion">
		                            		<div class="card-body">
		                            			<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo $day7[11].",".$day7[12];?> </p>
													</div>
												</div>
			                                	<div class="row">
													<div class="col order-sm-first">
														<p class="info">
														   <?php echo "Minimum Temperature: ". $day7[1]. "&deg;c";?> </p>
													</div>
													<div class="col order-sm-last">
														<p class="info">
														   <?php echo "Maximum Temperature: ". $day7[2]. "&deg;c";?> </p>
													</div>
												</div>
												
												<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo "Morning: ".$day7[6]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Afternoon: ".$day7[3]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Evening: ".$day7[5]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Night: ".$day7[4]."&deg;c";?> </p>
													</div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Pressure: ".$day7[7]."hPa";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Humidity: ".$day7[8]."%";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Dew Point: ".$day7[9]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Wind Speed: ".$day7[10]."m/s ";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Cloud: ".$day7[13]."mm/h";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Uvi: ".$day7[14];?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
			                            	</div>
		                        		</div>
		                   			</div>
		                   		</div> <!-- day 7 info ends -->

		                   		<!-- day 8 info starts -->
		                   		<div class="col">
		                   			<div class="card">
		                       			<div class="card-header" role="tab" id="day8head">
		                        			<h3 class="mb-0">
		                            		<a data-toggle="collapse" data-target="#day8"><?php echo $day8[0];?></a>
		                        			</h3>
		                        		</div>
		                        		<div class="collapse" id="day8" data-parent="#accordion">
		                            		<div class="card-body">
		                            			<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo $day8[11].",".$day8[12];?> </p>
													</div>
												</div>
			                                	<div class="row">
													<div class="col order-sm-first">
														<p class="info">
														   <?php echo "Minimum Temperature: ". $day8[1]. "&deg;c";?> </p>
													</div>
													<div class="col order-sm-last">
														<p class="info">
														   <?php echo "Maximum Temperature: ". $day8[2]. "&deg;c";?> </p>
													</div>
												</div>
												
												<div class="row">
													<div class="col">
														<p class="info">
														   <?php echo "Morning: ".$day8[6]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Afternoon: ".$day8[3]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Evening: ".$day8[5]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Night: ".$day8[4]."&deg;c";?> </p>
													</div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Pressure: ".$day8[7]."hPa";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Humidity: ".$day8[8]."%";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Dew Point: ".$day8[9]."&deg;c";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Wind Speed: ".$day8[10]."m/s ";?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
												<div class="row">
													<div class="col-2 d-none d-lg-block"></div>
													<div class="col">
														<p class="info">
														   <?php echo "Cloud: ".$day8[13]."mm/h";?> </p>
													</div>
													<div class="col">
														<p class="info">
														   <?php echo "Uvi: ".$day8[14];?> </p>
													</div>
													<div class="col-2 d-none d-lg-block"></div>
												</div>
			                            	</div>
		                        		</div>
		                   			</div>
		                   		</div> <!-- day 8 info ends -->
		                   	</div>	
  
                		</div> <!-- accordion ends -->
					</div>
			</div>
		</div> <!-- container for 8 days info ends  -->
	</div>

	<!-- footer starts -->
	<footer class="footer">
		
	    <h2>Follow Me on: </h2>
	    <ul>
	          <li><a href="https://www.facebook.com/MahimPranto/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
	          <li><a href="https://www.instagram.com/mahim_rahman_pranto/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
	          <li><a href="https://github.com/mahim007pranto"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></li>
	          <li><a href="https://www.linkedin.com/in/mahim-rahman-pranto-ab51081b4/"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
	      </ul>
	  	
		<p>Pranto,All Rights Reserved</p>
	</footer> <!-- footer ends -->
	

	
   
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



