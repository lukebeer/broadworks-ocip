<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\FileRepositoryProtocolFTP;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 */
class FileRepositoryProtocolFTP extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\FileRepositoryProtocolFTP';
    public    $name       = 'FileRepositoryProtocolFTP';
    protected $ftpPassive = null;
    protected $netAddress = null;

    public function __construct(
         $ftpPassive,
         $netAddress
    ) {
        $this->setFtpPassive($ftpPassive);
        $this->setNetAddress($netAddress);
    }

    /**
     * @return FileRepositoryProtocolFTP
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFtpPassive($ftpPassive = null)
    {
        if (!$ftpPassive) return $this;
        $this->ftpPassive = new SimpleContent($ftpPassive);
        $this->ftpPassive->setName('ftpPassive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getFtpPassive()
    {
        return $this->ftpPassive->getValue();
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        if (!$netAddress) return $this;
        $this->netAddress = new SimpleContent($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getNetAddress()
    {
        return $this->netAddress->getValue();
    }
}
