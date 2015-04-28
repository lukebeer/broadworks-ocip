<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\Classmark;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a Class Mark from system. It cannot be deleted if it is in use by any users.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemClassmarkDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemClassmarkDeleteRequest';
    protected $classmark;

    public function __construct(
         $classmark = ''
    ) {
        $this->setClassmark($classmark);
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
}
