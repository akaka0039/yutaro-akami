<?php

namespace App;

// Eloquent、と出てきたらモデル
// データベースとモデルを関連付ける機能

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{

  // 不正なリクエストへの対策
  protected $fillable = [
    'title',
    'body',
  ];
  // $thisは、Articleクラスのインスタンス自身を指している
  //belongsToはリレーション（IE図で用いられるデータベースの関係をER図に表したもの）
  // belongsToメソッドの引数には関係するモデルの名前を文字列で渡してくれるため、$article->user->nameとコードを書くことで
  // 記事モデルから紐付くユーザーモデルのプロパティ(ここではname)にアクセスできるようになる。

  //メソッドの戻り値の「型（BelongsTo）」で宣言している
  public function user(): BelongsTo
  {
    return $this->belongsTo('App\User');
  }

  public function likes(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'likes')->withTimestamps();
    }

    public function isLikedBy(?User $user): bool
    {
        return $user
            ? (bool)$this->likes->where('id', $user->id)->count()
            : false;
    }


    public function getCountLikesAttribute(): int
   {
       return $this->likes->count();
   }

   // 記事モデルとタグモデルの関係は多対多
   public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
