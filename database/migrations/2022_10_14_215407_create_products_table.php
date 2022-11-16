<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->double('amount')->default(0);
            $table->double('discount')->default(0);
            $table->json('attachments')->default(new Expression('(JSON_ARRAY())'));
            $table->unsignedTinyInteger('privacy')->default(1)->comment('1=public, 2=follower, 3=only-me');
            $table->unsignedTinyInteger('comment_privacy')->default(1)->comment('1=public, 2=follower, 3=only-me');
            $table->unsignedTinyInteger('reaction_privacy')->default(1)->comment('1=public, 2=follower, 3=only-me');
            $table->mediumText('reacted_ids')->nullable();
            $table->mediumText('buyer_ids')->nullable();
            $table->unsignedInteger('total_reactions')->default(0);
            $table->unsignedInteger('total_dislikes')->default(0);
            $table->unsignedInteger('total_comments')->default(0);
            $table->unsignedInteger('total_shares')->default(0);
            $table->unsignedInteger('total_views')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
};
