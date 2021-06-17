<?php

declare(strict_types=1);

namespace Mhoney\Domain\Entities;

use DateTimeInterface;

final class NewRecord
{
  private string $name;
  private int $amount;
  private string $storeName;
  private DateTimeInterface $date;

  /**
   * Get the value of name
   *
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @param string $name
   *
   * @return self
   */
  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of amount
   *
   * @return int
   */
  public function getAmount(): int
  {
    return $this->amount;
  }

  /**
   * Set the value of amount
   *
   * @param int $amount
   *
   * @return self
   */
  public function setAmount(int $amount): self
  {
    $this->amount = $amount;

    return $this;
  }

  /**
   * Get the value of storeName
   *
   * @return string
   */
  public function getStoreName(): string
  {
    return $this->storeName;
  }

  /**
   * Set the value of storeName
   *
   * @param string $storeName
   *
   * @return self
   */
  public function setStoreName(string $storeName): self
  {
    $this->storeName = $storeName;

    return $this;
  }

  /**
   * Get the value of date
   *
   * @return DateTimeInterface
   */
  public function getDate(): DateTimeInterface
  {
    return $this->date;
  }

  /**
   * Set the value of date
   *
   * @param DateTimeInterface $date
   *
   * @return self
   */
  public function setDate(DateTimeInterface $date): self
  {
    $this->date = $date;

    return $this;
  }
}
