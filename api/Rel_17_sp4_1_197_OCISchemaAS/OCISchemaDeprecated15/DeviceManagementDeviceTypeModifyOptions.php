<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\DeviceManagementDeviceTypeModifyOptions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Device Management System device type options during a modify request.
 */
class DeviceManagementDeviceTypeModifyOptions extends ComplexType implements ComplexInterface
{
    public    $responseType                       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\DeviceManagementDeviceTypeModifyOptions';
    public    $name                               = 'DeviceManagementDeviceTypeModifyOptions';
    protected $deviceAccessProtocol               = null;
    protected $tagMode                            = null;
    protected $tagSet                             = null;
    protected $allowDeviceProfileCustomTagSet     = null;
    protected $allowGroupCustomTagSet             = null;
    protected $sendEmailUponResetFailure          = null;
    protected $deviceAccessNetAddress             = null;
    protected $deviceAccessPort                   = null;
    protected $deviceAccessContext                = null;
    protected $defaultDeviceLanguage              = null;
    protected $defaultDeviceEncoding              = null;
    protected $accessDeviceCredentials            = null;
    protected $useHttpDigestAuthentication        = null;
    protected $macBasedFileAuthentication         = null;
    protected $userNamePasswordFileAuthentication = null;
    protected $macInNonRequestURI                 = null;
    protected $macFormatInNonRequestURI           = null;

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
     * @return DeviceManagementDeviceTypeModifyOptions
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
        if (!$deviceAccessProtocol) return $this;
        $this->deviceAccessProtocol = new SimpleContent($deviceAccessProtocol);
        $this->deviceAccessProtocol->setName('deviceAccessProtocol');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDeviceAccessProtocol()
    {
        return $this->deviceAccessProtocol->getValue();
    }

    /**
     * 
     */
    public function setTagMode($tagMode = null)
    {
        if (!$tagMode) return $this;
        $this->tagMode = new SimpleContent($tagMode);
        $this->tagMode->setName('tagMode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getTagMode()
    {
        return $this->tagMode->getValue();
    }

    /**
     * 
     */
    public function setTagSet($tagSet = null)
    {
        if (!$tagSet) return $this;
        $this->tagSet = new SimpleContent($tagSet);
        $this->tagSet->setName('tagSet');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getTagSet()
    {
        return $this->tagSet->getValue();
    }

    /**
     * 
     */
    public function setAllowDeviceProfileCustomTagSet($allowDeviceProfileCustomTagSet = null)
    {
        if (!$allowDeviceProfileCustomTagSet) return $this;
        $this->allowDeviceProfileCustomTagSet = new SimpleContent($allowDeviceProfileCustomTagSet);
        $this->allowDeviceProfileCustomTagSet->setName('allowDeviceProfileCustomTagSet');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAllowDeviceProfileCustomTagSet()
    {
        return $this->allowDeviceProfileCustomTagSet->getValue();
    }

    /**
     * 
     */
    public function setAllowGroupCustomTagSet($allowGroupCustomTagSet = null)
    {
        if (!$allowGroupCustomTagSet) return $this;
        $this->allowGroupCustomTagSet = new SimpleContent($allowGroupCustomTagSet);
        $this->allowGroupCustomTagSet->setName('allowGroupCustomTagSet');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAllowGroupCustomTagSet()
    {
        return $this->allowGroupCustomTagSet->getValue();
    }

    /**
     * 
     */
    public function setSendEmailUponResetFailure($sendEmailUponResetFailure = null)
    {
        if (!$sendEmailUponResetFailure) return $this;
        $this->sendEmailUponResetFailure = new SimpleContent($sendEmailUponResetFailure);
        $this->sendEmailUponResetFailure->setName('sendEmailUponResetFailure');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getSendEmailUponResetFailure()
    {
        return $this->sendEmailUponResetFailure->getValue();
    }

    /**
     * 
     */
    public function setDeviceAccessNetAddress($deviceAccessNetAddress = null)
    {
        if (!$deviceAccessNetAddress) return $this;
        $this->deviceAccessNetAddress = new SimpleContent($deviceAccessNetAddress);
        $this->deviceAccessNetAddress->setName('deviceAccessNetAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDeviceAccessNetAddress()
    {
        return $this->deviceAccessNetAddress->getValue();
    }

    /**
     * 
     */
    public function setDeviceAccessPort($deviceAccessPort = null)
    {
        if (!$deviceAccessPort) return $this;
        $this->deviceAccessPort = new SimpleContent($deviceAccessPort);
        $this->deviceAccessPort->setName('deviceAccessPort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDeviceAccessPort()
    {
        return $this->deviceAccessPort->getValue();
    }

    /**
     * 
     */
    public function setDeviceAccessContext($deviceAccessContext = null)
    {
        if (!$deviceAccessContext) return $this;
        $this->deviceAccessContext = new SimpleContent($deviceAccessContext);
        $this->deviceAccessContext->setName('deviceAccessContext');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDeviceAccessContext()
    {
        return $this->deviceAccessContext->getValue();
    }

    /**
     * 
     */
    public function setDefaultDeviceLanguage($defaultDeviceLanguage = null)
    {
        if (!$defaultDeviceLanguage) return $this;
        $this->defaultDeviceLanguage = new SimpleContent($defaultDeviceLanguage);
        $this->defaultDeviceLanguage->setName('defaultDeviceLanguage');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDefaultDeviceLanguage()
    {
        return $this->defaultDeviceLanguage->getValue();
    }

    /**
     * 
     */
    public function setDefaultDeviceEncoding($defaultDeviceEncoding = null)
    {
        if (!$defaultDeviceEncoding) return $this;
        $this->defaultDeviceEncoding = new SimpleContent($defaultDeviceEncoding);
        $this->defaultDeviceEncoding->setName('defaultDeviceEncoding');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDefaultDeviceEncoding()
    {
        return $this->defaultDeviceEncoding->getValue();
    }

    /**
     * 
     */
    public function setAccessDeviceCredentials($accessDeviceCredentials = null)
    {
        if (!$accessDeviceCredentials) return $this;
        $this->accessDeviceCredentials = new SimpleContent($accessDeviceCredentials);
        $this->accessDeviceCredentials->setName('accessDeviceCredentials');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials->getValue();
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        if (!$useHttpDigestAuthentication) return $this;
        $this->useHttpDigestAuthentication = new SimpleContent($useHttpDigestAuthentication);
        $this->useHttpDigestAuthentication->setName('useHttpDigestAuthentication');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        if (!$macBasedFileAuthentication) return $this;
        $this->macBasedFileAuthentication = new SimpleContent($macBasedFileAuthentication);
        $this->macBasedFileAuthentication->setName('macBasedFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        if (!$userNamePasswordFileAuthentication) return $this;
        $this->userNamePasswordFileAuthentication = new SimpleContent($userNamePasswordFileAuthentication);
        $this->userNamePasswordFileAuthentication->setName('userNamePasswordFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        if (!$macInNonRequestURI) return $this;
        $this->macInNonRequestURI = new SimpleContent($macInNonRequestURI);
        $this->macInNonRequestURI->setName('macInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI->getValue();
    }

    /**
     * 
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        if (!$macFormatInNonRequestURI) return $this;
        $this->macFormatInNonRequestURI = new SimpleContent($macFormatInNonRequestURI);
        $this->macFormatInNonRequestURI->setName('macFormatInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI->getValue();
    }
}
