<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingPartyCategorySelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCallingPartyCategoryGetRequest.
 */
class UserCallingPartyCategoryGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $category
    ) {
        $this->category = $category;
        $this->args     = func_get_args();
    }

    public function setCategory($category)
    {
        $category and $this->category = new CallingPartyCategorySelection($category);
    }

    public function getCategory()
    {
        return (!$this->category) ?: $this->category->value();
    }
}
