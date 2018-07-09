<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Create Request to get customer profile
 */
class CIMGetPaymentProfileRequest extends CIMAbstractRequest
{
    protected $requestType = 'getCustomerPaymentProfileRequest';

    public function getData()
    {
        $this->validate('customerProfileId', 'customerPaymentProfileId');

        $data = $this->getBaseData();

        $data->customerProfileId = $this->getCustomerProfileId();
        $data->customerPaymentProfileId = $this->getCustomerPaymentProfileId();

        return $data;
    }

    public function sendData($data)
    {
        $headers = array('Content-Type' => 'text/xml; charset=utf-8');
        $data = $data->saveXml();
        $httpResponse = $this->httpClient->post($this->getEndpoint(), $headers, $data)->send();

        return $this->response = new CIMGetPaymentProfileResponse($this, $httpResponse->getBody());
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Create Request to get customer profile
 */
class CIMGetPaymentProfileRequest extends CIMAbstractRequest
{
    protected $requestType = 'getCustomerPaymentProfileRequest';

    public function getData()
    {
        $this->validate('customerProfileId', 'customerPaymentProfileId');

        $data = $this->getBaseData();

        $data->customerProfileId = $this->getCustomerProfileId();
        $data->customerPaymentProfileId = $this->getCustomerPaymentProfileId();

        return $data;
    }

    public function sendData($data)
    {
        $headers = array('Content-Type' => 'text/xml; charset=utf-8');
        $data = $data->saveXml();
        $httpResponse = $this->httpClient->post($this->getEndpoint(), $headers, $data)->send();

        return $this->response = new CIMGetPaymentProfileResponse($this, $httpResponse->getBody());
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
