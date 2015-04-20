<?php

	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateTable extends Migration {

		/**
		* Run the migrations.
		*
		* @return void
		*/
		public function up()
		{
			/*Schema::create('authors', function($table)
			{
			$table->increments('id');
			$table->string('name');
			$table->string('discription');
			$table->string('avatar');
			$table->timestamps();
			});*/
			/*	Schema::create('acticles', function($table)
			{
			$table->increments('id');
			$table->string('id_author');
			$table->string('title');
			$table->string('content');
			$table->string('related');
			$table->timestamps();
			});*/
			//	Schema::create('banners', function($table)
			//				{
			//					$table->increments('id');
			//					$table->string('link');
			//					$table->timestamps();
			//			});
			/*	Schema::create('questions', function($table)
			{
			$table->increments('id');
			$table->string('id_user');
			$table->string('type');
			$table->string('question');
			$table->string('answer');
			$table->string('status')->default(0);
			$table->timestamps();
			});
			}*/
			Schema::create('applies', function($table)
				{
					$table->increments('id');

					$table->string('job_id');
					$table->string('file_contents');
					$table->string('application_subject');
					$table->string('cover_letter');
					$table->string('email');
					$table->string('password');
					$table->string('first_name');
					$table->string('last_name');
					$table->string('lang');

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
			//
		}

	}
