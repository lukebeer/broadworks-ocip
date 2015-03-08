<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get the list of Server Addresses.
 *         The response is either SystemServerAddressesGetResponse or ErrorResponse.
 *         See also:
 *           PrimaryInfoGetRequest
 *           PublicClusterGetFullyQualifiedDomainNameRequest
 */
class SystemServerAddressesGetRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServerAddressesGetResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
