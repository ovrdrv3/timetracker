<?
#return fontawesome icon
function i($code){
    $icon = '<i class="fa fa-'.$code.'"></i>';
    return $icon;
}
$defaultTimeZone='America/Los_Angeles'; #this would be the location you are from, here is the list of supported timezones: http://php.net/manual/en/timezones.php
if(date_default_timezone_get()!=$defaultTimeZone) date_default_timezone_set($defaultTimeZone);

// # Make the date look nice
function date_nice($date){
    return date('M d Y g:i A', $date);
}

function time_nice($seconds) {
    $h = floor(($seconds / 60) / 60);
    $m = round(($seconds/60) - ($h * 60));

    return $h . ' hrs : ' .$m. ' mins';
}

function save($data){
    $json = json_encode($data);
    $file = fopen("data.json", "w");
    fwrite($file, $json);

}



?>
