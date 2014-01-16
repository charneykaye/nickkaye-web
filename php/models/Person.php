<?php
/**
 * @author Nick Kaye <nick.c.kaye@gmail.com>
 * ©2013 Outright Mental Inc.
 * All Rights Reserved
 *
 */
class Person
{
    /** @var String */
    public $url;
    /** @var String */
    public $name;
    /** @var String */
    public $title;
    /** @var String */
    public $addressOne;
    /** @var String */
    public $addressTwo;
    /** @var String */
    public $twitterHandle;
    /** @var String */
    public $urlFacebook;
    /** @var Array */
    public $bioParagraphs;
    /** @var String */
    public $filenamePortrait;


    /**
     * @param array $data
     */
    public function __construct($data = null)
    {
        if ($data !== null)
            $this->setAttributes($data);
    }

    /**
     * @param array $data
     */
    public function setAttributes($data)
    {
        foreach ($data as $key => $value)
            if (property_exists($this, $key))
                $this->$key = $value;
    }

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
