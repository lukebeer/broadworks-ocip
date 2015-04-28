<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptDNListEntry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemInterceptUserGetDnListRequest.
 *           The Intercept User DN List.
 */
class SystemInterceptUserGetDnListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInterceptUserGetDnListResponse';
    protected $interceptUserList;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\SystemInterceptUserGetDnListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInterceptUserList(InterceptDNListEntry $interceptUserList = null)
    {
        $this->interceptUserList = ($interceptUserList InstanceOf InterceptDNListEntry)
             ? $interceptUserList
             : new InterceptDNListEntry($interceptUserList);
        $this->interceptUserList->setElementName('interceptUserList');
        return $this;
    }

    /**
     * 
     * @return InterceptDNListEntry $interceptUserList
     */
    public function getInterceptUserList()
    {
        return $this->interceptUserList;
    }
}
