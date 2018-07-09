<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net AIM Void Request
 */
class AIMVoidRequest extends AIMAbstractRequest
{
    protected $action = 'voidTransaction';

    public function getData()
    {
        $this->validate('transactionReference');

        $data = $this->getBaseData();
        $data->transactionRequest->refTransId = $this->getTransactionReference()->getTransId();
        $this->addTransactionSettings($data);

        return $data;
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net AIM Void Request
 */
class AIMVoidRequest extends AIMAbstractRequest
{
    protected $action = 'voidTransaction';

    public function getData()
    {
        $this->validate('transactionReference');

        $data = $this->getBaseData();
        $data->transactionRequest->refTransId = $this->getTransactionReference()->getTransId();
        $this->addTransactionSettings($data);

        return $data;
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
