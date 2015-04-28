<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * The configuration of a key for Auto Attendant.
 */
class AutoAttendantKeyConfiguration extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AutoAttendantKeyConfiguration';
    protected $key;
    protected $entry;

    public function __construct(
         $key = '',
         $entry = ''
    ) {
        $this->setKey($key);
        $this->setEntry($entry);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setKey($key = null)
    {
        $this->key = new SimpleContent($key);
        $this->key->setElementName('key');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $key
     */
    public function getKey()
    {
        return ($this->key)
            ? $this->key->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntry($entry = null)
    {
        $this->entry = new SimpleContent($entry);
        $this->entry->setElementName('entry');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $entry
     */
    public function getEntry()
    {
        return ($this->entry)
            ? $this->entry->getElementValue()
            : null;
    }
}
