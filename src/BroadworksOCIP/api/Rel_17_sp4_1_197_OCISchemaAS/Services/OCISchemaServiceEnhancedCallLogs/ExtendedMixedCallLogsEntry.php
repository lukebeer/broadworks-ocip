<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Extended Call Log entry describing a placed, received, or missed call.
 *         "countryCode" is the user's country code
 *         The following time elements are represented as timestamp, i.e., the number of milliseconds
 *         since January 1, 1970, 00:00:00 GMT.
 *         "startTime" represents the time when the system sends out a call invitation message (e.g. for
 *         placed calls) or receives a call invitation message (e.g. for missed/received calls). 
 *         "answerTime" represents the time when the call is answered by the terminating party. 
 *         "detachTime" represents the time when the call is successfully redirected by the system. 
 *         "releaseTime" represents the time when the call is released. This time corresponds to the 
 *         moment the call is released by the system, and not necessarily when one party hangs up, since this 
 *         does not always mean the call is released (e.g. Emergency/911 calls).
 *         The elements "GroupId", "userId","userPrimaryDn","userPrimaryExtension", "Extension17" and "isRealUser"
 *         are only returned when the enterprise or group level requests are used.
 */
class ExtendedMixedCallLogsEntry extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ExtendedMixedCallLogsEntry';
    protected $callLogType;
    protected $countryCode;
    protected $callLogId;
    protected $callId;
    protected $subscriberType;
    protected $dialedNumber;
    protected $calledNumber;
    protected $networkTranslatedAddress;
    protected $callingAssertedNumber;
    protected $callingPresentationNumber;
    protected $callingPresentationNumberSource;
    protected $callingPresentationName;
    protected $callingPresentationIndicator;
    protected $callingGroupId;
    protected $calledDirectoryName;
    protected $calledGroupId;
    protected $connectedNumber;
    protected $connectedNumberSource;
    protected $connectedName;
    protected $connectedPresentationIndicator;
    protected $typeOfNetwork;
    protected $callCategory;
    protected $basicCallType;
    protected $configurableCallType;
    protected $alternateCallIndicator;
    protected $virtualOnNetCallType;
    protected $time;
    protected $startTime;
    protected $answerTime;
    protected $releaseTime;
    protected $detachedTime;
    protected $detachedAnswerTime;
    protected $outgoingDnis;
    protected $serviceInvocationDisposition;
    protected $serviceInvocationDialedNumber;
    protected $serviceInvocationCalledNumber;
    protected $serviceInvocationNetworkTranslatedAddress;
    protected $serviceInvocationTypeOfNetwork;
    protected $serviceInvocationCallCategory;
    protected $serviceInvocationBasicCallType;
    protected $serviceInvocationConfigurableCallType;
    protected $serviceInvocationAlternateCallIndicator;
    protected $serviceInvocationVirtualOnNetCallType;
    protected $serviceInvocationCalledDirectoryName;
    protected $serviceInvocationCalledGroupId;
    protected $redirectingNumber;
    protected $redirectingName;
    protected $redirectingPresentationIndicator;
    protected $RedirectingReason;
    protected $accountAuthorizationCode;
    protected $userGroupId;
    protected $userId;
    protected $userPrimaryDn;
    protected $userPrimaryExtension;

    public function __construct(
         $callLogType = '',
         $countryCode = '',
         $callLogId = '',
         $callId = '',
         $subscriberType = '',
         $dialedNumber = null,
         $calledNumber = null,
         $networkTranslatedAddress = null,
         $callingAssertedNumber = null,
         $callingPresentationNumber = null,
         $callingPresentationNumberSource = null,
         $callingPresentationName = null,
         $callingPresentationIndicator = '',
         $callingGroupId = null,
         $calledDirectoryName = null,
         $calledGroupId = null,
         $connectedNumber = null,
         $connectedNumberSource = null,
         $connectedName = null,
         $connectedPresentationIndicator = null,
         $typeOfNetwork = null,
         $callCategory = null,
         $basicCallType = '',
         $configurableCallType = null,
         $alternateCallIndicator = null,
         $virtualOnNetCallType = null,
         $time = '',
         $startTime = '',
         $answerTime = null,
         $releaseTime = null,
         $detachedTime = null,
         $detachedAnswerTime = null,
         $outgoingDnis = null,
         $serviceInvocationDisposition = null,
         $serviceInvocationDialedNumber = null,
         $serviceInvocationCalledNumber = null,
         $serviceInvocationNetworkTranslatedAddress = null,
         $serviceInvocationTypeOfNetwork = null,
         $serviceInvocationCallCategory = null,
         $serviceInvocationBasicCallType = null,
         $serviceInvocationConfigurableCallType = null,
         $serviceInvocationAlternateCallIndicator = null,
         $serviceInvocationVirtualOnNetCallType = null,
         $serviceInvocationCalledDirectoryName = null,
         $serviceInvocationCalledGroupId = null,
         $redirectingNumber = null,
         $redirectingName = null,
         $redirectingPresentationIndicator = null,
         $RedirectingReason = null,
         $accountAuthorizationCode = null,
         $userGroupId = null,
         $userId = null,
         $userPrimaryDn = null,
         $userPrimaryExtension = null
    ) {
        $this->setCallLogType($callLogType);
        $this->setCountryCode($countryCode);
        $this->setCallLogId($callLogId);
        $this->setCallId($callId);
        $this->setSubscriberType($subscriberType);
        $this->setDialedNumber($dialedNumber);
        $this->setCalledNumber($calledNumber);
        $this->setNetworkTranslatedAddress($networkTranslatedAddress);
        $this->setCallingAssertedNumber($callingAssertedNumber);
        $this->setCallingPresentationNumber($callingPresentationNumber);
        $this->setCallingPresentationNumberSource($callingPresentationNumberSource);
        $this->setCallingPresentationName($callingPresentationName);
        $this->setCallingPresentationIndicator($callingPresentationIndicator);
        $this->setCallingGroupId($callingGroupId);
        $this->setCalledDirectoryName($calledDirectoryName);
        $this->setCalledGroupId($calledGroupId);
        $this->setConnectedNumber($connectedNumber);
        $this->setConnectedNumberSource($connectedNumberSource);
        $this->setConnectedName($connectedName);
        $this->setConnectedPresentationIndicator($connectedPresentationIndicator);
        $this->setTypeOfNetwork($typeOfNetwork);
        $this->setCallCategory($callCategory);
        $this->setBasicCallType($basicCallType);
        $this->setConfigurableCallType($configurableCallType);
        $this->setAlternateCallIndicator($alternateCallIndicator);
        $this->setVirtualOnNetCallType($virtualOnNetCallType);
        $this->setTime($time);
        $this->setStartTime($startTime);
        $this->setAnswerTime($answerTime);
        $this->setReleaseTime($releaseTime);
        $this->setDetachedTime($detachedTime);
        $this->setDetachedAnswerTime($detachedAnswerTime);
        $this->setOutgoingDnis($outgoingDnis);
        $this->setServiceInvocationDisposition($serviceInvocationDisposition);
        $this->setServiceInvocationDialedNumber($serviceInvocationDialedNumber);
        $this->setServiceInvocationCalledNumber($serviceInvocationCalledNumber);
        $this->setServiceInvocationNetworkTranslatedAddress($serviceInvocationNetworkTranslatedAddress);
        $this->setServiceInvocationTypeOfNetwork($serviceInvocationTypeOfNetwork);
        $this->setServiceInvocationCallCategory($serviceInvocationCallCategory);
        $this->setServiceInvocationBasicCallType($serviceInvocationBasicCallType);
        $this->setServiceInvocationConfigurableCallType($serviceInvocationConfigurableCallType);
        $this->setServiceInvocationAlternateCallIndicator($serviceInvocationAlternateCallIndicator);
        $this->setServiceInvocationVirtualOnNetCallType($serviceInvocationVirtualOnNetCallType);
        $this->setServiceInvocationCalledDirectoryName($serviceInvocationCalledDirectoryName);
        $this->setServiceInvocationCalledGroupId($serviceInvocationCalledGroupId);
        $this->setRedirectingNumber($redirectingNumber);
        $this->setRedirectingName($redirectingName);
        $this->setRedirectingPresentationIndicator($redirectingPresentationIndicator);
        $this->setRedirectingReason($RedirectingReason);
        $this->setAccountAuthorizationCode($accountAuthorizationCode);
        $this->setUserGroupId($userGroupId);
        $this->setUserId($userId);
        $this->setUserPrimaryDn($userPrimaryDn);
        $this->setUserPrimaryExtension($userPrimaryExtension);
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
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = new SimpleContent($callLogType);
        $this->callLogType->setElementName('callLogType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callLogType
     */
    public function getCallLogType()
    {
        return ($this->callLogType)
            ? $this->callLogType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = new SimpleContent($countryCode);
        $this->countryCode->setElementName('countryCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode)
            ? $this->countryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallLogId($callLogId = null)
    {
        $this->callLogId = new SimpleContent($callLogId);
        $this->callLogId->setElementName('callLogId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callLogId
     */
    public function getCallLogId()
    {
        return ($this->callLogId)
            ? $this->callLogId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallId($callId = null)
    {
        $this->callId = new SimpleContent($callId);
        $this->callId->setElementName('callId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callId
     */
    public function getCallId()
    {
        return ($this->callId)
            ? $this->callId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSubscriberType($subscriberType = null)
    {
        $this->subscriberType = new SimpleContent($subscriberType);
        $this->subscriberType->setElementName('subscriberType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $subscriberType
     */
    public function getSubscriberType()
    {
        return ($this->subscriberType)
            ? $this->subscriberType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDialedNumber($dialedNumber = null)
    {
        $this->dialedNumber = new SimpleContent($dialedNumber);
        $this->dialedNumber->setElementName('dialedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $dialedNumber
     */
    public function getDialedNumber()
    {
        return ($this->dialedNumber)
            ? $this->dialedNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCalledNumber($calledNumber = null)
    {
        $this->calledNumber = new SimpleContent($calledNumber);
        $this->calledNumber->setElementName('calledNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $calledNumber
     */
    public function getCalledNumber()
    {
        return ($this->calledNumber)
            ? $this->calledNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkTranslatedAddress($networkTranslatedAddress = null)
    {
        $this->networkTranslatedAddress = new SimpleContent($networkTranslatedAddress);
        $this->networkTranslatedAddress->setElementName('networkTranslatedAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $networkTranslatedAddress
     */
    public function getNetworkTranslatedAddress()
    {
        return ($this->networkTranslatedAddress)
            ? $this->networkTranslatedAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingAssertedNumber($callingAssertedNumber = null)
    {
        $this->callingAssertedNumber = new SimpleContent($callingAssertedNumber);
        $this->callingAssertedNumber->setElementName('callingAssertedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingAssertedNumber
     */
    public function getCallingAssertedNumber()
    {
        return ($this->callingAssertedNumber)
            ? $this->callingAssertedNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingPresentationNumber($callingPresentationNumber = null)
    {
        $this->callingPresentationNumber = new SimpleContent($callingPresentationNumber);
        $this->callingPresentationNumber->setElementName('callingPresentationNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingPresentationNumber
     */
    public function getCallingPresentationNumber()
    {
        return ($this->callingPresentationNumber)
            ? $this->callingPresentationNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingPresentationNumberSource($callingPresentationNumberSource = null)
    {
        $this->callingPresentationNumberSource = new SimpleContent($callingPresentationNumberSource);
        $this->callingPresentationNumberSource->setElementName('callingPresentationNumberSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingPresentationNumberSource
     */
    public function getCallingPresentationNumberSource()
    {
        return ($this->callingPresentationNumberSource)
            ? $this->callingPresentationNumberSource->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingPresentationName($callingPresentationName = null)
    {
        $this->callingPresentationName = new SimpleContent($callingPresentationName);
        $this->callingPresentationName->setElementName('callingPresentationName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingPresentationName
     */
    public function getCallingPresentationName()
    {
        return ($this->callingPresentationName)
            ? $this->callingPresentationName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingPresentationIndicator($callingPresentationIndicator = null)
    {
        $this->callingPresentationIndicator = new SimpleContent($callingPresentationIndicator);
        $this->callingPresentationIndicator->setElementName('callingPresentationIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingPresentationIndicator
     */
    public function getCallingPresentationIndicator()
    {
        return ($this->callingPresentationIndicator)
            ? $this->callingPresentationIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingGroupId($callingGroupId = null)
    {
        $this->callingGroupId = new SimpleContent($callingGroupId);
        $this->callingGroupId->setElementName('callingGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingGroupId
     */
    public function getCallingGroupId()
    {
        return ($this->callingGroupId)
            ? $this->callingGroupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCalledDirectoryName($calledDirectoryName = null)
    {
        $this->calledDirectoryName = new SimpleContent($calledDirectoryName);
        $this->calledDirectoryName->setElementName('calledDirectoryName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $calledDirectoryName
     */
    public function getCalledDirectoryName()
    {
        return ($this->calledDirectoryName)
            ? $this->calledDirectoryName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCalledGroupId($calledGroupId = null)
    {
        $this->calledGroupId = new SimpleContent($calledGroupId);
        $this->calledGroupId->setElementName('calledGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $calledGroupId
     */
    public function getCalledGroupId()
    {
        return ($this->calledGroupId)
            ? $this->calledGroupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConnectedNumber($connectedNumber = null)
    {
        $this->connectedNumber = new SimpleContent($connectedNumber);
        $this->connectedNumber->setElementName('connectedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $connectedNumber
     */
    public function getConnectedNumber()
    {
        return ($this->connectedNumber)
            ? $this->connectedNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConnectedNumberSource($connectedNumberSource = null)
    {
        $this->connectedNumberSource = new SimpleContent($connectedNumberSource);
        $this->connectedNumberSource->setElementName('connectedNumberSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $connectedNumberSource
     */
    public function getConnectedNumberSource()
    {
        return ($this->connectedNumberSource)
            ? $this->connectedNumberSource->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConnectedName($connectedName = null)
    {
        $this->connectedName = new SimpleContent($connectedName);
        $this->connectedName->setElementName('connectedName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $connectedName
     */
    public function getConnectedName()
    {
        return ($this->connectedName)
            ? $this->connectedName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConnectedPresentationIndicator($connectedPresentationIndicator = null)
    {
        $this->connectedPresentationIndicator = new SimpleContent($connectedPresentationIndicator);
        $this->connectedPresentationIndicator->setElementName('connectedPresentationIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $connectedPresentationIndicator
     */
    public function getConnectedPresentationIndicator()
    {
        return ($this->connectedPresentationIndicator)
            ? $this->connectedPresentationIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTypeOfNetwork($typeOfNetwork = null)
    {
        $this->typeOfNetwork = new SimpleContent($typeOfNetwork);
        $this->typeOfNetwork->setElementName('typeOfNetwork');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $typeOfNetwork
     */
    public function getTypeOfNetwork()
    {
        return ($this->typeOfNetwork)
            ? $this->typeOfNetwork->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallCategory($callCategory = null)
    {
        $this->callCategory = new SimpleContent($callCategory);
        $this->callCategory->setElementName('callCategory');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callCategory
     */
    public function getCallCategory()
    {
        return ($this->callCategory)
            ? $this->callCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBasicCallType($basicCallType = null)
    {
        $this->basicCallType = new SimpleContent($basicCallType);
        $this->basicCallType->setElementName('basicCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $basicCallType
     */
    public function getBasicCallType()
    {
        return ($this->basicCallType)
            ? $this->basicCallType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfigurableCallType($configurableCallType = null)
    {
        $this->configurableCallType = new SimpleContent($configurableCallType);
        $this->configurableCallType->setElementName('configurableCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $configurableCallType
     */
    public function getConfigurableCallType()
    {
        return ($this->configurableCallType)
            ? $this->configurableCallType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        $this->alternateCallIndicator = new SimpleContent($alternateCallIndicator);
        $this->alternateCallIndicator->setElementName('alternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $alternateCallIndicator
     */
    public function getAlternateCallIndicator()
    {
        return ($this->alternateCallIndicator)
            ? $this->alternateCallIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVirtualOnNetCallType($virtualOnNetCallType = null)
    {
        $this->virtualOnNetCallType = new SimpleContent($virtualOnNetCallType);
        $this->virtualOnNetCallType->setElementName('virtualOnNetCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $virtualOnNetCallType
     */
    public function getVirtualOnNetCallType()
    {
        return ($this->virtualOnNetCallType)
            ? $this->virtualOnNetCallType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTime($time = null)
    {
        $this->time = new SimpleContent($time);
        $this->time->setElementName('time');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $time
     */
    public function getTime()
    {
        return ($this->time)
            ? $this->time->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStartTime($startTime = null)
    {
        $this->startTime = new SimpleContent($startTime);
        $this->startTime->setElementName('startTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startTime
     */
    public function getStartTime()
    {
        return ($this->startTime)
            ? $this->startTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAnswerTime($answerTime = null)
    {
        $this->answerTime = new SimpleContent($answerTime);
        $this->answerTime->setElementName('answerTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $answerTime
     */
    public function getAnswerTime()
    {
        return ($this->answerTime)
            ? $this->answerTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReleaseTime($releaseTime = null)
    {
        $this->releaseTime = new SimpleContent($releaseTime);
        $this->releaseTime->setElementName('releaseTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $releaseTime
     */
    public function getReleaseTime()
    {
        return ($this->releaseTime)
            ? $this->releaseTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDetachedTime($detachedTime = null)
    {
        $this->detachedTime = new SimpleContent($detachedTime);
        $this->detachedTime->setElementName('detachedTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $detachedTime
     */
    public function getDetachedTime()
    {
        return ($this->detachedTime)
            ? $this->detachedTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDetachedAnswerTime($detachedAnswerTime = null)
    {
        $this->detachedAnswerTime = new SimpleContent($detachedAnswerTime);
        $this->detachedAnswerTime->setElementName('detachedAnswerTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $detachedAnswerTime
     */
    public function getDetachedAnswerTime()
    {
        return ($this->detachedAnswerTime)
            ? $this->detachedAnswerTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOutgoingDnis($outgoingDnis = null)
    {
        $this->outgoingDnis = new SimpleContent($outgoingDnis);
        $this->outgoingDnis->setElementName('outgoingDnis');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $outgoingDnis
     */
    public function getOutgoingDnis()
    {
        return ($this->outgoingDnis)
            ? $this->outgoingDnis->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationDisposition($serviceInvocationDisposition = null)
    {
        $this->serviceInvocationDisposition = new SimpleContent($serviceInvocationDisposition);
        $this->serviceInvocationDisposition->setElementName('serviceInvocationDisposition');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationDisposition
     */
    public function getServiceInvocationDisposition()
    {
        return ($this->serviceInvocationDisposition)
            ? $this->serviceInvocationDisposition->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationDialedNumber($serviceInvocationDialedNumber = null)
    {
        $this->serviceInvocationDialedNumber = new SimpleContent($serviceInvocationDialedNumber);
        $this->serviceInvocationDialedNumber->setElementName('serviceInvocationDialedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationDialedNumber
     */
    public function getServiceInvocationDialedNumber()
    {
        return ($this->serviceInvocationDialedNumber)
            ? $this->serviceInvocationDialedNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationCalledNumber($serviceInvocationCalledNumber = null)
    {
        $this->serviceInvocationCalledNumber = new SimpleContent($serviceInvocationCalledNumber);
        $this->serviceInvocationCalledNumber->setElementName('serviceInvocationCalledNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationCalledNumber
     */
    public function getServiceInvocationCalledNumber()
    {
        return ($this->serviceInvocationCalledNumber)
            ? $this->serviceInvocationCalledNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationNetworkTranslatedAddress($serviceInvocationNetworkTranslatedAddress = null)
    {
        $this->serviceInvocationNetworkTranslatedAddress = new SimpleContent($serviceInvocationNetworkTranslatedAddress);
        $this->serviceInvocationNetworkTranslatedAddress->setElementName('serviceInvocationNetworkTranslatedAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationNetworkTranslatedAddress
     */
    public function getServiceInvocationNetworkTranslatedAddress()
    {
        return ($this->serviceInvocationNetworkTranslatedAddress)
            ? $this->serviceInvocationNetworkTranslatedAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationTypeOfNetwork($serviceInvocationTypeOfNetwork = null)
    {
        $this->serviceInvocationTypeOfNetwork = new SimpleContent($serviceInvocationTypeOfNetwork);
        $this->serviceInvocationTypeOfNetwork->setElementName('serviceInvocationTypeOfNetwork');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationTypeOfNetwork
     */
    public function getServiceInvocationTypeOfNetwork()
    {
        return ($this->serviceInvocationTypeOfNetwork)
            ? $this->serviceInvocationTypeOfNetwork->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationCallCategory($serviceInvocationCallCategory = null)
    {
        $this->serviceInvocationCallCategory = new SimpleContent($serviceInvocationCallCategory);
        $this->serviceInvocationCallCategory->setElementName('serviceInvocationCallCategory');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationCallCategory
     */
    public function getServiceInvocationCallCategory()
    {
        return ($this->serviceInvocationCallCategory)
            ? $this->serviceInvocationCallCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationBasicCallType($serviceInvocationBasicCallType = null)
    {
        $this->serviceInvocationBasicCallType = new SimpleContent($serviceInvocationBasicCallType);
        $this->serviceInvocationBasicCallType->setElementName('serviceInvocationBasicCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationBasicCallType
     */
    public function getServiceInvocationBasicCallType()
    {
        return ($this->serviceInvocationBasicCallType)
            ? $this->serviceInvocationBasicCallType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationConfigurableCallType($serviceInvocationConfigurableCallType = null)
    {
        $this->serviceInvocationConfigurableCallType = new SimpleContent($serviceInvocationConfigurableCallType);
        $this->serviceInvocationConfigurableCallType->setElementName('serviceInvocationConfigurableCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationConfigurableCallType
     */
    public function getServiceInvocationConfigurableCallType()
    {
        return ($this->serviceInvocationConfigurableCallType)
            ? $this->serviceInvocationConfigurableCallType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationAlternateCallIndicator($serviceInvocationAlternateCallIndicator = null)
    {
        $this->serviceInvocationAlternateCallIndicator = new SimpleContent($serviceInvocationAlternateCallIndicator);
        $this->serviceInvocationAlternateCallIndicator->setElementName('serviceInvocationAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationAlternateCallIndicator
     */
    public function getServiceInvocationAlternateCallIndicator()
    {
        return ($this->serviceInvocationAlternateCallIndicator)
            ? $this->serviceInvocationAlternateCallIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationVirtualOnNetCallType($serviceInvocationVirtualOnNetCallType = null)
    {
        $this->serviceInvocationVirtualOnNetCallType = new SimpleContent($serviceInvocationVirtualOnNetCallType);
        $this->serviceInvocationVirtualOnNetCallType->setElementName('serviceInvocationVirtualOnNetCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationVirtualOnNetCallType
     */
    public function getServiceInvocationVirtualOnNetCallType()
    {
        return ($this->serviceInvocationVirtualOnNetCallType)
            ? $this->serviceInvocationVirtualOnNetCallType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationCalledDirectoryName($serviceInvocationCalledDirectoryName = null)
    {
        $this->serviceInvocationCalledDirectoryName = new SimpleContent($serviceInvocationCalledDirectoryName);
        $this->serviceInvocationCalledDirectoryName->setElementName('serviceInvocationCalledDirectoryName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationCalledDirectoryName
     */
    public function getServiceInvocationCalledDirectoryName()
    {
        return ($this->serviceInvocationCalledDirectoryName)
            ? $this->serviceInvocationCalledDirectoryName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInvocationCalledGroupId($serviceInvocationCalledGroupId = null)
    {
        $this->serviceInvocationCalledGroupId = new SimpleContent($serviceInvocationCalledGroupId);
        $this->serviceInvocationCalledGroupId->setElementName('serviceInvocationCalledGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationCalledGroupId
     */
    public function getServiceInvocationCalledGroupId()
    {
        return ($this->serviceInvocationCalledGroupId)
            ? $this->serviceInvocationCalledGroupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRedirectingNumber($redirectingNumber = null)
    {
        $this->redirectingNumber = new SimpleContent($redirectingNumber);
        $this->redirectingNumber->setElementName('redirectingNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectingNumber
     */
    public function getRedirectingNumber()
    {
        return ($this->redirectingNumber)
            ? $this->redirectingNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRedirectingName($redirectingName = null)
    {
        $this->redirectingName = new SimpleContent($redirectingName);
        $this->redirectingName->setElementName('redirectingName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectingName
     */
    public function getRedirectingName()
    {
        return ($this->redirectingName)
            ? $this->redirectingName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRedirectingPresentationIndicator($redirectingPresentationIndicator = null)
    {
        $this->redirectingPresentationIndicator = new SimpleContent($redirectingPresentationIndicator);
        $this->redirectingPresentationIndicator->setElementName('redirectingPresentationIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectingPresentationIndicator
     */
    public function getRedirectingPresentationIndicator()
    {
        return ($this->redirectingPresentationIndicator)
            ? $this->redirectingPresentationIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRedirectingReason($RedirectingReason = null)
    {
        $this->RedirectingReason = new SimpleContent($RedirectingReason);
        $this->RedirectingReason->setElementName('RedirectingReason');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $RedirectingReason
     */
    public function getRedirectingReason()
    {
        return ($this->RedirectingReason)
            ? $this->RedirectingReason->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccountAuthorizationCode($accountAuthorizationCode = null)
    {
        $this->accountAuthorizationCode = new SimpleContent($accountAuthorizationCode);
        $this->accountAuthorizationCode->setElementName('accountAuthorizationCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $accountAuthorizationCode
     */
    public function getAccountAuthorizationCode()
    {
        return ($this->accountAuthorizationCode)
            ? $this->accountAuthorizationCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserGroupId($userGroupId = null)
    {
        $this->userGroupId = new SimpleContent($userGroupId);
        $this->userGroupId->setElementName('userGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userGroupId
     */
    public function getUserGroupId()
    {
        return ($this->userGroupId)
            ? $this->userGroupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = new SimpleContent($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userId
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
    public function setUserPrimaryDn($userPrimaryDn = null)
    {
        $this->userPrimaryDn = new SimpleContent($userPrimaryDn);
        $this->userPrimaryDn->setElementName('userPrimaryDn');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userPrimaryDn
     */
    public function getUserPrimaryDn()
    {
        return ($this->userPrimaryDn)
            ? $this->userPrimaryDn->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserPrimaryExtension($userPrimaryExtension = null)
    {
        $this->userPrimaryExtension = new SimpleContent($userPrimaryExtension);
        $this->userPrimaryExtension->setElementName('userPrimaryExtension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userPrimaryExtension
     */
    public function getUserPrimaryExtension()
    {
        return ($this->userPrimaryExtension)
            ? $this->userPrimaryExtension->getElementValue()
            : null;
    }
}
