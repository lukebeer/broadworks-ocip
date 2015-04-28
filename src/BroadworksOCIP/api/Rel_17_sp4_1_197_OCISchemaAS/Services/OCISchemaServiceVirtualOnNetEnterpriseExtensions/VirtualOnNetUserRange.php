<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Virtual On-Net User Range.
 */
class VirtualOnNetUserRange extends ComplexType implements ComplexInterface
{
    public    $elementName = 'VirtualOnNetUserRange';
    protected $dnRange;
    protected $extensionRange;
    protected $firstName;
    protected $lastName;
    protected $callingLineIdFirstName;
    protected $callingLineIdLastName;
    protected $virtualOnNetCallTypeName;

    public function __construct(
         $dnRange = '',
         $extensionRange = '',
         $firstName = '',
         $lastName = '',
         $callingLineIdFirstName = '',
         $callingLineIdLastName = '',
         $virtualOnNetCallTypeName = ''
    ) {
        $this->setDnRange($dnRange);
        $this->setExtensionRange($extensionRange);
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
    public function setDnRange($dnRange = null)
    {
        $this->dnRange = new SimpleContent($dnRange);
        $this->dnRange->setElementName('dnRange');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $dnRange
     */
    public function getDnRange()
    {
        return ($this->dnRange)
            ? $this->dnRange->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExtensionRange($extensionRange = null)
    {
        $this->extensionRange = new SimpleContent($extensionRange);
        $this->extensionRange->setElementName('extensionRange');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $extensionRange
     */
    public function getExtensionRange()
    {
        return ($this->extensionRange)
            ? $this->extensionRange->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = new SimpleContent($firstName);
        $this->firstName->setElementName('firstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $firstName
     */
    public function getFirstName()
    {
        return ($this->firstName)
            ? $this->firstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = new SimpleContent($lastName);
        $this->lastName->setElementName('lastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $lastName
     */
    public function getLastName()
    {
        return ($this->lastName)
            ? $this->lastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = new SimpleContent($callingLineIdFirstName);
        $this->callingLineIdFirstName->setElementName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return ($this->callingLineIdFirstName)
            ? $this->callingLineIdFirstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = new SimpleContent($callingLineIdLastName);
        $this->callingLineIdLastName->setElementName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return ($this->callingLineIdLastName)
            ? $this->callingLineIdLastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName = null)
    {
        $this->virtualOnNetCallTypeName = new SimpleContent($virtualOnNetCallTypeName);
        $this->virtualOnNetCallTypeName->setElementName('virtualOnNetCallTypeName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $virtualOnNetCallTypeName
     */
    public function getVirtualOnNetCallTypeName()
    {
        return ($this->virtualOnNetCallTypeName)
            ? $this->virtualOnNetCallTypeName->getElementValue()
            : null;
    }
}
