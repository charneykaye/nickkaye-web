<?php
/**
 * Author: Nick Kaye <nick@outrightmental.com>
 * Laboratory: Outright Mental Inc.
 *
 * @var Person $person
 */
?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="jumbotron" class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1>
                    <img src="<?php echo $person->urlPortrait(); ?>"/>
                </h1>
            </div>
            <div class="col-md-9">
                <h1><?php echo $person->name; ?></h1>

                <h2><?php echo $person->title; ?></h2>

                <?php echo $person->html; ?>

            </div>
        </div>
    </div>
</div>