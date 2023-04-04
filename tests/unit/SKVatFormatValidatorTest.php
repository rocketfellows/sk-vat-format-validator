<?php

namespace rocketfellows\SKVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\SKVatFormatValidator\SKVatFormatValidator;

class SKVatFormatValidatorTest extends TestCase
{
    /**
     * @var SKVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new SKVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'SK0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SK1111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SK9999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SK1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'SK00000000000',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'SK000000000',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'SK12345678900',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'SK123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Sk1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'sK1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'sk1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678900',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
