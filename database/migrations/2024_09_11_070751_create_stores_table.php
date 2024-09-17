<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('app_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('plan_type')->nullable();
            $table->timestamps();
        });

        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_id')->unique()->nullable();
            $table->unsignedBigInteger('app_plan_id')->nullable();
            $table->unsignedBigInteger('app_status_id')->nullable();
            $table->string('plan_type')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->text('logo')->nullable();
            $table->text('image')->nullable();
            $table->string('color_code')->nullable();
            $table->string('pincode')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->text('address')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('drug_license_no')->nullable();
            $table->string('pan')->nullable();
            $table->string('aadhar');
            $table->string('bank_name')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_statuses');
        Schema::dropIfExists('app_plans');
        Schema::dropIfExists('stores');

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
        });
    }
}
