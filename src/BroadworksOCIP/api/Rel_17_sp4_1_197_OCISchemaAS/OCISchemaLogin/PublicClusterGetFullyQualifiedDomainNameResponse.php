<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to PublicClusterGetFullyQualifiedDomainNameRequest.
 */
class PublicClusterGetFullyQualifiedDomainNameResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'PublicClusterGetFullyQualifiedDomainNameResponse';
    protected $publicClusterFQDN;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PublicClusterGetFullyQualifiedDomainNameResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPublicClusterFQDN($publicClusterFQDN = null)
    {
        $this->publicClusterFQDN = ($publicClusterFQDN InstanceOf DomainName)
             ? $publicClusterFQDN
             : new DomainName($publicClusterFQDN);
        $this->publicClusterFQDN->setElementName('publicClusterFQDN');
        return $this;
    }

    /**
     * 
     * @return DomainName $publicClusterFQDN
     */
    public function getPublicClusterFQDN()
    {
        return ($this->publicClusterFQDN)
            ? $this->publicClusterFQDN->getElementValue()
            : null;
    }
}
