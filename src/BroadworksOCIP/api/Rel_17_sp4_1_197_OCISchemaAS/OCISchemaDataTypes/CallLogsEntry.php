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
 * Call Log entry describing a placed, received, or missed call.
 */
class CallLogsEntry extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallLogsEntry';
    protected $countryCode;
    protected $callLogId;
    protected $phoneNumber;
    protected $name;
    protected $time;

    public function __construct(
         $countryCode = null,
         $callLogId = '',
         $phoneNumber = '',
         $name = '',
         $time = ''
    ) {
        $this->setCountryCode($countryCode);
        $this->setCallLogId($callLogId);
        $this->setPhoneNumber($phoneNumber);
        $this->setName($name);
        $this->setTime($time);
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
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = new SimpleContent($countryCode);
        $this->countryCode->setElementName('countryCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode)
            ? $this->countryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallLogId($callLogId = null)
    {
        $this->callLogId = new SimpleContent($callLogId);
        $this->callLogId->setElementName('callLogId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callLogId
     */
    public function getCallLogId()
    {
        return ($this->callLogId)
            ? $this->callLogId->getElementValue()
            : null;
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
    public function setName($name = null)
    {
        $this->name = new SimpleContent($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTime($time = null)
    {
        $this->time = new SimpleContent($time);
        $this->time->setElementName('time');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $time
     */
    public function getTime()
    {
        return ($this->time)
            ? $this->time->getElementValue()
            : null;
    }
}
