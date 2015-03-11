<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserPhoneDirectoryGetPagedListRequest.
 *         Returns the number of entries that would be returned if the response 
 *         Was not page size restricted.
 *         Contains a table with a row for each user and column headings:
 *         "User Id", "First Name", "Last Name", "First Name Unicode", 
 *         "Last Name Unicode", "Hiragana First Name", "Hiragana Last Name",
 *         "Title", "Phone Number", "Extension", "Mobile", "Pager", 
 *         "Email Address", "Yahoo Id", "Department", "Group Id", "Location",
 *         "Address Line 1", "Address Line 2", "City", "State", "Zip", "Country".
 *         The response entries are sorted by "Last Name Unicode" first and
 *         "First Name unicode" secondarily.
 */
class UserPhoneDirectoryGetPagedListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserPhoneDirectoryGetPagedListResponse';
    protected $totalNumberOfRows = null;
    protected $directoryTable    = null;

    /**
     * @return UserPhoneDirectoryGetPagedListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTotalNumberOfRows($totalNumberOfRows = null)
    {
        if (!$totalNumberOfRows) return $this;
        $this->totalNumberOfRows = new PrimitiveType($totalNumberOfRows);
        $this->totalNumberOfRows->setName('totalNumberOfRows');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows->getValue();
    }

    /**
     * 
     */
    public function setDirectoryTable(core:OCITable $directoryTable = null)
    {
        if (!$directoryTable) return $this;
        $this->directoryTable->setName('directoryTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getDirectoryTable()
    {
        return $this->directoryTable->getValue();
    }
}
