<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemSubscriberGetCallProcessingParametersResponse14sp7;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the system call processing configuration for all subscribers
 *             The response is either a SystemSubscriberGetCallProcessingParametersResponse14sp7 or an ErrorResponse.
 *             Replaced By : SystemSubscriberGetCallProcessingParametersRequest15sp2
 */
class SystemSubscriberGetCallProcessingParametersRequest14sp7 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemSubscriberGetCallProcessingParametersResponse14sp7';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }

    /**
     * @return SystemSubscriberGetCallProcessingParametersResponse14sp7
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
