<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeUsernamePrimaryKey extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus primary key yang lama jika ada (misalnya 'id')
            // $table->dropPrimary();

            // Jadikan kolom 'username' sebagai primary key
            $table->primary('username');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus primary key dari 'username'
            // $table->dropPrimary();

            // Tambahkan kembali primary key ke 'username'
            $table->primary('username');
        });
    }
};
