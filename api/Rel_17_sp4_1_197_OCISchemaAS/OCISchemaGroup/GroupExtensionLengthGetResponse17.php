<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtensionLength;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupExtensionLengthGetRequest17.
 */
class GroupExtensionLengthGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupExtensionLengthGetResponse17';
    protected $minExtensionLength;
    protected $maxExtensionLength;
    protected $defaultExtensionLength;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupExtensionLengthGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMinExtensionLength($minExtensionLength = null)
    {
        $this->minExtensionLength = ($minExtensionLength InstanceOf ExtensionLength)
             ? $minExtensionLength
             : new ExtensionLength($minExtensionLength);
        $this->minExtensionLength->setName('minExtensionLength');
        return $this;
    }

    /**
     * 
     * @return ExtensionLength $minExtensionLength
     */
    public function getMinExtensionLength()
    {
        return ($this->minExtensionLength) ? $this->minExtensionLength->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxExtensionLength($maxExtensionLength = null)
    {
        $this->maxExtensionLength = ($maxExtensionLength InstanceOf ExtensionLength)
             ? $maxExtensionLength
             : new ExtensionLength($maxExtensionLength);
        $this->maxExtensionLength->setName('maxExtensionLength');
        return $this;
    }

    /**
     * 
     * @return ExtensionLength $maxExtensionLength
     */
    public function getMaxExtensionLength()
    {
        return ($this->maxExtensionLength) ? $this->maxExtensionLength->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultExtensionLength($defaultExtensionLength = null)
    {
        $this->defaultExtensionLength = ($defaultExtensionLength InstanceOf ExtensionLength)
             ? $defaultExtensionLength
             : new ExtensionLength($defaultExtensionLength);
        $this->defaultExtensionLength->setName('defaultExtensionLength');
        return $this;
    }

    /**
     * 
     * @return ExtensionLength $defaultExtensionLength
     */
    public function getDefaultExtensionLength()
    {
        return ($this->defaultExtensionLength) ? $this->defaultExtensionLength->getValue() : null;
    }
}
