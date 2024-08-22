<?php

declare(strict_types=1);

class Developer implements JsonSerializable
{
	public function __construct(
		private int $id,
		private string $name,
		private int $yearsOfCoding
	) {}

	public function getId(): int
	{
		return $this->id;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getYearsOfCoding(): int
	{
		return $this->yearsOfCoding;
	}

	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
}
