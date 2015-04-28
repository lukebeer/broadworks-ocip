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
 * Response to the ServiceProviderCommunicationBarringProfileGetListRequest.
 *         The response contains a table of all Communication Barring Profiles
 *         for the service provider. The column headings are "Default" , "Name" and "Description"
 */
class ServiceProviderCommunicationBarringProfileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderCommunicationBarringProfileGetListResponse';
    protected $profileTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setProfileTable(TableType $profileTable = null)
    {
        $this->profileTable = $profileTable;
        $this->profileTable->setElementName('profileTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getProfileTable()
    {
        return $this->profileTable;
    }
}
