<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemTwoStageDialingGetDnListRequest.
 *           The Two Stage Dialing DN List table column
 *           headings are: "Phone Number",  "Description".
 */
class SystemTwoStageDialingGetDnListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'SystemTwoStageDialingGetDnListResponse';
    protected $phoneNumberTable = null;

    /**
     * @return SystemTwoStageDialingGetDnListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPhoneNumberTable(core:OCITable $phoneNumberTable = null)
    {
        if (!$phoneNumberTable) return $this;
        $this->phoneNumberTable->setName('phoneNumberTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable->getValue();
    }
}
