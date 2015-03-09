<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupBroadWorksMobileManagerGetDomainListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupBroadWorksMobileManagerGetDomainListRequest.
 *         Contains the list of domains.
 */
class GroupBroadWorksMobileManagerGetDomainListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $domainName = null;

    /**
     * @return GroupBroadWorksMobileManagerGetDomainListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Domain name.
     */
    public function setDomainName($domainName = null)
    {
        $this->domainName = ($domainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $domainName
             : new BroadWorksMobileManagerDomainName($domainName);
    }

    /**
     * Domain name.
     */
    public function getDomainName()
    {
        return (!$this->domainName) ?: $this->domainName->getValue();
    }
}
