<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for a particular fully specified custom contact directory.
 */
class SearchCriteriaExactCustomContactDirectory extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactCustomContactDirectory';
    protected $customContactDirectoryName;

    public function __construct(
         $customContactDirectoryName = ''
    ) {
        $this->setCustomContactDirectoryName($customContactDirectoryName);
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
    public function setCustomContactDirectoryName($customContactDirectoryName = null)
    {
        $this->customContactDirectoryName = ($customContactDirectoryName InstanceOf CustomContactDirectoryName)
             ? $customContactDirectoryName
             : new CustomContactDirectoryName($customContactDirectoryName);
        $this->customContactDirectoryName->setElementName('customContactDirectoryName');
        return $this;
    }

    /**
     * 
     * @return CustomContactDirectoryName $customContactDirectoryName
     */
    public function getCustomContactDirectoryName()
    {
        return ($this->customContactDirectoryName)
            ? $this->customContactDirectoryName->getElementValue()
            : null;
    }
}
