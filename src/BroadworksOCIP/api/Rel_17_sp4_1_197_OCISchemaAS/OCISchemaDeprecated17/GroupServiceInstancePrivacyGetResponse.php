<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupServiceInstancePrivacyGetRequest.
 *         Replaced by: GroupServiceInstancePrivacyGetResponse17sp4
 */
class GroupServiceInstancePrivacyGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupServiceInstancePrivacyGetResponse';
    protected $enableDirectoryPrivacy;
    protected $enableAutoAttendantExtensionDialingPrivacy;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupServiceInstancePrivacyGetResponse $response
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
        $this->enableDirectoryPrivacy->setElementName('enableDirectoryPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDirectoryPrivacy
     */
    public function getEnableDirectoryPrivacy()
    {
        return ($this->enableDirectoryPrivacy)
            ? $this->enableDirectoryPrivacy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy = null)
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = new PrimitiveType($enableAutoAttendantExtensionDialingPrivacy);
        $this->enableAutoAttendantExtensionDialingPrivacy->setElementName('enableAutoAttendantExtensionDialingPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutoAttendantExtensionDialingPrivacy
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return ($this->enableAutoAttendantExtensionDialingPrivacy)
            ? $this->enableAutoAttendantExtensionDialingPrivacy->getElementValue()
            : null;
    }
}
