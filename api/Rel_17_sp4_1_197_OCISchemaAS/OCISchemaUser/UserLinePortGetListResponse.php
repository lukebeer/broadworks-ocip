<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserLinePortGetListRequest.
 *           Contains a table of line ports configured for a user
 *           The column headings are: "Line Port", "Line Port Type", "In Trunk Group",
 *           "Contact", "Contact2", "Contact3", "Contact4", "Contact5", " Authentication Mode ",
 *           and "Auto-Config Soft Client".
 */
class UserLinePortGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $linePortTable  = null;


    public function setLinePortTable(core:OCITable $linePortTable = null)
    {
    }

    public function getLinePortTable()
    {
        return (!$this->linePortTable) ?: $this->linePortTable->value();
    }
}
