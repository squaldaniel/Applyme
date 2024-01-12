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
    public $table;
    public function up(): void
    {
        $sql = 'create table '.$this->table.'(
            id int unsigned auto_increment primary key,
            resume_id int,
            foreign key(resume_id) references resume (id),
            cursename varchar(50),
            curse_start date,
            curse_end date,
            show boolean default true
            ) engine=innodb charset=utf8mb4;';
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
