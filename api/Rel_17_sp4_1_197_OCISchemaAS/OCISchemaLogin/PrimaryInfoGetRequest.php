<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests information about the primary server for high-availability support.
 */
class PrimaryInfoGetRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $isPrivate               = null;
    protected $isAddressInfoRequested  = null;

    public function __construct(
         $isPrivate,
         $isAddressInfoRequested
    ) {
        $this->setIsPrivate($isPrivate);
        $this->setIsAddressInfoRequested($isAddressInfoRequested);
    }

    public function setIsPrivate(xs:boolean $isPrivate = null)
    {
    }

    public function getIsPrivate()
    {
        return (!$this->isPrivate) ?: $this->isPrivate->value();
    }

    public function setIsAddressInfoRequested(xs:boolean $isAddressInfoRequested = null)
    {
    }

    public function getIsAddressInfoRequested()
    {
        return (!$this->isAddressInfoRequested) ?: $this->isAddressInfoRequested->value();
    }
}
