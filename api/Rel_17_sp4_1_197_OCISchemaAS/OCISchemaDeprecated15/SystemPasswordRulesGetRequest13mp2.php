<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemPasswordRulesGetResponse13mp2;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests the system's password rules setting applicable to
 *         System administrator, Provisioning Administrator,
 *         and/or Service Provider Administrator, Group Administrator, Department Administrator, user.
 *         The response is either SystemPasswordRulesGetResponse13mp2 or ErrorResponse.
 *         Replaced By : SystemPasswordRulesGetRequest16
 */
class SystemPasswordRulesGetRequest13mp2 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemPasswordRulesGetResponse13mp2';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }

    /**
     * @return SystemPasswordRulesGetResponse13mp2
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
