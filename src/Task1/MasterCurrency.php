<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

abstract class MasterCurrency implements Currency
{

	protected $name = '';

	protected $logoUrl = '';

	private $dailyPrice = 0;

	public function __construct($dailyPrice) {

		$this->dailyPrice = $dailyPrice;

	}

	public function getName(): string  {

		return $this->name;

	}

	public function getDailyPrice(): float {

		return $this->dailyPrice;

	}

	public function getLogoUrl(): string {

		return $this->logoUrl;

	}

}