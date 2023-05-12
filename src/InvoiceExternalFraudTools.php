<?php

// The content of this file was automatically generated

namespace ProcessOut;

use ProcessOut\ProcessOut;
use ProcessOut\Networking\Request;

class InvoiceExternalFraudTools implements \JsonSerializable
{

    /**
     * ProcessOut's client
     * @var ProcessOut\ProcessOut
     */
    protected $client;

    /**
     * Forter
     * @var string
     */
    protected $forter;

    /**
     * Signifyd
     * @var string
     */
    protected $signifyd;

    /**
     * InvoiceExternalFraudTools constructor
     * @param ProcessOut\ProcessOut $client
     * @param array|null $prefill
     */
    public function __construct(ProcessOut $client, $prefill = array())
    {
        $this->client = $client;

        $this->fillWithData($prefill);
    }

    
    /**
     * Get Forter
     * Forter
     * @return string
     */
    public function getForter()
    {
        return $this->forter;
    }

    /**
     * Set Forter
     * Forter
     * @param  string $value
     * @return $this
     */
    public function setForter($value)
    {
        $this->forter = $value;
        return $this;
    }
    
    /**
     * Get Signifyd
     * Signifyd
     * @return string
     */
    public function getSignifyd()
    {
        return $this->signifyd;
    }

    /**
     * Set Signifyd
     * Signifyd
     * @param  string $value
     * @return $this
     */
    public function setSignifyd($value)
    {
        $this->signifyd = $value;
        return $this;
    }
    

    /**
     * Fills the current object with the new values pulled from the data
     * @param  array $data
     * @return InvoiceExternalFraudTools
     */
    public function fillWithData($data)
    {
        if(! empty($data['forter']))
            $this->setForter($data['forter']);

        if(! empty($data['signifyd']))
            $this->setSignifyd($data['signifyd']);

        return $this;
    }

    /**
     * Implements the JsonSerializable interface
     * @return object
     */
    public function jsonSerialize() {
        return array(
            "forter" => $this->getForter(),
            "signifyd" => $this->getSignifyd(),
        );
    }

    
}
