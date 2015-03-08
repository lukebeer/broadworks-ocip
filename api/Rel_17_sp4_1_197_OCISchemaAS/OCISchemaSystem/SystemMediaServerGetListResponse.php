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
     * Response to SystemMediaServerGetListRequest. The Media Server table column
 *         headings are: "Net Address", "Port", "Transport", "Description".
 */
class SystemMediaServerGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMediaServerGetListResponse';
    public    $name             = __CLASS__;
    protected $mediaServerTable = null;


    /**
     * 
     */
    public function setMediaServerTable(core:OCITable $mediaServerTable = null)
    {
        $this->mediaServerTable = core:OCITable $mediaServerTable;
    }

    /**
     * 
     */
    public function getMediaServerTable()
    {
        return (!$this->mediaServerTable) ?: $this->mediaServerTable->getValue();
    }
}