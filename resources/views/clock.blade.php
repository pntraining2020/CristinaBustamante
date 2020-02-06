<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Clock</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
        background: #C9D6FF;
        background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);
        background: linear-gradient(to right, #E2E2E2, #C9D6FF);
    }

    @font-face {
        font-family: "alarm clock";
        src: url("alarm_clock.eot?") format("eot"),
            url("alarm_clock.woff") format("woff"),
            url("alarm_clock.ttf") format("truetype"),
            url("alarm_clock.svg#alarmclock") format("svg");
        font-weight: normal;
        font-style: normal;
    }

    h3,
    a {
        font-family: 'alarm clock';
    }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            Time Tracker App
        </div><br><br>
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                List of Names
            </button>
            <!-- <form method="POST" action="{{url('/clock')}}">
                {{ csrf_field() }} -->
                <div class="dropdown-menu">
                    <a class="dropdown-item" id="cristina">Cristina Bustamante</a>
                    <a class="dropdown-item" id="cristina">Marichu Niere</a>
                    <a class="dropdown-item" id="cristina">Grace Laborada</a>

                </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <center>
                        <div class="card bg-dark text-white">
                            <h3 class="card-title text-center">
                                <div class="d-flex flex-wrap justify-content-center mt-2">
                                    <a><span class="badge hours"></span></a> :
                                    <a><span class="badge min"></span></a>
                                </div>
                            </h3>
                        </div>
                    </center>
                </div>
            </div><br><br>

            <button type="button" class="btn btn-primary">Clock In</button><br><br>
            <h2 class="break">BREAK</h2><br>
            <button type="button" class="btn btn-secondary">Start</button><br><br>
            <button type="button" class="btn btn-success">End</button><br><br>
            <button type="button" class="btn btn-info">Clock Out</button>
        </div>
    </div>
    </form>
    <!-- </form> -->
    <script>
    $(document).ready(function() {
        setInterval(function() {
            var hours = new Date().getHours();
            $(".hours").html((hours < 10 ? "0" : "") + hours);
        }, 1000);
        setInterval(function() {
            var minutes = new Date().getMinutesvar hours = new Date().getHours();
            $(".hours").html((hours < 10 ? "0" : "") + hours);
        }, 1000);
        setInterval(function() {
            var seconds = new Date().getSeconds();
            $(".sec").html((seconds < 10 ? "0" : "") + seconds);
        }, 1000);
    });
    
    

    </script>



</html>