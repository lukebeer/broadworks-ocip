<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Call Log entry describing a placed, received, or missed call.
 *         Replaced By: CallLogsEntry
 */
class BasicCallLogsEntry extends ComplexType implements ComplexInterface
{
    public    $name        = 'BasicCallLogsEntry';
    protected $countryCode = null;
    protected $phoneNumber = null;
    protected $name        = null;
    protected $time        = null;

    public function __construct(
         $countryCode = null,
         $phoneNumber,
         $name,
         $time
    ) {
        $this->setCountryCode($countryCode);
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
        if (!$countryCode) return $this;
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
        return $this->countryCode->getValue();
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
     * @return SimpleContent $phoneNumber
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
     * @return SimpleContent $name
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
     * @return SimpleContent $time
     */
    public function getTime()
    {
        return $this->time->getValue();
    }
}
