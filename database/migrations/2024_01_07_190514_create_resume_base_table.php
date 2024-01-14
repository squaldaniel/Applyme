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

    public $table = 'resume_base';
    public function up(): void
    {
        $sql = 'create table '.$this->table.'(
            id int auto_increment primary key,
            nameresume varchar(30),
            aboutme longtext not null,
            photo text not null,
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
