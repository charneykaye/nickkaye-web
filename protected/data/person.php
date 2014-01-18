<?php
/**
 * Author: Nick Kaye <nick@outrightmental.com>
 * Laboratory: Outright Mental Inc.
 */
return array(
    'name' => "Nick Kaye",
    'title' => "Writer, Maker & Software Engineer",
    'description' => "Writer, Maker & Software Engineer",
    'filenamePortrait' => 'Nick-Kaye-Founder-and-President-Outright-Mental-Inc.jpg',
    'addressOne' => "568 Broadway, 11th Fl",
    'addressTwo' => "New York, NY 10012",
    'twitterHandle' => "nickckaye",
    'gPlusPublisher' => "https://plus.google.com/113786691084626528718",
    'urlFacebook' => 'https://www.facebook.com/nickckaye',
    'html' => file_get_contents(__DIR__ . '/_person.html'),
    'gigGroups' => array(
        new GigGroup(array(
            'slug' => 'skills',
            'name' => 'Skills',
            'gigs' => array(
                new Gig(array(
                    'slug' => 'developer',
                    'name' => 'Developer',
                    'html' => 'Lorem ipsum dollars.'
                )),
                new Gig(array(
                    'slug' => 'productivity',
                    'name' => 'Productivity',
                    'html' => 'Lorem ipsum dollars.'
                )),
                new Gig(array(
                    'slug' => 'audio-visual',
                    'name' => 'Audio/Visual',
                    'html' => 'Lorem ipsum dollars.'
                )),
            )
        )),
        new GigGroup(array(
            'slug' => 'developer',
            'name' => 'Apps',
            'gigs' => array(
                new Gig(array(
                    'slug' => 'developer',
                    'name' => 'Developer',
                    'html' => 'Lorem ipsum dollars.'
                )),
                new Gig(array(
                    'slug' => 'productivity',
                    'name' => 'Productivity',
                    'html' => 'Lorem ipsum dollars.'
                )),
                new Gig(array(
                    'slug' => 'audio-visual',
                    'name' => 'Audio/Visual',
                    'html' => 'Lorem ipsum dollars.'
                )),
            )
        )))
);