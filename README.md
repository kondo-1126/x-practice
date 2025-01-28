# x-practice

ADR構造を理解し、参画の足がかりとする。

目標
-   ユーザー一覧画面(データfetchの流れを把握する)
    1. ここで足りないディレクトリを付け足していってください
- 各ユーザーの投稿(postするまでの流れを把握する)
- 各ユーザーの編集・削除(おさらい的な期待値)

- 28日(火)
    - 環境構築が終わっている状態
    - 認証は要らないのでライブラリとかは入れなくてOK(入れたかったら入れてもいい)
    - ADRに合わせてディレクトリ構成を整える
    - 「１」着手
- 29日(水)
    - 「1」のPR出す
    - 「2」着手
    - 他レビュー対応
- 30日(木)
    - 「2」のPR出す
    - 「３」「４」着手
        - その日のうちにPR出すくらいまでは終わらせる
    - 他レビュー対応
- 31日(金)
    - レビュー対応
    - 他、様子見しつつ知識の補填

# ディレクトリ構造（一例）
app/
├── Actions/
│   └── UserIndexAction.php
├── Domains/
│   └── User/
│       ├── Models/
│       │   └── User.php
│       └── Repositories/
│           └── UserRepository.php
├── Responders/
│   └── UserIndexResponder.php
├── Http/
│   └── Controllers/
│       └── UserController.php
