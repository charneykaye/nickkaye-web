<?php
/**
 * Author: Nick Kaye <nick@outrightmental.com>
 * Laboratory: Outright Mental Inc.
 *
 * @var Person $person
 */
?>
<div class="hidden-print" id="sidebar" role="complementary">
    <ul class="nav">
        <li class="">
            <?php foreach ($person->gigGroups as $gigGroup): ?>
                <a id="sidebar-group-<?php echo $gigGroup->slug; ?>" href="#<?php echo $gigGroup->slug; ?>"
                   data-toggle="collapse" data-target="#sidebar-group-<?php echo $gigGroup->slug; ?>-collapsing">
                    <?php echo $gigGroup->name; ?>
                </a>
                <ul id="sidebar-group-<?php echo $gigGroup->slug; ?>-collapsing" class="nav collapse">
                    <?php foreach ($gigGroup->gigs as $gig): ?>
                        <li class="">
                            <a href="#<?php echo implode('-', array($gigGroup->slug, $gig->slug)); ?>">
                                <?php echo $gig->name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </li>
    </ul>
</div>
