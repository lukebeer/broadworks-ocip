<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests the system voice portal passcode rules setting.
 *         The response is either SystemVoiceMessagingGroupGetPasscodeRulesResponse14 or ErrorResponse.
 *         Replaced By: SystemPortalPasscodeRulesGetRequest
 */
class SystemVoiceMessagingGroupGetPasscodeRulesRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemVoiceMessagingGroupGetPasscodeRulesResponse14';
    public    $name = 'SystemVoiceMessagingGroupGetPasscodeRulesRequest14';

    public function __construct(    ) {
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemVoiceMessagingGroupGetPasscodeRulesResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
