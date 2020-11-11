<?php

class Speedometer{

    const MilesToKm = 1.609;
    const KmToMiles = 0.621;
        
    public static function convertKmToMiles($speedInKm){ 
        return $speedInKm*self::KmToMiles;
    }

    public static function convertMilesToKm($speedInMiles){
        return $speedInMiles*self::MilesToKm;
    }
}

echo "Km en Miles ";
echo Speedometer::convertKmToMiles(10);
