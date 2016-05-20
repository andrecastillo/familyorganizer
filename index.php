<html>
<head>
	<title>Castillo Family Organizer</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript">
		var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
	</script>
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>


	<div class="top right">
        <div class="windsun small dimmed"></div>
        <div class="temp"></div>
        <div class="forecast small dimmed"></div>
    </div>

	<div class="top left">
        <div class="date small dimmed"></div>
        <div class="time" id="time"></div>
        <div class="calendar xxsmall"></div>
    </div>

	<div class="center-ver center-hor">
        <div class="dishwasher light">Goals and Resolutions Here</div>
    </div>

	<div class="lower-third center-hor">
        <div class="compliment light"></div>
    </div>

    <div class="bottom left">
        <div class="small dimmed">Tasks</div>
        <div class="xxsmall">
            <?php include(dirname(__FILE__).'/asana.php'); ?>
            <!--
            <table class="xsmall"><tbody><tr id="event0" class="event" style="opacity: 1;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Cavaliers</td><td class="days dimmed">Tomorrow at 7:30 PM</td></tr><tr id="event1" class="event" style="opacity: 0.9;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Pelicans</td><td class="days dimmed">in 4 days</td></tr><tr id="event2" class="event" style="opacity: 0.8;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Spurs</td><td class="days dimmed">in 5 days</td></tr><tr id="event3" class="event" style="opacity: 0.7;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Magic</td><td class="days dimmed">in 7 days</td></tr><tr id="event4" class="event" style="opacity: 0.6;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Nets</td><td class="days dimmed">in 10 days</td></tr><tr id="event5" class="event" style="opacity: 0.5;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Lakers</td><td class="days dimmed">in 12 days</td></tr><tr id="event6" class="event" style="opacity: 0.4;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Kings</td><td class="days dimmed">in 14 days</td></tr><tr id="event7" class="event" style="opacity: 0.3;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Trail Blazers</td><td class="days dimmed">in 15 days</td></tr><tr id="event8" class="event" style="opacity: 0.2;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Pistons</td><td class="days dimmed">in 18 days</td></tr><tr id="event9" class="event" style="opacity: 0.1;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Bulls</td><td class="days dimmed">in 20 days</td></tr></tbody></table>
            -->
        </div>
    </div>

	<div class="bottom center-hor">
        <div class="news medium"></div>
    </div>

    <div class="bottom right">
        <div class="small dimmed">Pics</div>
        <div class="xxsmall">
            <!--
            <table class="xsmall"><tbody><tr id="event0" class="event" style="opacity: 1;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Cavaliers</td><td class="days dimmed">Tomorrow at 7:30 PM</td></tr><tr id="event1" class="event" style="opacity: 0.9;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Pelicans</td><td class="days dimmed">in 4 days</td></tr><tr id="event2" class="event" style="opacity: 0.8;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Spurs</td><td class="days dimmed">in 5 days</td></tr><tr id="event3" class="event" style="opacity: 0.7;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Magic</td><td class="days dimmed">in 7 days</td></tr><tr id="event4" class="event" style="opacity: 0.6;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Nets</td><td class="days dimmed">in 10 days</td></tr><tr id="event5" class="event" style="opacity: 0.5;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Lakers</td><td class="days dimmed">in 12 days</td></tr><tr id="event6" class="event" style="opacity: 0.4;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Kings</td><td class="days dimmed">in 14 days</td></tr><tr id="event7" class="event" style="opacity: 0.3;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat @ Trail Blazers</td><td class="days dimmed">in 15 days</td></tr><tr id="event8" class="event" style="opacity: 0.2;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Pistons</td><td class="days dimmed">in 18 days</td></tr><tr id="event9" class="event" style="opacity: 0.1;"><td class="fa fa-calendar-plus-o calendar-icon"></td><td class="description">Heat Vs. Bulls</td><td class="days dimmed">in 20 days</td></tr></tbody></table>
            -->
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/jquery.feedToJSON.js"></script>
    <script src="js/ical_parser.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/secrets.js"></script>
    <script src="js/rrule.js"></script>
    <script src="js/version/version.js"></script>
    <script src="js/calendar/calendar.js"></script>
    <script src="js/compliments/compliments.js"></script>
    <script src="js/weather/weather.js"></script>
    <script src="js/time/time.js"></script>
    <script src="js/news/news.js"></script>
    <script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
    <!-- <script src="js/socket.io.min.js"></script> -->
    <?php include(dirname(__FILE__).'/controllers/modules.php');?>
</body>
</html>
