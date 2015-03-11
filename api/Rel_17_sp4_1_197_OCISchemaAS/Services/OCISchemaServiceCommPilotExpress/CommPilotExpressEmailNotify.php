<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressEmailNotify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express Email Notify configuration used in the context of a get.
 */
class CommPilotExpressEmailNotify extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressEmailNotify';
    public    $name         = 'CommPilotExpressEmailNotify';
    protected $sendEmail    = null;
    protected $emailAddress = null;

    public function __construct(
         $sendEmail,
         $emailAddress = null
    ) {
        $this->setSendEmail($sendEmail);
        $this->setEmailAddress($emailAddress);
    }

    /**
     * @return CommPilotExpressEmailNotify
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
        if (!$sendEmail) return $this;
        $this->sendEmail = new SimpleContent($sendEmail);
        $this->sendEmail->setName('sendEmail');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getSendEmail()
    {
        return $this->sendEmail->getValue();
    }

    /**
     * 
     */
    public function setEmailAddress($emailAddress = null)
    {
        if (!$emailAddress) return $this;
        $this->emailAddress = new SimpleContent($emailAddress);
        $this->emailAddress->setName('emailAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEmailAddress()
    {
        return $this->emailAddress->getValue();
    }
}
