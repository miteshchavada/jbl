<?php



class AdminloginMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AdminloginMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('adminlogin');
		$tMap->setPhpName('Adminlogin');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ADMIN_USER', 'AdminUser', 'string', CreoleTypes::VARCHAR, false, 255);

		$tMap->addColumn('ADMIN_PASS', 'AdminPass', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 