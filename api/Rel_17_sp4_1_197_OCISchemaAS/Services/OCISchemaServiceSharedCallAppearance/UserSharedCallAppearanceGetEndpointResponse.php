<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance\UserSharedCallAppearanceGetEndpointResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSharedCallAppearanceGetEndpointRequest.
 */
class UserSharedCallAppearanceGetEndpointResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $isActive         = null;
    protected $allowOrigination = null;
    protected $allowTermination = null;

    /**
     * @return UserSharedCallAppearanceGetEndpointResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * 
     */
    public function setAllowOrigination($allowOrigination = null)
    {
        $this->allowOrigination = (boolean) $allowOrigination;
    }

    /**
     * 
     */
    public function getAllowOrigination()
    {
        return (!$this->allowOrigination) ?: $this->allowOrigination;
    }

    /**
     * 
     */
    public function setAllowTermination($allowTermination = null)
    {
        $this->allowTermination = (boolean) $allowTermination;
    }

    /**
     * 
     */
    public function getAllowTermination()
    {
        return (!$this->allowTermination) ?: $this->allowTermination;
    }
}
