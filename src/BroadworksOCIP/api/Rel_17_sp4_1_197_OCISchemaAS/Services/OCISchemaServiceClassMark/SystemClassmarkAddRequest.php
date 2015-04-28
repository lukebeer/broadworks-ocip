<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\ClassmarkValue;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\Classmark;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a Class Mark to system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemClassmarkAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemClassmarkAddRequest';
    protected $classmark;
    protected $value;
    protected $webDisplayKey;

    public function __construct(
         $classmark = '',
         $value = '',
         $webDisplayKey = null
    ) {
        $this->setClassmark($classmark);
        $this->setValue($value);
        $this->setWebDisplayKey($webDisplayKey);
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
    public function setClassmark($classmark = null)
    {
        $this->classmark = ($classmark InstanceOf Classmark)
             ? $classmark
             : new Classmark($classmark);
        $this->classmark->setElementName('classmark');
        return $this;
    }

    /**
     * 
     * @return Classmark $classmark
     */
    public function getClassmark()
    {
        return ($this->classmark)
            ? $this->classmark->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf ClassmarkValue)
             ? $value
             : new ClassmarkValue($value);
        $this->value->setElementName('value');
        return $this;
    }

    /**
     * 
     * @return ClassmarkValue $value
     */
    public function getValue()
    {
        return ($this->value)
            ? $this->value->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWebDisplayKey($webDisplayKey = null)
    {
        $this->webDisplayKey = ($webDisplayKey InstanceOf WebDisplayKey)
             ? $webDisplayKey
             : new WebDisplayKey($webDisplayKey);
        $this->webDisplayKey->setElementName('webDisplayKey');
        return $this;
    }

    /**
     * 
     * @return WebDisplayKey $webDisplayKey
     */
    public function getWebDisplayKey()
    {
        return ($this->webDisplayKey)
            ? $this->webDisplayKey->getElementValue()
            : null;
    }
}
