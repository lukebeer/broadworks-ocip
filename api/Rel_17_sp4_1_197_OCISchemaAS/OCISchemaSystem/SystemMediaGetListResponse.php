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
 * Response to SystemMediaGetListRequest. The column headings are
 *         "Media Name", "Codec", "Media Type", "Bandwidth Enforcement Type" and "Bandwidth".
 */
class SystemMediaGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'SystemMediaGetListResponse';
    protected $mediaTable = null;

    /**
     * @return SystemMediaGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMediaTable(TableType $mediaTable = null)
    {
        if (!$mediaTable) return $this;
        $this->mediaTable = $mediaTable;
        $this->mediaTable->setName('mediaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getMediaTable()
    {
        return $this->mediaTable;
    }
}
