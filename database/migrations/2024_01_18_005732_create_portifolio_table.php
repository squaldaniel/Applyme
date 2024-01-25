<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public $table = 'portifolio';
    public function up(): void
    {
        $sql = 'create table '.$this->table.' (
            id int unsigned auto_increment,
            primary key (id),
            user_id bigint unsigned not null,
            foreign key (user_id) references users(id),
            port_name varchar(30) not null,
            port_photo text not null,
            port_description text not null
        ) engine=innodb charset=utf8mb4';
        DB::select($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->table);
    }
};
