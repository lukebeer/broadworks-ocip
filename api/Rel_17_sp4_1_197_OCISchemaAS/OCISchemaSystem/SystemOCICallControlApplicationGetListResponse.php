<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemOCICallControlApplicationGetListRequest. The table columns are:
 *         "Application Id", "Enabled System Wide", "Description" "Notification Timeout Seconds" and "Max Event Channels Per Set".
 */
class SystemOCICallControlApplicationGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name     = 'SystemOCICallControlApplicationGetListResponse';
    protected $appTable = null;

    /**
     * @return SystemOCICallControlApplicationGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAppTable(core:OCITable $appTable = null)
    {
        if (!$appTable) return $this;
        $this->appTable->setName('appTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getAppTable()
    {
        return $this->appTable->getValue();
    }
}
