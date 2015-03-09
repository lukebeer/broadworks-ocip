<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\ClassmarkValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\Classmark;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceClassMark\SystemClassmarkAddResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Class Mark to system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemClassmarkAddRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $classmark     = null;
    protected $value         = null;
    protected $webDisplayKey = null;

    public function __construct(
         $classmark,
         $value,
         $webDisplayKey = null
    ) {
        $this->setClassmark($classmark);
        $this->setValue($value);
        $this->setWebDisplayKey($webDisplayKey);
    }

    /**
     * @return SystemClassmarkAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Name for the Class Mark.
     */
    public function setClassmark($classmark = null)
    {
        $this->classmark = ($classmark InstanceOf Classmark)
             ? $classmark
             : new Classmark($classmark);
    }

    /**
     * Name for the Class Mark.
     */
    public function getClassmark()
    {
        return (!$this->classmark) ?: $this->classmark->getValue();
    }

    /**
     * Value for the Class Mark used in signaling.
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf ClassmarkValue)
             ? $value
             : new ClassmarkValue($value);
    }

    /**
     * Value for the Class Mark used in signaling.
     */
    public function getValue()
    {
        return (!$this->value) ?: $this->value->getValue();
    }

    /**
     * The web display key used for localization.
     */
    public function setWebDisplayKey($webDisplayKey = null)
    {
        $this->webDisplayKey = ($webDisplayKey InstanceOf WebDisplayKey)
             ? $webDisplayKey
             : new WebDisplayKey($webDisplayKey);
    }

    /**
     * The web display key used for localization.
     */
    public function getWebDisplayKey()
    {
        return (!$this->webDisplayKey) ?: $this->webDisplayKey->getValue();
    }
}
