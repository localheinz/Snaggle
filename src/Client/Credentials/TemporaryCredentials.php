<?php
namespace Snaggle\Client\Credentials;

/**
 * @author Matt Frost <mfrost.design@gmail.com>
 * @copyright Copyright (c) 2014
 * @package Snaggle
 * @subpackage Client
 * @license http://opensource.org/licenses/MIT MIT
 *
 * Representation of the temporary credentials that are sent back after the
 * authorization step is complete on the third party site
 */
class TemporaryCredentials
{
    /**
     * The OAuth token that is provided after authorization
     *
     * @var string $identifier
     */
    private $identifier = '';

    /**
     * The OAuth Verifier that is sent back confirming authorization
     *
     * @var string $verifier
     */
    private $verifier = '';

    /**
     * @param string $identifier
     * @param string $verifier
     */
    public function __construct($identifier = '', $verifier = '')
    {
        $this->identifier = $identifier;
        $this->verifier = $verifier;
    }

    /**
     * Method to set the temporary token
     *
     * @deprecated Will be removed with 1.0.0, set values with constructor instead.
     *
     * @param string $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Method to retrieve the temporary token
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Method to set the verifier
     *
     * @deprecated Will be removed with 1.0.0, set values with constructor instead.
     *
     * @param string $verifier
     */
    public function setVerifier($verifier)
    {
        $this->verifier = $verifier;
    }

    /**
     * Method to return the verifier value
     *
     * @return string
     */
    public function getVerifier()
    {
        return $this->verifier;
    }
}
