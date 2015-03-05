<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPartyCategory; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingPartyCategoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCallingPartyCategoryGetRequest16.
 */
class UserCallingPartyCategoryGetResponse16 extends ComplexType implements ComplexInterface
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
        $category and $this->category = new CallingPartyCategoryName($category);
    }

    public function getCategory()
    {
        return (!$this->category) ?: $this->category->value();
    }
}
