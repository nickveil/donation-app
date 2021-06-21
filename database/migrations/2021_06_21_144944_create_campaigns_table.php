<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->foreignId('assigned_to');
            $table->string('earmark',255)->nullable();
            $table->boolean('isActive');
            $table->decimal('current_donations', 10, 2);
            $table->decimal('goal', 10, 2);
            $table->date('campaign_start');
            $table->date('campaign_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
