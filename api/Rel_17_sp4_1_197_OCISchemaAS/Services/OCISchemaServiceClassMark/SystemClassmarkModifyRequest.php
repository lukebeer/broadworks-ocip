<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Classmark;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ClassmarkValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Class Mark in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemClassmarkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $classmark,
             $value=null,
             $webDisplayKey=null
    ) {
        $this->classmark     = $classmark;
        $this->value         = $value;
        $this->webDisplayKey = new WebDisplayKey($webDisplayKey);
        $this->args          = func_get_args();
    }

    public function setClassmark($classmark)
    {
        $classmark and $this->classmark = new Classmark($classmark);
    }

    public function getClassmark()
    {
        return (!$this->classmark) ?: $this->classmark->value();
    }

    public function setValue($value)
    {
        $value and $this->value = new ClassmarkValue($value);
    }

    public function getValue()
    {
        return (!$this->value) ?: $this->value->value();
    }

    public function setWebDisplayKey($webDisplayKey)
    {
        $webDisplayKey and $this->webDisplayKey = new WebDisplayKey($webDisplayKey);
    }

    public function getWebDisplayKey()
    {
        return (!$this->webDisplayKey) ?: $this->webDisplayKey->value();
    }
}
