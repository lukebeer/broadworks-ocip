<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserInstantConferencingGetStandAloneSlideShowContentRequest.
 *         Contains a table with column headings:
 *         "Image Source URL", "Slide End Time", "Slide Number" and "Slide Document Name".
 */
class UserInstantConferencingGetStandAloneSlideShowContentResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $audioURL,
             $slideShowContentTable
    ) {
        $this->audioURL              = new URL($audioURL);
        $this->slideShowContentTable = $slideShowContentTable;
        $this->args                  = func_get_args();
    }

    public function setAudioURL($audioURL)
    {
        $audioURL and $this->audioURL = new URL($audioURL);
    }

    public function getAudioURL()
    {
        return (!$this->audioURL) ?: $this->audioURL->value();
    }

    public function setSlideShowContentTable($slideShowContentTable)
    {
        $slideShowContentTable and $this->slideShowContentTable = new core:OCITable($slideShowContentTable);
    }

    public function getSlideShowContentTable()
    {
        return (!$this->slideShowContentTable) ?: $this->slideShowContentTable->value();
    }
}
