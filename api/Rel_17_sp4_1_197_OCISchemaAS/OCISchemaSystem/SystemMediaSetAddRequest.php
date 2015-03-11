<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a Media Set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaSetAddRequest extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemMediaSetAddRequest';
    protected $setName   = null;
    protected $mediaName = null;

    public function __construct(
         $setName,
         $mediaName = null
    ) {
        $this->setSetName($setName);
        $this->setMediaName($mediaName);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSetName($setName = null)
    {
        if (!$setName) return $this;
        $this->setName = ($setName InstanceOf MediaSetName)
             ? $setName
             : new MediaSetName($setName);
        $this->setName->setName('setName');
        return $this;
    }

    /**
     * 
     * @return MediaSetName
     */
    public function getSetName()
    {
        return $this->setName->getValue();
    }

    /**
     * 
     */
    public function setMediaName($mediaName = null)
    {
        if (!$mediaName) return $this;
        $this->mediaName = ($mediaName InstanceOf MediaName)
             ? $mediaName
             : new MediaName($mediaName);
        $this->mediaName->setName('mediaName');
        return $this;
    }

    /**
     * 
     * @return MediaName
     */
    public function getMediaName()
    {
        return $this->mediaName->getValue();
    }
}
