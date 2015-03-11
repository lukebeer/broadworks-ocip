<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemZoneCallingRestrictionsZoneGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Gets a list of all zones defined in the system
 *         The response is SystemZoneCallingRestrictionsZoneGetListResponse or an ErrorResponse.
 *         Replaced by: SystemZoneGetListRequest
 */
class SystemZoneCallingRestrictionsZoneGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemZoneCallingRestrictionsZoneGetListResponse';
    public    $name = 'SystemZoneCallingRestrictionsZoneGetListRequest';

    public function __construct(    ) {
    }

    /**
     * @return SystemZoneCallingRestrictionsZoneGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
