<?php
namespace Paranoia\Processor\Posnet;

class CancelResponseProcessor extends BaseResponseProcessor
{
    public function process($rawResponse)
    {
        return $this->processCommonResponse($rawResponse);
    }
}
