<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SportBox - Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Stylesheets -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/stylesheets/css/all.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="//use.edgefonts.net/lato;pt-sans-narrow.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="/scripts/magnific.min.js"></script>
        <script src="/scripts/site.min.js"></script>
    </head>
    <body>

        <div class="masthead landing">
            <?php include("inc/nav.php"); ?>

            <div class="table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 text-center animated fadeInUp">
                            <h1>Get Outside with SportBox</h1>
                            <p>discover &amp; book amazing outdoor experiences</p>
                            <a href="/activities" class="btn btn-default knockout">Explore Activities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="activities" class="container">
            <div class="activity-tiles">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-tile text-center about dark">
                            <div class="inner">
                                <h3>The SportBox</h3>
                                <p>Everyone should spend their weekends outside. Find adventure...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="single-tile text-center activity-type race">
                            <div class="inner">
                                <h3>Born to Race</h3>
                                <a href="/activities/born-to-race" class="btn btn-default knockout">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="single-tile text-center activity-type beach">
                            <div class="inner">
                                <h3>Kick-back Summer Volleyball Tour</h3>
                                <a href="/activities/kick-back-summer-volleyball-tour" class="btn btn-default knockout">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-tile text-center activity-type flight">
                            <div class="inner">
                                <h3>Experience Aerobatic Flight</h3>
                                <a href="/activities/experience-aerobatic-flight" class="btn btn-default knockout">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-tile text-center activity-type drift">
                            <div class="inner">
                                <h3>Track Day Package</h3>
                                <a href="/activities/track-day-package" class="btn btn-default knockout">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-tile text-center activity-type trail">
                            <div class="inner">
                                <h3>Guided Pacific Crest Hike</h3>
                                <a href="/activities/guided-pacific-crest-hike" class="btn btn-default knockout">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <?php include("inc/outro.php"); ?>

        <?php include("inc/about.php"); ?>

    </body>
</html>
