<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMinLoginIdLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMaxLoginAttempts;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemSubscriberGetLoginParametersRequest.
 */
class SystemSubscriberGetLoginParametersResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemSubscriberGetLoginParametersResponse';
    protected $maxFailedLoginAttempts;
    protected $minLoginIdLength;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSubscriberGetLoginParametersResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts = null)
    {
        $this->maxFailedLoginAttempts = ($maxFailedLoginAttempts InstanceOf SystemMaxLoginAttempts)
             ? $maxFailedLoginAttempts
             : new SystemMaxLoginAttempts($maxFailedLoginAttempts);
        $this->maxFailedLoginAttempts->setName('maxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return SystemMaxLoginAttempts $maxFailedLoginAttempts
     */
    public function getMaxFailedLoginAttempts()
    {
        return ($this->maxFailedLoginAttempts) ? $this->maxFailedLoginAttempts->getValue() : null;
    }

    /**
     * 
     */
    public function setMinLoginIdLength($minLoginIdLength = null)
    {
        $this->minLoginIdLength = ($minLoginIdLength InstanceOf SystemMinLoginIdLength)
             ? $minLoginIdLength
             : new SystemMinLoginIdLength($minLoginIdLength);
        $this->minLoginIdLength->setName('minLoginIdLength');
        return $this;
    }

    /**
     * 
     * @return SystemMinLoginIdLength $minLoginIdLength
     */
    public function getMinLoginIdLength()
    {
        return ($this->minLoginIdLength) ? $this->minLoginIdLength->getValue() : null;
    }
}
