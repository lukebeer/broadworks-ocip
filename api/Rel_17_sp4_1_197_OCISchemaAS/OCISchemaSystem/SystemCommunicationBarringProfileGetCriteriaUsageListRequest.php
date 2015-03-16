<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCriteriaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of Communication Barring Proifles that uses a specific
 *         Communication Barring criteria.
 *         The response is either a SystemCommunicationBarringProfileGetCriteriaUsageListResponse
 *         or an ErrorResponse.
 */
class SystemCommunicationBarringProfileGetCriteriaUsageListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringProfileGetCriteriaUsageListResponse';
    public    $name = 'SystemCommunicationBarringProfileGetCriteriaUsageListRequest';
    protected $name;

    public function __construct(
         $name = ''
    ) {
        $this->setName($name);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringProfileGetCriteriaUsageListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CommunicationBarringCriteriaName)
             ? $name
             : new CommunicationBarringCriteriaName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCriteriaName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }
}
