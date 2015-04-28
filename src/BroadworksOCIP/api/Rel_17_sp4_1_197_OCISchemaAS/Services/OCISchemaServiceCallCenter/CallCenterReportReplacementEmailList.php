<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of call center reporting email addresses that replaces a previously configured list.
 */
class CallCenterReportReplacementEmailList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportReplacementEmailList';
    protected $emailAddress;

    public function __construct(
         $emailAddress = null
    ) {
        $this->setEmailAddress($emailAddress);
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
    public function setEmailAddress($emailAddress = null)
    {
        $this->emailAddress = new SimpleContent($emailAddress);
        $this->emailAddress->setElementName('emailAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $emailAddress
     */
    public function getEmailAddress()
    {
        return ($this->emailAddress)
            ? $this->emailAddress->getElementValue()
            : null;
    }
}
