<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest.
 *         The response contains a table of all Profiles that use the specific Digit Pattern Criteria. The column headings are "Name" and "Description"
 */
class ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $profileTable = null;

    /**
     * @return ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setProfileTable(core:OCITable $profileTable = null)
    {
        $this->profileTable =  $profileTable;
    }

    /**
     * 
     */
    public function getProfileTable()
    {
        return (!$this->profileTable) ?: $this->profileTable->getValue();
    }
}
