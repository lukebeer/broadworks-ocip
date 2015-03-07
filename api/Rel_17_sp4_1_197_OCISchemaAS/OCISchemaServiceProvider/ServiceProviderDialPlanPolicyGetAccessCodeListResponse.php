<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderDialPlanPolicyGetAccessCodeListRequest.
 *         Contains a table with column headings: "Access Code",
 *         "Enable Secondary Dial Tone", "Description".
 */
class ServiceProviderDialPlanPolicyGetAccessCodeListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $accessCodeTable  = null;


    public function setAccessCodeTable(core:OCITable $accessCodeTable = null)
    {
    }

    public function getAccessCodeTable()
    {
        return (!$this->accessCodeTable) ?: $this->accessCodeTable->value();
    }
}
