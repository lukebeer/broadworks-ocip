<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSharedCallAppearanceGetEndpointRequest.
 */
class UserSharedCallAppearanceGetEndpointResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'UserSharedCallAppearanceGetEndpointResponse';
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
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setAllowOrigination($allowOrigination = null)
    {
        if (!$allowOrigination) return $this;
        $this->allowOrigination = new PrimitiveType($allowOrigination);
        $this->allowOrigination->setName('allowOrigination');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowOrigination()
    {
        return $this->allowOrigination->getValue();
    }

    /**
     * 
     */
    public function setAllowTermination($allowTermination = null)
    {
        if (!$allowTermination) return $this;
        $this->allowTermination = new PrimitiveType($allowTermination);
        $this->allowTermination->setName('allowTermination');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowTermination()
    {
        return $this->allowTermination->getValue();
    }
}
