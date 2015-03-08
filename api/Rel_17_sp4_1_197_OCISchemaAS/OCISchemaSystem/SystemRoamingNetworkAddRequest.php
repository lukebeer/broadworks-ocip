<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkTranslationIndex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a Roaming Network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoamingNetworkAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $mscAddress              = null;
    protected $networkTranslationIndex = null;

    public function __construct(
         $mscAddress,
         $networkTranslationIndex = null
    ) {
        $this->setMscAddress($mscAddress);
        $this->setNetworkTranslationIndex($networkTranslationIndex);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setMscAddress($mscAddress = null)
    {
        $this->mscAddress = ($mscAddress InstanceOf DN)
             ? $mscAddress
             : new DN($mscAddress);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getMscAddress()
    {
        return (!$this->mscAddress) ?: $this->mscAddress->getValue();
    }

    /**
     * Network Translation Index for selecting Enterprise and Public dial plans.
     */
    public function setNetworkTranslationIndex($networkTranslationIndex = null)
    {
        $this->networkTranslationIndex = ($networkTranslationIndex InstanceOf NetworkTranslationIndex)
             ? $networkTranslationIndex
             : new NetworkTranslationIndex($networkTranslationIndex);
    }

    /**
     * Network Translation Index for selecting Enterprise and Public dial plans.
     */
    public function getNetworkTranslationIndex()
    {
        return (!$this->networkTranslationIndex) ?: $this->networkTranslationIndex->getValue();
    }
}
