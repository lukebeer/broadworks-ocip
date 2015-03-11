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
    public    $name              = 'SystemInterceptUserGetDnListResponse';
    protected $interceptUserList = null;

    /**
     * @return SystemInterceptUserGetDnListResponse
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
        if (!$interceptUserList) return $this;
        $this->interceptUserList = $interceptUserList;
        $this->interceptUserList->setName('interceptUserList');
        return $this;
    }

    /**
     * 
     * @return InterceptDNListEntry
     */
    public function getInterceptUserList()
    {
        return $this->interceptUserList;
    }
}
