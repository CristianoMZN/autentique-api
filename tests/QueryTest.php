<?php

namespace cmzn\Autentique\tests;

use cmzn\Autentique\tests\_Base;

use cmzn\Autentique\Utils\Query;
use cmzn\Autentique\Enums\ResourcesEnum;

class QueryTest extends _Base
{
    public function testFileIsNotFound()
    {
        // Arrange
        $fileName = "file-not-found";
        $query = new Query(ResourcesEnum::DOCUMENTS);

        // Assert
        $this->expectException(\Exception::class);
        $this->expectExceptionCode(404);
        $this->expectExceptionMessage("File '$fileName' is not found");

        // Act
        $query->query($fileName);
    }
}
