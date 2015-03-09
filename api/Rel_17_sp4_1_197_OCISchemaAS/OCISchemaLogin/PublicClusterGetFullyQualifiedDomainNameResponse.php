<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PublicClusterGetFullyQualifiedDomainNameResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to PublicClusterGetFullyQualifiedDomainNameRequest.
 */
class PublicClusterGetFullyQualifiedDomainNameResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $publicClusterFQDN = null;

    /**
     * @return PublicClusterGetFullyQualifiedDomainNameResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Network domain name.
     */
    public function setPublicClusterFQDN($publicClusterFQDN = null)
    {
        $this->publicClusterFQDN = ($publicClusterFQDN InstanceOf DomainName)
             ? $publicClusterFQDN
             : new DomainName($publicClusterFQDN);
    }

    /**
     * Network domain name.
     */
    public function getPublicClusterFQDN()
    {
        return (!$this->publicClusterFQDN) ?: $this->publicClusterFQDN->getValue();
    }
}
