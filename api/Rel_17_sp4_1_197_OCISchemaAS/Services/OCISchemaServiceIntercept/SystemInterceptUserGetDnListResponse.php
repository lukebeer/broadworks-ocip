<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptDNListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemInterceptUserGetDnListRequest.
 *           The Intercept User DN List.
 */
class SystemInterceptUserGetDnListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInterceptUserGetDnListResponse';
    protected $interceptUserList;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\SystemInterceptUserGetDnListResponse $response
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
