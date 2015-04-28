<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Used in queries to restrict the set of result rows when making a request that can result in
 *         a large dataset. The client specifies the starting row and the number of rows requested. 
 *         The server only provides those rows in results, if available.
 */
class ResponsePagingControl extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ResponsePagingControl';
    protected $responseStartIndex;
    protected $responsePageSize;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setResponseStartIndex($responseStartIndex = null)
    {
        $this->responseStartIndex = new SimpleContent($responseStartIndex);
        $this->responseStartIndex->setElementName('responseStartIndex');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $responseStartIndex
     */
    public function getResponseStartIndex()
    {
        return ($this->responseStartIndex)
            ? $this->responseStartIndex->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResponsePageSize($responsePageSize = null)
    {
        $this->responsePageSize = new SimpleContent($responsePageSize);
        $this->responsePageSize->setElementName('responsePageSize');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $responsePageSize
     */
    public function getResponsePageSize()
    {
        return ($this->responsePageSize)
            ? $this->responsePageSize->getElementValue()
            : null;
    }
}
