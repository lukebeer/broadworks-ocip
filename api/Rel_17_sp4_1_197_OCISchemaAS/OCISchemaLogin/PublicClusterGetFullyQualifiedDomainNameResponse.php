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
    public    $name = __CLASS__;

    public function __construct(
             $publicClusterFQDN=null
    ) {
        $this->publicClusterFQDN = new DomainName($publicClusterFQDN);
        $this->args              = func_get_args();
    }

    public function setPublicClusterFQDN($publicClusterFQDN)
    {
        $publicClusterFQDN and $this->publicClusterFQDN = new DomainName($publicClusterFQDN);
    }

    public function getPublicClusterFQDN()
    {
        return (!$this->publicClusterFQDN) ?: $this->publicClusterFQDN->value();
    }
}
