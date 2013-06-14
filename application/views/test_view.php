<!DOCTYPE html>
<html>
    <head>
        <script src="<?= base_url('asset/js/jquery-1.10.1.min.js') ?>"></script>
        <style>
            #escapingBallG{
                position:relative;
                width:128px;
                height:44px;
            }

            .escapingBallG{
                background-color:#000000;
                position:absolute;
                top:0;
                left:0;
                width:44px;
                height:44px;
                -moz-border-radius:22px;
                -moz-animation-name:bounce_escapingBallG;
                -moz-animation-duration:1.3s;
                -moz-animation-iteration-count:infinite;
                -moz-animation-timing-function:linear;
                -moz-animation-delay:0s;
                -moz-transform:scale(0.5, 1);
                -webkit-border-radius:22px;
                -webkit-animation-name:bounce_escapingBallG;
                -webkit-animation-duration:1.3s;
                -webkit-animation-iteration-count:infinite;
                -webkit-animation-timing-function:linear;
                -webkit-animation-delay:0s;
                -webkit-transform:scale(0.5, 1);
                -ms-border-radius:22px;
                -ms-animation-name:bounce_escapingBallG;
                -ms-animation-duration:1.3s;
                -ms-animation-iteration-count:infinite;
                -ms-animation-timing-function:linear;
                -ms-animation-delay:0s;
                -ms-transform:scale(0.5, 1);
                -o-border-radius:22px;
                -o-animation-name:bounce_escapingBallG;
                -o-animation-duration:1.3s;
                -o-animation-iteration-count:infinite;
                -o-animation-timing-function:linear;
                -o-animation-delay:0s;
                -o-transform:scale(0.5, 1);
                border-radius:22px;
                animation-name:bounce_escapingBallG;
                animation-duration:1.3s;
                animation-iteration-count:infinite;
                animation-timing-function:linear;
                animation-delay:0s;
                transform:scale(0.5, 1);
            }

            @-moz-keyframes bounce_escapingBallG{
                0%{
                left:0px;
                -moz-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            25%{
                left:42px;
                -moz-transform:scale(1, 0.5);
                background-color:#000000;
            }

            50%{
                left:106px;
                -moz-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            75%{
                left:42px;
                -moz-transform:scale(1, 0.5);
                background-color:#000000;
            }

            100%{
                left:0px;
                -moz-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            }

            @-webkit-keyframes bounce_escapingBallG{
                0%{
                left:0px;
                -webkit-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            25%{
                left:42px;
                -webkit-transform:scale(1, 0.5);
                background-color:#000000;
            }

            50%{
                left:106px;
                -webkit-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            75%{
                left:42px;
                -webkit-transform:scale(1, 0.5);
                background-color:#000000;
            }

            100%{
                left:0px;
                -webkit-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            }

            @-ms-keyframes bounce_escapingBallG{
                0%{
                left:0px;
                -ms-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            25%{
                left:42px;
                -ms-transform:scale(1, 0.5);
                background-color:#000000;
            }

            50%{
                left:106px;
                -ms-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            75%{
                left:42px;
                -ms-transform:scale(1, 0.5);
                background-color:#000000;
            }

            100%{
                left:0px;
                -ms-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            }

            @-o-keyframes bounce_escapingBallG{
                0%{
                left:0px;
                -o-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            25%{
                left:42px;
                -o-transform:scale(1, 0.5);
                background-color:#000000;
            }

            50%{
                left:106px;
                -o-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            75%{
                left:42px;
                -o-transform:scale(1, 0.5);
                background-color:#000000;
            }

            100%{
                left:0px;
                -o-transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            }

            @keyframes bounce_escapingBallG{
                0%{
                left:0px;
                transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            25%{
                left:42px;
                transform:scale(1, 0.5);
                background-color:#000000;
            }

            50%{
                left:106px;
                transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            75%{
                left:42px;
                transform:scale(1, 0.5);
                background-color:#000000;
            }

            100%{
                left:0px;
                transform:scale(0.5, 1);
                background-color:#ffffff;
            }

            }

        </style>

    </head>
    <body onload="iyo();">
        <form action="" id="searchForm">
            <input type="text" name="s" placeholder="Search..." />
            <input type="submit" value="Search" />
        </form>
        <select name="polo1" onchange="iyo();">
            <?php
            foreach ($result1 as $row) {
                echo '<option value="' . $row['semester'] . '">' . $row['semester'] . '</option>';
            }
            ?>
        </select>
        <select name="polo2" onchange="iyo();">
            <?php
            foreach ($result2 as $row) {
                echo '<option value="' . $row['nis'] . '">' . $row['nis'] . '</option>';
            }
            ?>
        </select>
        <div id="result"></div>
        <script>
        $("#searchForm").submit(function(event) {
            event.preventDefault();
            var $form = $(this),
                    term = $form.find('input[name="s"]').val(),
                    url = $form.attr('action');
            $('#result').html('sek...');
            var posting = $.post(url, {s: term});
            posting.done(function(data) {
                $("#result").empty().append(data);
            });
        });
        function iyo() {
            $('#result').html('<div id="escapingBallG"><div id="escapingBall_1" class="escapingBallG"></div></div>');
            var posting = $.post('#', {s: $('select[name="polo1"]').val(), ss: $('select[name="polo2"]').val()});
            posting.done(function(data) {
                $("#result").html(data);
            });
        }
        </script>
    </body>
</html>