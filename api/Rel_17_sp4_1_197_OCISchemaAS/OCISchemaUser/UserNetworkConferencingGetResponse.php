<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConferenceParties;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserNetworkConferencingGetRequest.
 */
class UserNetworkConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $conferenceURI=null,
             $maxConferenceParties
    ) {
        $this->conferenceURI        = new SIPURI($conferenceURI);
        $this->maxConferenceParties = new CallProcessingMaxConferenceParties($maxConferenceParties);
        $this->args                 = func_get_args();
    }

    public function setConferenceURI($conferenceURI)
    {
        $conferenceURI and $this->conferenceURI = new SIPURI($conferenceURI);
    }

    public function getConferenceURI()
    {
        return (!$this->conferenceURI) ?: $this->conferenceURI->value();
    }

    public function setMaxConferenceParties($maxConferenceParties)
    {
        $maxConferenceParties and $this->maxConferenceParties = new CallProcessingMaxConferenceParties($maxConferenceParties);
    }

    public function getMaxConferenceParties()
    {
        return (!$this->maxConferenceParties) ?: $this->maxConferenceParties->value();
    }
}
