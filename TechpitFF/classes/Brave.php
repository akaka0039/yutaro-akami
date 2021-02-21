<?php

// 継承したことによりBrave クラスは Human クラスが持っていたプロパティ・メソッドを使うことができる
class Brave extends Human{

  // プロパティも上書き可能
  const MAX_HITPOINT = 120;
  public $hitPoint = self::MAX_HITPOINT;
  public $attackPoint = 30;

   private static $instance;

  private function __construct($name) // コンストラクタはprivateに
    {
        parent::__construct($name, $this->hitPoint, $this->attackPoint);
    }

    public static function getInstance($name)
    {
        if (empty(self::$instance)) {
            self::$instance = new Brave($name);
        }

        return self::$instance;
    }

  // オーバーライド
  // 継承先でプロパティ・メソッドを上書きすること（同じメソッド名にしないといけない）
  // 今回はHuman.phpのdoAttackメソッドを上書きしたことになる
  public function doAttack($enemies)
  {

    // 自分のHPが0以上か、敵のHPが0以上かなどをチェックするメソッドを用意。
        if (!$this->isEnableAttack($enemies)) {
            return false;
        }
        // ターゲットの決定
        $enemy = $this->selectTarget($enemies);

    // 乱数の発生
    if (rand(1, 3) === 1) {
      // スキルの発動
      echo "『" .$this->getName() . "』のスキルが発動した！\n";
      echo "『ぜんりょくぎり』！！\n";
      echo $enemy->getName() . " に " . $this->attackPoint * 1.5 . " のダメージ！\n";
      $enemy->tookDamage($this->attackPoint * 1.5);
    } else {
      // 以下：：継承先でメソッドを上書きしても継承元クラスのメソッドを呼ぶことができる
      parent::doAttack($enemies);
    }
    return true;
  }

}

?>
