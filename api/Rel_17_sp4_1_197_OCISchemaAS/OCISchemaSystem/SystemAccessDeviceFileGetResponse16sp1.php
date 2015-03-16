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
    public    $name = 'SystemAccessDeviceFileGetResponse16sp1';
    protected $fileSource;
    protected $configurationFileName;
    protected $accessUrl;
    protected $repositoryUrl;
    protected $templateUrl;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceFileGetResponse16sp1 $response
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
        $this->fileSource->setName('fileSource');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationMode $fileSource
     */
    public function getFileSource()
    {
        return ($this->fileSource) ? $this->fileSource->getValue() : null;
    }

    /**
     * 
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->configurationFileName->setName('configurationFileName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationFileName $configurationFileName
     */
    public function getConfigurationFileName()
    {
        return ($this->configurationFileName) ? $this->configurationFileName->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessUrl($accessUrl = null)
    {
        $this->accessUrl = ($accessUrl InstanceOf URL)
             ? $accessUrl
             : new URL($accessUrl);
        $this->accessUrl->setName('accessUrl');
        return $this;
    }

    /**
     * 
     * @return URL $accessUrl
     */
    public function getAccessUrl()
    {
        return ($this->accessUrl) ? $this->accessUrl->getValue() : null;
    }

    /**
     * 
     */
    public function setRepositoryUrl($repositoryUrl = null)
    {
        $this->repositoryUrl = ($repositoryUrl InstanceOf URL)
             ? $repositoryUrl
             : new URL($repositoryUrl);
        $this->repositoryUrl->setName('repositoryUrl');
        return $this;
    }

    /**
     * 
     * @return URL $repositoryUrl
     */
    public function getRepositoryUrl()
    {
        return ($this->repositoryUrl) ? $this->repositoryUrl->getValue() : null;
    }

    /**
     * 
     */
    public function setTemplateUrl($templateUrl = null)
    {
        $this->templateUrl = ($templateUrl InstanceOf URL)
             ? $templateUrl
             : new URL($templateUrl);
        $this->templateUrl->setName('templateUrl');
        return $this;
    }

    /**
     * 
     * @return URL $templateUrl
     */
    public function getTemplateUrl()
    {
        return ($this->templateUrl) ? $this->templateUrl->getValue() : null;
    }
}
