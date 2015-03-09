<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark\SystemClassmarkGetListResponse;
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
    public    $name           = __CLASS__;
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
    public function setClassmarkTable(core:OCITable $classmarkTable = null)
    {
        $this->classmarkTable =  $classmarkTable;
    }

    /**
     * 
     */
    public function getClassmarkTable()
    {
        return (!$this->classmarkTable) ?: $this->classmarkTable->getValue();
    }
}
