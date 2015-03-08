<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceReceptionistEnterprise; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get the list of BroadWorks Receptionist - Enterprise parameters.
 *         The response is either SystemBroadWorksReceptionistEnterpriseGetResponse or ErrorResponse.
 */
class SystemBroadWorksReceptionistEnterpriseGetRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceReceptionistEnterprise\SystemBroadWorksReceptionistEnterpriseGetResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}