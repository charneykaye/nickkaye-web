<?php
/**
 * Author: Nick Kaye <nick@outrightmental.com>
 * Laboratory: Outright Mental Inc.
 */
?>
<div id="gigs_list">
    <?php foreach ($person->gigGroups as $gigGroup): ?>

        <h1 id="<?php echo $gigGroup->slug; ?>">
            <?php echo $gigGroup->name; ?>
        </h1>
        <?php echo $gigGroup->html; ?>
        <hr/>

        <?php foreach ($gigGroup->gigs as $gig): ?>

            <h2 id="<?php echo implode('-', array($gigGroup->slug, $gig->slug)); ?>">
                <?php echo $gig->name; ?>
            </h2>
            <?php echo $gig->html; ?>
            <hr/>

        <?php endforeach; ?>
    <?php endforeach; ?>
</div>