<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    // use HasFactory;
    // 어떤 요소에만 접근이 가능한지 지정 가능
    //        protected $fillable = ['title', 'content'];
    // 모든 요소에 접근 가능하게 하는거
    //이상하게 디비 만들때 복수형을 사용해야한다.
     protected $guarded = [];
    // 지랄난 timestamps 이거 꺼야된다.
     public $timestamps = false; 
     //프라이머리 키(pk)도 지정해줘야한다 
     protected $primaryKey = 'board_idx';

}
