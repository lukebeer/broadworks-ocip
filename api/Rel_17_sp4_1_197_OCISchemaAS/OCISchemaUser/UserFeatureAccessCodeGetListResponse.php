<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserFeatureAccessCodeGetListRequest.
 */
class UserFeatureAccessCodeGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserFeatureAccessCodeGetListResponse';
    public    $name              = __CLASS__;
    protected $featureAccessCode = null;


    /**
     * Feature Access Code Entry
     */
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        $this->featureAccessCode = FeatureAccessCodeEntry $featureAccessCode;
    }

    /**
     * Feature Access Code Entry
     */
    public function getFeatureAccessCode()
    {
        return (!$this->featureAccessCode) ?: $this->featureAccessCode->getValue();
    }
}
