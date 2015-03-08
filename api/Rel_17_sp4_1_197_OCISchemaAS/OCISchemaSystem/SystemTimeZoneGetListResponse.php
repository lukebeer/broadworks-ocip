<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Contains a 2 column table with column headings 'Key' and 'Display Name' and a row
 *         for each time zone.
 */
class SystemTimeZoneGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTimeZoneGetListResponse';
    public    $name          = __CLASS__;
    protected $timeZoneTable = null;


    /**
     * 
     */
    public function setTimeZoneTable(core:OCITable $timeZoneTable = null)
    {
        $this->timeZoneTable = core:OCITable $timeZoneTable;
    }

    /**
     * 
     */
    public function getTimeZoneTable()
    {
        return (!$this->timeZoneTable) ?: $this->timeZoneTable->getValue();
    }
}
