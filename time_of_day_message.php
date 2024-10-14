
    <?php
    date_default_timezone_set("Europe/London");//set your timezone
    $current_time = date('H:i:s');
    $time_of_day = '';
    if($current_time >='05:00:00' && $current_time < '12:00:00'){
        $time_of_day = 'morning';//if the time is between 5am and 12am variable stored is morning 

    } 
    elseif($current_time >='12:00:00' && $current_time < '18:00:00'){
        $time_of_day = 'afternoon';//if the time is between 5am and 12am variable stored is afternoon
    }
    else{
        $time_of_day = 'evening';//if the time is between 5am and 12am variable stored is evening
    }
    ?>

    <h1> Good <?php echo $time_of_day; // displays variable time of day ?></h1>
