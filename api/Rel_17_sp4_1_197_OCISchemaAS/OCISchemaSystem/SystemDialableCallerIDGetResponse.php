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
 * Response to the SystemDialableCallerIDGetRequest.
 *         The criteria table?s column headings are ?Active?, "Name", "Description", ?Prefix Digits?, and ?Priority?.
 */
class SystemDialableCallerIDGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemDialableCallerIDGetResponse';
    protected $criteriaTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDialableCallerIDGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
        $this->criteriaTable = $criteriaTable;
        $this->criteriaTable->setName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }
}
