<?php

namespace Omnipay\Vindicia\Message;

class PayPalPurchaseResponse extends Response
{
    /**
     * Is the response successful?
     * Throws an exception if there's no code.
     *
     * @return boolean
     * @throws \Omnipay\Common\Exception\InvalidResponseException
     */
    public function isSuccessful()
    {
        return parent::isSuccessful() && $this->getRedirectUrl();
    }

    /**
     * Is the response a redirect?
     * Throws an exception if there's no code.
     * Successful PayPal purchase responses are always redirects.
     *
     * @return boolean
     * @throws \Omnipay\Common\Exception\InvalidResponseException
     */
    public function isRedirect()
    {
        return $this->isSuccessful();
    }

    public function getRedirectUrl()
    {
        $transaction = $this->getTransaction();
        if (isset($transaction)) {
            return $transaction->getPayPalRedirectUrl();
        }
        return null;
    }
}
