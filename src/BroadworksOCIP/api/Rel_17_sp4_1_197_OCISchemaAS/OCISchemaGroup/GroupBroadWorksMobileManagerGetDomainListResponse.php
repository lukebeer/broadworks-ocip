<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupBroadWorksMobileManagerGetDomainListRequest.
 *         Contains the list of domains.
 */
class GroupBroadWorksMobileManagerGetDomainListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupBroadWorksMobileManagerGetDomainListResponse';
    protected $domainName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupBroadWorksMobileManagerGetDomainListResponse $response
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
        $this->domainName = ($domainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $domainName
             : new BroadWorksMobileManagerDomainName($domainName);
        $this->domainName->setElementName('domainName');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDomainName $domainName
     */
    public function getDomainName()
    {
        return ($this->domainName)
            ? $this->domainName->getElementValue()
            : null;
    }
}
