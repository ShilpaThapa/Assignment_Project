<?php

use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(JobCategory::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Company::class)->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description');
            $table->string('no_of_vacancies');
            $table->string('job_level');
            $table->string('job_type');
            $table->string('offered_salary');
            $table->dateTime('deadline');
            $table->tinyInteger('status')->comment('0=Pending,1=Approved,2=Rejected');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_posts');
    }
}
