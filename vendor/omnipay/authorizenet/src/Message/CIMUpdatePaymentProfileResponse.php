<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net CIM Create payment profile Response
 */
class CIMUpdatePaymentProfileResponse extends CIMCreatePaymentProfileResponse
{
    protected $responseType = 'updateCustomerPaymentProfileResponse';

    public function getCustomerPaymentProfileId()
    {
        return $this->request->getCustomerPaymentProfileId();
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net CIM Create payment profile Response
 */
class CIMUpdatePaymentProfileResponse extends CIMCreatePaymentProfileResponse
{
    protected $responseType = 'updateCustomerPaymentProfileResponse';

    public function getCustomerPaymentProfileId()
    {
        return $this->request->getCustomerPaymentProfileId();
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
