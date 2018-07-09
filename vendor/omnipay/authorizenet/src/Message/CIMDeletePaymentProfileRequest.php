<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Request to delete a customer payment profile for an existing customer and existing payment profile.
 */
class CIMDeletePaymentProfileRequest extends CIMAbstractRequest
{
    protected $requestType = 'deleteCustomerPaymentProfileRequest';

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

        return $this->response = new CIMDeletePaymentProfileResponse($this, $httpResponse->getBody());
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Request to delete a customer payment profile for an existing customer and existing payment profile.
 */
class CIMDeletePaymentProfileRequest extends CIMAbstractRequest
{
    protected $requestType = 'deleteCustomerPaymentProfileRequest';

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

        return $this->response = new CIMDeletePaymentProfileResponse($this, $httpResponse->getBody());
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
