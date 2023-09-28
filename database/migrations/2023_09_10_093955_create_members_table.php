<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('branch', 50);
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('full_name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('status');
            $table->string('address_member');
            $table->string('telephone');
            $table->string('fax');
            $table->string('mobile_phone');
            $table->string('education_mode');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('production_capacity');
            $table->string('stockist_or_branch_address');
            $table->string('brand');
            $table->string('number_of_permanent_emp');
            $table->string('income_per_month');
            $table->string('number_of_outsourcing_emp');
            $table->string('start_price_range');
            $table->string('end_price_range');
            $table->integer('min_order');
            $table->string('gender_category');
            $table->string('age_category');
            $table->string('market');
            $table->string('business_type');
            $table->string('product_type');
            $table->string('product_character');
            $table->string('recomendation_1');
            $table->string('recomendation_2');
            $table->text('img_ktp')->nullable();
            $table->text('img_photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
