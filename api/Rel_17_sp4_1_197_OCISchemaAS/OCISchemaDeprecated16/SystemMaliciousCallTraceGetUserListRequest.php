<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemMaliciousCallTraceGetUserListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the list of users that use the Malicious Call Trace feature.
 *         The response is either a SystemMaliciousCallTraceGetUserListResponse or an
 *         ErrorResponse.
 *         Replaced By: SystemMaliciousCallTraceGetRequest
 */
class SystemMaliciousCallTraceGetUserListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemMaliciousCallTraceGetUserListResponse';
    public    $name = 'SystemMaliciousCallTraceGetUserListRequest';

    public function __construct(    ) {
    }

    /**
     * @return SystemMaliciousCallTraceGetUserListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
