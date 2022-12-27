<?php
// 12. Write a PHP function to get the distance between two points on the earth.
// solution w3resource
function lat_long_dist_of_two_points($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){
    // pi - get value of pi
    // Description: pi () : float, returns an approximation of pi. Also you can use the M_PI constant which yields identical results to pi().
    // Return Values: the value of pi as float
    $pi = pi();
    // sin - sine
    // Description: sin(float $num) : float, sin() returns the sine of the num parameter. the num parameter is in radians.
    // parameters: num a value in radians
    // return values : the sine of num
    $x = sin($latitudeFrom * $pi / 180) *
    sin($latitudeTo * $pi / 180) + 
    cos($latitudeFrom * $pi / 180) *
    cos($latitudeTo * $pi / 180) *
    cos(($longitudeTo * $pi/180)- ($longitudeFrom * $pi /180));
    $x = atan((sqrt(1-pos($x, 2))) / $x);
    return abs((1.852 * 60 * (($x/$pi) * 180)) / 1.609344);

}
// Distance from new york to london
echo lat_long_dist_of_two_points(40.7127, 74.0059, 51.5072, 0.1275). ' mi'."<br>";

// geodatasource.com solution
/*::  This routine calculates the distance between two points (given the     :*/
/*::  latitude/longitude of those points). It is being used to calculate     :*/
/*::  the distance between two locations using GeoDataSource(TM) Products    :*/
/*::                                                                         :*/
/*::  Definitions:                                                           :*/
/*::    South latitudes are negative, east longitudes are positive           :*/
/*::                                                                         :*/
/*::  Passed to function:                                                    :*/
/*::    lat1, lon1 = Latitude and Longitude of point 1 (in decimal degrees)  :*/
/*::    lat2, lon2 = Latitude and Longitude of point 2 (in decimal degrees)  :*/
/*::    unit = the unit you desire for results                               :*/
/*::           where: 'M' is statute miles (default)                         :*/
/*::                  'K' is kilometers                                      :*/
/*::                  'N' is nautical miles                                  :*/
/*::  Worldwide cities and other features databases with latitude longitude  :*/
function distance($lat1, $lon1, $lat2, $lon2, $unit){
    if(($lat1 == $lat2) && ($lon1 == $lon2)){
        return 0;
    }else {
        $theta = $lon1-$lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);
        if($unit == "K"){
            return ($miles * 1.609344);
        }else if ($unit == "N"){
            return ($miles * 0.8684);
        }else {
            return $miles;
        }
    }
}
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles ". "<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers " . "<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . "Nautical Miles" . "<br>";
?>