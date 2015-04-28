<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemTwoStageDialingGetDnListRequest.
 *           The Two Stage Dialing DN List table column
 *           headings are: "Phone Number",  "Description".
 */
class SystemTwoStageDialingGetDnListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTwoStageDialingGetDnListResponse';
    protected $phoneNumberTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing\SystemTwoStageDialingGetDnListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPhoneNumberTable(TableType $phoneNumberTable = null)
    {
        $this->phoneNumberTable = $phoneNumberTable;
        $this->phoneNumberTable->setElementName('phoneNumberTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable;
    }
}
