<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCIReportingMessageName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemOCIReportingGetMessageNameListRequest.
 */
class SystemOCIReportingGetMessageNameListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOCIReportingGetMessageNameListResponse';
    protected $messageNameStartsWith;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCIReportingGetMessageNameListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMessageNameStartsWith($messageNameStartsWith = null)
    {
        $this->messageNameStartsWith = ($messageNameStartsWith InstanceOf OCIReportingMessageName)
             ? $messageNameStartsWith
             : new OCIReportingMessageName($messageNameStartsWith);
        $this->messageNameStartsWith->setElementName('messageNameStartsWith');
        return $this;
    }

    /**
     * 
     * @return OCIReportingMessageName $messageNameStartsWith
     */
    public function getMessageNameStartsWith()
    {
        return ($this->messageNameStartsWith)
            ? $this->messageNameStartsWith->getElementValue()
            : null;
    }
}
