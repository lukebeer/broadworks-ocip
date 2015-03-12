<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemClassmarkGetListRequest. 
 *         Contains a table of with the column headings: "Class Mark", "Value" and "Web Display Key".
 */
class SystemClassmarkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'SystemClassmarkGetListResponse';
    protected $classmarkTable = null;

    /**
     * @return SystemClassmarkGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setClassmarkTable(TableType $classmarkTable = null)
    {
        if (!$classmarkTable) return $this;
        $this->classmarkTable = $classmarkTable;
        $this->classmarkTable->setName('classmarkTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getClassmarkTable()
    {
        return $this->classmarkTable;
    }
}
