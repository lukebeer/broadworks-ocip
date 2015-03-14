<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Assigned User Services List Entry.
 *         The isActive element is true, false, or could be missing completely.
 */
class AssignedUserServicesEntry extends ComplexType implements ComplexInterface
{
    public    $name        = 'AssignedUserServicesEntry';
    protected $serviceName = null;
    protected $isActive    = null;

    public function __construct(
         $serviceName,
         $isActive = null
    ) {
        $this->setServiceName($serviceName);
        $this->setIsActive($isActive);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceName($serviceName = null)
    {
        if (!$serviceName) return $this;
        $this->serviceName = new SimpleContent($serviceName);
        $this->serviceName->setName('serviceName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceName
     */
    public function getServiceName()
    {
        return $this->serviceName->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new SimpleContent($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }
}
