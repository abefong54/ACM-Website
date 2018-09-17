<?php
require_once(__DIR__ . '/vendor/autoload.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
        <title>Calendar | ACM-W UTSA</title>
        <script type="text/javascript">
            /*
            var eventListStr = '{"events":[
                {
                    "name":"Open House - Ice Breaker - Social",
                    "date":"Aug 31",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"FBI Info Session",
                    "date":"Sep 7",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Brandeis High School STEM Event - Female STEM Panel",
                    "date":"Sep 8",
                    "time":"9am",
                    "location":"Brandeis",
                    "expiration":""
                },
                {
                    "name":"Career Fair Prep",
                    "date":"Sep 14",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Social - Movie Night at Retama: Imitation Game",
                    "date":"Sep 16",
                    "time":"8pm",
                    "location":"Chisholm Hall Theater",
                    "expiration":""
                },
                {
                    "name":"Citi Info Session after STEM Career Fair",
                    "date":"Sep 18",
                    "time":"1pm",
                    "location":"NPB 4.140",
                    "expiration":""
                },
                {
                    "name":"ACM-W Social at UTSA vs Texas State Football Game",
                    "date":"Sep 22",
                    "time":"",
                    "location":"Alamo Dome",
                    "expiration":""
                },
                {
                    "name":"Grace Hopper Conference",
                    "date":"Sep 26-28",
                    "time":"",
                    "location":"",
                    "expiration":""
                },
                {
                    "name":"Guest Speaker - Education & Technology, Diversity in CS",
                    "date":"Oct 5",
                    "time":"",
                    "location":"",
                    "expiration":""
                },
                {
                    "name":"Info Session with Rackspace",
                    "date":"Oct 12",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Grace Hopper Celebration Recap with CS Faculty and Students",
                    "date":"Oct 19",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"SwRI Information Session",
                    "date":"Oct 26",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"HEB Info Session",
                    "date":"Nov 2",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Guest Speaker - IBM and AI",
                    "date":"Nov 9",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"USAA Women\'s Panel",
                    "date":"Nov 30",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Last Meeting of the Semester",
                    "date":"Dec 7",
                    "time":"12pm",
                    "location":"NPB 1.226",
                    "expiration":""
                }
            ]}';
            */
            
            //compiled list //should delete dev list from production
            var eventListStr = '{"events":[{"name":"Open House - Ice Breaker - Social","date":"Aug 31","time":"12pm","location":"NPB 1.226","expiration":""},{"name":"FBI Info Session","date":"Sep 7","time":"12pm","location":"NPB 1.226","expiration":""},{"name":"Brandeis High School STEM Event - Female STEM Panel","date":"Sep 8","time":"9am","location":"Brandeis","expiration":""},{"name":"Career Fair Prep","date":"Sep 14","time":"12pm","location":"NPB 1.226","expiration":""},{"name":"Social - Movie Night at Retama: Imitation Game","date":"Sep 16","time":"8pm","location":"Chisholm Hall Theater","expiration":""},{"name":"Citi Info Session after STEM Career Fair","date":"Sep 18","time":"1pm","location":"NPB 4.140","expiration":""},{"name":"ACM-W Social at UTSA vs Texas State Football Game","date":"Sep 22","time":"","location":"Alamo Dome","expiration":""},{"name":"Grace Hopper Conference","date":"Sep 26-28","time":"","location":"","expiration":""},{"name":"Guest Speaker - Education & Technology, Diversity in CS","date":"Oct 5","time":"","location":"","expiration":""},{"name":"Info Session with Rackspace","date":"Oct 12","time":"12pm","location":"NPB 1.226","expiration":""},{"name":"Grace Hopper Celebration Recap with CS Faculty and Students","date":"Oct 19","time":"12pm","location":"NPB 1.226","expiration":""},{"name":"SwRI Information Session","date":"Oct 26","time":"12pm","location":"NPB 1.226","expiration":""},{"name":"HEB Info Session","date":"Nov 2","time":"12pm","location":"NPB 1.226","expiration":""},{"name":"Guest Speaker - IBM and AI","date":"Nov 9","time":"12pm","location":"NPB 1.226","expiration":""},{"name":"USAA Women\'s Panel","date":"Nov 30","time":"12pm","location":"NPB 1.226","expiration":""},{"name":"Last Meeting of the Semester","date":"Dec 7","time":"12pm","location":"NPB 1.226","expiration":""}]}';
            var eventList = JSON.parse(eventListStr);
            $(document).on("ready", function(){
                for(var i = 0; i < eventList.events.length; i++){
                    $("#event-items").append('<div class="event-item">'+eventList.events[i].date+' '+eventList.events[i].time+' <h4 style="display:inline-block;">'+eventList.events[i].name+'</h4></div>');
                }
            });
        </script>
        <style type="text/css">
            #event-items {
                max-width: 768px;
                background-color: #fefefe;
                margin: 20px;
                padding: 0px;
                box-shadow: 0px 1px 12px -3px #000000;
                border-radius: 5px;
                overflow: hidden;
            }
            #event-items > h3 {
                margin: 0px;
                padding: 20px 30px;
                background-color: #bd1ec6;
                color: #FFFFFF;
            }
            .event-item {
                overflow: hidden;
                background-color: #FEFEFE;
            }
            .event-item > div {
                padding: 20px 30px;
            }
        </style>
	</head>
	<body>
		<?php
			require('common/menu.php');
            include('common/bg.php');
		?>
		<div id="content" class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- content here! -->
					<h1>
						Calendar
					</h1>
					<script type="text/javascript">
					    $(document).on("ready", function(){
					        
					    });
					</script>
					<div id="event-items">
					    <h3 id="calendar-month">
					        Events
					    </h3>
					    <div>
					        
					    </div>
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
