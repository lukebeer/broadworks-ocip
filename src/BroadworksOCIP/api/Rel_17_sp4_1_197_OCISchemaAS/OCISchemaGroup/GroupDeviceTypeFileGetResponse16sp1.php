<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupDeviceTypeFileGetRequest16sp1.
 */
class GroupDeviceTypeFileGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDeviceTypeFileGetResponse16sp1';
    protected $fileSource;
    protected $configurationFileName;
    protected $accessUrl;
    protected $repositoryUrl;
    protected $templateUrl;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDeviceTypeFileGetResponse16sp1 $response
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
        $this->fileSource = ($fileSource InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $fileSource
             : new AccessDeviceEnhancedConfigurationMode($fileSource);
        $this->fileSource->setElementName('fileSource');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationMode $fileSource
     */
    public function getFileSource()
    {
        return ($this->fileSource)
            ? $this->fileSource->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->configurationFileName->setElementName('configurationFileName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationFileName $configurationFileName
     */
    public function getConfigurationFileName()
    {
        return ($this->configurationFileName)
            ? $this->configurationFileName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessUrl($accessUrl = null)
    {
        $this->accessUrl = ($accessUrl InstanceOf URL)
             ? $accessUrl
             : new URL($accessUrl);
        $this->accessUrl->setElementName('accessUrl');
        return $this;
    }

    /**
     * 
     * @return URL $accessUrl
     */
    public function getAccessUrl()
    {
        return ($this->accessUrl)
            ? $this->accessUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRepositoryUrl($repositoryUrl = null)
    {
        $this->repositoryUrl = ($repositoryUrl InstanceOf URL)
             ? $repositoryUrl
             : new URL($repositoryUrl);
        $this->repositoryUrl->setElementName('repositoryUrl');
        return $this;
    }

    /**
     * 
     * @return URL $repositoryUrl
     */
    public function getRepositoryUrl()
    {
        return ($this->repositoryUrl)
            ? $this->repositoryUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTemplateUrl($templateUrl = null)
    {
        $this->templateUrl = ($templateUrl InstanceOf URL)
             ? $templateUrl
             : new URL($templateUrl);
        $this->templateUrl->setElementName('templateUrl');
        return $this;
    }

    /**
     * 
     * @return URL $templateUrl
     */
    public function getTemplateUrl()
    {
        return ($this->templateUrl)
            ? $this->templateUrl->getElementValue()
            : null;
    }
}
