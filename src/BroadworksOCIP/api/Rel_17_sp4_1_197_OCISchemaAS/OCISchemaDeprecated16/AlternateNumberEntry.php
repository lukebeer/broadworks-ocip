<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Alternate Number Entry.
 */
class AlternateNumberEntry extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AlternateNumberEntry';
    protected $phoneNumber;
    protected $extension;
    protected $ringPattern;

    public function __construct(
         $phoneNumber = null,
         $extension = null,
         $ringPattern = null
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setRingPattern($ringPattern);
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
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        $this->extension = new SimpleContent($extension);
        $this->extension->setElementName('extension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $extension
     */
    public function getExtension()
    {
        return ($this->extension)
            ? $this->extension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRingPattern($ringPattern = null)
    {
        $this->ringPattern = new SimpleContent($ringPattern);
        $this->ringPattern->setElementName('ringPattern');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $ringPattern
     */
    public function getRingPattern()
    {
        return ($this->ringPattern)
            ? $this->ringPattern->getElementValue()
            : null;
    }
}
