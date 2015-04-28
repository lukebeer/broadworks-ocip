<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeEntry;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a list of account/authorization codes to a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupAccountAuthorizationCodesAddListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAccountAuthorizationCodesAddListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $codeEntry;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $codeEntry = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setCodeEntry($codeEntry);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCodeEntry(AccountAuthorizationCodeEntry $codeEntry = null)
    {
        $this->codeEntry = ($codeEntry InstanceOf AccountAuthorizationCodeEntry)
             ? $codeEntry
             : new AccountAuthorizationCodeEntry($codeEntry);
        $this->codeEntry->setElementName('codeEntry');
        return $this;
    }

    /**
     * 
     * @return AccountAuthorizationCodeEntry $codeEntry
     */
    public function getCodeEntry()
    {
        return $this->codeEntry;
    }
}
