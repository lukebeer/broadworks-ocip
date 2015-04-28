<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Restrictions\MaxLength;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contact information.
 */
class Contact extends ComplexType implements ComplexInterface
{
    public    $elementName = 'Contact';
    protected $contactName;
    protected $contactNumber;
    protected $contactEmail;

    public function __construct(
         $contactName = null,
         $contactNumber = null,
         $contactEmail = null
    ) {
        $this->setContactName($contactName);
        $this->setContactNumber($contactNumber);
        $this->setContactEmail($contactEmail);
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
    public function setContactName($contactName = null)
    {
        $this->contactName = new SimpleContent($contactName);
        $this->contactName->addRestriction(new MinLength("1"));
        $this->contactName->addRestriction(new MaxLength("30"));
        $this->contactName->setElementName('contactName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contactName
     */
    public function getContactName()
    {
        return ($this->contactName)
            ? $this->contactName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContactNumber($contactNumber = null)
    {
        $this->contactNumber = new SimpleContent($contactNumber);
        $this->contactNumber->addRestriction(new MinLength("1"));
        $this->contactNumber->addRestriction(new MaxLength("30"));
        $this->contactNumber->setElementName('contactNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contactNumber
     */
    public function getContactNumber()
    {
        return ($this->contactNumber)
            ? $this->contactNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContactEmail($contactEmail = null)
    {
        $this->contactEmail = new SimpleContent($contactEmail);
        $this->contactEmail->setElementName('contactEmail');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contactEmail
     */
    public function getContactEmail()
    {
        return ($this->contactEmail)
            ? $this->contactEmail->getElementValue()
            : null;
    }
}
