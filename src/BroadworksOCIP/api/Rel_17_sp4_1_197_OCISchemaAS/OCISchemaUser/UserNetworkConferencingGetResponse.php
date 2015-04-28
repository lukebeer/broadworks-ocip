<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConferenceParties;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserNetworkConferencingGetRequest.
 */
class UserNetworkConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserNetworkConferencingGetResponse';
    protected $conferenceURI;
    protected $maxConferenceParties;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserNetworkConferencingGetResponse $response
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
        $this->conferenceURI->setElementName('conferenceURI');
        return $this;
    }

    /**
     * 
     * @return SIPURI $conferenceURI
     */
    public function getConferenceURI()
    {
        return ($this->conferenceURI)
            ? $this->conferenceURI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxConferenceParties($maxConferenceParties = null)
    {
        $this->maxConferenceParties = ($maxConferenceParties InstanceOf CallProcessingMaxConferenceParties)
             ? $maxConferenceParties
             : new CallProcessingMaxConferenceParties($maxConferenceParties);
        $this->maxConferenceParties->setElementName('maxConferenceParties');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConferenceParties $maxConferenceParties
     */
    public function getMaxConferenceParties()
    {
        return ($this->maxConferenceParties)
            ? $this->maxConferenceParties->getElementValue()
            : null;
    }
}
