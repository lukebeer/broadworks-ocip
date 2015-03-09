<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDialableCallerIDGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderDialableCallerIDGetRequest.
 *         The criteria table?s column headings are ?Active?, "Name", "Description", ?Prefix Digits?, and ?Priority?.
 */
class ServiceProviderDialableCallerIDGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $useServiceProviderCriteria = null;
    protected $nsScreeningFailurePolicy   = null;
    protected $criteriaTable              = null;

    /**
     * @return ServiceProviderDialableCallerIDGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseServiceProviderCriteria($useServiceProviderCriteria = null)
    {
        $this->useServiceProviderCriteria = (boolean) $useServiceProviderCriteria;
    }

    /**
     * 
     */
    public function getUseServiceProviderCriteria()
    {
        return (!$this->useServiceProviderCriteria) ?: $this->useServiceProviderCriteria;
    }

    /**
     * How the incomming caller ID should be displayed in the case of an NS screening failure
     */
    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy = null)
    {
        $this->nsScreeningFailurePolicy = ($nsScreeningFailurePolicy InstanceOf NsScreeningFailurePolicy)
             ? $nsScreeningFailurePolicy
             : new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
    }

    /**
     * How the incomming caller ID should be displayed in the case of an NS screening failure
     */
    public function getNsScreeningFailurePolicy()
    {
        return (!$this->nsScreeningFailurePolicy) ?: $this->nsScreeningFailurePolicy->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        $this->criteriaTable =  $criteriaTable;
    }

    /**
     * 
     */
    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->getValue();
    }
}
