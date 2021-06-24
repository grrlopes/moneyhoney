<?php

use Mhoney\App\UseCases\ExportDeleteRecord\ExportDeleteRecord;
use Mhoney\Infra\Repositories\Postgresql\DbRepository;
use PHPUnit\Framework\TestCase;

/**
 * @testdox Delete records
 */
class DeleteRecordTest extends TestCase
{
  public function testDelRecord(): void
  {
    $delRecordRepository = new DbRepository();
    $delRecord = new ExportDeleteRecord($delRecordRepository);

    $result = $delRecord->handler("4eafb-3abed-11aee");
    $this->assertEquals($result, "Record has been removed!");
  }
}
