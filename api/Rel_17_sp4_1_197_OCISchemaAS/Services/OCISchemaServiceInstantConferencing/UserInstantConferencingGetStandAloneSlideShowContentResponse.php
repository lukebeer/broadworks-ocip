<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserInstantConferencingGetStandAloneSlideShowContentRequest.
 *         Contains a table with column headings:
 *         "Image Source URL", "Slide End Time", "Slide Number" and "Slide Document Name".
 */
class UserInstantConferencingGetStandAloneSlideShowContentResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $audioURL              = null;
    protected $slideShowContentTable = null;


    /**
     * URL.
     */
    public function setAudioURL($audioURL = null)
    {
        $this->audioURL = ($audioURL InstanceOf URL)
             ? $audioURL
             : new URL($audioURL);
    }

    /**
     * URL.
     */
    public function getAudioURL()
    {
        return (!$this->audioURL) ?: $this->audioURL->getValue();
    }

    /**
     * 
     */
    public function setSlideShowContentTable(core:OCITable $slideShowContentTable = null)
    {
        $this->slideShowContentTable =  $slideShowContentTable;
    }

    /**
     * 
     */
    public function getSlideShowContentTable()
    {
        return (!$this->slideShowContentTable) ?: $this->slideShowContentTable->getValue();
    }
}
