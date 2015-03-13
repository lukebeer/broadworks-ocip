<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSIPGetContentTypeListRequest.
 *         Returns a 2 column table with column headings:
 *           "Content Type" and "Supported Interface".
 */
class SystemSIPGetContentTypeListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'SystemSIPGetContentTypeListResponse';
    protected $contentTypeTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPGetContentTypeListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setContentTypeTable(TableType $contentTypeTable = null)
    {
        if (!$contentTypeTable) return $this;
        $this->contentTypeTable = $contentTypeTable;
        $this->contentTypeTable->setName('contentTypeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getContentTypeTable()
    {
        return $this->contentTypeTable;
    }
}
