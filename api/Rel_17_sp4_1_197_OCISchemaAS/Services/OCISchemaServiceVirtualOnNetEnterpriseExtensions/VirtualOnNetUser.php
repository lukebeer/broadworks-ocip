<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Virtual On-Net User.
 */
class VirtualOnNetUser extends ComplexType implements ComplexInterface
{
    public    $name                     = 'VirtualOnNetUser';
    protected $phoneNumber              = null;
    protected $extension                = null;
    protected $firstName                = null;
    protected $lastName                 = null;
    protected $callingLineIdFirstName   = null;
    protected $callingLineIdLastName    = null;
    protected $virtualOnNetCallTypeName = null;

    public function __construct(
         $phoneNumber,
         $extension,
         $firstName,
         $lastName,
         $callingLineIdFirstName,
         $callingLineIdLastName,
         $virtualOnNetCallTypeName
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setCallingLineIdFirstName($callingLineIdFirstName);
        $this->setCallingLineIdLastName($callingLineIdLastName);
        $this->setVirtualOnNetCallTypeName($virtualOnNetCallTypeName);
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
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        if (!$extension) return $this;
        $this->extension = new SimpleContent($extension);
        $this->extension->setName('extension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $extension
     */
    public function getExtension()
    {
        return $this->extension->getValue();
    }

    /**
     * 
     */
    public function setFirstName($firstName = null)
    {
        if (!$firstName) return $this;
        $this->firstName = new SimpleContent($firstName);
        $this->firstName->setName('firstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $firstName
     */
    public function getFirstName()
    {
        return $this->firstName->getValue();
    }

    /**
     * 
     */
    public function setLastName($lastName = null)
    {
        if (!$lastName) return $this;
        $this->lastName = new SimpleContent($lastName);
        $this->lastName->setName('lastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $lastName
     */
    public function getLastName()
    {
        return $this->lastName->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        if (!$callingLineIdFirstName) return $this;
        $this->callingLineIdFirstName = new SimpleContent($callingLineIdFirstName);
        $this->callingLineIdFirstName->setName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return $this->callingLineIdFirstName->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        if (!$callingLineIdLastName) return $this;
        $this->callingLineIdLastName = new SimpleContent($callingLineIdLastName);
        $this->callingLineIdLastName->setName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return $this->callingLineIdLastName->getValue();
    }

    /**
     * 
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName = null)
    {
        if (!$virtualOnNetCallTypeName) return $this;
        $this->virtualOnNetCallTypeName = new SimpleContent($virtualOnNetCallTypeName);
        $this->virtualOnNetCallTypeName->setName('virtualOnNetCallTypeName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $virtualOnNetCallTypeName
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName->getValue();
    }
}
