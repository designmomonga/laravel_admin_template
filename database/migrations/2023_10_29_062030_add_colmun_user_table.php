<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->after('id');
            $table->string('first_name')->after('last_name');
            $table->string('last_name_kana')->after('first_name');
            $table->string('first_name_kana')->after('last_name_kana');
            $table->string('password_raw')->after('password');
            $table->unsignedBigInteger('role_id')->default(0)->after('password_raw');
            $table->unsignedBigInteger('user_status_id')->default(0)->after('role_id');
            $table->softDeletes()->after('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name_kana');
            $table->dropColumn('first_name_kana');
            $table->dropColumn('password_raw');
            $table->dropColumn('role_id');
            $table->dropColumn('user_status_id');
            $table->dropColumn('deleted_at');
        });
    }
};
