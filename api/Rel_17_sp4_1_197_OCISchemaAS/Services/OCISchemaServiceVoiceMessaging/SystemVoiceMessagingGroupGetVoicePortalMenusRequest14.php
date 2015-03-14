<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests the system voice portal Menus setting.
 *         The response is either SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 or ErrorResponse.
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoiceMessagingGroupGetVoicePortalMenusResponse14';
    public    $name               = 'SystemVoiceMessagingGroupGetVoicePortalMenusRequest14';
    protected $getDefaultMenuKeys = null;

    public function __construct(
         $getDefaultMenuKeys
    ) {
        $this->setGetDefaultMenuKeys($getDefaultMenuKeys);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGetDefaultMenuKeys($getDefaultMenuKeys = null)
    {
        if (!$getDefaultMenuKeys) return $this;
        $this->getDefaultMenuKeys = new PrimitiveType($getDefaultMenuKeys);
        $this->getDefaultMenuKeys->setName('getDefaultMenuKeys');
        return $this;
    }

    /**
     * 
     * @return boolean $getDefaultMenuKeys
     */
    public function getGetDefaultMenuKeys()
    {
        return $this->getDefaultMenuKeys->getValue();
    }
}
