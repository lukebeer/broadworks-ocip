<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupPolycomPhoneServicesGetRequest.
 */
class GroupPolycomPhoneServicesGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupPolycomPhoneServicesGetResponse';
    protected $includeGroupCommonPhoneListInDirectory;
    protected $includeGroupCustomContactDirectoryInDirectory;
    protected $groupCustomContactDirectory;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices\GroupPolycomPhoneServicesGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory = null)
    {
        $this->includeGroupCommonPhoneListInDirectory = new PrimitiveType($includeGroupCommonPhoneListInDirectory);
        $this->includeGroupCommonPhoneListInDirectory->setElementName('includeGroupCommonPhoneListInDirectory');
        return $this;
    }

    /**
     * 
     * @return boolean $includeGroupCommonPhoneListInDirectory
     */
    public function getIncludeGroupCommonPhoneListInDirectory()
    {
        return ($this->includeGroupCommonPhoneListInDirectory)
            ? $this->includeGroupCommonPhoneListInDirectory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory = null)
    {
        $this->includeGroupCustomContactDirectoryInDirectory = new PrimitiveType($includeGroupCustomContactDirectoryInDirectory);
        $this->includeGroupCustomContactDirectoryInDirectory->setElementName('includeGroupCustomContactDirectoryInDirectory');
        return $this;
    }

    /**
     * 
     * @return boolean $includeGroupCustomContactDirectoryInDirectory
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return ($this->includeGroupCustomContactDirectoryInDirectory)
            ? $this->includeGroupCustomContactDirectoryInDirectory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory = null)
    {
        $this->groupCustomContactDirectory = ($groupCustomContactDirectory InstanceOf CustomContactDirectoryName)
             ? $groupCustomContactDirectory
             : new CustomContactDirectoryName($groupCustomContactDirectory);
        $this->groupCustomContactDirectory->setElementName('groupCustomContactDirectory');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $groupCustomContactDirectory
     */
    public function getGroupCustomContactDirectory()
    {
        return ($this->groupCustomContactDirectory)
            ? $this->groupCustomContactDirectory->getElementValue()
            : null;
    }
}
