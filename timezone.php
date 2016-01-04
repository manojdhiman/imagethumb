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
