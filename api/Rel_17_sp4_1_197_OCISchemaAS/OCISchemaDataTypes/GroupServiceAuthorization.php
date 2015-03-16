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
 * Authorize (with quantity) or unauthorize a group service.
 */
class GroupServiceAuthorization extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupServiceAuthorization';
    protected $serviceName;

    public function __construct(
         $serviceName = ''
    ) {
        $this->setServiceName($serviceName);
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
        return ($this->serviceName) ? $this->serviceName->getValue() : null;
    }
}
