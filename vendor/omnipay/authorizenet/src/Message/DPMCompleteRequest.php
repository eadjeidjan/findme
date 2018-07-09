<<<<<<< HEAD
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Common\Exception\InvalidRequestException;

/**
 * Authorize.Net DPM Complete Authorize Request
 */
class DPMCompleteRequest extends SIMCompleteAuthorizeRequest
{
    public function sendData($data)
    {
        return $this->response = new DPMCompleteResponse($this, $data);
    }
}
=======
<?php

namespace Omnipay\AuthorizeNet\Message;

use Omnipay\Common\Exception\InvalidRequestException;

/**
 * Authorize.Net DPM Complete Authorize Request
 */
class DPMCompleteRequest extends SIMCompleteAuthorizeRequest
{
    public function sendData($data)
    {
        return $this->response = new DPMCompleteResponse($this, $data);
    }
}
>>>>>>> 4dfe86f77d39b7998deb2341e5ec33b0208b1611
