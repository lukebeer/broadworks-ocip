<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 */
class FileRepositoryProtocolFTP extends ComplexType implements ComplexInterface
{
    public    $elementName = 'FileRepositoryProtocolFTP';
    protected $ftpPassive;
    protected $netAddress;

    public function __construct(
         $ftpPassive = '',
         $netAddress = ''
    ) {
        $this->setFtpPassive($ftpPassive);
        $this->setNetAddress($netAddress);
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
    public function setFtpPassive($ftpPassive = null)
    {
        $this->ftpPassive = new SimpleContent($ftpPassive);
        $this->ftpPassive->setElementName('ftpPassive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $ftpPassive
     */
    public function getFtpPassive()
    {
        return ($this->ftpPassive)
            ? $this->ftpPassive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = new SimpleContent($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }
}
