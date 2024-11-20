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
            // Check and add `username` only if it does not exist
            if (!Schema::hasColumn('users', 'username')) {
                $table->string('username')->unique()->after('name');
            }

            // Check and add `profile_picture_url` only if it does not exist
            if (!Schema::hasColumn('users', 'profile_picture_url')) {
                $table->string('profile_picture_url')->nullable()->after('username');
            }

            // Check and add `bio` only if it does not exist
            if (!Schema::hasColumn('users', 'bio')) {
                $table->text('bio')->nullable()->after('profile_picture_url');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'username')) {
                $table->dropColumn('username');
            }

            if (Schema::hasColumn('users', 'profile_picture_url')) {
                $table->dropColumn('profile_picture_url');
            }

            if (Schema::hasColumn('users', 'bio')) {
                $table->dropColumn('bio');
            }
        });
    }
};
