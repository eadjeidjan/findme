<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMCreatePaymentProfileRequestTest extends TestCase
{
    /** @var CIMCreatePaymentProfileRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMCreatePaymentProfileRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'customerProfileId' => '28775801',
                'email' => "kaylee@serenity.com",
                'card' => $this->getValidCard(),
                'developerMode' => true
            )
        );
    }

    public function testGetData()
    {
        $data = $this->request->getData();

        $card = $this->getValidCard();
        $this->assertEquals('28775801', $data->customerProfileId);
        $this->assertEquals($card['number'], $data->paymentProfile->payment->creditCard->cardNumber);
        $this->assertEquals('testMode', $data->validationMode);
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMCreatePaymentProfileRequestTest extends TestCase
{
    /** @var CIMCreatePaymentProfileRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMCreatePaymentProfileRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'customerProfileId' => '28775801',
                'email' => "kaylee@serenity.com",
                'card' => $this->getValidCard(),
                'developerMode' => true
            )
        );
    }

    public function testGetData()
    {
        $data = $this->request->getData();

        $card = $this->getValidCard();
        $this->assertEquals('28775801', $data->customerProfileId);
        $this->assertEquals($card['number'], $data->paymentProfile->payment->creditCard->cardNumber);
        $this->assertEquals('testMode', $data->validationMode);
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
