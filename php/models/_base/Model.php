<?php
/**
  * Author: Nick Kaye <nick@outrightmental.com>
  * Laboratory: Outright Mental Inc.
  */
class Model {
    /** @var string */
    public $slug;
    /** @var string */
    public $name;

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

}