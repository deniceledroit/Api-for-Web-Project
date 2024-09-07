<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS `ps_bookings`;
        CREATE PROCEDURE `ps_bookings`()
        BEGIN
        select bookings.id,customers.name,status from bookings join customers on customers.id=bookings.customer_id order by id asc;
        END');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
