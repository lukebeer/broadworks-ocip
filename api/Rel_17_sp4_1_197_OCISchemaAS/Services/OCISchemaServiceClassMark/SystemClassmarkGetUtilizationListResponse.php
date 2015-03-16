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
 * Response to SystemClassmarkGetUtilizationListRequest. 
 *         Contains a table with the column headings: "User Id", "Group Id", "Service Provider Id",
 *         "Last Name", "First Name", and "Phone Number".
 */
class SystemClassmarkGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemClassmarkGetUtilizationListResponse';
    protected $classmarkUserTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\SystemClassmarkGetUtilizationListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setClassmarkUserTable(TableType $classmarkUserTable = null)
    {
        $this->classmarkUserTable = $classmarkUserTable;
        $this->classmarkUserTable->setName('classmarkUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getClassmarkUserTable()
    {
        return $this->classmarkUserTable;
    }
}
