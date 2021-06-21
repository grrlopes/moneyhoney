<?php

use Mhoney\App\UseCases\ExportNewRecord\ExportNewRecord;
use Mhoney\App\UseCases\ExportNewRecord\InputBoundaryDTO;
use Mhoney\Infra\Repositories\Postgresql\DbRepository;
use PHPUnit\Framework\TestCase;

/**
 * @testdox Add new record
 */
class NewRecordTest extends TestCase
{
  public function testNewRecord()
  {
    $newRecordRepository = new DbRepository();
    $newRecord = new ExportNewRecord($newRecordRepository);
    $input = new InputBoundaryDTO(
      "Coffin",
      "5.20",
      "graveyard"
    );
    $result = $newRecord->handler($input);
    $this->assertJsonStringEqualsJsonString(
      $result,
      json_encode(["message" => 'New record has been created!'])
    );
  }
}
