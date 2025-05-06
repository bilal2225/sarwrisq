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
        Schema::create('mureeds', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name')->nullable(); // Name
            $table->string('father_name')->nullable(); // Father Name
            $table->string('cnic')->nullable(); // CNIC#
            $table->date('date_of_birth')->nullable(); // Date of Birth
            $table->string('city')->nullable(); // City
            $table->string('street')->nullable(); // Street#
            $table->string('district')->nullable(); // District
            $table->string('tehsil')->nullable(); // Tehsil
            $table->string('country')->nullable(); // Country
            $table->string('province')->nullable(); // Province
            $table->string('contact_primary')->nullable(); // Contact (Primary)
            $table->string('contact_secondary')->nullable(); // Contact (Secondary)
            $table->string('qualification')->nullable(); // Qualification
            $table->string('blood_group')->nullable(); // Blood Group
            $table->string('job_business')->nullable(); // Job/Business
            $table->text('nature_of_job_business')->nullable(); // Nature of Job/Business
            $table->date('bayat_date')->nullable(); // Bayat Date
            $table->string('email')->nullable(); // Email
            $table->string('department_tdf')->nullable(); // Working in which department of TDF
            $table->string('bayat_by')->nullable(); // Bayat By
            $table->string('filled_by')->nullable(); // Filled By
            $table->string('signature')->nullable(); // Signature
            $table->string('picture')->nullable(); // picture
            $table->timestamps(); // Created_at and Updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mureeds');
    }
};