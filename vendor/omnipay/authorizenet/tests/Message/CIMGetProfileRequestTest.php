<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMGetProfileRequestTest extends TestCase
{
    /** @var CIMGetProfileRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMGetProfileRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'customerProfileId' => '28775801',
            )
        );
    }

    public function testGetData()
    {
        $data = $this->request->getData();
        $this->assertEquals('28775801', $data->customerProfileId);
    }
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMGetProfileRequestTest extends TestCase
{
    /** @var CIMGetProfileRequest */
    protected $request;

    public function setUp()
    {
        $this->request = new CIMGetProfileRequest($this->getHttpClient(), $this->getHttpRequest());
        $this->request->initialize(
            array(
                'customerProfileId' => '28775801',
            )
        );
    }

    public function testGetData()
    {
        $data = $this->request->getData();
        $this->assertEquals('28775801', $data->customerProfileId);
    }
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
}