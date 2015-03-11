<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Outgoing Calling Plan Call Me Now call permissions for specified digit patterns.
 */
class OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions extends ComplexType implements ComplexInterface
{
    public    $responseType            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions';
    public    $name                    = 'OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions';
    protected $departmentKey           = null;
    protected $departmentName          = null;
    protected $digitPatternPermissions = null;

    public function __construct(
         $departmentKey,
         $departmentName,
         $digitPatternPermissions
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setDepartmentName($departmentName);
        $this->setDigitPatternPermissions($digitPatternPermissions);
    }

    /**
     * @return OutgoingCallingPlanDigitPatternCallMeNowDepartmentPermissions
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDepartmentKey($departmentKey = null)
    {
        if (!$departmentKey) return $this;
        $this->departmentKey = new SimpleContent($departmentKey);
        $this->departmentKey->setName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey->getValue();
    }

    /**
     * 
     */
    public function setDepartmentName($departmentName = null)
    {
        if (!$departmentName) return $this;
        $this->departmentName = new SimpleContent($departmentName);
        $this->departmentName->setName('departmentName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDepartmentName()
    {
        return $this->departmentName->getValue();
    }

    /**
     * 
     */
    public function setDigitPatternPermissions($digitPatternPermissions = null)
    {
        if (!$digitPatternPermissions) return $this;
        $this->digitPatternPermissions = new SimpleContent($digitPatternPermissions);
        $this->digitPatternPermissions->setName('digitPatternPermissions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions->getValue();
    }
}
