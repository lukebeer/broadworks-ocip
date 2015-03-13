<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the EnterpriseBroadWorksMobileManagerGetDomainListRequest.
 *         Contains the list of domains.
 */
class EnterpriseBroadWorksMobileManagerGetDomainListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'EnterpriseBroadWorksMobileManagerGetDomainListResponse';
    protected $domainName = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseBroadWorksMobileManagerGetDomainListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDomainName($domainName = null)
    {
        if (!$domainName) return $this;
        $this->domainName = ($domainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $domainName
             : new BroadWorksMobileManagerDomainName($domainName);
        $this->domainName->setName('domainName');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDomainName $domainName
     */
    public function getDomainName()
    {
        return $this->domainName->getValue();
    }
}
