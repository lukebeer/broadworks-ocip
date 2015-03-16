<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldDelayMilliseconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Music On Hold.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMusicOnHoldModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMusicOnHoldModifyRequest';
    protected $delayMilliseconds;

    public function __construct(
         $delayMilliseconds = null
    ) {
        $this->setDelayMilliseconds($delayMilliseconds);
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
    public function setDelayMilliseconds($delayMilliseconds = null)
    {
        $this->delayMilliseconds = ($delayMilliseconds InstanceOf MusicOnHoldDelayMilliseconds)
             ? $delayMilliseconds
             : new MusicOnHoldDelayMilliseconds($delayMilliseconds);
        $this->delayMilliseconds->setElementName('delayMilliseconds');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldDelayMilliseconds $delayMilliseconds
     */
    public function getDelayMilliseconds()
    {
        return ($this->delayMilliseconds)
            ? $this->delayMilliseconds->getElementValue()
            : null;
    }
}
