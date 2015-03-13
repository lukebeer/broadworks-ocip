<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the data associated with Privacy for a service instance.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupServiceInstancePrivacyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                       = 'GroupServiceInstancePrivacyModifyRequest';
    protected $serviceUserId                              = null;
    protected $enableDirectoryPrivacy                     = null;
    protected $enableAutoAttendantExtensionDialingPrivacy = null;
    protected $enableAutoAttendantNameDialingPrivacy      = null;

    public function __construct(
         $serviceUserId,
         $enableDirectoryPrivacy = null,
         $enableAutoAttendantExtensionDialingPrivacy = null,
         $enableAutoAttendantNameDialingPrivacy = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableDirectoryPrivacy($enableDirectoryPrivacy);
        $this->setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy);
        $this->setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy);
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
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy = null)
    {
        if (!$enableDirectoryPrivacy) return $this;
        $this->enableDirectoryPrivacy = new PrimitiveType($enableDirectoryPrivacy);
        $this->enableDirectoryPrivacy->setName('enableDirectoryPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDirectoryPrivacy
     */
    public function getEnableDirectoryPrivacy()
    {
        return $this->enableDirectoryPrivacy->getValue();
    }

    /**
     * 
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy = null)
    {
        if (!$enableAutoAttendantExtensionDialingPrivacy) return $this;
        $this->enableAutoAttendantExtensionDialingPrivacy = new PrimitiveType($enableAutoAttendantExtensionDialingPrivacy);
        $this->enableAutoAttendantExtensionDialingPrivacy->setName('enableAutoAttendantExtensionDialingPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutoAttendantExtensionDialingPrivacy
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return $this->enableAutoAttendantExtensionDialingPrivacy->getValue();
    }

    /**
     * 
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy = null)
    {
        if (!$enableAutoAttendantNameDialingPrivacy) return $this;
        $this->enableAutoAttendantNameDialingPrivacy = new PrimitiveType($enableAutoAttendantNameDialingPrivacy);
        $this->enableAutoAttendantNameDialingPrivacy->setName('enableAutoAttendantNameDialingPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutoAttendantNameDialingPrivacy
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return $this->enableAutoAttendantNameDialingPrivacy->getValue();
    }
}
