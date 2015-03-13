<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify outgoing Calling Plan originating call permissions for specified digit patterns.
 */
class OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissionsModify extends ComplexType implements ComplexInterface
{
    public    $name                    = 'OutgoingCallingPlanDigitPatternOriginatingDepartmentPermissionsModify';
    protected $departmentKey           = null;
    protected $digitPatternPermissions = null;

    public function __construct(
         $departmentKey,
         $digitPatternPermissions
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setDigitPatternPermissions($digitPatternPermissions);
    }

    /**
     * @return mixed $response
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
     * @return SimpleContent $departmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey->getValue();
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
     * @return SimpleContent $digitPatternPermissions
     */
    public function getDigitPatternPermissions()
    {
        return $this->digitPatternPermissions->getValue();
    }
}
