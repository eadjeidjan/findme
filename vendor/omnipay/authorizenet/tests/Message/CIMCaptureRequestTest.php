<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMCaptureRequestTest extends TestCase
{
    /** @var CIMCaptureRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMCaptureRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'transactionReference' => '{"approvalCode":"V7DO8Q","transId":"2220001612","cardReference":"{\"customerProfileId\":\"28972085\",\"customerPaymentProfileId\":\"26317841\",\"customerShippingAddressId\":\"27057151\"}"}',
                'amount' => 12.00,
                'description' => 'Test capture only transaction'
            )
        );
    }

    public function testGetData()
    {
        $data = $this->request->getData();
        $this->assertEquals('12.00', $data->transactionRequest->amount);
        $this->assertEquals('2220001612', $data->transactionRequest->refTransId);
    }
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMCaptureRequestTest extends TestCase
{
    /** @var CIMCaptureRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMCaptureRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'transactionReference' => '{"approvalCode":"V7DO8Q","transId":"2220001612","cardReference":"{\"customerProfileId\":\"28972085\",\"customerPaymentProfileId\":\"26317841\",\"customerShippingAddressId\":\"27057151\"}"}',
                'amount' => 12.00,
                'description' => 'Test capture only transaction'
            )
        );
    }

    public function testGetData()
    {
        $data = $this->request->getData();
        $this->assertEquals('12.00', $data->transactionRequest->amount);
        $this->assertEquals('2220001612', $data->transactionRequest->refTransId);
    }
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
}