<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type')->constrained('account_types');
            $table->foreignId('parent')->nullable()->constrained('main_accounts');
            $table->string('code');
            $table->string('name');
            $table->string('group', 6)->nullable();
            $table->foreignId('currency')->constrained('currencies');
            $table->decimal('initial_balance', 15, 2)->nullable();
            $table->date('effective_date')->nullable();
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
        Schema::dropIfExists('account_lists');
    }
}
