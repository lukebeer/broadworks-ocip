<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCICallControlApplicationDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add an application to the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationAddRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'SystemOCICallControlApplicationAddRequest';
    protected $applicationId    = null;
    protected $enableSystemWide = null;
    protected $description      = null;

    public function __construct(
         $applicationId,
         $enableSystemWide,
         $description = null
    ) {
        $this->setApplicationId($applicationId);
        $this->setEnableSystemWide($enableSystemWide);
        $this->setDescription($description);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationId($applicationId = null)
    {
        if (!$applicationId) return $this;
        $this->applicationId = ($applicationId InstanceOf OCICallControlApplicationId)
             ? $applicationId
             : new OCICallControlApplicationId($applicationId);
        $this->applicationId->setName('applicationId');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationId
     */
    public function getApplicationId()
    {
        return $this->applicationId->getValue();
    }

    /**
     * 
     */
    public function setEnableSystemWide($enableSystemWide = null)
    {
        if (!$enableSystemWide) return $this;
        $this->enableSystemWide = new PrimitiveType($enableSystemWide);
        $this->enableSystemWide->setName('enableSystemWide');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableSystemWide()
    {
        return $this->enableSystemWide->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf OCICallControlApplicationDescription)
             ? $description
             : new OCICallControlApplicationDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
