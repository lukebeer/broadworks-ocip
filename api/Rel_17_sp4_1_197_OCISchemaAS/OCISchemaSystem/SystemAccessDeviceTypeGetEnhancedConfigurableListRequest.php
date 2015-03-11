<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceTypeGetEnhancedConfigurableListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests the list of device types supporting enhanced configuration.
 *         The response is either SystemAccessDeviceTypeGetEnhancedConfigurableListResponse
 *         or ErrorResponse.
 */
class SystemAccessDeviceTypeGetEnhancedConfigurableListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceTypeGetEnhancedConfigurableListResponse';
    public    $name = 'SystemAccessDeviceTypeGetEnhancedConfigurableListRequest';

    public function __construct(    ) {
    }

    /**
     * @return SystemAccessDeviceTypeGetEnhancedConfigurableListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
