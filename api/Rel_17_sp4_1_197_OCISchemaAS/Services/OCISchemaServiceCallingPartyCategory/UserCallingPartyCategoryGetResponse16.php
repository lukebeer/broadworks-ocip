<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPartyCategory; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\CallingPartyCategoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserCallingPartyCategoryGetRequest16.
 */
class UserCallingPartyCategoryGetResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingPartyCategory\UserCallingPartyCategoryGetResponse16';
    public    $name     = __CLASS__;
    protected $category = null;


    /**
     * Name for the Calling Party Category.
     */
    public function setCategory($category = null)
    {
        $this->category = ($category InstanceOf CallingPartyCategoryName)
             ? $category
             : new CallingPartyCategoryName($category);
    }

    /**
     * Name for the Calling Party Category.
     */
    public function getCategory()
    {
        return (!$this->category) ?: $this->category->getValue();
    }
}