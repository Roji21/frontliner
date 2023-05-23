<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true, //bilangan bernilai positif saja
                'auto_increment' => true,
            ],
            'nama_barang'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'kategori'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '225',
            ],
            'stock' => [
                'type'              => 'VARCHAR',
                'constraint'        => '225',
            ]
        ]);
        $this->forge->addPrimaryKey('id_barang');
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
