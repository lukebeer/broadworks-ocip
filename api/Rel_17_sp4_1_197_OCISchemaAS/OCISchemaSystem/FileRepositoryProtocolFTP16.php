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
 * Attributes of the FTP protocol when the file repository interface is using FTP.
 */
class FileRepositoryProtocolFTP16 extends ComplexType implements ComplexInterface
{
    public    $name = 'FileRepositoryProtocolFTP16';
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
        $this->ftpPassive->setName('ftpPassive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $ftpPassive
     */
    public function getFtpPassive()
    {
        return ($this->ftpPassive) ? $this->ftpPassive->getValue() : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = new SimpleContent($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress) ? $this->netAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setFtpRemoteVerification($ftpRemoteVerification = null)
    {
        $this->ftpRemoteVerification = new SimpleContent($ftpRemoteVerification);
        $this->ftpRemoteVerification->setName('ftpRemoteVerification');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $ftpRemoteVerification
     */
    public function getFtpRemoteVerification()
    {
        return ($this->ftpRemoteVerification) ? $this->ftpRemoteVerification->getValue() : null;
    }
}
