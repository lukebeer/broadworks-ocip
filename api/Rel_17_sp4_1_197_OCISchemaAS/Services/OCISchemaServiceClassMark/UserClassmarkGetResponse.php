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
     * Response to UserClassmarkGetRequest.
 *         Contains the Class Mark data
 */
class UserClassmarkGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark\UserClassmarkGetResponse';
    public    $name      = __CLASS__;
    protected $classmark = null;


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
