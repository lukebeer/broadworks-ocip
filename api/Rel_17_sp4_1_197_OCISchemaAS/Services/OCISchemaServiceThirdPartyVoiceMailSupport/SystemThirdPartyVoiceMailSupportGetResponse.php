<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemThirdPartyVoiceMailSupportGetRequest.
 */
class SystemThirdPartyVoiceMailSupportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = 'SystemThirdPartyVoiceMailSupportGetResponse';
    protected $overrideAltCallerIdForVMRetrieval = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\SystemThirdPartyVoiceMailSupportGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOverrideAltCallerIdForVMRetrieval($overrideAltCallerIdForVMRetrieval = null)
    {
        if (!$overrideAltCallerIdForVMRetrieval) return $this;
        $this->overrideAltCallerIdForVMRetrieval = new PrimitiveType($overrideAltCallerIdForVMRetrieval);
        $this->overrideAltCallerIdForVMRetrieval->setName('overrideAltCallerIdForVMRetrieval');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideAltCallerIdForVMRetrieval
     */
    public function getOverrideAltCallerIdForVMRetrieval()
    {
        return $this->overrideAltCallerIdForVMRetrieval->getValue();
    }
}
