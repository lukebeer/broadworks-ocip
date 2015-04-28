<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 */
class FileRepositoryProtocolFTP16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'FileRepositoryProtocolFTP16';
    protected $ftpPassive;
    protected $netAddress;
    protected $ftpRemoteVerification;

    public function __construct(
         $ftpPassive = '',
         $netAddress = '',
         $ftpRemoteVerification = ''
    ) {
        $this->setFtpPassive($ftpPassive);
        $this->setNetAddress($netAddress);
        $this->setFtpRemoteVerification($ftpRemoteVerification);
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

    /**
     * 
     */
    public function setFtpRemoteVerification($ftpRemoteVerification = null)
    {
        $this->ftpRemoteVerification = new SimpleContent($ftpRemoteVerification);
        $this->ftpRemoteVerification->setElementName('ftpRemoteVerification');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $ftpRemoteVerification
     */
    public function getFtpRemoteVerification()
    {
        return ($this->ftpRemoteVerification)
            ? $this->ftpRemoteVerification->getElementValue()
            : null;
    }
}
