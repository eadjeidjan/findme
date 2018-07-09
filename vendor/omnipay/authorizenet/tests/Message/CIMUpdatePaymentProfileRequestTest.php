<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMUpdatePaymentProfileRequestTest extends TestCase
{
    /** @var CIMUpdatePaymentProfileRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMUpdatePaymentProfileRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'customerProfileId' => '28775801',
                'customerPaymentProfileId' => '26455709',
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
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMUpdatePaymentProfileRequestTest extends TestCase
{
    /** @var CIMUpdatePaymentProfileRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMUpdatePaymentProfileRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'customerProfileId' => '28775801',
                'customerPaymentProfileId' => '26455709',
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
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
}