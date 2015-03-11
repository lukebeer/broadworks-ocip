<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                       = 'ServiceProviderDialableCallerIDGetResponse';
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
        if (!$useServiceProviderCriteria) return $this;
        $this->useServiceProviderCriteria = new PrimitiveType($useServiceProviderCriteria);
        $this->useServiceProviderCriteria->setName('useServiceProviderCriteria');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseServiceProviderCriteria()
    {
        return $this->useServiceProviderCriteria->getValue();
    }

    /**
     * 
     */
    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy = null)
    {
        if (!$nsScreeningFailurePolicy) return $this;
        $this->nsScreeningFailurePolicy = ($nsScreeningFailurePolicy InstanceOf NsScreeningFailurePolicy)
             ? $nsScreeningFailurePolicy
             : new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->nsScreeningFailurePolicy->setName('nsScreeningFailurePolicy');
        return $this;
    }

    /**
     * 
     * @return NsScreeningFailurePolicy
     */
    public function getNsScreeningFailurePolicy()
    {
        return $this->nsScreeningFailurePolicy->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        if (!$criteriaTable) return $this;
        $this->criteriaTable->setName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable->getValue();
    }
}
