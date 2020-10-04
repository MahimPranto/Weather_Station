<?php 
	// initializing vatiables
	$error = '';
	$selection=$_POST['selection'];
	$pressure=$humidity=$temp_max=$temp_min=$feels_like=$wind_speed=$dew_point=$uvi=0;
	$weather=$lon=$lat=$weather1=$weather2="";
	$country="Country";
	$today=date("F j, Y");
	$cityname="Your City";
	
		$dt="";
		$today2= "Month/Date/Year"; 
		$minTemp=$maxTemp=$dayTemp=$nightTemp=0;
		
		$eveTemp=$morningTemp=$pressure2=$humidity2=$dew_point2=$wind_speed2=$clouds=$uvi2=0;
		$weather11=$weather12="";
	
	// array for 8 days data store		
	$day1= array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2); 
	$day2= array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2); 
	$day3= array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2); 
	$day4= array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2); 
	$day5= array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2); 
	$day6= array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2); 
	$day7= array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2); 
	$day8= array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2);

	//url validation incase of wrong input by user
	function validateUrl($url){
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_HEADER, true);    
			curl_setopt($ch, CURLOPT_NOBODY, true);    
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1); 
			curl_setopt($ch, CURLOPT_TIMEOUT,10);
			$output = curl_exec($ch);
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);

			if($httpcode == "200"){
				return true;
			   
			}else{
			    return false;
			}

		} 

	if(isset($_POST["submit"])){

		// generates url based on user input
		$url="http://api.openweathermap.org/data/2.5/weather?q=".$selection."&lang=en&units=metric&appid= get your token id from openweather and put it here ";
			if(validateUrl($url)){
			    	$contents = file_get_contents($url);
					$clima= json_decode($contents);
					
					// storing data from 1st url
					$temp_max=$clima->main->temp_max;
					$temp_min=$clima->main->temp_min;	
					$country=$clima->sys->country;
					$cityname=$clima->name;
					$lon=$clima->coord->lon;
					$lat=$clima->coord->lat;
					
					// 2nd url for fetching 8 days data
					$url="https://api.openweathermap.org/data/2.5/onecall?lat=".$lat."&lon=".$lon."&units=metric&%20exclude=hourly,daily&appid= get your token id from openweather and put it here";	
					$contents2 = file_get_contents($url);
					$climate= json_decode($contents2);
					
					// storing data from 2nd url
					$dew_point=$climate->current->dew_point;
					$pressure=$climate->current->pressure;
					$humidity=$climate->current->humidity;
					$feels_like=$climate->current->feels_like;
					$weather1=$climate->current->weather[0]->main;
					$weather2=$climate->current->weather[0]->description;
					$wind_speed=$climate->current->wind_speed;
					$dew_point=$climate->current->dew_point;
					$uvi=$climate->current->uvi;
					
					// converting time from unix format
					$offset=$climate->timezone_offset;
					$dt=$climate->current->dt;
					$today= gmdate("F j, Y, g:i a", $dt+$offset); 

					// filling array for separating 8 days data 
					for ($x = 0; $x <= 7; $x++) {
					$dt=$climate->daily[$x]->dt;
					$today2= gmdate("F j, Y", $dt+$offset); 
					$minTemp=$climate->daily[$x]->temp->min;
					$maxTemp=$climate->daily[$x]->temp->max;
					$dayTemp=$climate->daily[$x]->temp->day;
					$nightTemp=$climate->daily[$x]->temp->night;
					$eveTemp=$climate->daily[$x]->temp->eve;
					$morningTemp=$climate->daily[$x]->temp->morn;
					$pressure2=$climate->daily[$x]->pressure;
					$humidity2=$climate->daily[$x]->humidity;
					$dew_point2=$climate->daily[$x]->dew_point;
					$wind_speed2=$climate->daily[$x]->wind_speed;
					$weather11=$climate->daily[$x]->weather[0]->main;
					$weather12=$climate->daily[$x]->weather[0]->description;
					$clouds=$climate->daily[$x]->clouds;
					$uvi2=$climate->daily[$x]->uvi;
						if($x==0){
							$day1 = array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2);
						}
						if($x==1){
							$day2 = array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2);
						}
						if($x==2){
							$day3 = array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2);
						}
						if($x==3){
							$day4 = array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2);
						}
						if($x==4){
							$day5 = array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2);
						}
						if($x==5){
							$day6 = array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2);
						}
						if($x==6){
							$day7 = array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2);
						}
						if($x==7){
							$day8 = array($today2, $minTemp, $maxTemp, $dayTemp, $nightTemp, $eveTemp, $morningTemp, $pressure2, $humidity2,  $dew_point2, $wind_speed2, $weather11, $weather12, $clouds, $uvi2);
						}
					}

			}
			// for wrong input
			else{
			    $cityname="City Not Found";
			    $country="Search Again";
			}
		
	}

 ?>