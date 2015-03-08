<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantGroupCall; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupInstantGroupCallGetInstanceListRequest.
 *         Contains a 6 column table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for Is Active can either be true, or false.
 */
class GroupInstantGroupCallGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantGroupCall\GroupInstantGroupCallGetInstanceListResponse';
    public    $name                  = __CLASS__;
    protected $instantGroupCallTable = null;


    /**
     * 
     */
    public function setInstantGroupCallTable(core:OCITable $instantGroupCallTable = null)
    {
        $this->instantGroupCallTable = core:OCITable $instantGroupCallTable;
    }

    /**
     * 
     */
    public function getInstantGroupCallTable()
    {
        return (!$this->instantGroupCallTable) ?: $this->instantGroupCallTable->getValue();
    }
}
