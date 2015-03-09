<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemExternalEmergencyRoutingParametersGetResponse13mp13;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get the list of External Emergency Routing system parameters.
 *         The response is either SystemExternalEmergencyRoutingParametersGetResponse13mp13 or ErrorResponse.
 */
class SystemExternalEmergencyRoutingParametersGetRequest13mp13 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemExternalEmergencyRoutingParametersGetResponse13mp13';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }

    /**
     * @return SystemExternalEmergencyRoutingParametersGetResponse13mp13
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
