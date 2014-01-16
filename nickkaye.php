<?php

include_once('php/models/Person.php');
include_once('php/models/Gig.php');

// Master
date_default_timezone_set('America/New_York');

/**
 * @var Person $person
 */
$person = new Person(array(
    'name' => "Nick Kaye",
    'title' => "Writer, Maker & Software Engineer",
    'filenamePortrait' => 'Nick-Kaye-Founder-and-President-Outright-Mental-Inc.jpg',
    'addressOne' => "568 Broadway, 11th Fl",
    'addressTwo' => "New York, NY 10012",
    'twitterHandle' => "nickckaye",
    'urlFacebook' => 'https://www.facebook.com/nickckaye',
    'bioParagraphs' => array(
        "I am a lifelong computer programmer, writer and maker.",
        "Born and raised in Chicago, I moved to the east coast in 2002 to study at NYU Film & TV.  While in school I helped classmates Josh Mond, Antonio Campos and Sean Durkin get Borderline Films off the ground, but soon took a leave from school to begin working in NYC.",
        "Among over 200 projects in commercial media, I directed and animated a nationally-aired public service announcement for the U.S. Department of Justice, designed the Nintendo Wii channel on YouTube for Leo Burnett, developed David Blaine's online presence for the TV special \"Drowned Alive\", directed and animated major label music videos and served tours of duty on campaigns for numerous fortune 500 clients.",
        "In 2006, I was senior art director of a then-eleven-person-startup Big Fuel.",
        "Between 2009 and 2011, I co-founded RetailMLS, Wendr and Learned Media with Ben & Sam Zises.  My drive, focus, imagination, technical skills and voracious appetite for detail allow me to deliver a force to be reckoned with in any media.",
    )
));

/**
 * @var Gig $gig
 */
$gig = new Gig(array(
    'venue' => $person,
    'url' => 'www.DeanStreetComedy.com',
    'dateSlug' => '20131016',
    'date' => 'October 16',
    'dayOfWeek' => 'Wednesday',
    'year' => '2013',
    'time' => '9:00',
    'timeDoors' => '8:45',
    'host' => 'Seena Jon',
    'headlinerOne' => 'Henry Zebrowski (Adult Swim\'s "Your Pretty Face is Going to Hell")',
    'headlinerTwo' => 'Mark Normand(from Conan on TBS)',
    'name' => "Dean Street Comedy #4",
    'slogan' => "Make 'em laugh!",
    'title' => "Comedy Night at Dean Street, Brooklyn, NY",
    'description' => "Top NYC comedy talent at Brooklyn prices!A couple can enjoy a comedy show for 2 hours, drink and eat well for \$50. After party at the bar!",
    'urlYouTube' => "http://www.youtube.com/deanstreetcomedy",
    'urlFacebook' => "https://www.facebook.com/events/158610091011639",
    'urlPoster' => "http://www.DeanStreetComedy.com/img/poster-20131016.jpg",
));

/**
 * @var Gig[] $pastShows
 */
$pastShows = array(
    'show_3' => new Gig(array(
        'venue' => $person,
        'url' => 'www.DeanStreetComedy.com',
        'dateSlug' => '20130918',
        'date' => 'September 18',
        'dayOfWeek' => 'Wednesday',
        'year' => '2013',
        'time' => '9:00',
        'timeDoors' => '8:45',
        'host' => 'Ben Kissel',
        'headlinerOne' => 'Joe Machi (seen on Late Night with Jimmy Fallon)',
        'headlinerTwo' => 'Kevin Barnett (seen in Sleep Walk with Me")',
        'name' => "Dean Street Comedy #3",
        'slogan' => "Make 'em laugh!",
        'title' => "Comedy Night at Dean Street, Brooklyn, NY",
        'description' => "Top NYC comedy talent at Brooklyn prices! A couple can enjoy a comedy show for 2 hours, drink and eat well for $50. After party at the bar!",
        'urlYouTube' => "http://www.youtube.com/deanstreetcomedy",
        'urlFacebook' => "https://www.facebook.com/events/158610091011639",
        'urlPoster' => "http://www.DeanStreetComedy.com/img/poster-20130918.jpg",
    )),
    'show_2' => new Gig(array(
        'venue' => $person,
        'url' => 'www.DeanStreetComedy.com',
        'date' => 'August 14',
        'dayOfWeek' => 'Wednesday',
        'year' => '2013',
        'time' => '9:00',
        'timeDoors' => '8:45',
        'host' => 'Alissa Bissonnette',
        'headlinerOne' => 'Jermaine Fowler',
        'headlinerTwo' => 'Ben Kissel',
        'name' => "Dean Street Comedy #2",
        'slogan' => "Make 'em laugh!",
        'title' => "Comedy Night at Dean Street, Brooklyn, NY",
        'description' => "Top NYC comedy talent at Brooklyn prices! A couple can enjoy a comedy show for 2 hours, drink and eat well for $50. After party at the bar!",
        'urlYouTube' => "http://www.youtube.com/deanstreetcomedy",
        'urlFacebook' => "https://www.facebook.com/events/158610091011639",
        'urlPoster' => "http://www.DeanStreetComedy.com/img/poster-20130814.jpg",
    ))
);

// Technical
$gplus_publisher = "https://plus.google.com/113786691084626528718/posts";
$ga_account = "UA-43069052-1";

?><!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $person->name; ?>, <?php echo $person->title; ?></title>
    <meta name="description" content="<?php echo $gig->description; ?>"/>
    <link rel="canonical" href="<?php echo $gig->url; ?>"/>
    <link rel="publisher" href="<?php echo $gplus_publisher; ?>"/>
    <meta property='og:locale' content='en_US'/>
    <meta property='og:type' content='article'/>
    <meta property='og:title' content="<?php echo $gig->title; ?>"/>
    <meta property='og:description' content='<?php echo $gig->description; ?>'/>
    <meta property='og:url' content='<?php echo $gig->url; ?>'/>
    <meta property='og:site_name' content='<?php echo $gig->name; ?>'/>
    <meta property='article:author' content='<?php echo $gig->venue->urlFacebook; ?>'/>
    <meta property='article:publisher' content='<?php echo $gig->venue->urlFacebook; ?>'/>
    <meta property='fb:admins' content='518634848'/>
    <meta property='og:image' content="<?php echo $gig->urlPoster; ?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@<?php echo $gig->venue->twitterHandle; ?>"/>
    <meta name="twitter:domain" content="<?php echo $gig->venue->name; ?>"/>
    <meta name="twitter:creator" content="@<?php echo $gig->venue->urlTwitter(); ?>"/>
    <meta name="twitter:image:src"
          content="<?php echo $gig->urlPoster; ?>"/>

    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body class="person" data-spy="scroll" data-target=".navspy">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<?php /* include(__DIR__.'/php/views/nav.php'); */ ?>

<?php include(__DIR__ . '/php/views/jumbotron.php'); ?>

<?php include(__DIR__ . '/php/views/gigs.php'); ?>

<?php include(__DIR__ . '/php/views/footer.php'); ?>

<!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script>
    var _gaq = [
        ['_setAccount', 'UA-XXXXX-X'],
        ['_trackPageview']
    ];
    (function (d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>
</body>
</html>
