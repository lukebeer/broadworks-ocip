<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallCenterCallDispositionCodeGetAvailableListRequest.
 *         This list may include Group/Enterprise level codes in addition to the Call Center level codes, 
 *         depending on the call center disposition codes settings.
 *         Only active codes are included in the list.
 *         Contains a table with column headings: "Code", "Description" and "Level".
 *         Level column can be any of the values in the data type CallDispositionCodeLevel.
 */
class UserCallCenterCallDispositionCodeGetAvailableListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = 'UserCallCenterCallDispositionCodeGetAvailableListResponse';
    protected $dispositionCodesTable = null;

    /**
     * @return UserCallCenterCallDispositionCodeGetAvailableListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDispositionCodesTable(TableType $dispositionCodesTable = null)
    {
        if (!$dispositionCodesTable) return $this;
        $this->dispositionCodesTable = $dispositionCodesTable;
        $this->dispositionCodesTable->setName('dispositionCodesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDispositionCodesTable()
    {
        return $this->dispositionCodesTable->getValue();
    }
}
