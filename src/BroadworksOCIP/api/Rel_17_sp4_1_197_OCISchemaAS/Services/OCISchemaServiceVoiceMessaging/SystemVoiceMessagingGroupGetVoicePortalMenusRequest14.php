<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Requests the system voice portal Menus setting.
 *         The response is either SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 or ErrorResponse.
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoiceMessagingGroupGetVoicePortalMenusResponse14';
    public    $elementName = 'SystemVoiceMessagingGroupGetVoicePortalMenusRequest14';
    protected $getDefaultMenuKeys;

    public function __construct(
         $getDefaultMenuKeys = ''
    ) {
        $this->setGetDefaultMenuKeys($getDefaultMenuKeys);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 $response
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
        $this->getDefaultMenuKeys = new PrimitiveType($getDefaultMenuKeys);
        $this->getDefaultMenuKeys->setElementName('getDefaultMenuKeys');
        return $this;
    }

    /**
     * 
     * @return boolean $getDefaultMenuKeys
     */
    public function getGetDefaultMenuKeys()
    {
        return ($this->getDefaultMenuKeys)
            ? $this->getDefaultMenuKeys->getElementValue()
            : null;
    }
}
