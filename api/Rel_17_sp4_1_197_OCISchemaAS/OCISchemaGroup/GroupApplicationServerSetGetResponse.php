<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupApplicationServerSetGetRequest.
 *         The response contains the group's Application Server set information.
 */
class GroupApplicationServerSetGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = 'GroupApplicationServerSetGetResponse';
    protected $applicationServerSetName = null;

    /**
     * @return GroupApplicationServerSetGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationServerSetName($applicationServerSetName = null)
    {
        if (!$applicationServerSetName) return $this;
        $this->applicationServerSetName = ($applicationServerSetName InstanceOf ApplicationServerSetName)
             ? $applicationServerSetName
             : new ApplicationServerSetName($applicationServerSetName);
        $this->applicationServerSetName->setName('applicationServerSetName');
        return $this;
    }

    /**
     * 
     * @return ApplicationServerSetName
     */
    public function getApplicationServerSetName()
    {
        return $this->applicationServerSetName->getValue();
    }
}
