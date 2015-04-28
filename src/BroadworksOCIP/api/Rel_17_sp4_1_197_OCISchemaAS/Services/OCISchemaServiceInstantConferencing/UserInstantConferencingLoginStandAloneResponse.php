<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserInstantConferencingLoginStandAloneRequest.
 *         Contains the information of the conference owner.
 */
class UserInstantConferencingLoginStandAloneResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingLoginStandAloneResponse';
    protected $locale;
    protected $encoding;
    protected $timeZone;
    protected $timeZoneDisplayName;
    protected $phoneNumber;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingLoginStandAloneResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLocale($locale = null)
    {
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
        $this->locale->setElementName('locale');
        return $this;
    }

    /**
     * 
     * @return OCILocale $locale
     */
    public function getLocale()
    {
        return ($this->locale)
            ? $this->locale->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEncoding($encoding = null)
    {
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
        $this->encoding->setElementName('encoding');
        return $this;
    }

    /**
     * 
     * @return Encoding $encoding
     */
    public function getEncoding()
    {
        return ($this->encoding)
            ? $this->encoding->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeZone($timeZone = null)
    {
        $this->timeZone = ($timeZone InstanceOf TimeZone)
             ? $timeZone
             : new TimeZone($timeZone);
        $this->timeZone->setElementName('timeZone');
        return $this;
    }

    /**
     * 
     * @return TimeZone $timeZone
     */
    public function getTimeZone()
    {
        return ($this->timeZone)
            ? $this->timeZone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName = null)
    {
        $this->timeZoneDisplayName = ($timeZoneDisplayName InstanceOf TimeZoneDisplayName)
             ? $timeZoneDisplayName
             : new TimeZoneDisplayName($timeZoneDisplayName);
        $this->timeZoneDisplayName->setElementName('timeZoneDisplayName');
        return $this;
    }

    /**
     * 
     * @return TimeZoneDisplayName $timeZoneDisplayName
     */
    public function getTimeZoneDisplayName()
    {
        return ($this->timeZoneDisplayName)
            ? $this->timeZoneDisplayName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }
}
