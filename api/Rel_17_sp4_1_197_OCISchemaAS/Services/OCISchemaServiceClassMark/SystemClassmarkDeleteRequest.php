<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\Classmark;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Delete a Class Mark from system. It cannot be deleted if it is in use by any users.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemClassmarkDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $classmark = null;

    public function __construct(
         $classmark
    ) {
        $this->setClassmark($classmark);
    }

    /**
     * Name for the Class Mark.
     */
    public function setClassmark($classmark = null)
    {
        $this->classmark = ($classmark InstanceOf Classmark)
             ? $classmark
             : new Classmark($classmark);
    }

    /**
     * Name for the Class Mark.
     */
    public function getClassmark()
    {
        return (!$this->classmark) ?: $this->classmark->getValue();
    }
}
