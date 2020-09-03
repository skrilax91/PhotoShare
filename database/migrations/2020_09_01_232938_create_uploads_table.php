<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('titre', 80);
            $table->text('code');
            $table->text('ext');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uploads', function(Blueprint $table) {
			$table->dropForeign('uploads_user_id_foreign');
		});
		Schema::drop('uploads');
    }
}
