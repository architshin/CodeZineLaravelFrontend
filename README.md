# CodeZineLaravelFrontend

## 各プロジェクトの起動方法
あらかじめ`.env.example`をファイルごとコピー&ペースとして`.env`ファイルとする。その後、プロジェクトフォルダで以下のコマンドを実行する。
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
なお、サーバは、以下のコマンドでも起動できる。ただし、Windows環境では、pcntlに関連したエラーが表示される場合があるが、問題なく実行できる。
```
% composer run dev
```
