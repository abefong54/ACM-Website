<script type="text/javascript">
    $(document).on("ready", function(){
        $("#bg-container").css("height", $("#content").outerHeight() + $("#footer").outerHeight());
        $("#bg-container").css("width", "100vw");
        $("#bg-container").css("overflow", "hidden");
        window.scrollTo(0, 0);
        //need to delete any background elements that overlap with footer content
        var x = $("#social-box").offset().left;
        var y = $("#social-box").offset().top;
        $("#bg-container > *").each(function(){
            if($(this).offset().left + $(this).outerHeight() + 20 > x && $(this).offset().top + $(this).outerWidth() + 20 > y){
                $(this).hide();
            }
        });
    });
</script>
<div style="position:absolute;height:0px;" id="bg-container">
    <?php
        for($i = 0; $i < 50; $i++){
            $diameter = rand(150, 400);
            $x = rand(-20, 100);
            $y = rand(-20, 1000);
            $blur = 20 + rand(0, 30);
            $color1 = "7e32c2";
            $color2 = "cc4c86";
            $r = dechex(rand(hexdec(substr($color1, 0, 2)), hexdec(substr($color2, 0, 2))));
            $g = dechex(rand(hexdec(substr($color1, 2, 2)), hexdec(substr($color2, 2, 2))));
            $b = dechex(rand(hexdec(substr($color1, 4, 2)), hexdec(substr($color2, 4, 2))));
            $a = dechex(rand(hexdec("40"), hexdec("C0")));
            $color = '#' . $r . $g . $b . $a;
            echo('<div style="width:'.$diameter.'px;height:'.$diameter.'px;position:absolute;top:'.$y.'vh;left:'.$x.'vw;border-radius:1000px;box-shadow:0px 0px '.$blur.'px '.$blur.'px '.$color.';background-color:'.$color.';"></div>');
        }
    ?>
</div>