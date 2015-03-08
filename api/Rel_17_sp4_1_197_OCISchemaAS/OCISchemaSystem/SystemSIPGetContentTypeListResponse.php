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
     * Response to SystemSIPGetContentTypeListRequest.
 *         Returns a 2 column table with column headings:
 *           "Content Type" and "Supported Interface".
 */
class SystemSIPGetContentTypeListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPGetContentTypeListResponse';
    public    $name             = __CLASS__;
    protected $contentTypeTable = null;


    /**
     * 
     */
    public function setContentTypeTable(core:OCITable $contentTypeTable = null)
    {
        $this->contentTypeTable = core:OCITable $contentTypeTable;
    }

    /**
     * 
     */
    public function getContentTypeTable()
    {
        return (!$this->contentTypeTable) ?: $this->contentTypeTable->getValue();
    }
}
