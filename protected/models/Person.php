<?php
/**
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 * ©2013 Outright Mental Inc.
 * All Rights Reserved
 *
 */
include_once(__DIR__.'/_base/Model.php');
class Person extends Model
{
    /** @var String */
    public $url;
    /** @var String */
    public $title;
    /** @var String */
    public $description;
    /** @var String */
    public $addressOne;
    /** @var String */
    public $addressTwo;
    /** @var String */
    public $twitterHandle;
    /** @var String */
    public $gPlusPublisher;
    /** @var String */
    public $urlFacebook;
    /** @var String */
    public $filenamePortrait;

    /** @var Array */
    public $bioParagraphs;
    /** @var GigGroup[] */
    public $gigGroups;

    /**
     * @return string
     */
    public function urlTwitter()
    {
        return 'http://www.twitter.com/' . $this->twitterHandle;
    }

    /**
     * @return string
     */
    public function urlPortrait()
    {
        return 'img/' . $this->filenamePortrait;
    }

}
