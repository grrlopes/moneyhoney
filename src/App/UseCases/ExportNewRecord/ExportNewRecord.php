<?php

declare(strict_types=1);

namespace Mhoney\App\UseCases\ExportNewRecord;

final class ExportNewRecord
{

  public function __construct()
  {
  }

  public function handle(InputBoundaryDTO $data): string
  {
    return $data->getName();
  }
}
