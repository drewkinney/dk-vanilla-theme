<?php
	// server dates
	$_year = date('Y');
	$_month = date('m');
	$_day = date('d');


	// split excerpt value (ie: 02-16-2000,04-21-2017) around ','
	$show_dates_data = (explode(",", excerpt()));
	// $show_dates_data[0] = '02-16-2000'
	// $show_dates_data[1] = '04-21-2017'


	$show_start_date = (explode("-", $show_dates_data[0]));
	// $show_start_date[0] = '02';
	// $show_start_date[1] = '16';
	// $show_start_date[3] = '2000';


	$show_end_date = (explode("-", $show_dates_data[1]));
	// $show_end_date[0] = '04' 
	// $show_end_date[1] = '21' 
	// $show_end_date[2] = '2017' 

	$show_start_month = $show_start_date[0];
	$show_start_day = $show_start_date[1];
	$show_start_year = $show_start_date[2];

	$show_end_month = $show_end_date[0];
	$show_end_day = $show_end_date[1];
	$show_end_year = $show_end_date[2];



if( $show_start_year >= $_year && $show_end_year >= $_year ){ 		// start year >= year

	if( $show_start_day >= $_day &&  $show_end_day <= $_day && $show_start_month >= $_month && $show_end_month >= $_month ){	// start year >= year & start month > month
		
			// show month not greater that server month
			echo 'current';
				
		}else if( $show_start_month < $show_end_month ){
			
			// show month not greater that server month
			echo 'expired';
			
		}else{

			// show month not greater that server month
			echo 'expired';

		}		
		
	}else{
	
		// show month not greater that server month
		echo 'expired';
		
		
	}

}

?>