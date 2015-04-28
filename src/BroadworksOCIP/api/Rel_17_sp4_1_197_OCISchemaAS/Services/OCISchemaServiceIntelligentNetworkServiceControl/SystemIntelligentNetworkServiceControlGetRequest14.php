<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl; 


use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request the system level data associated with Intelligent Network Service Control.
 *         The response is either a SystemIntelligentNetworkServiceControlGetResponse14
 *         or an ErrorResponse.
 */
class SystemIntelligentNetworkServiceControlGetRequest14 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl\SystemIntelligentNetworkServiceControlGetResponse14';
    public    $elementName = 'SystemIntelligentNetworkServiceControlGetRequest14';

    public function __construct(    ) {
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl\SystemIntelligentNetworkServiceControlGetResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
