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
 * Response to SystemOCIReportingACLListGetRequest.
 *         Contains a table with one row per access control list entry.
 *         The table columns are "Net Address", "Description" and "Restrict Messages".
 */
class SystemOCIReportingGetACLListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemOCIReportingGetACLListResponse';
    protected $ociReportingACLTable = null;

    /**
     * @return SystemOCIReportingGetACLListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOciReportingACLTable(core:OCITable $ociReportingACLTable = null)
    {
        if (!$ociReportingACLTable) return $this;
        $this->ociReportingACLTable->setName('ociReportingACLTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getOciReportingACLTable()
    {
        return $this->ociReportingACLTable->getValue();
    }
}
