<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ReplacementMediaNameList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a Media Set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaSetModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemMediaSetModifyRequest';
    protected $setName;
    protected $mediaNameList;

    public function __construct(
         $setName = '',
         ReplacementMediaNameList $mediaNameList = null
    ) {
        $this->setSetName($setName);
        $this->setMediaNameList($mediaNameList);
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
    public function setSetName($setName = null)
    {
        $this->setName = ($setName InstanceOf MediaSetName)
             ? $setName
             : new MediaSetName($setName);
        $this->setName->setName('setName');
        return $this;
    }

    /**
     * 
     * @return MediaSetName $setName
     */
    public function getSetName()
    {
        return ($this->setName) ? $this->setName->getValue() : null;
    }

    /**
     * 
     */
    public function setMediaNameList(ReplacementMediaNameList $mediaNameList = null)
    {
        $this->mediaNameList = ($mediaNameList InstanceOf ReplacementMediaNameList)
             ? $mediaNameList
             : new ReplacementMediaNameList($mediaNameList);
        $this->mediaNameList->setName('mediaNameList');
        return $this;
    }

    /**
     * 
     * @return ReplacementMediaNameList $mediaNameList
     */
    public function getMediaNameList()
    {
        return $this->mediaNameList;
    }
}
