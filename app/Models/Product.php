<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'category_id',
        'amount',
        'discount',
        'attachments',
        'privacy',
        'comment_privacy',
        'reaction_privacy',
        'reacted_ids',
        'buyer_ids',
        'total_reactions',
        'total_dislikes',
        'total_comments',
        'total_shares',
        'total_views'
    ];
}
