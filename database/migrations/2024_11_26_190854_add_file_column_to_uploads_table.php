<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('uploads', function (Blueprint $table) {
            // Add the 'file' column
            $table->string('file')->nullable()->after('file'); // Adjust 'after' to place the column correctly
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('uploads', function (Blueprint $table) {
            // Drop the 'file' column if it exists
            $table->dropColumn('file');
        });
    }
};
