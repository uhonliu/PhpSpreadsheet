<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\MathTrig;

class SignTest extends AllSetupTeardown
{
    /**
     * @dataProvider providerSIGN
     *
     * @param mixed $expectedResult
     * @param $value
     */
    public function testSIGN($expectedResult, $value): void
    {
        $this->mightHaveException($expectedResult);
        $sheet = $this->sheet;
        $sheet->setCellValue('A2', 1.3);
        $sheet->setCellValue('A3', 0);
        $sheet->setCellValue('A4', -3.8);
        $sheet->getCell('A1')->setValue("=SIGN($value)");
        $result = $sheet->getCell('A1')->getCalculatedValue();
        self::assertEquals($expectedResult, $result);
    }

    public function providerSIGN()
    {
        return require 'tests/data/Calculation/MathTrig/SIGN.php';
    }
}
