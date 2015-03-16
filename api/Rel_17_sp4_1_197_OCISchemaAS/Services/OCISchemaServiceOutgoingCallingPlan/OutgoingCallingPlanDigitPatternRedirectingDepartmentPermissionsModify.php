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
 * Modify outgoing Calling Plan redirecting call permissions for specified digit patterns.
 */
class OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify extends ComplexType implements ComplexInterface
{
    public    $name = 'OutgoingCallingPlanDigitPatternRedirectingDepartmentPermissionsModify';
    protected $departmentKey;
    protected $digitPatternPermissions;

    public function __construct(
         $departmentKey = '',
         $digitPatternPermissions = ''
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
        return ($this->departmentKey) ? $this->departmentKey->getValue() : null;
    }

    /**
     * 
     */
    public function setDigitPatternPermissions($digitPatternPermissions = null)
    {
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
        return ($this->digitPatternPermissions) ? $this->digitPatternPermissions->getValue() : null;
    }
}
