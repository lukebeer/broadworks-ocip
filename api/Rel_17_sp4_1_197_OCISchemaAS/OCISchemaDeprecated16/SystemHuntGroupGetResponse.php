<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemHuntGroupGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemHuntGroupGetRequest.
 *         Replaced by: SystemHuntGroupGetResponse17
 */
class SystemHuntGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $anonymousInsteadOfPrivateCLID = null;
    protected $removeHuntGroupNameFromCLID   = null;

    /**
     * @return SystemHuntGroupGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID = null)
    {
        $this->anonymousInsteadOfPrivateCLID = (boolean) $anonymousInsteadOfPrivateCLID;
    }

    /**
     * 
     */
    public function getAnonymousInsteadOfPrivateCLID()
    {
        return (!$this->anonymousInsteadOfPrivateCLID) ?: $this->anonymousInsteadOfPrivateCLID;
    }

    /**
     * 
     */
    public function setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID = null)
    {
        $this->removeHuntGroupNameFromCLID = (boolean) $removeHuntGroupNameFromCLID;
    }

    /**
     * 
     */
    public function getRemoveHuntGroupNameFromCLID()
    {
        return (!$this->removeHuntGroupNameFromCLID) ?: $this->removeHuntGroupNameFromCLID;
    }
}
