<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConferenceParties;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserNetworkConferencingGetRequest.
 */
class UserNetworkConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserNetworkConferencingGetResponse';
    protected $conferenceURI;
    protected $maxConferenceParties;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserNetworkConferencingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceURI($conferenceURI = null)
    {
        $this->conferenceURI = ($conferenceURI InstanceOf SIPURI)
             ? $conferenceURI
             : new SIPURI($conferenceURI);
        $this->conferenceURI->setName('conferenceURI');
        return $this;
    }

    /**
     * 
     * @return SIPURI $conferenceURI
     */
    public function getConferenceURI()
    {
        return ($this->conferenceURI) ? $this->conferenceURI->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxConferenceParties($maxConferenceParties = null)
    {
        $this->maxConferenceParties = ($maxConferenceParties InstanceOf CallProcessingMaxConferenceParties)
             ? $maxConferenceParties
             : new CallProcessingMaxConferenceParties($maxConferenceParties);
        $this->maxConferenceParties->setName('maxConferenceParties');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConferenceParties $maxConferenceParties
     */
    public function getMaxConferenceParties()
    {
        return ($this->maxConferenceParties) ? $this->maxConferenceParties->getValue() : null;
    }
}
