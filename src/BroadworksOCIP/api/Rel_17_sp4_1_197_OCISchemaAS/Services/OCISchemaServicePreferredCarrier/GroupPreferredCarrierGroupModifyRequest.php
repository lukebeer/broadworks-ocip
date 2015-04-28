<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\GroupPreferredCarrierNameModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies the currently configured carriers for a group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupPreferredCarrierGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupPreferredCarrierGroupModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $intraLataCarrier;
    protected $interLataCarrier;
    protected $internationalCarrier;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $intraLataCarrier = null,
         $interLataCarrier = null,
         $internationalCarrier = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIntraLataCarrier($intraLataCarrier);
        $this->setInterLataCarrier($interLataCarrier);
        $this->setInternationalCarrier($internationalCarrier);
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
    public function setIntraLataCarrier(GroupPreferredCarrierNameModify $intraLataCarrier = null)
    {
        $this->intraLataCarrier = ($intraLataCarrier InstanceOf GroupPreferredCarrierNameModify)
             ? $intraLataCarrier
             : new GroupPreferredCarrierNameModify($intraLataCarrier);
        $this->intraLataCarrier->setElementName('intraLataCarrier');
        return $this;
    }

    /**
     * 
     * @return GroupPreferredCarrierNameModify $intraLataCarrier
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * 
     */
    public function setInterLataCarrier(GroupPreferredCarrierNameModify $interLataCarrier = null)
    {
        $this->interLataCarrier = ($interLataCarrier InstanceOf GroupPreferredCarrierNameModify)
             ? $interLataCarrier
             : new GroupPreferredCarrierNameModify($interLataCarrier);
        $this->interLataCarrier->setElementName('interLataCarrier');
        return $this;
    }

    /**
     * 
     * @return GroupPreferredCarrierNameModify $interLataCarrier
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * 
     */
    public function setInternationalCarrier(GroupPreferredCarrierNameModify $internationalCarrier = null)
    {
        $this->internationalCarrier = ($internationalCarrier InstanceOf GroupPreferredCarrierNameModify)
             ? $internationalCarrier
             : new GroupPreferredCarrierNameModify($internationalCarrier);
        $this->internationalCarrier->setElementName('internationalCarrier');
        return $this;
    }

    /**
     * 
     * @return GroupPreferredCarrierNameModify $internationalCarrier
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }
}
