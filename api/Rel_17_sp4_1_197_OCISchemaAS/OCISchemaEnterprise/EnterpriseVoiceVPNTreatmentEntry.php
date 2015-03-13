<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Enterprise Voice VPN Treatment entry
 */
class EnterpriseVoiceVPNTreatmentEntry extends ComplexType implements ComplexInterface
{
    public    $name        = 'EnterpriseVoiceVPNTreatmentEntry';
    protected $id          = null;
    protected $description = null;

    public function __construct(
         $id,
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
        if (!$id) return $this;
        $this->id = new SimpleContent($id);
        $this->id->setName('id');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $id
     */
    public function getId()
    {
        return $this->id->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = new SimpleContent($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
