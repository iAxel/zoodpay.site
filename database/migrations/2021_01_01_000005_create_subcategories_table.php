<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

final class CreateSubcategoriesTable extends Migration
{
    /**
     * @var string
     */
    protected string $table = 'subcategories';

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('slug');
            $table->string('title_ru');
            $table->string('title_uz');

            $table->unsignedBigInteger('parent_id');

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::table($this->table, function (Blueprint $table) {
            $table->unique(['slug', 'parent_id']);

            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists($this->table);
    }
}
