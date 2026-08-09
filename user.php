<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-3-4_hands_on</title>
</head>
<body>
    <h1>ユーザー管理プログラム</h1>

    <?php
      //ユーザーの定義
      class User {
      public string $name;
      public int $age;
      public function __construct(string $name, int $age)
      {
        $this->name = $name;
        $this->age = $age;
      }
      public function introduce(): string
      {return "こんにちは、私の名前は" . $this->name . "です。" . $this->age . "歳です。";}
      }

      $user1 = new User("田中太郎", 25);
      $user2 = new User("佐藤花子", 17);
      $user3 = new User("鈴木一郎", 30);
      ?>

    <h2>自己紹介</h2>
    <?php
      echo $user1->introduce() . "<br>";
      echo $user2->introduce() . "<br>";
      echo $user3->introduce();
    ?>

    <h3>成人判定</h3>
    <?php
      if ($user1->age >= 20) {
        echo $user1->name . "さんは成人です。<br>";
      } else {
        echo $user1->name . "さんは未成年です。<br>";
      }
      if ($user2->age >= 20) {
        echo $user2->name . "さんは成人です。<br>";
      } else {
        echo $user2->name . "さんは未成年です。<br>";
      }
      if ($user3->age >= 20) {
        echo $user3->name . "さんは成人です。<br>";
      } else {
        echo $user3->name . "さんは未成年です。<br>";
      }
    ?>

</body>
</html>