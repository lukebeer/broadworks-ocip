<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCIReportingMessageName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemOCIReportingGetMessageNameListRequest.
 */
class SystemOCIReportingGetMessageNameListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemOCIReportingGetMessageNameListResponse';
    protected $messageNameStartsWith;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCIReportingGetMessageNameListResponse $response
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
        $this->messageNameStartsWith->setName('messageNameStartsWith');
        return $this;
    }

    /**
     * 
     * @return OCIReportingMessageName $messageNameStartsWith
     */
    public function getMessageNameStartsWith()
    {
        return ($this->messageNameStartsWith) ? $this->messageNameStartsWith->getValue() : null;
    }
}
