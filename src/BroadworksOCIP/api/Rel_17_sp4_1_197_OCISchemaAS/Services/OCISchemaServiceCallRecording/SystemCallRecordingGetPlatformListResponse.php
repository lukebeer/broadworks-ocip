<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\CallRecordingPlatformName;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallRecordingGetPlatformListRequest.
 *          Contains the default system Call Recording platform and a table with columns headings "Name", "Net Address", "Port", "Transport Type", "Media Stream", "Description" of Call Recording platforms.  The system default recording platform also appears in the table with the other platforms.
 */
class SystemCallRecordingGetPlatformListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallRecordingGetPlatformListResponse';
    protected $systemDefault;
    protected $callRecordingPlatformTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\SystemCallRecordingGetPlatformListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSystemDefault($systemDefault = null)
    {
        $this->systemDefault = ($systemDefault InstanceOf CallRecordingPlatformName)
             ? $systemDefault
             : new CallRecordingPlatformName($systemDefault);
        $this->systemDefault->setElementName('systemDefault');
        return $this;
    }

    /**
     * 
     * @return CallRecordingPlatformName $systemDefault
     */
    public function getSystemDefault()
    {
        return ($this->systemDefault)
            ? $this->systemDefault->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallRecordingPlatformTable(TableType $callRecordingPlatformTable = null)
    {
        $this->callRecordingPlatformTable = $callRecordingPlatformTable;
        $this->callRecordingPlatformTable->setElementName('callRecordingPlatformTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCallRecordingPlatformTable()
    {
        return $this->callRecordingPlatformTable;
    }
}
