<?php

namespace Omnipay\AuthorizeNet;

use Omnipay\Common\AbstractGateway;

/**
 * Authorize.Net SIM Class
 */
class SIMGateway extends AbstractGateway
{
    public function getName()
    {
        return 'Authorize.Net SIM';
    }

    public function getDefaultParameters()
    {
        return array(
            'apiLoginId' => '',
            'transactionKey' => '',
            'testMode' => false,
            'developerMode' => false,
            'hashSecret' => '',
            'liveEndpoint' => 'https://secure2.authorize.net/gateway/transact.dll',
            'developerEndpoint' => 'https://test.authorize.net/gateway/transact.dll',
        );
    }

    public function getApiLoginId()
    {
        return $this->getParameter('apiLoginId');
    }

    public function setApiLoginId($value)
    {
        return $this->setParameter('apiLoginId', $value);
    }

    public function getTransactionKey()
    {
        return $this->getParameter('transactionKey');
    }

    public function setTransactionKey($value)
    {
        return $this->setParameter('transactionKey', $value);
    }

    public function getDeveloperMode()
    {
        return $this->getParameter('developerMode');
    }

    public function setDeveloperMode($value)
    {
        return $this->setParameter('developerMode', $value);
    }

    public function getHashSecret()
    {
        return $this->getParameter('hashSecret');
    }

    public function setHashSecret($value)
    {
        return $this->setParameter('hashSecret', $value);
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\AuthorizeNet\Message\SIMAuthorizeRequest', $parameters);
    }

    public function completeAuthorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\AuthorizeNet\Message\SIMCompleteAuthorizeRequest', $parameters);
    }

    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\AuthorizeNet\Message\SIMCaptureRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\AuthorizeNet\Message\SIMPurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->completeAuthorize($parameters);
    }

    public function void(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\AuthorizeNet\Message\SIMVoidRequest', $parameters);
    }
}
