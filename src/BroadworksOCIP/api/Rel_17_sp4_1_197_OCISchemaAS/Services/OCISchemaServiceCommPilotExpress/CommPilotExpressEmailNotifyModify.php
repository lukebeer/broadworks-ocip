<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * CommPilot Express Email Notify configuration used in the context of a modify.
 */
class CommPilotExpressEmailNotifyModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressEmailNotifyModify';
    protected $sendEmail;
    protected $emailAddress;

    public function __construct(
         $sendEmail = null,
         $emailAddress = null
    ) {
        $this->setSendEmail($sendEmail);
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
    public function setSendEmail($sendEmail = null)
    {
        $this->sendEmail = new SimpleContent($sendEmail);
        $this->sendEmail->setElementName('sendEmail');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $sendEmail
     */
    public function getSendEmail()
    {
        return ($this->sendEmail)
            ? $this->sendEmail->getElementValue()
            : null;
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
