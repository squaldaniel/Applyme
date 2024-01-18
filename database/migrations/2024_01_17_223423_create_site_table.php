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
    public $table = 'sites';

    public function up(): void
    {
        $sql = 'create table '.$this->table.'(
            id int unsigned auto_increment,
            primary key (id),
            sitename varchar(50) not null,
            sitelink text not null,
            descriptions text
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
