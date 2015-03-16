<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name = 'ExtendedMixedCallLogsEntry';
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
        $this->callLogType->setName('callLogType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callLogType
     */
    public function getCallLogType()
    {
        return ($this->callLogType) ? $this->callLogType->getValue() : null;
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = new SimpleContent($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode) ? $this->countryCode->getValue() : null;
    }

    /**
     * 
     */
    public function setCallLogId($callLogId = null)
    {
        $this->callLogId = new SimpleContent($callLogId);
        $this->callLogId->setName('callLogId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callLogId
     */
    public function getCallLogId()
    {
        return ($this->callLogId) ? $this->callLogId->getValue() : null;
    }

    /**
     * 
     */
    public function setCallId($callId = null)
    {
        $this->callId = new SimpleContent($callId);
        $this->callId->setName('callId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callId
     */
    public function getCallId()
    {
        return ($this->callId) ? $this->callId->getValue() : null;
    }

    /**
     * 
     */
    public function setSubscriberType($subscriberType = null)
    {
        $this->subscriberType = new SimpleContent($subscriberType);
        $this->subscriberType->setName('subscriberType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $subscriberType
     */
    public function getSubscriberType()
    {
        return ($this->subscriberType) ? $this->subscriberType->getValue() : null;
    }

    /**
     * 
     */
    public function setDialedNumber($dialedNumber = null)
    {
        $this->dialedNumber = new SimpleContent($dialedNumber);
        $this->dialedNumber->setName('dialedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $dialedNumber
     */
    public function getDialedNumber()
    {
        return ($this->dialedNumber) ? $this->dialedNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setCalledNumber($calledNumber = null)
    {
        $this->calledNumber = new SimpleContent($calledNumber);
        $this->calledNumber->setName('calledNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $calledNumber
     */
    public function getCalledNumber()
    {
        return ($this->calledNumber) ? $this->calledNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkTranslatedAddress($networkTranslatedAddress = null)
    {
        $this->networkTranslatedAddress = new SimpleContent($networkTranslatedAddress);
        $this->networkTranslatedAddress->setName('networkTranslatedAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $networkTranslatedAddress
     */
    public function getNetworkTranslatedAddress()
    {
        return ($this->networkTranslatedAddress) ? $this->networkTranslatedAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingAssertedNumber($callingAssertedNumber = null)
    {
        $this->callingAssertedNumber = new SimpleContent($callingAssertedNumber);
        $this->callingAssertedNumber->setName('callingAssertedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingAssertedNumber
     */
    public function getCallingAssertedNumber()
    {
        return ($this->callingAssertedNumber) ? $this->callingAssertedNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingPresentationNumber($callingPresentationNumber = null)
    {
        $this->callingPresentationNumber = new SimpleContent($callingPresentationNumber);
        $this->callingPresentationNumber->setName('callingPresentationNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingPresentationNumber
     */
    public function getCallingPresentationNumber()
    {
        return ($this->callingPresentationNumber) ? $this->callingPresentationNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingPresentationNumberSource($callingPresentationNumberSource = null)
    {
        $this->callingPresentationNumberSource = new SimpleContent($callingPresentationNumberSource);
        $this->callingPresentationNumberSource->setName('callingPresentationNumberSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingPresentationNumberSource
     */
    public function getCallingPresentationNumberSource()
    {
        return ($this->callingPresentationNumberSource) ? $this->callingPresentationNumberSource->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingPresentationName($callingPresentationName = null)
    {
        $this->callingPresentationName = new SimpleContent($callingPresentationName);
        $this->callingPresentationName->setName('callingPresentationName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingPresentationName
     */
    public function getCallingPresentationName()
    {
        return ($this->callingPresentationName) ? $this->callingPresentationName->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingPresentationIndicator($callingPresentationIndicator = null)
    {
        $this->callingPresentationIndicator = new SimpleContent($callingPresentationIndicator);
        $this->callingPresentationIndicator->setName('callingPresentationIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingPresentationIndicator
     */
    public function getCallingPresentationIndicator()
    {
        return ($this->callingPresentationIndicator) ? $this->callingPresentationIndicator->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingGroupId($callingGroupId = null)
    {
        $this->callingGroupId = new SimpleContent($callingGroupId);
        $this->callingGroupId->setName('callingGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingGroupId
     */
    public function getCallingGroupId()
    {
        return ($this->callingGroupId) ? $this->callingGroupId->getValue() : null;
    }

    /**
     * 
     */
    public function setCalledDirectoryName($calledDirectoryName = null)
    {
        $this->calledDirectoryName = new SimpleContent($calledDirectoryName);
        $this->calledDirectoryName->setName('calledDirectoryName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $calledDirectoryName
     */
    public function getCalledDirectoryName()
    {
        return ($this->calledDirectoryName) ? $this->calledDirectoryName->getValue() : null;
    }

    /**
     * 
     */
    public function setCalledGroupId($calledGroupId = null)
    {
        $this->calledGroupId = new SimpleContent($calledGroupId);
        $this->calledGroupId->setName('calledGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $calledGroupId
     */
    public function getCalledGroupId()
    {
        return ($this->calledGroupId) ? $this->calledGroupId->getValue() : null;
    }

    /**
     * 
     */
    public function setConnectedNumber($connectedNumber = null)
    {
        $this->connectedNumber = new SimpleContent($connectedNumber);
        $this->connectedNumber->setName('connectedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $connectedNumber
     */
    public function getConnectedNumber()
    {
        return ($this->connectedNumber) ? $this->connectedNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setConnectedNumberSource($connectedNumberSource = null)
    {
        $this->connectedNumberSource = new SimpleContent($connectedNumberSource);
        $this->connectedNumberSource->setName('connectedNumberSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $connectedNumberSource
     */
    public function getConnectedNumberSource()
    {
        return ($this->connectedNumberSource) ? $this->connectedNumberSource->getValue() : null;
    }

    /**
     * 
     */
    public function setConnectedName($connectedName = null)
    {
        $this->connectedName = new SimpleContent($connectedName);
        $this->connectedName->setName('connectedName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $connectedName
     */
    public function getConnectedName()
    {
        return ($this->connectedName) ? $this->connectedName->getValue() : null;
    }

    /**
     * 
     */
    public function setConnectedPresentationIndicator($connectedPresentationIndicator = null)
    {
        $this->connectedPresentationIndicator = new SimpleContent($connectedPresentationIndicator);
        $this->connectedPresentationIndicator->setName('connectedPresentationIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $connectedPresentationIndicator
     */
    public function getConnectedPresentationIndicator()
    {
        return ($this->connectedPresentationIndicator) ? $this->connectedPresentationIndicator->getValue() : null;
    }

    /**
     * 
     */
    public function setTypeOfNetwork($typeOfNetwork = null)
    {
        $this->typeOfNetwork = new SimpleContent($typeOfNetwork);
        $this->typeOfNetwork->setName('typeOfNetwork');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $typeOfNetwork
     */
    public function getTypeOfNetwork()
    {
        return ($this->typeOfNetwork) ? $this->typeOfNetwork->getValue() : null;
    }

    /**
     * 
     */
    public function setCallCategory($callCategory = null)
    {
        $this->callCategory = new SimpleContent($callCategory);
        $this->callCategory->setName('callCategory');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callCategory
     */
    public function getCallCategory()
    {
        return ($this->callCategory) ? $this->callCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setBasicCallType($basicCallType = null)
    {
        $this->basicCallType = new SimpleContent($basicCallType);
        $this->basicCallType->setName('basicCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $basicCallType
     */
    public function getBasicCallType()
    {
        return ($this->basicCallType) ? $this->basicCallType->getValue() : null;
    }

    /**
     * 
     */
    public function setConfigurableCallType($configurableCallType = null)
    {
        $this->configurableCallType = new SimpleContent($configurableCallType);
        $this->configurableCallType->setName('configurableCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $configurableCallType
     */
    public function getConfigurableCallType()
    {
        return ($this->configurableCallType) ? $this->configurableCallType->getValue() : null;
    }

    /**
     * 
     */
    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        $this->alternateCallIndicator = new SimpleContent($alternateCallIndicator);
        $this->alternateCallIndicator->setName('alternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $alternateCallIndicator
     */
    public function getAlternateCallIndicator()
    {
        return ($this->alternateCallIndicator) ? $this->alternateCallIndicator->getValue() : null;
    }

    /**
     * 
     */
    public function setVirtualOnNetCallType($virtualOnNetCallType = null)
    {
        $this->virtualOnNetCallType = new SimpleContent($virtualOnNetCallType);
        $this->virtualOnNetCallType->setName('virtualOnNetCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $virtualOnNetCallType
     */
    public function getVirtualOnNetCallType()
    {
        return ($this->virtualOnNetCallType) ? $this->virtualOnNetCallType->getValue() : null;
    }

    /**
     * 
     */
    public function setTime($time = null)
    {
        $this->time = new SimpleContent($time);
        $this->time->setName('time');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $time
     */
    public function getTime()
    {
        return ($this->time) ? $this->time->getValue() : null;
    }

    /**
     * 
     */
    public function setStartTime($startTime = null)
    {
        $this->startTime = new SimpleContent($startTime);
        $this->startTime->setName('startTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startTime
     */
    public function getStartTime()
    {
        return ($this->startTime) ? $this->startTime->getValue() : null;
    }

    /**
     * 
     */
    public function setAnswerTime($answerTime = null)
    {
        $this->answerTime = new SimpleContent($answerTime);
        $this->answerTime->setName('answerTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $answerTime
     */
    public function getAnswerTime()
    {
        return ($this->answerTime) ? $this->answerTime->getValue() : null;
    }

    /**
     * 
     */
    public function setReleaseTime($releaseTime = null)
    {
        $this->releaseTime = new SimpleContent($releaseTime);
        $this->releaseTime->setName('releaseTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $releaseTime
     */
    public function getReleaseTime()
    {
        return ($this->releaseTime) ? $this->releaseTime->getValue() : null;
    }

    /**
     * 
     */
    public function setDetachedTime($detachedTime = null)
    {
        $this->detachedTime = new SimpleContent($detachedTime);
        $this->detachedTime->setName('detachedTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $detachedTime
     */
    public function getDetachedTime()
    {
        return ($this->detachedTime) ? $this->detachedTime->getValue() : null;
    }

    /**
     * 
     */
    public function setDetachedAnswerTime($detachedAnswerTime = null)
    {
        $this->detachedAnswerTime = new SimpleContent($detachedAnswerTime);
        $this->detachedAnswerTime->setName('detachedAnswerTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $detachedAnswerTime
     */
    public function getDetachedAnswerTime()
    {
        return ($this->detachedAnswerTime) ? $this->detachedAnswerTime->getValue() : null;
    }

    /**
     * 
     */
    public function setOutgoingDnis($outgoingDnis = null)
    {
        $this->outgoingDnis = new SimpleContent($outgoingDnis);
        $this->outgoingDnis->setName('outgoingDnis');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $outgoingDnis
     */
    public function getOutgoingDnis()
    {
        return ($this->outgoingDnis) ? $this->outgoingDnis->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationDisposition($serviceInvocationDisposition = null)
    {
        $this->serviceInvocationDisposition = new SimpleContent($serviceInvocationDisposition);
        $this->serviceInvocationDisposition->setName('serviceInvocationDisposition');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationDisposition
     */
    public function getServiceInvocationDisposition()
    {
        return ($this->serviceInvocationDisposition) ? $this->serviceInvocationDisposition->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationDialedNumber($serviceInvocationDialedNumber = null)
    {
        $this->serviceInvocationDialedNumber = new SimpleContent($serviceInvocationDialedNumber);
        $this->serviceInvocationDialedNumber->setName('serviceInvocationDialedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationDialedNumber
     */
    public function getServiceInvocationDialedNumber()
    {
        return ($this->serviceInvocationDialedNumber) ? $this->serviceInvocationDialedNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationCalledNumber($serviceInvocationCalledNumber = null)
    {
        $this->serviceInvocationCalledNumber = new SimpleContent($serviceInvocationCalledNumber);
        $this->serviceInvocationCalledNumber->setName('serviceInvocationCalledNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationCalledNumber
     */
    public function getServiceInvocationCalledNumber()
    {
        return ($this->serviceInvocationCalledNumber) ? $this->serviceInvocationCalledNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationNetworkTranslatedAddress($serviceInvocationNetworkTranslatedAddress = null)
    {
        $this->serviceInvocationNetworkTranslatedAddress = new SimpleContent($serviceInvocationNetworkTranslatedAddress);
        $this->serviceInvocationNetworkTranslatedAddress->setName('serviceInvocationNetworkTranslatedAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationNetworkTranslatedAddress
     */
    public function getServiceInvocationNetworkTranslatedAddress()
    {
        return ($this->serviceInvocationNetworkTranslatedAddress) ? $this->serviceInvocationNetworkTranslatedAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationTypeOfNetwork($serviceInvocationTypeOfNetwork = null)
    {
        $this->serviceInvocationTypeOfNetwork = new SimpleContent($serviceInvocationTypeOfNetwork);
        $this->serviceInvocationTypeOfNetwork->setName('serviceInvocationTypeOfNetwork');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationTypeOfNetwork
     */
    public function getServiceInvocationTypeOfNetwork()
    {
        return ($this->serviceInvocationTypeOfNetwork) ? $this->serviceInvocationTypeOfNetwork->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationCallCategory($serviceInvocationCallCategory = null)
    {
        $this->serviceInvocationCallCategory = new SimpleContent($serviceInvocationCallCategory);
        $this->serviceInvocationCallCategory->setName('serviceInvocationCallCategory');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationCallCategory
     */
    public function getServiceInvocationCallCategory()
    {
        return ($this->serviceInvocationCallCategory) ? $this->serviceInvocationCallCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationBasicCallType($serviceInvocationBasicCallType = null)
    {
        $this->serviceInvocationBasicCallType = new SimpleContent($serviceInvocationBasicCallType);
        $this->serviceInvocationBasicCallType->setName('serviceInvocationBasicCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationBasicCallType
     */
    public function getServiceInvocationBasicCallType()
    {
        return ($this->serviceInvocationBasicCallType) ? $this->serviceInvocationBasicCallType->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationConfigurableCallType($serviceInvocationConfigurableCallType = null)
    {
        $this->serviceInvocationConfigurableCallType = new SimpleContent($serviceInvocationConfigurableCallType);
        $this->serviceInvocationConfigurableCallType->setName('serviceInvocationConfigurableCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationConfigurableCallType
     */
    public function getServiceInvocationConfigurableCallType()
    {
        return ($this->serviceInvocationConfigurableCallType) ? $this->serviceInvocationConfigurableCallType->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationAlternateCallIndicator($serviceInvocationAlternateCallIndicator = null)
    {
        $this->serviceInvocationAlternateCallIndicator = new SimpleContent($serviceInvocationAlternateCallIndicator);
        $this->serviceInvocationAlternateCallIndicator->setName('serviceInvocationAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationAlternateCallIndicator
     */
    public function getServiceInvocationAlternateCallIndicator()
    {
        return ($this->serviceInvocationAlternateCallIndicator) ? $this->serviceInvocationAlternateCallIndicator->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationVirtualOnNetCallType($serviceInvocationVirtualOnNetCallType = null)
    {
        $this->serviceInvocationVirtualOnNetCallType = new SimpleContent($serviceInvocationVirtualOnNetCallType);
        $this->serviceInvocationVirtualOnNetCallType->setName('serviceInvocationVirtualOnNetCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationVirtualOnNetCallType
     */
    public function getServiceInvocationVirtualOnNetCallType()
    {
        return ($this->serviceInvocationVirtualOnNetCallType) ? $this->serviceInvocationVirtualOnNetCallType->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationCalledDirectoryName($serviceInvocationCalledDirectoryName = null)
    {
        $this->serviceInvocationCalledDirectoryName = new SimpleContent($serviceInvocationCalledDirectoryName);
        $this->serviceInvocationCalledDirectoryName->setName('serviceInvocationCalledDirectoryName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationCalledDirectoryName
     */
    public function getServiceInvocationCalledDirectoryName()
    {
        return ($this->serviceInvocationCalledDirectoryName) ? $this->serviceInvocationCalledDirectoryName->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInvocationCalledGroupId($serviceInvocationCalledGroupId = null)
    {
        $this->serviceInvocationCalledGroupId = new SimpleContent($serviceInvocationCalledGroupId);
        $this->serviceInvocationCalledGroupId->setName('serviceInvocationCalledGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceInvocationCalledGroupId
     */
    public function getServiceInvocationCalledGroupId()
    {
        return ($this->serviceInvocationCalledGroupId) ? $this->serviceInvocationCalledGroupId->getValue() : null;
    }

    /**
     * 
     */
    public function setRedirectingNumber($redirectingNumber = null)
    {
        $this->redirectingNumber = new SimpleContent($redirectingNumber);
        $this->redirectingNumber->setName('redirectingNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectingNumber
     */
    public function getRedirectingNumber()
    {
        return ($this->redirectingNumber) ? $this->redirectingNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setRedirectingName($redirectingName = null)
    {
        $this->redirectingName = new SimpleContent($redirectingName);
        $this->redirectingName->setName('redirectingName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectingName
     */
    public function getRedirectingName()
    {
        return ($this->redirectingName) ? $this->redirectingName->getValue() : null;
    }

    /**
     * 
     */
    public function setRedirectingPresentationIndicator($redirectingPresentationIndicator = null)
    {
        $this->redirectingPresentationIndicator = new SimpleContent($redirectingPresentationIndicator);
        $this->redirectingPresentationIndicator->setName('redirectingPresentationIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectingPresentationIndicator
     */
    public function getRedirectingPresentationIndicator()
    {
        return ($this->redirectingPresentationIndicator) ? $this->redirectingPresentationIndicator->getValue() : null;
    }

    /**
     * 
     */
    public function setRedirectingReason($RedirectingReason = null)
    {
        $this->RedirectingReason = new SimpleContent($RedirectingReason);
        $this->RedirectingReason->setName('RedirectingReason');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $RedirectingReason
     */
    public function getRedirectingReason()
    {
        return ($this->RedirectingReason) ? $this->RedirectingReason->getValue() : null;
    }

    /**
     * 
     */
    public function setAccountAuthorizationCode($accountAuthorizationCode = null)
    {
        $this->accountAuthorizationCode = new SimpleContent($accountAuthorizationCode);
        $this->accountAuthorizationCode->setName('accountAuthorizationCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $accountAuthorizationCode
     */
    public function getAccountAuthorizationCode()
    {
        return ($this->accountAuthorizationCode) ? $this->accountAuthorizationCode->getValue() : null;
    }

    /**
     * 
     */
    public function setUserGroupId($userGroupId = null)
    {
        $this->userGroupId = new SimpleContent($userGroupId);
        $this->userGroupId->setName('userGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userGroupId
     */
    public function getUserGroupId()
    {
        return ($this->userGroupId) ? $this->userGroupId->getValue() : null;
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = new SimpleContent($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setUserPrimaryDn($userPrimaryDn = null)
    {
        $this->userPrimaryDn = new SimpleContent($userPrimaryDn);
        $this->userPrimaryDn->setName('userPrimaryDn');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userPrimaryDn
     */
    public function getUserPrimaryDn()
    {
        return ($this->userPrimaryDn) ? $this->userPrimaryDn->getValue() : null;
    }

    /**
     * 
     */
    public function setUserPrimaryExtension($userPrimaryExtension = null)
    {
        $this->userPrimaryExtension = new SimpleContent($userPrimaryExtension);
        $this->userPrimaryExtension->setName('userPrimaryExtension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userPrimaryExtension
     */
    public function getUserPrimaryExtension()
    {
        return ($this->userPrimaryExtension) ? $this->userPrimaryExtension->getValue() : null;
    }
}
