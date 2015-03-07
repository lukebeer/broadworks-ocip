<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * LoginRequest13mp10/Response13mp10 is 2nd stage of the 2 stage OCI login process.
 */
class LoginResponse13mp10 extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $loginType  = null;
    protected $locale     = null;
    protected $encoding   = null;


    public function setLoginType($loginType = null)
    {
        $this->loginType = ($loginType InstanceOf LoginType)
             ? $loginType
             : new LoginType($loginType);
    }

    public function getLoginType()
    {
        return (!$this->loginType) ?: $this->loginType->value();
    }

    public function setLocale($locale = null)
    {
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
    }

    public function getLocale()
    {
        return (!$this->locale) ?: $this->locale->value();
    }

    public function setEncoding($encoding = null)
    {
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
    }

    public function getEncoding()
    {
        return (!$this->encoding) ?: $this->encoding->value();
    }
}
