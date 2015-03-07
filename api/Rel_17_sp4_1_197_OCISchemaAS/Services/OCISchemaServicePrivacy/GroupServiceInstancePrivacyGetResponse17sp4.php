<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupServiceInstancePrivacyGetRequest17sp4.
 */
class GroupServiceInstancePrivacyGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
    protected $enableDirectoryPrivacy                      = null;
    protected $enableAutoAttendantExtensionDialingPrivacy  = null;
    protected $enableAutoAttendantNameDialingPrivacy       = null;


    public function setEnableDirectoryPrivacy(xs:boolean $enableDirectoryPrivacy = null)
    {
    }

    public function getEnableDirectoryPrivacy()
    {
        return (!$this->enableDirectoryPrivacy) ?: $this->enableDirectoryPrivacy->value();
    }

    public function setEnableAutoAttendantExtensionDialingPrivacy(xs:boolean $enableAutoAttendantExtensionDialingPrivacy = null)
    {
    }

    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return (!$this->enableAutoAttendantExtensionDialingPrivacy) ?: $this->enableAutoAttendantExtensionDialingPrivacy->value();
    }

    public function setEnableAutoAttendantNameDialingPrivacy(xs:boolean $enableAutoAttendantNameDialingPrivacy = null)
    {
    }

    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return (!$this->enableAutoAttendantNameDialingPrivacy) ?: $this->enableAutoAttendantNameDialingPrivacy->value();
    }
}
