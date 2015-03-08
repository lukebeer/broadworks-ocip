<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to PublicClusterGetFullyQualifiedDomainNameRequest.
 */
class PublicClusterGetFullyQualifiedDomainNameResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PublicClusterGetFullyQualifiedDomainNameResponse';
    public    $name              = __CLASS__;
    protected $publicClusterFQDN = null;


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
