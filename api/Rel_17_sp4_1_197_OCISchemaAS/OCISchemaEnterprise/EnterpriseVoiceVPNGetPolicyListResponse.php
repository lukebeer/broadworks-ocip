<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseVoiceVPNGetListResponse.
 *         Returns a 4 column table with column headings:
 *           "Location Code", "Min Extension Length", "Max Extension Length", "Location Selection".
 */
class EnterpriseVoiceVPNGetPolicyListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $locationList  = null;


    public function setLocationList(core:OCITable $locationList = null)
    {
    }

    public function getLocationList()
    {
        return (!$this->locationList) ?: $this->locationList->value();
    }
}
