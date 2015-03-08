<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserDirectedCallPickupWithBargeInGetRequest.
 */
class UserDirectedCallPickupWithBargeInGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserDirectedCallPickupWithBargeInGetResponse';
    public    $name                     = __CLASS__;
    protected $enableBargeInWarningTone = null;


    /**
     * 
     */
    public function setEnableBargeInWarningTone($enableBargeInWarningTone = null)
    {
        $this->enableBargeInWarningTone = (boolean) $enableBargeInWarningTone;
    }

    /**
     * 
     */
    public function getEnableBargeInWarningTone()
    {
        return (!$this->enableBargeInWarningTone) ?: $this->enableBargeInWarningTone->getValue();
    }
}
