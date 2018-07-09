<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net Capture Request
 */
class SIMCaptureRequest extends SIMAbstractRequest
{
    protected $action = 'PRIOR_AUTH_CAPTURE';

    public function getData()
    {
        $this->validate('amount', 'transactionReference');

        $data = $this->getBaseData();
        $data['x_amount'] = $this->getAmount();
        $data['x_trans_id'] = $this->getTransactionReference();

        return $data;
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net Capture Request
 */
class SIMCaptureRequest extends SIMAbstractRequest
{
    protected $action = 'PRIOR_AUTH_CAPTURE';

    public function getData()
    {
        $this->validate('amount', 'transactionReference');

        $data = $this->getBaseData();
        $data['x_amount'] = $this->getAmount();
        $data['x_trans_id'] = $this->getTransactionReference();

        return $data;
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
