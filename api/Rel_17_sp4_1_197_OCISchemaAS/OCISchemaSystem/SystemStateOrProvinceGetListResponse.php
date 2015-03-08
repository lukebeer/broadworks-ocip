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
 *         for each state or province.
 */
class SystemStateOrProvinceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $stateOrProvinceTable = null;


    /**
     * 
     */
    public function setStateOrProvinceTable(core:OCITable $stateOrProvinceTable = null)
    {
        $this->stateOrProvinceTable =  $stateOrProvinceTable;
    }

    /**
     * 
     */
    public function getStateOrProvinceTable()
    {
        return (!$this->stateOrProvinceTable) ?: $this->stateOrProvinceTable->getValue();
    }
}
