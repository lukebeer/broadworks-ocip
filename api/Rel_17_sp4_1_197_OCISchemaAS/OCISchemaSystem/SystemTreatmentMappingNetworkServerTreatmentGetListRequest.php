<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingNetworkServerTreatmentGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests a table of all the existing NS Treatment Mappings in the system.
 *         The response is either a   SystemTreatmentMappingNetworkServerTreatmentGetListResponse
 *         or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkServerTreatmentGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingNetworkServerTreatmentGetListResponse';
    public    $name = 'SystemTreatmentMappingNetworkServerTreatmentGetListRequest';

    public function __construct(    ) {
    }

    /**
     * @return SystemTreatmentMappingNetworkServerTreatmentGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
