<header>
    <?php

    // API Location: http://api.openweathermap.org/


    // Build up URL for the request.

    $url = "http://api.openweathermap.org/data/2.5/weather?q=Melbourne,au&APPID=1d7418ebae7238337e156b0e66485ac8";

    // Send GET request.
    $json = file_get_contents($url);

    // Decode returned JSON string to array for processing.
    $data = json_decode($json, true, JSON_PRETTY_PRINT);
    $temp = (float)$data['main']['temp'] - 273.15;
    $humid = $data['main']['humidity'];
    ?>
    <div class="grid-item item1">
        <a href="index.php">
            <canvas id="logoCanvas" onload="logo()">
                Your browser does not support the HTML canvas tag.</canvas>
            <script>
                var canvas = document.getElementById("logoCanvas");
                var logo = canvas.getContext("2d");
                logo.font = "70px Cabliri";
                logo.fillStyle = "#e6e6e6";
                logo.textAlign = "center";
                logo.fillText("ABC Gym", canvas.width / 2, canvas.height / 2);
                logo.lineWidth = 6;
                logo.strokeStyle = "#e6e6e6";
                logo.beginPath();
                logo.moveTo(10, 90);
                logo.bezierCurveTo(10, 160, 290, 160, 290, 90);
                logo.stroke();
                logo.beginPath();
                logo.moveTo(0, 90);
                logo.lineTo(20, 90);
                logo.stroke();
                logo.moveTo(300, 90);
                logo.lineTo(280, 90);
                logo.stroke();
            </script>
        </a>

        <?php if (isset($data)) { ?>
            <div class="mt-3">
                <?php if (isset($data['Error Message'])) { ?>
                    <p class="alert alert-danger"><?php echo $data['Error Message']; ?></p>
                <?php } else { ?>
                    <div class="white" style="padding-top: 5px;">Temp: <?php echo $temp . " Celsius degrees"; ?></div>
                    <div class="white">Humidity: <?php echo $humid; ?></div>
                    <?php if ($temp > 10 && $temp < 30) { ?>
                        <div class="white">What a nice day! Let's exercise </div>
                    <?php } else { ?>
                        <div class="white">Bad weather. All good! Virtual training!! </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
        <!-- Retrieving data in order to display current weather to users -->


    </div>
</header>
<!-- Reducing code repetition with a separate header fragment -->

<!-- References:
Rmit.instructure.com. 2020. [online] Available at: <https://rmit.instructure.com/courses/67421/pages/week-10-learning-materials-slash-activities?module_item_id=2542864> [Accessed 30 September 2020]. -->