<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('note_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('note_id', 'note_tag_note_idx');
            $table->index('tag_id', 'note_tag_tag_idx');

            $table->foreign('note_id', 'note_tag_note_idx')->on('notes')->references('id');
            $table->foreign('tag_id', 'note_tag_tag_idx')->on('tags')->references('id');

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
        Schema::dropIfExists('note_tags');
    }
}
