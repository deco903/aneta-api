<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        if (Schema::hasColumn('users', 'social_id')) //check the column
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('social_id'); //drop it

            });
        }

        Schema::table('users', function (Blueprint $table) {

            $table->string('social_id')->nullable()->after('institute_id');
        });
        // -----------------------------------------------------------------------------
        if (Schema::hasColumn('users', 'social_type')) //check the column
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('social_type'); //drop it

            });
        }

        Schema::table('users', function (Blueprint $table) {

            $table->text('social_type')->nullable()->after('social_id');
        });
        // -----------------------------------------------------------------------------
             // -----------------------------------------------------------------------------
             if (Schema::hasColumn('users', 'password')) //check the column
             {
                 Schema::table('users', function (Blueprint $table)
                 {
                     $table->dropColumn('password'); //drop it
     
                 });
             }
     
             Schema::table('users', function (Blueprint $table) {
     
                 $table->text('password')->nullable()->after('social_type');
             });
             // -----------------------------------------------------------------------------
    }
}
