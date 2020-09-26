<?php

class Migration_Create_Users_Table extends CI_Migration
{
	public function up()
	{	  
		$this->dbforge->add_field(
			array(
				'id' => array(
					'type' => 'INT',
					'constraint' => 5,
					'unsigned' => true,
					'auto_increment' => true
				),
				'name' => array(
					'type' => 'VARCHAR',
					'constraint' => '255',
					'null' => false,
				),
				'login' => array(
					'type' => 'VARCHAR',
					'constraint' => '255',
					'null' => false,
				),
				'password' => array(
					'type' => 'VARCHAR',
					'constraint' => '255',
					'null' => false,
				),
			)
		);

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');
	}

	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}
