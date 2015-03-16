<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemApplicationServerSetGetListRequest.
 *         Contains the system set name and a table of Application Server sets.
 */
class SystemApplicationServerSetGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemApplicationServerSetGetListResponse';
    protected $applicationServerSets;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemApplicationServerSetGetListResponse $response
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
