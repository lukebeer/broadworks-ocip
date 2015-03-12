<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupDialableCallerIDGetRequest.
 *         The criteria tables column headings are "Active", "Name", "Description", Prefix Digits, Priority.
 */
class GroupDialableCallerIDGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = 'GroupDialableCallerIDGetResponse';
    protected $useGroupCriteria         = null;
    protected $nsScreeningFailurePolicy = null;
    protected $criteriaTable            = null;

    /**
     * @return GroupDialableCallerIDGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseGroupCriteria($useGroupCriteria = null)
    {
        if (!$useGroupCriteria) return $this;
        $this->useGroupCriteria = new PrimitiveType($useGroupCriteria);
        $this->useGroupCriteria->setName('useGroupCriteria');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseGroupCriteria()
    {
        return $this->useGroupCriteria->getValue();
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
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
        if (!$criteriaTable) return $this;
        $this->criteriaTable = $criteriaTable;
        $this->criteriaTable->setName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable->getValue();
    }
}
