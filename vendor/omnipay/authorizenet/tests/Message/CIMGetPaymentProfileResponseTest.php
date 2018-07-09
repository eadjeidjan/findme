<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMGetPaymentProfileResponseTest extends TestCase
{
    /**
     * @expectedException Omnipay\Common\Exception\InvalidResponseException
     */
    public function testConstructEmpty()
    {
        new CIMGetProfileResponse($this->getMockRequest(), '');
    }

    public function testGetMatchingPaymentProfileId()
    {
        $httpResponse = $this->getMockHttpResponse('CIMGetPaymentProfileSuccess.txt');
        $mockRequest = \Mockery::mock('\Omnipay\Common\Message\RequestInterface');
        $mockRequest->shouldReceive('getCustomerProfileId')->andReturn('28972085');
        $response = new CIMGetPaymentProfileResponse($mockRequest, $httpResponse->getBody());

        $this->assertEquals('{"customerProfileId":"28972085","customerPaymentProfileId":"26485433"}', $response->getCardReference());
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Tests\TestCase;

class CIMGetPaymentProfileResponseTest extends TestCase
{
    /**
     * @expectedException Omnipay\Common\Exception\InvalidResponseException
     */
    public function testConstructEmpty()
    {
        new CIMGetProfileResponse($this->getMockRequest(), '');
    }

    public function testGetMatchingPaymentProfileId()
    {
        $httpResponse = $this->getMockHttpResponse('CIMGetPaymentProfileSuccess.txt');
        $mockRequest = \Mockery::mock('\Omnipay\Common\Message\RequestInterface');
        $mockRequest->shouldReceive('getCustomerProfileId')->andReturn('28972085');
        $response = new CIMGetPaymentProfileResponse($mockRequest, $httpResponse->getBody());

        $this->assertEquals('{"customerProfileId":"28972085","customerPaymentProfileId":"26485433"}', $response->getCardReference());
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
