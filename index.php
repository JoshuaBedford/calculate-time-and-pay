<?php

require_once 'calculate.php';

?>

 <!DOCTYPE html>
<html>
<head>
    <title>Hours Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600' rel='stylesheet'>


<link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>

    <style>

        body {
            padding-top: 20px;
            font-size: 16px;
            font-family: "Open Sans",serif;
        }

        h1 {
            font-family: "Abel", Arial, sans-serif;
            font-weight: 400;
            font-size: 40px;
        }

        .margin-base-vertical {
            margin: 40px 0;
        }

    </style>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <h1 class="margin-base-vertical">Want an easy way to calculate your hours?</h1>

                <p>
                    When working on projects, we sometimes want a simple way of calculating our hours.
                </p>
                <p>
                    There are many ways of achieving this, but one of these ways is to simply insert a start and end time, and have it automatically calculated.
                </p>
                <p>
                    So go ahead, try it out. Insert the start and end time below.
                </p>

                <form  method="post" action="" class="margin-base-vertical">
                <h3>Choose your Hours</h3>

                    <p class="input-group">
                        <span class="input-group-addon"><span class="icon-time"></span></span>
                        <input type="text" class="form-control input-lg some_class" id="startTime" name="startTime" placeholder="Start Time" required autocomplete="off" />
                    </p>
                    <p class="input-group">
                        <span class="input-group-addon"><span class="icon-time"></span></span>
                        <input type="text" class="form-control input-lg some_class" id="endTime" name="endTime" placeholder="End Time" required autocomplete="off"/>
                    </p>
                    <p class="input-group">
                        <span class="input-group-addon"><span class="icon-money"></span></span>
                        <input type="text" class="form-control input-lg" id="hourlyRate" name="hourlyRate" placeholder="Hourly Rate"/>
                    </p>
                    <p class="text-center">
                        <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg calculate">Calculate</button>
                    </p>
                    </span>
                    <?php hours(); ?>
                </form>

            </div>
        </div>
    </div>



<script src="./jquery.js"></script>
<script src="./jquery.datetimepicker.js"></script>
<script>
    $('.some_class').datetimepicker();
</script>
<script type="">
    $('.calculate').click(function() {
        var time = $(this).val();
        $.ajax({
                type: "POST",
                url: "calculate.php",
                data: {submit: answer}
              });
    }
</script>

</body>
</html>
