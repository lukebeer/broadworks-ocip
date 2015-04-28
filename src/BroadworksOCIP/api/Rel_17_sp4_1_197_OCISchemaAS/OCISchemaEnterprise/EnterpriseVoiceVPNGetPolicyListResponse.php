<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to EnterpriseVoiceVPNGetListResponse.
 *         Returns a 4 column table with column headings:
 *           "Location Code", "Min Extension Length", "Max Extension Length", "Location Selection".
 */
class EnterpriseVoiceVPNGetPolicyListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseVoiceVPNGetPolicyListResponse';
    protected $locationList;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNGetPolicyListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLocationList(TableType $locationList = null)
    {
        $this->locationList = $locationList;
        $this->locationList->setElementName('locationList');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getLocationList()
    {
        return ($this->locationList)
            ? $this->locationList->getElementValue()
            : null;
    }
}
