<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemTwoStageDialingGetDnListRequest.
 *           The Two Stage Dialing DN List table column
 *           headings are: "Phone Number",  "Description".
 */
class SystemTwoStageDialingGetDnListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $phoneNumberTable = null;


    /**
     * 
     */
    public function setPhoneNumberTable(core:OCITable $phoneNumberTable = null)
    {
        $this->phoneNumberTable =  $phoneNumberTable;
    }

    /**
     * 
     */
    public function getPhoneNumberTable()
    {
        return (!$this->phoneNumberTable) ?: $this->phoneNumberTable->getValue();
    }
}
