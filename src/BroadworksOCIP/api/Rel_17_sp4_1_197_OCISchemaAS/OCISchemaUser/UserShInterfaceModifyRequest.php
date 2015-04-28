<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PublicUserIdentity;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IMSUserState;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies the Sh Interface non-transparent data associated with a Public User Identity.
 *         The response is a SuccessResponse or ErrorResponse.
 */
class UserShInterfaceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserShInterfaceModifyRequest';
    protected $publicUserIdentity;
    protected $SCSCFName;
    protected $IMSUserState;

    public function __construct(
         $publicUserIdentity = '',
         $SCSCFName = null,
         $IMSUserState = null
    ) {
        $this->setPublicUserIdentity($publicUserIdentity);
        $this->setSCSCFName($SCSCFName);
        $this->setIMSUserState($IMSUserState);
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
    public function setPublicUserIdentity(PublicUserIdentity $publicUserIdentity = null)
    {
        $this->publicUserIdentity = ($publicUserIdentity InstanceOf PublicUserIdentity)
             ? $publicUserIdentity
             : new PublicUserIdentity($publicUserIdentity);
        $this->publicUserIdentity->setElementName('publicUserIdentity');
        return $this;
    }

    /**
     * 
     * @return PublicUserIdentity $publicUserIdentity
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity;
    }

    /**
     * 
     */
    public function setSCSCFName($SCSCFName = null)
    {
        $this->SCSCFName = ($SCSCFName InstanceOf SIPURI)
             ? $SCSCFName
             : new SIPURI($SCSCFName);
        $this->SCSCFName->setElementName('SCSCFName');
        return $this;
    }

    /**
     * 
     * @return SIPURI $SCSCFName
     */
    public function getSCSCFName()
    {
        return ($this->SCSCFName)
            ? $this->SCSCFName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIMSUserState($IMSUserState = null)
    {
        $this->IMSUserState = ($IMSUserState InstanceOf IMSUserState)
             ? $IMSUserState
             : new IMSUserState($IMSUserState);
        $this->IMSUserState->setElementName('IMSUserState');
        return $this;
    }

    /**
     * 
     * @return IMSUserState $IMSUserState
     */
    public function getIMSUserState()
    {
        return ($this->IMSUserState)
            ? $this->IMSUserState->getElementValue()
            : null;
    }
}
