<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUserRange;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Virtual On-Net User Range.
 */
class VirtualOnNetUserRange extends ComplexType implements ComplexInterface
{
    public    $responseType             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUserRange';
    public    $name                     = 'VirtualOnNetUserRange';
    protected $dnRange                  = null;
    protected $extensionRange           = null;
    protected $firstName                = null;
    protected $lastName                 = null;
    protected $callingLineIdFirstName   = null;
    protected $callingLineIdLastName    = null;
    protected $virtualOnNetCallTypeName = null;

    public function __construct(
         $dnRange,
         $extensionRange,
         $firstName,
         $lastName,
         $callingLineIdFirstName,
         $callingLineIdLastName,
         $virtualOnNetCallTypeName
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
     * @return VirtualOnNetUserRange
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
        if (!$dnRange) return $this;
        $this->dnRange = new SimpleContent($dnRange);
        $this->dnRange->setName('dnRange');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDnRange()
    {
        return $this->dnRange->getValue();
    }

    /**
     * 
     */
    public function setExtensionRange($extensionRange = null)
    {
        if (!$extensionRange) return $this;
        $this->extensionRange = new SimpleContent($extensionRange);
        $this->extensionRange->setName('extensionRange');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getExtensionRange()
    {
        return $this->extensionRange->getValue();
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
     * @return SimpleContent
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
     * @return SimpleContent
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
     * @return SimpleContent
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
     * @return SimpleContent
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
     * @return SimpleContent
     */
    public function getVirtualOnNetCallTypeName()
    {
        return $this->virtualOnNetCallTypeName->getValue();
    }
}
