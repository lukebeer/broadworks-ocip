<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAccessDeviceFileGetRequest16sp1.
 */
class SystemAccessDeviceFileGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                  = 'SystemAccessDeviceFileGetResponse16sp1';
    protected $fileSource            = null;
    protected $configurationFileName = null;
    protected $accessUrl             = null;
    protected $repositoryUrl         = null;
    protected $templateUrl           = null;

    /**
     * @return SystemAccessDeviceFileGetResponse16sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileSource($fileSource = null)
    {
        if (!$fileSource) return $this;
        $this->fileSource = ($fileSource InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $fileSource
             : new AccessDeviceEnhancedConfigurationMode($fileSource);
        $this->fileSource->setName('fileSource');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationMode
     */
    public function getFileSource()
    {
        return $this->fileSource->getValue();
    }

    /**
     * 
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        if (!$configurationFileName) return $this;
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->configurationFileName->setName('configurationFileName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationFileName
     */
    public function getConfigurationFileName()
    {
        return $this->configurationFileName->getValue();
    }

    /**
     * 
     */
    public function setAccessUrl($accessUrl = null)
    {
        if (!$accessUrl) return $this;
        $this->accessUrl = ($accessUrl InstanceOf URL)
             ? $accessUrl
             : new URL($accessUrl);
        $this->accessUrl->setName('accessUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getAccessUrl()
    {
        return $this->accessUrl->getValue();
    }

    /**
     * 
     */
    public function setRepositoryUrl($repositoryUrl = null)
    {
        if (!$repositoryUrl) return $this;
        $this->repositoryUrl = ($repositoryUrl InstanceOf URL)
             ? $repositoryUrl
             : new URL($repositoryUrl);
        $this->repositoryUrl->setName('repositoryUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getRepositoryUrl()
    {
        return $this->repositoryUrl->getValue();
    }

    /**
     * 
     */
    public function setTemplateUrl($templateUrl = null)
    {
        if (!$templateUrl) return $this;
        $this->templateUrl = ($templateUrl InstanceOf URL)
             ? $templateUrl
             : new URL($templateUrl);
        $this->templateUrl->setName('templateUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getTemplateUrl()
    {
        return $this->templateUrl->getValue();
    }
}
