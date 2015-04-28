<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallingPartyCategoryGetListRequest.
 *         Contains a table of Calling Party Category defined in system.
 *         The column headings are: "Category Name", "User Category", "Collect Call", "Default" and "Web Display Key".
 */
class SystemCallingPartyCategoryGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallingPartyCategoryGetListResponse';
    protected $callingPartyCategoryTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetListResponse $response
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
        $this->callingPartyCategoryTable->setElementName('callingPartyCategoryTable');
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
