var timezone = jstz.determine();
document.cookie="local_timezone="+timezone.name();
function localtime($date)
	{
    $timezon=isset($_COOKIE['local_timezone'])? $_COOKIE['local_timezone'] : 'Asia/Gaza';
		$time=strtotime($date);
		$dt = new DateTime("now", new DateTimeZone($timezon)); //first argument "must" be a string
		$dt->setTimestamp($time); //adjust the object to correct timestamp
		return $dt->format('D-m-Y H:i A');
	}
function getlocaldate($date,$format=null)
{
	$date = new DateTime($date, new DateTimeZone(Yii::app()->params['defaulttimezon']));
	$date->setTimezone(new DateTimeZone($this->timezon));
	if($format)
	return $date->format($format);
	else
	return $date->format(yii::app()->params['dateformat'].' h:i A');
}
