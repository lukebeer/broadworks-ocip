<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\ExtendedMixedCallLogsEntry;
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
    public    $responseType                              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\ExtendedMixedCallLogsEntry';
    public    $name                                      = 'ExtendedMixedCallLogsEntry';
    protected $callLogType                               = null;
    protected $countryCode                               = null;
    protected $callLogId                                 = null;
    protected $callId                                    = null;
    protected $subscriberType                            = null;
    protected $dialedNumber                              = null;
    protected $calledNumber                              = null;
    protected $networkTranslatedAddress                  = null;
    protected $callingAssertedNumber                     = null;
    protected $callingPresentationNumber                 = null;
    protected $callingPresentationNumberSource           = null;
    protected $callingPresentationName                   = null;
    protected $callingPresentationIndicator              = null;
    protected $callingGroupId                            = null;
    protected $calledDirectoryName                       = null;
    protected $calledGroupId                             = null;
    protected $connectedNumber                           = null;
    protected $connectedNumberSource                     = null;
    protected $connectedName                             = null;
    protected $connectedPresentationIndicator            = null;
    protected $typeOfNetwork                             = null;
    protected $callCategory                              = null;
    protected $basicCallType                             = null;
    protected $configurableCallType                      = null;
    protected $alternateCallIndicator                    = null;
    protected $virtualOnNetCallType                      = null;
    protected $time                                      = null;
    protected $startTime                                 = null;
    protected $answerTime                                = null;
    protected $releaseTime                               = null;
    protected $detachedTime                              = null;
    protected $detachedAnswerTime                        = null;
    protected $outgoingDnis                              = null;
    protected $serviceInvocationDisposition              = null;
    protected $serviceInvocationDialedNumber             = null;
    protected $serviceInvocationCalledNumber             = null;
    protected $serviceInvocationNetworkTranslatedAddress = null;
    protected $serviceInvocationTypeOfNetwork            = null;
    protected $serviceInvocationCallCategory             = null;
    protected $serviceInvocationBasicCallType            = null;
    protected $serviceInvocationConfigurableCallType     = null;
    protected $serviceInvocationAlternateCallIndicator   = null;
    protected $serviceInvocationVirtualOnNetCallType     = null;
    protected $serviceInvocationCalledDirectoryName      = null;
    protected $serviceInvocationCalledGroupId            = null;
    protected $redirectingNumber                         = null;
    protected $redirectingName                           = null;
    protected $redirectingPresentationIndicator          = null;
    protected $RedirectingReason                         = null;
    protected $accountAuthorizationCode                  = null;
    protected $userGroupId                               = null;
    protected $userId                                    = null;
    protected $userPrimaryDn                             = null;
    protected $userPrimaryExtension                      = null;

    public function __construct(
         $callLogType,
         $countryCode,
         $callLogId,
         $callId,
         $subscriberType,
         $dialedNumber = null,
         $calledNumber = null,
         $networkTranslatedAddress = null,
         $callingAssertedNumber = null,
         $callingPresentationNumber = null,
         $callingPresentationNumberSource = null,
         $callingPresentationName = null,
         $callingPresentationIndicator,
         $callingGroupId = null,
         $calledDirectoryName = null,
         $calledGroupId = null,
         $connectedNumber = null,
         $connectedNumberSource = null,
         $connectedName = null,
         $connectedPresentationIndicator = null,
         $typeOfNetwork = null,
         $callCategory = null,
         $basicCallType,
         $configurableCallType = null,
         $alternateCallIndicator = null,
         $virtualOnNetCallType = null,
         $time,
         $startTime,
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
     * @return ExtendedMixedCallLogsEntry
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
        if (!$callLogType) return $this;
        $this->callLogType = new SimpleContent($callLogType);
        $this->callLogType->setName('callLogType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallLogType()
    {
        return $this->callLogType->getValue();
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        if (!$countryCode) return $this;
        $this->countryCode = new SimpleContent($countryCode);
        $this->countryCode->setName('countryCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCountryCode()
    {
        return $this->countryCode->getValue();
    }

    /**
     * 
     */
    public function setCallLogId($callLogId = null)
    {
        if (!$callLogId) return $this;
        $this->callLogId = new SimpleContent($callLogId);
        $this->callLogId->setName('callLogId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallLogId()
    {
        return $this->callLogId->getValue();
    }

    /**
     * 
     */
    public function setCallId($callId = null)
    {
        if (!$callId) return $this;
        $this->callId = new SimpleContent($callId);
        $this->callId->setName('callId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallId()
    {
        return $this->callId->getValue();
    }

    /**
     * 
     */
    public function setSubscriberType($subscriberType = null)
    {
        if (!$subscriberType) return $this;
        $this->subscriberType = new SimpleContent($subscriberType);
        $this->subscriberType->setName('subscriberType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getSubscriberType()
    {
        return $this->subscriberType->getValue();
    }

    /**
     * 
     */
    public function setDialedNumber($dialedNumber = null)
    {
        if (!$dialedNumber) return $this;
        $this->dialedNumber = new SimpleContent($dialedNumber);
        $this->dialedNumber->setName('dialedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDialedNumber()
    {
        return $this->dialedNumber->getValue();
    }

    /**
     * 
     */
    public function setCalledNumber($calledNumber = null)
    {
        if (!$calledNumber) return $this;
        $this->calledNumber = new SimpleContent($calledNumber);
        $this->calledNumber->setName('calledNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCalledNumber()
    {
        return $this->calledNumber->getValue();
    }

    /**
     * 
     */
    public function setNetworkTranslatedAddress($networkTranslatedAddress = null)
    {
        if (!$networkTranslatedAddress) return $this;
        $this->networkTranslatedAddress = new SimpleContent($networkTranslatedAddress);
        $this->networkTranslatedAddress->setName('networkTranslatedAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getNetworkTranslatedAddress()
    {
        return $this->networkTranslatedAddress->getValue();
    }

    /**
     * 
     */
    public function setCallingAssertedNumber($callingAssertedNumber = null)
    {
        if (!$callingAssertedNumber) return $this;
        $this->callingAssertedNumber = new SimpleContent($callingAssertedNumber);
        $this->callingAssertedNumber->setName('callingAssertedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallingAssertedNumber()
    {
        return $this->callingAssertedNumber->getValue();
    }

    /**
     * 
     */
    public function setCallingPresentationNumber($callingPresentationNumber = null)
    {
        if (!$callingPresentationNumber) return $this;
        $this->callingPresentationNumber = new SimpleContent($callingPresentationNumber);
        $this->callingPresentationNumber->setName('callingPresentationNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallingPresentationNumber()
    {
        return $this->callingPresentationNumber->getValue();
    }

    /**
     * 
     */
    public function setCallingPresentationNumberSource($callingPresentationNumberSource = null)
    {
        if (!$callingPresentationNumberSource) return $this;
        $this->callingPresentationNumberSource = new SimpleContent($callingPresentationNumberSource);
        $this->callingPresentationNumberSource->setName('callingPresentationNumberSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallingPresentationNumberSource()
    {
        return $this->callingPresentationNumberSource->getValue();
    }

    /**
     * 
     */
    public function setCallingPresentationName($callingPresentationName = null)
    {
        if (!$callingPresentationName) return $this;
        $this->callingPresentationName = new SimpleContent($callingPresentationName);
        $this->callingPresentationName->setName('callingPresentationName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallingPresentationName()
    {
        return $this->callingPresentationName->getValue();
    }

    /**
     * 
     */
    public function setCallingPresentationIndicator($callingPresentationIndicator = null)
    {
        if (!$callingPresentationIndicator) return $this;
        $this->callingPresentationIndicator = new SimpleContent($callingPresentationIndicator);
        $this->callingPresentationIndicator->setName('callingPresentationIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallingPresentationIndicator()
    {
        return $this->callingPresentationIndicator->getValue();
    }

    /**
     * 
     */
    public function setCallingGroupId($callingGroupId = null)
    {
        if (!$callingGroupId) return $this;
        $this->callingGroupId = new SimpleContent($callingGroupId);
        $this->callingGroupId->setName('callingGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallingGroupId()
    {
        return $this->callingGroupId->getValue();
    }

    /**
     * 
     */
    public function setCalledDirectoryName($calledDirectoryName = null)
    {
        if (!$calledDirectoryName) return $this;
        $this->calledDirectoryName = new SimpleContent($calledDirectoryName);
        $this->calledDirectoryName->setName('calledDirectoryName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCalledDirectoryName()
    {
        return $this->calledDirectoryName->getValue();
    }

    /**
     * 
     */
    public function setCalledGroupId($calledGroupId = null)
    {
        if (!$calledGroupId) return $this;
        $this->calledGroupId = new SimpleContent($calledGroupId);
        $this->calledGroupId->setName('calledGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCalledGroupId()
    {
        return $this->calledGroupId->getValue();
    }

    /**
     * 
     */
    public function setConnectedNumber($connectedNumber = null)
    {
        if (!$connectedNumber) return $this;
        $this->connectedNumber = new SimpleContent($connectedNumber);
        $this->connectedNumber->setName('connectedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getConnectedNumber()
    {
        return $this->connectedNumber->getValue();
    }

    /**
     * 
     */
    public function setConnectedNumberSource($connectedNumberSource = null)
    {
        if (!$connectedNumberSource) return $this;
        $this->connectedNumberSource = new SimpleContent($connectedNumberSource);
        $this->connectedNumberSource->setName('connectedNumberSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getConnectedNumberSource()
    {
        return $this->connectedNumberSource->getValue();
    }

    /**
     * 
     */
    public function setConnectedName($connectedName = null)
    {
        if (!$connectedName) return $this;
        $this->connectedName = new SimpleContent($connectedName);
        $this->connectedName->setName('connectedName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getConnectedName()
    {
        return $this->connectedName->getValue();
    }

    /**
     * 
     */
    public function setConnectedPresentationIndicator($connectedPresentationIndicator = null)
    {
        if (!$connectedPresentationIndicator) return $this;
        $this->connectedPresentationIndicator = new SimpleContent($connectedPresentationIndicator);
        $this->connectedPresentationIndicator->setName('connectedPresentationIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getConnectedPresentationIndicator()
    {
        return $this->connectedPresentationIndicator->getValue();
    }

    /**
     * 
     */
    public function setTypeOfNetwork($typeOfNetwork = null)
    {
        if (!$typeOfNetwork) return $this;
        $this->typeOfNetwork = new SimpleContent($typeOfNetwork);
        $this->typeOfNetwork->setName('typeOfNetwork');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getTypeOfNetwork()
    {
        return $this->typeOfNetwork->getValue();
    }

    /**
     * 
     */
    public function setCallCategory($callCategory = null)
    {
        if (!$callCategory) return $this;
        $this->callCategory = new SimpleContent($callCategory);
        $this->callCategory->setName('callCategory');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCallCategory()
    {
        return $this->callCategory->getValue();
    }

    /**
     * 
     */
    public function setBasicCallType($basicCallType = null)
    {
        if (!$basicCallType) return $this;
        $this->basicCallType = new SimpleContent($basicCallType);
        $this->basicCallType->setName('basicCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getBasicCallType()
    {
        return $this->basicCallType->getValue();
    }

    /**
     * 
     */
    public function setConfigurableCallType($configurableCallType = null)
    {
        if (!$configurableCallType) return $this;
        $this->configurableCallType = new SimpleContent($configurableCallType);
        $this->configurableCallType->setName('configurableCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getConfigurableCallType()
    {
        return $this->configurableCallType->getValue();
    }

    /**
     * 
     */
    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        if (!$alternateCallIndicator) return $this;
        $this->alternateCallIndicator = new SimpleContent($alternateCallIndicator);
        $this->alternateCallIndicator->setName('alternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator->getValue();
    }

    /**
     * 
     */
    public function setVirtualOnNetCallType($virtualOnNetCallType = null)
    {
        if (!$virtualOnNetCallType) return $this;
        $this->virtualOnNetCallType = new SimpleContent($virtualOnNetCallType);
        $this->virtualOnNetCallType->setName('virtualOnNetCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVirtualOnNetCallType()
    {
        return $this->virtualOnNetCallType->getValue();
    }

    /**
     * 
     */
    public function setTime($time = null)
    {
        if (!$time) return $this;
        $this->time = new SimpleContent($time);
        $this->time->setName('time');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getTime()
    {
        return $this->time->getValue();
    }

    /**
     * 
     */
    public function setStartTime($startTime = null)
    {
        if (!$startTime) return $this;
        $this->startTime = new SimpleContent($startTime);
        $this->startTime->setName('startTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStartTime()
    {
        return $this->startTime->getValue();
    }

    /**
     * 
     */
    public function setAnswerTime($answerTime = null)
    {
        if (!$answerTime) return $this;
        $this->answerTime = new SimpleContent($answerTime);
        $this->answerTime->setName('answerTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAnswerTime()
    {
        return $this->answerTime->getValue();
    }

    /**
     * 
     */
    public function setReleaseTime($releaseTime = null)
    {
        if (!$releaseTime) return $this;
        $this->releaseTime = new SimpleContent($releaseTime);
        $this->releaseTime->setName('releaseTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getReleaseTime()
    {
        return $this->releaseTime->getValue();
    }

    /**
     * 
     */
    public function setDetachedTime($detachedTime = null)
    {
        if (!$detachedTime) return $this;
        $this->detachedTime = new SimpleContent($detachedTime);
        $this->detachedTime->setName('detachedTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDetachedTime()
    {
        return $this->detachedTime->getValue();
    }

    /**
     * 
     */
    public function setDetachedAnswerTime($detachedAnswerTime = null)
    {
        if (!$detachedAnswerTime) return $this;
        $this->detachedAnswerTime = new SimpleContent($detachedAnswerTime);
        $this->detachedAnswerTime->setName('detachedAnswerTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDetachedAnswerTime()
    {
        return $this->detachedAnswerTime->getValue();
    }

    /**
     * 
     */
    public function setOutgoingDnis($outgoingDnis = null)
    {
        if (!$outgoingDnis) return $this;
        $this->outgoingDnis = new SimpleContent($outgoingDnis);
        $this->outgoingDnis->setName('outgoingDnis');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getOutgoingDnis()
    {
        return $this->outgoingDnis->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationDisposition($serviceInvocationDisposition = null)
    {
        if (!$serviceInvocationDisposition) return $this;
        $this->serviceInvocationDisposition = new SimpleContent($serviceInvocationDisposition);
        $this->serviceInvocationDisposition->setName('serviceInvocationDisposition');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationDisposition()
    {
        return $this->serviceInvocationDisposition->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationDialedNumber($serviceInvocationDialedNumber = null)
    {
        if (!$serviceInvocationDialedNumber) return $this;
        $this->serviceInvocationDialedNumber = new SimpleContent($serviceInvocationDialedNumber);
        $this->serviceInvocationDialedNumber->setName('serviceInvocationDialedNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationDialedNumber()
    {
        return $this->serviceInvocationDialedNumber->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationCalledNumber($serviceInvocationCalledNumber = null)
    {
        if (!$serviceInvocationCalledNumber) return $this;
        $this->serviceInvocationCalledNumber = new SimpleContent($serviceInvocationCalledNumber);
        $this->serviceInvocationCalledNumber->setName('serviceInvocationCalledNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationCalledNumber()
    {
        return $this->serviceInvocationCalledNumber->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationNetworkTranslatedAddress($serviceInvocationNetworkTranslatedAddress = null)
    {
        if (!$serviceInvocationNetworkTranslatedAddress) return $this;
        $this->serviceInvocationNetworkTranslatedAddress = new SimpleContent($serviceInvocationNetworkTranslatedAddress);
        $this->serviceInvocationNetworkTranslatedAddress->setName('serviceInvocationNetworkTranslatedAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationNetworkTranslatedAddress()
    {
        return $this->serviceInvocationNetworkTranslatedAddress->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationTypeOfNetwork($serviceInvocationTypeOfNetwork = null)
    {
        if (!$serviceInvocationTypeOfNetwork) return $this;
        $this->serviceInvocationTypeOfNetwork = new SimpleContent($serviceInvocationTypeOfNetwork);
        $this->serviceInvocationTypeOfNetwork->setName('serviceInvocationTypeOfNetwork');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationTypeOfNetwork()
    {
        return $this->serviceInvocationTypeOfNetwork->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationCallCategory($serviceInvocationCallCategory = null)
    {
        if (!$serviceInvocationCallCategory) return $this;
        $this->serviceInvocationCallCategory = new SimpleContent($serviceInvocationCallCategory);
        $this->serviceInvocationCallCategory->setName('serviceInvocationCallCategory');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationCallCategory()
    {
        return $this->serviceInvocationCallCategory->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationBasicCallType($serviceInvocationBasicCallType = null)
    {
        if (!$serviceInvocationBasicCallType) return $this;
        $this->serviceInvocationBasicCallType = new SimpleContent($serviceInvocationBasicCallType);
        $this->serviceInvocationBasicCallType->setName('serviceInvocationBasicCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationBasicCallType()
    {
        return $this->serviceInvocationBasicCallType->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationConfigurableCallType($serviceInvocationConfigurableCallType = null)
    {
        if (!$serviceInvocationConfigurableCallType) return $this;
        $this->serviceInvocationConfigurableCallType = new SimpleContent($serviceInvocationConfigurableCallType);
        $this->serviceInvocationConfigurableCallType->setName('serviceInvocationConfigurableCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationConfigurableCallType()
    {
        return $this->serviceInvocationConfigurableCallType->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationAlternateCallIndicator($serviceInvocationAlternateCallIndicator = null)
    {
        if (!$serviceInvocationAlternateCallIndicator) return $this;
        $this->serviceInvocationAlternateCallIndicator = new SimpleContent($serviceInvocationAlternateCallIndicator);
        $this->serviceInvocationAlternateCallIndicator->setName('serviceInvocationAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationAlternateCallIndicator()
    {
        return $this->serviceInvocationAlternateCallIndicator->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationVirtualOnNetCallType($serviceInvocationVirtualOnNetCallType = null)
    {
        if (!$serviceInvocationVirtualOnNetCallType) return $this;
        $this->serviceInvocationVirtualOnNetCallType = new SimpleContent($serviceInvocationVirtualOnNetCallType);
        $this->serviceInvocationVirtualOnNetCallType->setName('serviceInvocationVirtualOnNetCallType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationVirtualOnNetCallType()
    {
        return $this->serviceInvocationVirtualOnNetCallType->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationCalledDirectoryName($serviceInvocationCalledDirectoryName = null)
    {
        if (!$serviceInvocationCalledDirectoryName) return $this;
        $this->serviceInvocationCalledDirectoryName = new SimpleContent($serviceInvocationCalledDirectoryName);
        $this->serviceInvocationCalledDirectoryName->setName('serviceInvocationCalledDirectoryName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationCalledDirectoryName()
    {
        return $this->serviceInvocationCalledDirectoryName->getValue();
    }

    /**
     * 
     */
    public function setServiceInvocationCalledGroupId($serviceInvocationCalledGroupId = null)
    {
        if (!$serviceInvocationCalledGroupId) return $this;
        $this->serviceInvocationCalledGroupId = new SimpleContent($serviceInvocationCalledGroupId);
        $this->serviceInvocationCalledGroupId->setName('serviceInvocationCalledGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServiceInvocationCalledGroupId()
    {
        return $this->serviceInvocationCalledGroupId->getValue();
    }

    /**
     * 
     */
    public function setRedirectingNumber($redirectingNumber = null)
    {
        if (!$redirectingNumber) return $this;
        $this->redirectingNumber = new SimpleContent($redirectingNumber);
        $this->redirectingNumber->setName('redirectingNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRedirectingNumber()
    {
        return $this->redirectingNumber->getValue();
    }

    /**
     * 
     */
    public function setRedirectingName($redirectingName = null)
    {
        if (!$redirectingName) return $this;
        $this->redirectingName = new SimpleContent($redirectingName);
        $this->redirectingName->setName('redirectingName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRedirectingName()
    {
        return $this->redirectingName->getValue();
    }

    /**
     * 
     */
    public function setRedirectingPresentationIndicator($redirectingPresentationIndicator = null)
    {
        if (!$redirectingPresentationIndicator) return $this;
        $this->redirectingPresentationIndicator = new SimpleContent($redirectingPresentationIndicator);
        $this->redirectingPresentationIndicator->setName('redirectingPresentationIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRedirectingPresentationIndicator()
    {
        return $this->redirectingPresentationIndicator->getValue();
    }

    /**
     * 
     */
    public function setRedirectingReason($RedirectingReason = null)
    {
        if (!$RedirectingReason) return $this;
        $this->RedirectingReason = new SimpleContent($RedirectingReason);
        $this->RedirectingReason->setName('RedirectingReason');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRedirectingReason()
    {
        return $this->RedirectingReason->getValue();
    }

    /**
     * 
     */
    public function setAccountAuthorizationCode($accountAuthorizationCode = null)
    {
        if (!$accountAuthorizationCode) return $this;
        $this->accountAuthorizationCode = new SimpleContent($accountAuthorizationCode);
        $this->accountAuthorizationCode->setName('accountAuthorizationCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAccountAuthorizationCode()
    {
        return $this->accountAuthorizationCode->getValue();
    }

    /**
     * 
     */
    public function setUserGroupId($userGroupId = null)
    {
        if (!$userGroupId) return $this;
        $this->userGroupId = new SimpleContent($userGroupId);
        $this->userGroupId->setName('userGroupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUserGroupId()
    {
        return $this->userGroupId->getValue();
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = new SimpleContent($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setUserPrimaryDn($userPrimaryDn = null)
    {
        if (!$userPrimaryDn) return $this;
        $this->userPrimaryDn = new SimpleContent($userPrimaryDn);
        $this->userPrimaryDn->setName('userPrimaryDn');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUserPrimaryDn()
    {
        return $this->userPrimaryDn->getValue();
    }

    /**
     * 
     */
    public function setUserPrimaryExtension($userPrimaryExtension = null)
    {
        if (!$userPrimaryExtension) return $this;
        $this->userPrimaryExtension = new SimpleContent($userPrimaryExtension);
        $this->userPrimaryExtension->setName('userPrimaryExtension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUserPrimaryExtension()
    {
        return $this->userPrimaryExtension->getValue();
    }
}
