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
 * Used in queries to restrict the set of result rows when making a request that can result in
 *         a large dataset. The client specifies the starting row and the number of rows requested. 
 *         The server only provides those rows in results, if available.
 */
class ResponsePagingControl extends ComplexType implements ComplexInterface
{
    public    $name = 'ResponsePagingControl';
    protected $responseStartIndex;
    protected $responsePageSize;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl $response
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
        $this->responseStartIndex->setName('responseStartIndex');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $responseStartIndex
     */
    public function getResponseStartIndex()
    {
        return ($this->responseStartIndex) ? $this->responseStartIndex->getValue() : null;
    }

    /**
     * 
     */
    public function setResponsePageSize($responsePageSize = null)
    {
        $this->responsePageSize = new SimpleContent($responsePageSize);
        $this->responsePageSize->setName('responsePageSize');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $responsePageSize
     */
    public function getResponsePageSize()
    {
        return ($this->responsePageSize) ? $this->responsePageSize->getValue() : null;
    }
}
