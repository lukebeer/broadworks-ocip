<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserClassmarkGetRequest.
 *         Contains the Class Mark data
 */
class UserClassmarkGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserClassmarkGetResponse';
    protected $classmark;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\UserClassmarkGetResponse $response
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
        $this->classmark->setName('classmark');
        return $this;
    }

    /**
     * 
     * @return Classmark $classmark
     */
    public function getClassmark()
    {
        return ($this->classmark) ? $this->classmark->getValue() : null;
    }
}
