<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\UserPreferredCarrierName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to a UserPreferredCarrierUserGetRequest.
 */
class UserPreferredCarrierUserGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\UserPreferredCarrierUserGetResponse';
    public    $name                 = __CLASS__;
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;


    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function setIntraLataCarrier(UserPreferredCarrierName $intraLataCarrier = null)
    {
        $this->intraLataCarrier = UserPreferredCarrierName $intraLataCarrier;
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function getIntraLataCarrier()
    {
        return (!$this->intraLataCarrier) ?: $this->intraLataCarrier->getValue();
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function setInterLataCarrier(UserPreferredCarrierName $interLataCarrier = null)
    {
        $this->interLataCarrier = UserPreferredCarrierName $interLataCarrier;
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function getInterLataCarrier()
    {
        return (!$this->interLataCarrier) ?: $this->interLataCarrier->getValue();
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function setInternationalCarrier(UserPreferredCarrierName $internationalCarrier = null)
    {
        $this->internationalCarrier = UserPreferredCarrierName $internationalCarrier;
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         The user carrier name is exposed if it was previously configured.
     */
    public function getInternationalCarrier()
    {
        return (!$this->internationalCarrier) ?: $this->internationalCarrier->getValue();
    }
}
