<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Directory number range. The minimum and maximum values are inclusive.
 */
class DNRange extends ComplexType implements ComplexInterface
{
    public    $elementName = 'DNRange';
    protected $minPhoneNumber;
    protected $maxPhoneNumber;

    public function __construct(
         $minPhoneNumber = '',
         $maxPhoneNumber = ''
    ) {
        $this->setMinPhoneNumber($minPhoneNumber);
        $this->setMaxPhoneNumber($maxPhoneNumber);
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
    public function setMinPhoneNumber($minPhoneNumber = null)
    {
        $this->minPhoneNumber = new SimpleContent($minPhoneNumber);
        $this->minPhoneNumber->setElementName('minPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minPhoneNumber
     */
    public function getMinPhoneNumber()
    {
        return ($this->minPhoneNumber)
            ? $this->minPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxPhoneNumber($maxPhoneNumber = null)
    {
        $this->maxPhoneNumber = new SimpleContent($maxPhoneNumber);
        $this->maxPhoneNumber->setElementName('maxPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maxPhoneNumber
     */
    public function getMaxPhoneNumber()
    {
        return ($this->maxPhoneNumber)
            ? $this->maxPhoneNumber->getElementValue()
            : null;
    }
}
