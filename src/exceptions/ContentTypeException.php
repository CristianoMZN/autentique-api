<?php

namespace cmzn\Autentique\exceptions;

use cmzn\Autentique\Enums\ErrorMessagesEnum;

class ContentTypeException extends BaseException
{
    public function __construct()
    {
        parent::__construct(ErrorMessagesEnum::ERR_CONTENT_TYPE, 400);
    }
}
