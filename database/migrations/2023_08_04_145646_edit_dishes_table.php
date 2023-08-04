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
        Schema::table('dishes', function (Blueprint $table) {
            
            $table->unsignedBigInteger('user_id')->after('preview');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dishes', function (Blueprint $table) {
            
            $table->dropForeign('dishes_user_id_foreign');
            // удаление индекса
            $table->dropIndex('dishes_user_id_foreign');
            // удаление столбца
            $table->dropColumn('user_id');
        });
    }
};
