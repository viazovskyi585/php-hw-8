<?php
namespace Core\Orm;

class Select
{
	private DBConnector $connector;
	private string $tableName;
	private array $fields;
	public function __construct()
	{
		$this->connector = new DBConnector();
	}

	public function execute(): ?array
	{
		$q = $this->buildQuery();
		return [];
	}

	private function buildQuery(): string
	{
		return "";
	}

	private function getFieldsString(): string
	{
		if (count($this->fields) > 0) {
			
		}
	}

	public function setTableName($name): void
	{
		$this->tableName = $name;
	}

	public function setFields($fields = []): void
	{
		$this->fields = $fields;
	}
}
