<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net SIM Void Request
 */
class SIMVoidRequest extends SIMAuthorizeRequest
{
    protected $action = 'VOID';

    public function getData()
    {
        $this->validate('transactionReference');

        $data = $this->getBaseData();
        $data['x_trans_id'] = $this->getTransactionReference();

        return $data;
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net SIM Void Request
 */
class SIMVoidRequest extends SIMAuthorizeRequest
{
    protected $action = 'VOID';

    public function getData()
    {
        $this->validate('transactionReference');

        $data = $this->getBaseData();
        $data['x_trans_id'] = $this->getTransactionReference();

        return $data;
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
