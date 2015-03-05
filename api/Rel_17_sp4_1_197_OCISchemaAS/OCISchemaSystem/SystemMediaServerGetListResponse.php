<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemMediaServerGetListRequest. The Media Server table column
 *         headings are: "Net Address", "Port", "Transport", "Description".
 */
class SystemMediaServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $mediaServerTable
    ) {
        $this->mediaServerTable = $mediaServerTable;
        $this->args             = func_get_args();
    }

    public function setMediaServerTable($mediaServerTable)
    {
        $mediaServerTable and $this->mediaServerTable = new core:OCITable($mediaServerTable);
    }

    public function getMediaServerTable()
    {
        return (!$this->mediaServerTable) ?: $this->mediaServerTable->value();
    }
}
