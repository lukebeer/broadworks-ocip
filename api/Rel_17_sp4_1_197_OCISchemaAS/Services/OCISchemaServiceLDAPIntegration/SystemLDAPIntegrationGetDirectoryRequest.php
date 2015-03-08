<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request the system level data associated with LDAP Integration.
 *         The response is either a SystemLDAPIntegrationGetDirectoryResponse or an
 *         ErrorResponse.
 */
class SystemLDAPIntegrationGetDirectoryRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration\SystemLDAPIntegrationGetDirectoryResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
