<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for a particular fully specified Virtual On-Net Call Type Name.
 */
class SearchCriteriaExactVirtualOnNetCallTypeName extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactVirtualOnNetCallTypeName';
    protected $virtualOnNetCallTypeName;

    public function __construct(
         $virtualOnNetCallTypeName = ''
    ) {
        $this->setVirtualOnNetCallTypeName($virtualOnNetCallTypeName);
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
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName = null)
    {
        $this->virtualOnNetCallTypeName = ($virtualOnNetCallTypeName InstanceOf VirtualOnNetCallTypeName)
             ? $virtualOnNetCallTypeName
             : new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
        $this->virtualOnNetCallTypeName->setElementName('virtualOnNetCallTypeName');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetCallTypeName $virtualOnNetCallTypeName
     */
    public function getVirtualOnNetCallTypeName()
    {
        return ($this->virtualOnNetCallTypeName)
            ? $this->virtualOnNetCallTypeName->getElementValue()
            : null;
    }
}
