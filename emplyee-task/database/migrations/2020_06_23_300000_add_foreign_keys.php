<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table -> foreign('employee_id', 'task_employee_fk')
                    -> references('id')
                    -> on('employees')
                    -> onDelete('cascade');
        });
        Schema::table('employee_location', function (Blueprint $table) {
            $table -> foreign('employee_id', 'employee_location_employee_fk')
                    -> references('id')
                    -> on('employees')
                    -> onDelete('cascade');

            $table -> foreign('location_id', 'employee_location_location_fk')
                    -> references('id')
                    -> on('locations')
                    -> onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table -> dropForeign('task_employee_fk');

        });
        Schema::table('employee_location', function (Blueprint $table) {
            $table -> dropForeign('employee_location_employee_fk');
            $table -> dropForeign('employee_location_location_fk');

        });

    }
}
