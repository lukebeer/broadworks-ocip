<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupServiceInstancePrivacyGetRequest17sp4.
 */
class GroupServiceInstancePrivacyGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupServiceInstancePrivacyGetResponse17sp4';
    protected $enableDirectoryPrivacy;
    protected $enableAutoAttendantExtensionDialingPrivacy;
    protected $enableAutoAttendantNameDialingPrivacy;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy\GroupServiceInstancePrivacyGetResponse17sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy = null)
    {
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
        return ($this->enableDirectoryPrivacy) ? $this->enableDirectoryPrivacy->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy = null)
    {
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
        return ($this->enableAutoAttendantExtensionDialingPrivacy) ? $this->enableAutoAttendantExtensionDialingPrivacy->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy = null)
    {
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
        return ($this->enableAutoAttendantNameDialingPrivacy) ? $this->enableAutoAttendantNameDialingPrivacy->getValue() : null;
    }
}
