<?php
require_once(__DIR__ . '/vendor/autoload.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
        <title>Events | ACM-W UTSA</title>
        <script type="text/javascript">
            /*
            var eventListStr = '{"events":[
                {
                    "name":"Open House - Ice Breaker - Social",
                    "date":"Aug 31",
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"FBI Info Session",
                    "date":"Sept 7",
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Brandeis High School STEM Event - Female STEM Panel",
                    "date":"Sept 8",
                    "time":"9:00 AM",
                    "location":"Brandeis",
                    "expiration":""
                },
                {
                    "name":"Career Fair Prep",
                    "date":"Sept 14",
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Social - Movie Night at Retama: Imitation Game",
                    "date":"Sept 16",
                    "time":"8:00 PM",
                    "location":"Chisholm Hall Theater",
                    "expiration":""
                },
                {
                    "name":"Citi Info Session after STEM Career Fair",
                    "date":"Sept 18",
                    "time":"1:00",
                    "location":"NPB 4.140",
                    "expiration":""
                },
                {
                    "name":"ACM-W Social at UTSA vs Texas State Football Game",
                    "date":"Sept 22",
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
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Grace Hopper Celebration Recap with CS Faculty and Students",
                    "date":"Oct 19",
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"SWRI Information Session",
                    "date":"Oct 26",
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"HEB Info Session",
                    "date":"Nov 2",
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Guest Speaker - IBM and AI",
                    "date":"Nov 9",
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"USAA Women\'s Panel",
                    "date":"Nov 30",
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                },
                {
                    "name":"Last Meeting of the Semester",
                    "date":"Dec 7",
                    "time":"12:00 PM",
                    "location":"NPB 1.226",
                    "expiration":""
                }
            ]}';
            */
            
            //compiled list //should delete dev list from production
            var eventListStr = '{"events":[{"name":"Open House - Ice Breaker - Social","date":"Aug 31","time":"12:00 PM","location":"NPB 1.226","expiration":""},{"name":"Social with SWE at REC","date":"Sept 7","time":"","location":"REC Leisure Pool","expiration":""},{"name":"FBI Info Session","date":"Sept 7","time":"12:00 PM","location":"NPB 1.226","expiration":""},{"name":"Brandeis High School STEM Event - Female STEM Panel","date":"Sept 8","time":"9:00 AM","location":"Brandeis","expiration":""},{"name":"Career Fair Prep","date":"Sept 14","time":"12:00 PM","location":"NPB 1.226","expiration":""},{"name":"Social - Movie Night at Retama: Imitation Game","date":"Sept 16","time":"8:00 PM","location":"Chisholm Hall Theater","expiration":""},{"name":"Citi Info Session after STEM Career Fair","date":"Sept 18","time":"1:00","location":"NPB 4.140","expiration":""},{"name":"ACM-W Social at UTSA vs Texas State Football Game","date":"Sept 22","time":"","location":"Alamo Dome","expiration":""},{"name":"Grace Hopper Conference","date":"Sep 26-28","time":"","location":"","expiration":""},{"name":"Guest Speaker - Education & Technology, Diversity in CS","date":"Oct 5","time":"","location":"","expiration":""},{"name":"Info Session with Rackspace","date":"Oct 12","time":"12:00 PM","location":"NPB 1.226","expiration":""},{"name":"Grace Hopper Celebration Recap with CS Faculty and Students","date":"Oct 19","time":"12:00 PM","location":"NPB 1.226","expiration":""},{"name":"SWRI Information Session","date":"Oct 26","time":"12:00 PM","location":"NPB 1.226","expiration":""},{"name":"HEB Info Session","date":"Nov 2","time":"12:00 PM","location":"NPB 1.226","expiration":""},{"name":"Guest Speaker - IBM and AI","date":"Nov 9","time":"12:00 PM","location":"NPB 1.226","expiration":""},{"name":"USAA Women\'s Panel","date":"Nov 30","time":"12:00 PM","location":"NPB 1.226","expiration":""},{"name":"Last Meeting of the Semester","date":"Dec 7","time":"12:00 PM","location":"NPB 1.226","expiration":""}]}';
            var eventList = JSON.parse(eventListStr);
            <?php
                $color1 = "7e32c2";
                $color2 = "cc4c86";
                $jsColorList = 'var colors = ["#cc4c86"';
                for($i = 0; $i < 10; $i++){
                    $r = dechex(rand(hexdec(substr($color1, 0, 2)), hexdec(substr($color2, 0, 2))));
                    $g = dechex(rand(hexdec(substr($color1, 2, 2)), hexdec(substr($color2, 2, 2))));
                    $b = dechex(rand(hexdec(substr($color1, 4, 2)), hexdec(substr($color2, 4, 2))));
                    $color = '#' . $r . $g . $b;
                    $jsColorList .= ', "'.$color.'"';
                }
                $jsColorList .= ' ];';
                echo($jsColorList);
            ?>
            $(document).on("ready", function(){
                for(var i = 0; i < eventList.events.length; i++){
                    $("#event-items").append('<div class="event-item"><h3>'+eventList.events[i].name+'</h3><div>'+eventList.events[i].date+' '+eventList.events[i].time+'</div></div>');
                }
            });
        </script>
        <style type="text/css">
            #event-items {
                flex-direction: row;
                display:flex;
                flex-wrap: wrap;
            }
            .event-item {
                margin: 20px;
                padding: 0px;
                box-shadow: 0px 3px 13px -3px #000000;
                border-radius: 5px;
                overflow: hidden;
                background-color: #FEFEFE;
                display: inline-block;
                flex-grow: 1;
                text-align: center;
            }
            .event-item > h3 {
                margin: 0px;
                padding: 20px 30px;
                background-color: #c22cc2;
                color: #FFFFFF;
            }
            .event-item > div {
                padding: 20px 30px;
            }
            /*reduce contrast from background*/
            #bg-container {
                opacity:0.5;
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
						Events
					</h1>
					<div id="event-items">
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
