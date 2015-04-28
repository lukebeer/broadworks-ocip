<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Enterprise Voice VPN Treatment entry
 */
class EnterpriseVoiceVPNTreatmentEntry extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseVoiceVPNTreatmentEntry';
    protected $id;
    protected $description;

    public function __construct(
         $id = '',
         $description = null
    ) {
        $this->setId($id);
        $this->setDescription($description);
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
    public function setId($id = null)
    {
        $this->id = new SimpleContent($id);
        $this->id->setElementName('id');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $id
     */
    public function getId()
    {
        return ($this->id)
            ? $this->id->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = new SimpleContent($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
