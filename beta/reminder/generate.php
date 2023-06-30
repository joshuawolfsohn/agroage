<?php
require 'zapcallib.php';

// TO DO: Add separate "day" labels to each event -> e.g. "Day 3/10", then on "Day 10/10" add message "mung beans should now be ready to eat"
// TO DO: Add URL parameters to specify water times, e.g. water every day at 9am or 10am or 11am blah blah....
// TO DO: Web page with dropdown list of supported plant types and time selector -> click "Download calendar" and these values then supplied to this script via URL parameters
// TO DO: Descriptions include URLs to specific plant care instructions on Agroage site
$category = $_GET["category"];
$plant = $_GET["plant"]; // plant type -> see switch-case below for possible optins


if (!empty($plant) && !empty($category))  {

	$filename = $plant . '-' . $category . '.ical';

	$icalobj = new ZCiCal();

	switch ($plant) {
		case "barleygrass":
			switch ($category) {
				case "sprout":
					goto deferr;
					break;
				case "microgreen":
					$title = 'Please water barley grass';
					$frequency = "FREQ=DAILY;COUNT=10";
					$times = array('today 9:00am','today 9:00pm');
					break;
				default: 
					goto deferr;
			}
			break;
		case "blackbuckwheat":
			switch ($category) {
				case "sprout":
					goto deferr;
					break;
				case "microgreen":
					$title = 'Please water buckwheat';
					$frequency = "FREQ=DAILY;COUNT=12";
					$times = array('today 9:00am','today 9:00pm');
					break;
				default: 
					goto deferr;
			}
			break;
		case "blacksesame":
			switch ($category) {
				case "sprout":
					$title = 'BLACK SESAME SPROUTS - RINSE AND DRAIN';
					$frequency = "FREQ=DAILY;COUNT=3";
					$times = array('today 9:00am','today 9:00pm');
					break;
				case "microgreen":
					goto deferr;
					break;
				default: 
					goto deferr;
			}
			break;
		case "brownlentil":
			switch ($category) {
				case "sprout":
					$title = 'BROWN LENTIL SPROUTS - RINSE AND DRAIN';
					$frequency = "FREQ=DAILY;COUNT=5";
					$times = array('today 9:00am','today 9:00pm');
					break;
				case "microgreen":
					goto deferr;
					break;
				default: 
					goto deferr;
			}
			break;
		case "brownmustard":
			switch ($category) {
				case "sprout":
					$title = 'BROWN MUSTARD SPROUTS - RINSE AND DRAIN';
					$frequency = "FREQ=DAILY;COUNT=6";
					$times = array('today 9:00am','today 9:00pm');
					break;
				case "microgreen":
					goto deferr;
					break;
				default: 
					goto deferr;
			}
			break;
		case "daikonradish":
			switch ($category) {
				case "sprout":
					goto deferr;
					break;
				case "microgreen":
					$title = 'Please water daikon radish';
					$frequency = "FREQ=DAILY;COUNT=12";
					$times = array('today 9:00am','today 9:00pm');
					break;
				default: 
					goto deferr;
			}
			break;
		case "dwarfpea":
			switch ($category) {
				case "sprout":
					goto deferr;
					break;
				case "microgreen":
					$title = 'Please water pea shoots';
					$frequency = "FREQ=DAILY;COUNT=10";
					$times = array('today 9:00am','today 9:00pm');
					break;
				default: 
					goto deferr;
			}
			break;
		case "mungbean":
			switch ($category) {
				case "sprout":
					$title = 'MUNG BEAN SPROUTS - RINSE AND DRAIN';
					$frequency = "FREQ=DAILY;COUNT=6";
					$times = array('today 9:00am','today 9:00pm');
					break;
				case "microgreen":
					goto deferr;
					break;
				default: 
					goto deferr;
			}
			break;
		case "rapini":
			switch ($category) {
				case "sprout":
					$title = 'RAPINI SPROUTS - RINSE AND DRAIN';
					$frequency = "FREQ=DAILY;COUNT=6";
					$times = array('today 9:00am','today 9:00pm');
					break;
				case "microgreen":
					goto deferr;
					break;
				default: 
					goto deferr;
			}
			break;
		case "redclover":
			switch ($category) {
				case "sprout":
					$title = 'RED CLOVER SPROUTS - RINSE AND DRAIN';
					$frequency = "FREQ=DAILY;COUNT=6";
					$times = array('today 9:00am','today 9:00pm');
					break;
				case "microgreen":
					goto deferr;
					break;
				default: 
					goto deferr;
			}
			break;	
		default:
			goto deferr;
	}

	foreach ($times as $time) {
		$event = new ZCiCalNode('VEVENT', $icalobj->curnode);
		$event->addNode(new ZCiCalDataNode('SUMMARY:' . $title));
		$event->addNode(new ZCiCalDataNode('DESCRIPTION:Auto-generated plant care reminder from Agroage'));
		$event->addNode(new ZCiCalDataNode("DTSTART:" . ZCiCal::fromSqlDateTime(date('Y-m-d H:i:s',strtotime($time)))));
		$event->addNode(new ZCiCalDataNode("DTEND:" . ZCiCal::fromSqlDateTime(date('Y-m-d H:i:s',strtotime($time)))));
		$event->addNode(new ZCiCalDataNode('RRULE:' . $frequency)); // iCal spec supports many recurring frequencies, but most calendar software only supports daily/weekly/monthly/yearly -> workaround create several event series if need multiple reminders per day per plant
		$event->addNode(new ZCiCalDataNode("UID:" . $time . "@agroage.ca"));
		$event->addNode(new ZCiCalDataNode("DTSTAMP:" . ZCiCal::fromSqlDateTime()));
	}

	$icalfile = $icalobj->export();

	header('Content-Disposition: attachment; filename=' . $filename);
	header('Content-Type: text/calendar');
	header('Content-Length: ' . strlen($icalfile));
	header('Connection: close');
	echo $icalfile;

} else {
	deferr:
	echo "<text>Error: invalid type.</text>";
}

?>