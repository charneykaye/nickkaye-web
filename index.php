<?php

include_once('php/models/Person.php');
include_once('php/models/Gig.php');
include_once('php/models/GigGroup.php');

// Master
date_default_timezone_set('America/New_York');

/**
 * @var Person $person
 */
$person = new Person(require(__DIR__ . '/php/data.php'));

// Technical
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
    <meta name="description" content="<?php echo $person->description; ?>"/>
    <link rel="canonical" href="<?php echo $person->url; ?>"/>
    <link rel="publisher" href="<?php echo $person->gPlusPublisher; ?>"/>
    <meta property='og:locale' content='en_US'/>
    <meta property='og:type' content='article'/>
    <meta property='og:title' content="<?php echo $person->title; ?>"/>
    <meta property='og:description' content='<?php echo $person->description; ?>'/>
    <meta property='og:url' content='<?php echo $person->url; ?>'/>
    <meta property='og:site_name' content='<?php echo $person->name; ?>'/>
    <meta property='article:author' content='<?php echo $person->urlFacebook; ?>'/>
    <meta property='article:publisher' content='<?php echo $person->urlFacebook; ?>'/>
    <meta property='fb:admins' content='518634848'/>
    <meta property='og:image' content="<?php echo $person->urlPortrait(); ?>"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@<?php echo $person->twitterHandle; ?>"/>
    <meta name="twitter:domain" content="<?php echo $person->name; ?>"/>
    <meta name="twitter:creator" content="@<?php echo $person->urlTwitter(); ?>"/>
    <meta name="twitter:image:src"
          content="<?php echo $person->urlPortrait(); ?>"/>

    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">

    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300'
        rel='stylesheet' type='text/css'>

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body class="person" data-spy="scroll" data-target="#sidebar">
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
        ['_setAccount', '<?php echo $ga_account; ?>'],
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
