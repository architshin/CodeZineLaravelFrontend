# CodeZineLaravelFrontend

## 各プロジェクトの起動方法
あらかじめ`.env.example`をファイルごとコピー&ペースとして`.env`ファイルとする。その後、プロジェクトフォルダで以下のコマンドを実行する。なお、Windows環境では、ccomposerコマンドを実行した際に、pcntlに関連したエラーが表示される場合がありますが、問題なく実行できます。
```
% composer install
% php artisan key:generate
% php artisan migrate
```
migrateコマンドで「Would you like to create it?」と質問されたら、yesを選択の上、リターンキーを押下する。さらに、以下のコマンドも実行する。
```
% npm install
% npm run build
```

コマンドの実行が終了したら、以下のコマンドでサーバを起動する。
```
% php artisan serve
```
