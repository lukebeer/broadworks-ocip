<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemApplicationServerSetGetListRequest.
 *         Contains the system set name and a table of Application Server sets.
 */
class SystemApplicationServerSetGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemApplicationServerSetGetListResponse';
    protected $applicationServerSets;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemApplicationServerSetGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationServerSets($applicationServerSets = null)
    {
        $this->applicationServerSets = ($applicationServerSets InstanceOf ApplicationServerSetName)
             ? $applicationServerSets
             : new ApplicationServerSetName($applicationServerSets);
        $this->applicationServerSets->setElementName('applicationServerSets');
        return $this;
    }

    /**
     * 
     * @return ApplicationServerSetName $applicationServerSets
     */
    public function getApplicationServerSets()
    {
        return ($this->applicationServerSets)
            ? $this->applicationServerSets->getElementValue()
            : null;
    }
}
