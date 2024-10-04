<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class AddStatusToDemandesTable extends Migration
{
    public function up()
    {
        Schema::table('demandes', function (Blueprint $table) {
            $table->string('status')->nullable(); // ou utilise un type approprié
        });
    }

    public function down()
    {
        Schema::table('demandes', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('demandes', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demandes', function (Blueprint $table) {
            //
        });
    }
};
