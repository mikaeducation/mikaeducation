<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPopupQuestion extends Model
{
    protected $table = 'user_popup_question';

    protected $fillable = ['module_id', 'user_id', 'popup_question_id', 'video_id', 'is_triggered', 'is_correct'];
}
