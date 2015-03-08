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
     * Response to SystemMediaGetListRequest. The column headings are
 *         "Media Name", "Codec", "Media Type", "Bandwidth Enforcement Type" and "Bandwidth".
 */
class SystemMediaGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $mediaTable = null;


    /**
     * 
     */
    public function setMediaTable(core:OCITable $mediaTable = null)
    {
        $this->mediaTable =  $mediaTable;
    }

    /**
     * 
     */
    public function getMediaTable()
    {
        return (!$this->mediaTable) ?: $this->mediaTable->getValue();
    }
}
