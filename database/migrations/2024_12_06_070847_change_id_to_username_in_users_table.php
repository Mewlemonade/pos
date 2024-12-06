<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeIdToUsernameInUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Ubah kolom 'id' menjadi 'username' dengan tipe VARCHAR
            $table->string('username')->nullable()->after('id'); // Tambahkan kolom 'username'
        });

        // Salin data dari 'id' ke 'username'
        \DB::statement('UPDATE users SET username = id');

        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom 'id'
            $table->dropColumn('id');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Tambahkan kembali kolom 'id' sebagai INTEGER
            $table->integer('id')->autoIncrement()->first();
        });

        // Salin data dari 'username' ke 'id'
        \DB::statement('UPDATE users SET id = username');

        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom 'username'
            $table->dropColumn('username');
        });
    }
};
