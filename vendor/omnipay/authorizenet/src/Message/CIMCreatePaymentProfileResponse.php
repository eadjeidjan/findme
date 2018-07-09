<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net CIM Create payment profile Response
 */
class CIMCreatePaymentProfileResponse extends CIMAbstractResponse
{
    protected $responseType = 'createCustomerPaymentProfileResponse';

    public function getCustomerProfileId()
    {
        if ($this->isSuccessful()) {
            return $this->request->getCustomerProfileId();
        }
        return null;
    }

    public function getCustomerPaymentProfileId()
    {
        if ($this->isSuccessful()) {
            return $this->data['customerPaymentProfileId'];
        }
        return null;
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net CIM Create payment profile Response
 */
class CIMCreatePaymentProfileResponse extends CIMAbstractResponse
{
    protected $responseType = 'createCustomerPaymentProfileResponse';

    public function getCustomerProfileId()
    {
        if ($this->isSuccessful()) {
            return $this->request->getCustomerProfileId();
        }
        return null;
    }

    public function getCustomerPaymentProfileId()
    {
        if ($this->isSuccessful()) {
            return $this->data['customerPaymentProfileId'];
        }
        return null;
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
