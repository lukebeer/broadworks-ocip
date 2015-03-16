<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Call Log entry describing a placed, received, or missed call.
 */
class MixedCallLogsEntry extends ComplexType implements ComplexInterface
{
    public    $name = 'MixedCallLogsEntry';
    protected $callLogType;
    protected $countryCode;
    protected $callLogId;
    protected $phoneNumber;
    protected $name;
    protected $time;

    public function __construct(
         $callLogType = '',
         $countryCode = null,
         $callLogId = '',
         $phoneNumber = '',
         $name = '',
         $time = ''
    ) {
        $this->setCallLogType($callLogType);
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
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = new SimpleContent($callLogType);
        $this->callLogType->setName('callLogType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callLogType
     */
    public function getCallLogType()
    {
        return ($this->callLogType) ? $this->callLogType->getValue() : null;
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = new SimpleContent($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode) ? $this->countryCode->getValue() : null;
    }

    /**
     * 
     */
    public function setCallLogId($callLogId = null)
    {
        $this->callLogId = new SimpleContent($callLogId);
        $this->callLogId->setName('callLogId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callLogId
     */
    public function getCallLogId()
    {
        return ($this->callLogId) ? $this->callLogId->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = new SimpleContent($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setTime($time = null)
    {
        $this->time = new SimpleContent($time);
        $this->time->setName('time');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $time
     */
    public function getTime()
    {
        return ($this->time) ? $this->time->getValue() : null;
    }
}
