<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderDialPlanPolicyGetAccessCodeListRequest.
 *         Contains a table with column headings: "Access Code",
 *         "Enable Secondary Dial Tone", "Description".
 */
class ServiceProviderDialPlanPolicyGetAccessCodeListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderDialPlanPolicyGetAccessCodeListResponse';
    protected $accessCodeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDialPlanPolicyGetAccessCodeListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAccessCodeTable(TableType $accessCodeTable = null)
    {
        $this->accessCodeTable = $accessCodeTable;
        $this->accessCodeTable->setElementName('accessCodeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAccessCodeTable()
    {
        return $this->accessCodeTable;
    }
}
