<?php

namespace Omnipay\Vindicia\Message;

class CreatePayPalSubscriptionResponse extends PayPalPurchaseResponse
{
    /**
     * @return null|string
     */
    public function getRedirectUrl()
    {
        if (isset($this->data->authStatus->payPalStatus)) {
            return $this->data->authStatus->payPalStatus->redirectUrl;
        }
        return null;
    }
}
