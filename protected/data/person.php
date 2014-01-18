<?php
/**
 * Author: Nick Kaye <nick@outrightmental.com>
 * Laboratory: Outright Mental Inc.
 */
return array(
    'name' => "Nick Kaye",
    'title' => "Writer, Maker & Software Engineer",
    'description' => "Writer, Maker & Software Engineer.  I've been programming since 1984, before I could walk.",
    'filenamePortrait' => 'Nick-Kaye-Founder-and-President-Outright-Mental-Inc.jpg',
    'addressOne' => "568 Broadway, 11th Fl",
    'addressTwo' => "New York, NY 10012",
    'twitterHandle' => "nickckaye",
    'gPlusPublisher' => "https://plus.google.com/113786691084626528718",
    'urlFacebook' => 'https://www.facebook.com/nickckaye',
    'html' => file_get_contents(__DIR__ . '/html/person.html'),
    'gigGroups' => array(
        new GigGroup(array(
            'slug' => 'pro-skills',
            'name' => 'Professional Skills',
            'html' => file_get_contents(__DIR__ . '/html/pro-skills/index.html'),
            'gigs' => array(
                new Gig(array(
                    'slug' => 'developer',
                    'name' => 'Developer',
                    'html' => file_get_contents(__DIR__ . '/html/pro-skills/developer.html'),
                )),
                new Gig(array(
                    'slug' => 'productivity',
                    'name' => 'Productivity',
                    'html' => file_get_contents(__DIR__ . '/html/pro-skills/productivity.html'),
                )),
                new Gig(array(
                    'slug' => 'audio-visual',
                    'name' => 'Audio/Visual',
                    'html' => file_get_contents(__DIR__ . '/html/pro-skills/audio-visual.html'),
                )),
            )
        )),
        new GigGroup(array(
            'slug' => 'work-experience',
            'name' => 'Work Experience',
            'html' => file_get_contents(__DIR__ . '/html/work-experience/index.html'),
            'gigs' => array(
                new Gig(array(
                    'slug' => 'in-rhythm',
                    'name' => 'InRhythm',
                    'html' => file_get_contents(__DIR__ . '/html/work-experience/in-rhythm.html'),
                    'year' => '2013',
                )),
                new Gig(array(
                    'slug' => 'retail-mls',
                    'name' => 'RetailMLS',
                    'html' => file_get_contents(__DIR__ . '/html/work-experience/retail-mls.html'),
                    'year' => '2012',
                )),
                new Gig(array(
                    'slug' => 'transistor',
                    'name' => 'Transistor Studios',
                    'html' => file_get_contents(__DIR__ . '/html/work-experience/transistor.html'),
                    'year' => '2011',
                )),
                new Gig(array(
                    'slug' => '360i',
                    'name' => '360i',
                    'html' => file_get_contents(__DIR__ . '/html/work-experience/360i.html'),
                    'year' => '201',
                )),
            )
        )))
);