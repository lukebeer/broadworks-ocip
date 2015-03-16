<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallingPartyCategoryGetListRequest.
 *         Contains a table of Calling Party Category defined in system.
 *         The column headings are: "Category Name", "User Category", "Collect Call", "Default" and "Web Display Key".
 */
class SystemCallingPartyCategoryGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallingPartyCategoryGetListResponse';
    protected $callingPartyCategoryTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallingPartyCategoryTable(TableType $callingPartyCategoryTable = null)
    {
        $this->callingPartyCategoryTable = $callingPartyCategoryTable;
        $this->callingPartyCategoryTable->setName('callingPartyCategoryTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCallingPartyCategoryTable()
    {
        return $this->callingPartyCategoryTable;
    }
}
