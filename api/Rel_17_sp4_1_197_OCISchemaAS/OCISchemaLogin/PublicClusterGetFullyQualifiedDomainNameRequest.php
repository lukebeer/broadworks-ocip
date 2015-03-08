<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get the public cluster fully qualified domain name (FQDN).
 *         The response is either a PublicClusterGetFullyQualifiedDomainNameResponse
 *         or an ErrorResponse.
 */
class PublicClusterGetFullyQualifiedDomainNameRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PublicClusterGetFullyQualifiedDomainNameResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
