<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl\SystemIntelligentNetworkServiceControlGetResponse14;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the system level data associated with Intelligent Network Service Control.
 *         The response is either a SystemIntelligentNetworkServiceControlGetResponse14
 *         or an ErrorResponse.
 */
class SystemIntelligentNetworkServiceControlGetRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl\SystemIntelligentNetworkServiceControlGetResponse14';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }

    /**
     * @return SystemIntelligentNetworkServiceControlGetResponse14
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
