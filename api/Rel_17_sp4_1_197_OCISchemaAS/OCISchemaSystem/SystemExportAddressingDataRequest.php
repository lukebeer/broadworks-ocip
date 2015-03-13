<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to export Application Server addressing data, such as DNs, extensions, alias and user ids
 *         to a file so they can be uploaded to a Network Server.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemExportAddressingDataRequest extends ComplexType implements ComplexInterface
{
    public    $name     = 'SystemExportAddressingDataRequest';
    protected $fileName = null;

    public function __construct(
         $fileName
    ) {
        $this->setFileName($fileName);
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
    public function setFileName($fileName = null)
    {
        if (!$fileName) return $this;
        $this->fileName = ($fileName InstanceOf FileName)
             ? $fileName
             : new FileName($fileName);
        $this->fileName->setName('fileName');
        return $this;
    }

    /**
     * 
     * @return FileName $fileName
     */
    public function getFileName()
    {
        return $this->fileName->getValue();
    }
}
