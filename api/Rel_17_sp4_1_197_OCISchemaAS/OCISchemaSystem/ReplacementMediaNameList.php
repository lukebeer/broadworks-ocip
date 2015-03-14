<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of media that replaces a previously configured list.
 */
class ReplacementMediaNameList extends ComplexType implements ComplexInterface
{
    public    $name      = 'ReplacementMediaNameList';
    protected $mediaName = null;

    public function __construct(
         $mediaName = null
    ) {
        $this->setMediaName($mediaName);
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
    public function setMediaName($mediaName = null)
    {
        if (!$mediaName) return $this;
        $this->mediaName = new SimpleContent($mediaName);
        $this->mediaName->setName('mediaName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $mediaName
     */
    public function getMediaName()
    {
        return $this->mediaName->getValue();
    }
}
