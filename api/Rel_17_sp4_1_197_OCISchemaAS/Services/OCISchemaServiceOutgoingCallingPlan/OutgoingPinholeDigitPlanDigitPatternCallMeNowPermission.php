<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Indicates whether Call Me Now calls using specified Pinhole digit patterns are permitted.
 */
class OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission extends ComplexType implements ComplexInterface
{
    public    $responseType     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission';
    public    $name             = 'OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission';
    protected $digitPatternName = null;
    protected $permission       = null;

    public function __construct(
         $digitPatternName,
         $permission
    ) {
        $this->setDigitPatternName($digitPatternName);
        $this->setPermission($permission);
    }

    /**
     * @return OutgoingPinholeDigitPlanDigitPatternCallMeNowPermission
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDigitPatternName($digitPatternName = null)
    {
        if (!$digitPatternName) return $this;
        $this->digitPatternName = new SimpleContent($digitPatternName);
        $this->digitPatternName->setName('digitPatternName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDigitPatternName()
    {
        return $this->digitPatternName->getValue();
    }

    /**
     * 
     */
    public function setPermission($permission = null)
    {
        if (!$permission) return $this;
        $this->permission = new SimpleContent($permission);
        $this->permission->setName('permission');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getPermission()
    {
        return $this->permission->getValue();
    }
}
