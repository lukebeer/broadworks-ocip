<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 


use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Requests the system voice portal passcode rules setting.
 *         The response is either SystemVoiceMessagingGroupGetPasscodeRulesResponse14 or ErrorResponse.
 *         Replaced By: SystemPortalPasscodeRulesGetRequest
 */
class SystemVoiceMessagingGroupGetPasscodeRulesRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemVoiceMessagingGroupGetPasscodeRulesResponse14';
    public    $elementName = 'SystemVoiceMessagingGroupGetPasscodeRulesRequest14';

    public function __construct(    ) {
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemVoiceMessagingGroupGetPasscodeRulesResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
