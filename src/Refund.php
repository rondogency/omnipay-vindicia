<?php

namespace Omnipay\Vindicia;

use Omnipay\Common\Helper;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Generic representation of a refund object returned by a gateway.
 * Hopefully this can be added to omnipay-common one day.
 */
class Refund
{
    /**
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected $parameters;

    /**
     * Create a new refund with the specified parameters
     *
     * @param array $parameters An array of parameters to set on the new object
     */
    public function __construct($parameters = array())
    {
        $this->initialize($parameters);
    }

    /**
     * Initialize this refund with the specified parameters
     *
     * @param array $parameters An array of parameters to set on this object
     * @return static
     */
    public function initialize($parameters = array())
    {
        $this->parameters = new ParameterBag;

        Helper::initialize($this, $parameters);

        return $this;
    }

    public function getParameters()
    {
        return $this->parameters->all();
    }

    protected function getParameter($key)
    {
        return $this->parameters->get($key);
    }

    protected function setParameter($key, $value)
    {
        $this->parameters->set($key, $value);

        return $this;
    }

    /**
     * Get the refund id
     *
     * @return string
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /**
     * Set the refund id
     *
     * @param string $value
     * @return static
     */
    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }

    /**
     * Get the refund reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->getParameter('reference');
    }

    /**
     * Set the refund reference
     *
     * @param string $value
     * @return static
     */
    public function setReference($value)
    {
        return $this->setParameter('reference', $value);
    }

    /**
     * Get the currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->getParameter('currency');
    }

    /**
     * Set the currency
     *
     * @param string $value
     * @return static
     */
    public function setCurrency($value)
    {
        return $this->setParameter('currency', $value);
    }

    /**
     * Get the monetary amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    /**
     * Set the monetary amount
     *
     * @param string $value
     * @return static
     */
    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }

    /**
     * Get the note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->getParameter('note');
    }

    /**
     * Set the note
     *
     * @param string $value
     * @return static
     */
    public function setNote($value)
    {
        return $this->setParameter('note', $value);
    }

    /**
     * Get the time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->getParameter('time');
    }

    /**
     * Set the time
     *
     * @param string $value
     * @return static
     */
    public function setTime($value)
    {
        return $this->setParameter('time', $value);
    }

    /**
     * Get the transaction
     *
     * @return Transaction
     */
    public function getTransaction()
    {
        return $this->getParameter('transaction');
    }

    /**
     * Set the transaction
     *
     * @param Transaction $value
     * @return static
     */
    public function setTransaction($value)
    {
        return $this->setParameter('transaction', $value);
    }

    /**
     * Get the transaction id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->getParameter('transactionId');
    }

    /**
     * Set the transaction id
     *
     * @param string $value
     * @return static
     */
    public function setTransactionId($value)
    {
        return $this->setParameter('transactionId', $value);
    }

    /**
     * Get the transaction reference
     *
     * @return string
     */
    public function getTransactionReference()
    {
        return $this->getParameter('transactionReference');
    }

    /**
     * Set the transaction reference
     *
     * @param string $value
     * @return static
     */
    public function setTransactionReference($value)
    {
        return $this->setParameter('transactionReference', $value);
    }

    /**
     * Get the items
     *
     * @return VindiciaRefundItemBag
     */
    public function getItems()
    {
        return $this->getParameter('items');
    }

    /**
     * Set the items
     *
     * @param array $items
     * @return static
     */
    public function setItems($items)
    {
        return $this->setParameter('items', $items);
    }

    /**
     * A list of attributes
     *
     * @return AttributeBag|null
     */
    public function getAttributes()
    {
        return $this->getParameter('attributes');
    }

    /**
     * Set the attributes in this order
     *
     * @param array $attributes
     * @return static
     */
    public function setAttributes($attributes)
    {
        return $this->setParameter('attributes', $attributes);
    }
}