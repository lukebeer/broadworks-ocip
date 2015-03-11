<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MixedCallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Call Log entry describing a placed, received, or missed call.
 */
class MixedCallLogsEntry extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MixedCallLogsEntry';
    public    $name        = 'MixedCallLogsEntry';
    protected $callLogType = null;
    protected $countryCode = null;
    protected $callLogId   = null;
    protected $phoneNumber = null;
    protected $name        = null;
    protected $time        = null;

    public function __construct(
         $callLogType,
         $countryCode = null,
         $callLogId,
         $phoneNumber,
         $name,
         $time
    ) {
        $this->setCallLogType($callLogType);
        $this->setCountryCode($countryCode);
        $this->setCallLogId($callLogId);
        $this->setPhoneNumber($phoneNumber);
        $this->setName($name);
        $this->setTime($time);
    }

    /**
     * @return MixedCallLogsEntry
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
        if (!$callLogType) return $this;
        $this->callLogType = new SimpleContent($callLogType);
        $this->callLogType->setName('callLogType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallLogType()
    {
        return $this->callLogType->getValue();
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        if (!$countryCode) return $this;
        $this->countryCode = new SimpleContent($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCountryCode()
    {
        return $this->countryCode->getValue();
    }

    /**
     * 
     */
    public function setCallLogId($callLogId = null)
    {
        if (!$callLogId) return $this;
        $this->callLogId = new SimpleContent($callLogId);
        $this->callLogId->setName('callLogId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallLogId()
    {
        return $this->callLogId->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = new SimpleContent($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setTime($time = null)
    {
        if (!$time) return $this;
        $this->time = new SimpleContent($time);
        $this->time->setName('time');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getTime()
    {
        return $this->time->getValue();
    }
}
