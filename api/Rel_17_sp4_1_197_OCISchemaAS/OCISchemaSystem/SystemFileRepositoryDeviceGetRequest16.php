<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get the file repository information.  The response is either SystemFileRepositoryDeviceGetResponse16 or ErrorResponse.
 */
class SystemFileRepositoryDeviceGetRequest16 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileRepositoryDeviceGetResponse16';
    public    $name = 'SystemFileRepositoryDeviceGetRequest16';
    protected $name;

    public function __construct(
         $name = ''
    ) {
        $this->setName($name);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileRepositoryDeviceGetResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf FileRepositoryName)
             ? $name
             : new FileRepositoryName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }
}
