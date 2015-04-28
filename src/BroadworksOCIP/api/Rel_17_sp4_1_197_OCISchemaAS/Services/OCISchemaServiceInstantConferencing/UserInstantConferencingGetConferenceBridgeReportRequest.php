<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get conference details reports.
 *         The response is either UserInstantConferencingGetConferenceBridgeReportResponse or ErrorResponse.
 */
class UserInstantConferencingGetConferenceBridgeReportRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceBridgeReportResponse';
    public    $elementName = 'UserInstantConferencingGetConferenceBridgeReportRequest';
    protected $userId;
    protected $bridgeServiceUserId;
    protected $reportStartDate;
    protected $reportEndDate;
    protected $billingCode;
    protected $reportDeliveryEmailAddress;

    public function __construct(
         $userId = '',
         $bridgeServiceUserId = '',
         $reportStartDate = '',
         $reportEndDate = '',
         $billingCode = null,
         $reportDeliveryEmailAddress = null
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setReportStartDate($reportStartDate);
        $this->setReportEndDate($reportEndDate);
        $this->setBillingCode($billingCode);
        $this->setReportDeliveryEmailAddress($reportDeliveryEmailAddress);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceBridgeReportResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
        $this->bridgeServiceUserId->setElementName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return ($this->bridgeServiceUserId)
            ? $this->bridgeServiceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportStartDate($reportStartDate = null)
    {
        $this->reportStartDate = new PrimitiveType($reportStartDate);
        $this->reportStartDate->setElementName('reportStartDate');
        return $this;
    }

    /**
     * 
     * @return string $reportStartDate
     */
    public function getReportStartDate()
    {
        return ($this->reportStartDate)
            ? $this->reportStartDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportEndDate($reportEndDate = null)
    {
        $this->reportEndDate = new PrimitiveType($reportEndDate);
        $this->reportEndDate->setElementName('reportEndDate');
        return $this;
    }

    /**
     * 
     * @return string $reportEndDate
     */
    public function getReportEndDate()
    {
        return ($this->reportEndDate)
            ? $this->reportEndDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBillingCode($billingCode = null)
    {
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
        $this->billingCode->setElementName('billingCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBillingCode $billingCode
     */
    public function getBillingCode()
    {
        return ($this->billingCode)
            ? $this->billingCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
        $this->reportDeliveryEmailAddress->setElementName('reportDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportDeliveryEmailAddress
     */
    public function getReportDeliveryEmailAddress()
    {
        return ($this->reportDeliveryEmailAddress)
            ? $this->reportDeliveryEmailAddress->getElementValue()
            : null;
    }
}
