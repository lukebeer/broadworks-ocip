<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMinLoginIdLength;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMaxLoginAttempts;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemSubscriberGetLoginParametersRequest.
 */
class SystemSubscriberGetLoginParametersResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSubscriberGetLoginParametersResponse';
    protected $maxFailedLoginAttempts;
    protected $minLoginIdLength;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSubscriberGetLoginParametersResponse $response
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
        $this->maxFailedLoginAttempts->setElementName('maxFailedLoginAttempts');
        return $this;
    }

    /**
     * 
     * @return SystemMaxLoginAttempts $maxFailedLoginAttempts
     */
    public function getMaxFailedLoginAttempts()
    {
        return ($this->maxFailedLoginAttempts)
            ? $this->maxFailedLoginAttempts->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinLoginIdLength($minLoginIdLength = null)
    {
        $this->minLoginIdLength = ($minLoginIdLength InstanceOf SystemMinLoginIdLength)
             ? $minLoginIdLength
             : new SystemMinLoginIdLength($minLoginIdLength);
        $this->minLoginIdLength->setElementName('minLoginIdLength');
        return $this;
    }

    /**
     * 
     * @return SystemMinLoginIdLength $minLoginIdLength
     */
    public function getMinLoginIdLength()
    {
        return ($this->minLoginIdLength)
            ? $this->minLoginIdLength->getElementValue()
            : null;
    }
}
