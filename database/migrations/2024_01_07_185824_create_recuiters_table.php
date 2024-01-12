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
    public $table = 'recruiters';
    public function up(): void
    {

        $sql = 'create table '.$this->table.'(
            id int unsigned auto_increment primary key,
            email varchar(50) unique,
            namerecruiter varchar(30),
            surname varchar(70),
            phone varchar(20),
            active boolean default true
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
