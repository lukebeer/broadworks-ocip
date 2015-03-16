<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Device Management System device type options during a modify request.
 */
class DeviceManagementDeviceTypeModifyOptions16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'DeviceManagementDeviceTypeModifyOptions16';
    protected $deviceAccessProtocol;
    protected $tagMode;
    protected $tagSet;
    protected $allowDeviceProfileCustomTagSet;
    protected $allowGroupCustomTagSet;
    protected $sendEmailUponResetFailure;
    protected $deviceAccessNetAddress;
    protected $deviceAccessPort;
    protected $deviceAccessContext;
    protected $defaultDeviceLanguage;
    protected $defaultDeviceEncoding;
    protected $accessDeviceCredentials;
    protected $useHttpDigestAuthentication;
    protected $macBasedFileAuthentication;
    protected $userNamePasswordFileAuthentication;
    protected $macInNonRequestURI;
    protected $macFormatInNonRequestURI;

    public function __construct(
         $deviceAccessProtocol = null,
         $tagMode = null,
         $tagSet = null,
         $allowDeviceProfileCustomTagSet = null,
         $allowGroupCustomTagSet = null,
         $sendEmailUponResetFailure = null,
         $deviceAccessNetAddress = null,
         $deviceAccessPort = null,
         $deviceAccessContext = null,
         $defaultDeviceLanguage = null,
         $defaultDeviceEncoding = null,
         $accessDeviceCredentials = null,
         $useHttpDigestAuthentication = null,
         $macBasedFileAuthentication = null,
         $userNamePasswordFileAuthentication = null,
         $macInNonRequestURI = null,
         $macFormatInNonRequestURI = null
    ) {
        $this->setDeviceAccessProtocol($deviceAccessProtocol);
        $this->setTagMode($tagMode);
        $this->setTagSet($tagSet);
        $this->setAllowDeviceProfileCustomTagSet($allowDeviceProfileCustomTagSet);
        $this->setAllowGroupCustomTagSet($allowGroupCustomTagSet);
        $this->setSendEmailUponResetFailure($sendEmailUponResetFailure);
        $this->setDeviceAccessNetAddress($deviceAccessNetAddress);
        $this->setDeviceAccessPort($deviceAccessPort);
        $this->setDeviceAccessContext($deviceAccessContext);
        $this->setDefaultDeviceLanguage($defaultDeviceLanguage);
        $this->setDefaultDeviceEncoding($defaultDeviceEncoding);
        $this->setAccessDeviceCredentials($accessDeviceCredentials);
        $this->setUseHttpDigestAuthentication($useHttpDigestAuthentication);
        $this->setMacBasedFileAuthentication($macBasedFileAuthentication);
        $this->setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication);
        $this->setMacInNonRequestURI($macInNonRequestURI);
        $this->setMacFormatInNonRequestURI($macFormatInNonRequestURI);
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
    public function setDeviceAccessProtocol($deviceAccessProtocol = null)
    {
        $this->deviceAccessProtocol = new SimpleContent($deviceAccessProtocol);
        $this->deviceAccessProtocol->setElementName('deviceAccessProtocol');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceAccessProtocol
     */
    public function getDeviceAccessProtocol()
    {
        return ($this->deviceAccessProtocol)
            ? $this->deviceAccessProtocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTagMode($tagMode = null)
    {
        $this->tagMode = new SimpleContent($tagMode);
        $this->tagMode->setElementName('tagMode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $tagMode
     */
    public function getTagMode()
    {
        return ($this->tagMode)
            ? $this->tagMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTagSet($tagSet = null)
    {
        $this->tagSet = new SimpleContent($tagSet);
        $this->tagSet->setElementName('tagSet');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $tagSet
     */
    public function getTagSet()
    {
        return ($this->tagSet)
            ? $this->tagSet->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowDeviceProfileCustomTagSet($allowDeviceProfileCustomTagSet = null)
    {
        $this->allowDeviceProfileCustomTagSet = new SimpleContent($allowDeviceProfileCustomTagSet);
        $this->allowDeviceProfileCustomTagSet->setElementName('allowDeviceProfileCustomTagSet');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowDeviceProfileCustomTagSet
     */
    public function getAllowDeviceProfileCustomTagSet()
    {
        return ($this->allowDeviceProfileCustomTagSet)
            ? $this->allowDeviceProfileCustomTagSet->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowGroupCustomTagSet($allowGroupCustomTagSet = null)
    {
        $this->allowGroupCustomTagSet = new SimpleContent($allowGroupCustomTagSet);
        $this->allowGroupCustomTagSet->setElementName('allowGroupCustomTagSet');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowGroupCustomTagSet
     */
    public function getAllowGroupCustomTagSet()
    {
        return ($this->allowGroupCustomTagSet)
            ? $this->allowGroupCustomTagSet->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendEmailUponResetFailure($sendEmailUponResetFailure = null)
    {
        $this->sendEmailUponResetFailure = new SimpleContent($sendEmailUponResetFailure);
        $this->sendEmailUponResetFailure->setElementName('sendEmailUponResetFailure');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $sendEmailUponResetFailure
     */
    public function getSendEmailUponResetFailure()
    {
        return ($this->sendEmailUponResetFailure)
            ? $this->sendEmailUponResetFailure->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceAccessNetAddress($deviceAccessNetAddress = null)
    {
        $this->deviceAccessNetAddress = new SimpleContent($deviceAccessNetAddress);
        $this->deviceAccessNetAddress->setElementName('deviceAccessNetAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceAccessNetAddress
     */
    public function getDeviceAccessNetAddress()
    {
        return ($this->deviceAccessNetAddress)
            ? $this->deviceAccessNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceAccessPort($deviceAccessPort = null)
    {
        $this->deviceAccessPort = new SimpleContent($deviceAccessPort);
        $this->deviceAccessPort->setElementName('deviceAccessPort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceAccessPort
     */
    public function getDeviceAccessPort()
    {
        return ($this->deviceAccessPort)
            ? $this->deviceAccessPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceAccessContext($deviceAccessContext = null)
    {
        $this->deviceAccessContext = new SimpleContent($deviceAccessContext);
        $this->deviceAccessContext->setElementName('deviceAccessContext');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceAccessContext
     */
    public function getDeviceAccessContext()
    {
        return ($this->deviceAccessContext)
            ? $this->deviceAccessContext->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultDeviceLanguage($defaultDeviceLanguage = null)
    {
        $this->defaultDeviceLanguage = new SimpleContent($defaultDeviceLanguage);
        $this->defaultDeviceLanguage->setElementName('defaultDeviceLanguage');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $defaultDeviceLanguage
     */
    public function getDefaultDeviceLanguage()
    {
        return ($this->defaultDeviceLanguage)
            ? $this->defaultDeviceLanguage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultDeviceEncoding($defaultDeviceEncoding = null)
    {
        $this->defaultDeviceEncoding = new SimpleContent($defaultDeviceEncoding);
        $this->defaultDeviceEncoding->setElementName('defaultDeviceEncoding');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $defaultDeviceEncoding
     */
    public function getDefaultDeviceEncoding()
    {
        return ($this->defaultDeviceEncoding)
            ? $this->defaultDeviceEncoding->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDeviceCredentials($accessDeviceCredentials = null)
    {
        $this->accessDeviceCredentials = new SimpleContent($accessDeviceCredentials);
        $this->accessDeviceCredentials->setElementName('accessDeviceCredentials');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $accessDeviceCredentials
     */
    public function getAccessDeviceCredentials()
    {
        return ($this->accessDeviceCredentials)
            ? $this->accessDeviceCredentials->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        $this->useHttpDigestAuthentication = new SimpleContent($useHttpDigestAuthentication);
        $this->useHttpDigestAuthentication->setElementName('useHttpDigestAuthentication');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $useHttpDigestAuthentication
     */
    public function getUseHttpDigestAuthentication()
    {
        return ($this->useHttpDigestAuthentication)
            ? $this->useHttpDigestAuthentication->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        $this->macBasedFileAuthentication = new SimpleContent($macBasedFileAuthentication);
        $this->macBasedFileAuthentication->setElementName('macBasedFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $macBasedFileAuthentication
     */
    public function getMacBasedFileAuthentication()
    {
        return ($this->macBasedFileAuthentication)
            ? $this->macBasedFileAuthentication->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        $this->userNamePasswordFileAuthentication = new SimpleContent($userNamePasswordFileAuthentication);
        $this->userNamePasswordFileAuthentication->setElementName('userNamePasswordFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userNamePasswordFileAuthentication
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return ($this->userNamePasswordFileAuthentication)
            ? $this->userNamePasswordFileAuthentication->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        $this->macInNonRequestURI = new SimpleContent($macInNonRequestURI);
        $this->macInNonRequestURI->setElementName('macInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $macInNonRequestURI
     */
    public function getMacInNonRequestURI()
    {
        return ($this->macInNonRequestURI)
            ? $this->macInNonRequestURI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        $this->macFormatInNonRequestURI = new SimpleContent($macFormatInNonRequestURI);
        $this->macFormatInNonRequestURI->setElementName('macFormatInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $macFormatInNonRequestURI
     */
    public function getMacFormatInNonRequestURI()
    {
        return ($this->macFormatInNonRequestURI)
            ? $this->macFormatInNonRequestURI->getElementValue()
            : null;
    }
}
