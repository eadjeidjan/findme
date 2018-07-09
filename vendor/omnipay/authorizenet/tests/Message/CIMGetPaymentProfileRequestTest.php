<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMGetPaymentProfileRequestTest extends TestCase
{
    /** @var CIMGetPaymentProfileRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMGetPaymentProfileRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'customerProfileId' => '28775801',
                'customerPaymentProfileId' => '28775803',
            )
        );
    }

    public function testGetData()
    {
        $data = $this->request->getData();
        $this->assertEquals('28775801', $data->customerProfileId);
        $this->assertEquals('28775803', $data->customerPaymentProfileId);
    }
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMGetPaymentProfileRequestTest extends TestCase
{
    /** @var CIMGetPaymentProfileRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMGetPaymentProfileRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'customerProfileId' => '28775801',
                'customerPaymentProfileId' => '28775803',
            )
        );
    }

    public function testGetData()
    {
        $data = $this->request->getData();
        $this->assertEquals('28775801', $data->customerProfileId);
        $this->assertEquals('28775803', $data->customerPaymentProfileId);
    }
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
}