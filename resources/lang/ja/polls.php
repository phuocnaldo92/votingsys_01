<?php

return [

/*------------------------------------------------------------
*                  ADMIN - POLL
*------------------------------------------------------------*/
    'title' => '投票',
    'head' => [
        'create' => '作成',
        'index' => '投票一覧',
        'edit' => '投票編集',
    ],
    'label' => [
        'step_1' => '情報',
        'full_name' => '名前',
        'email' => 'メール',
        'chatwork' => 'チャットワークID',
        'title' => 'タイトル',
        'description' => '説明',
        'location' => '場所',
        'time_close' => '投票終了時間',
        'type' => '種類',
        'created_at' => '投票作成の日時',
        'status' => 'ステータス',
        'single_choice' => '単一回答',
        'multiple_choice' => '複数回答',
        'opening' => '投票開始',
        'closed' => '投票終了',
        'poll_opening' => '<span class="label label-success">実施中</span>',
        'poll_closed' => '<span class="label label-danger">終了</span>',
        'step_2' => '選択肢',
        'option' => '回答',
        'option_image' => '画像/イメージ',
        'step_3' => '投票設定',
        'setting' => [
            'required' => '投票には必須',
            'required_email' => 'メールを入力してください',
            'required_name' => '名前を入力してください',
            'required_name_and_email' => '名前とメールは入力必須',
            'hide_result' => '投票結果を非表示',
            'custom_link' => 'リンクを編集',
            'set_limit' => '投票の最大数を設定',
            'set_password' => 'パスワードの設定',
            'show_password' => 'パスワードを表示',
            'password_poll' => '投票のパスワード: ',
            'on' => 'ON',
            'off' => 'OFF',
            'is_set_ip' => 'PC、パソコン等1台は1回だけ投票することができます。',
            'allow_new_option' => 'Allow voters to add new answers',
            'not_same_email' => 'Not the same email when vote',
            'allow_edit_vote_of_poll' => 'Allow edit vote of poll',
        ],
        'step_4' => '投票者',
        'invite' => '特定のメール宛に投票参加招待のメールを送信する場合は下記枠に入力してください',
        'search' => '投票を検索します',
        'search_all' => 'すべて',
        'no_data' => '該当するデータはありません',
        'input_date' => 'Only type date',
    ],
    'label_for' => [
        'full_name' => '名前',
        'email' => 'メール',
        'chatwork' => 'チャットワークID',
        'title' => 'タイトル',
        'description' => '説明',
        'location' => '場所',
        'time_close' => '時間',
        'type' => 'スタイル',
        'status' => 'ステータス',
        'opening' => '実施中',
        'closed' => '終了',
        'option' => 'オプション',
        'option_image' => '画像/イメージ',
        'setting' => [
            'required_email' => 'メールが入力必須にする',
            'hide_result' => '投票結果を非表示',
            'custom_link' => '招待リンクを設定',
            'set_limit' => '選択肢数を設定',
            'set_password' => '投票のパスワードを設定',
            'show_password' => 'パスワードを表示',
            'on' => 'ON',
            'off' => 'OFF',
        ],
        'single_choice' => '単一回答',
        'multiple_choice' => '複数回答',
        'invite' => '招待',
        'add_picture_option' => 'Add Picture For Option',
    ],
    'placeholder' => [
        'full_name' => '名前',
        'email' => 'メールアドレス',
        'chatwork' => 'チャットワークID',
        'title' => 'タイトル',
        'description' => 'この投票の説明を入力します',
        'time_close' => '終了日時を選択してください',
        'location' => '場所',
        'number_add' => '回答数',
        'number_limit' => '最大回答数',
        'password_poll' => '投票のパスワードを入力します。',
        'option' => 'オプション',
        'email_participant' => '投票者のメールアドレス',
        'comment' => 'コメント',
        'enter_name' => '名前',
        'token_link' => 'トークンを入力してください',
    ],
    'button' => [
        'search_poll' => '検索',
        'reset_search' => 'リセット',
        'create_poll' => '作成',
        'change_poll_infor' => '情報の変更',
        'change_poll_option' => 'オプションを変更',
        'change_poll_setting' => '設定の変更',
        'back' => '戻る',
        'remove' => '削除',
        'save_info' => '情報を保存',
        'save_option' => 'オプションを保存',
        'save_setting' => '設定を保存',
        'continue' => '次へ',
        'previous' => '戻る',
        'finish' => '終了',
        'administration' => '管理',
        'edit_back' => '戻る',
        'okay' => 'Okay',
        'cancel' => 'Cancel',
        'upload' => 'Upload',
        'delete' => 'Delete',
        'add' => 'Add',
    ],
    'message' => [
        'create_success' => '作成できました',
        'create_fail' => 'エラーで作成できませんでした',
        'upload_image_fail' => '写真をアップロードできません',
        'send_mail_fail' => '電子メールを送信することができません',
        'confirm_delete' => '削除します。よろしいですか？',
        'confirm_delete_option' => 'このオプションを削除すると、該当する回答すべては削除されます。よろしいですか？',
        'link_exists' => 'リンクは既にシステムに存在します。新しいリンクを選択してください。',
        'link_valid' => 'このリンクを使用できます',
        'submit_form' => '情報が保存されました。',
        'not_found_polls' => '該当する投票は見つかれません',
        'update_poll_info_success' => '投票情報が正常に更新されました',
        'update_poll_info_fail' => '異常で更新処理できませんでした',
        'update_option_success' => '選択肢を更新されました',
        'update_option_fail' => '異常で更新処理できませんでした',
        'update_setting_success' => '設定変更が更新されました',
        'update_setting_fail' => '異常で更新処理できませんでした',
        'delete_poll_fail' => '投票を削除できました',
        'delete_poll_success' => '異常で削除処理できませんでした',
        'email_exists' => 'メールアドレスは既に存在しています',
        'email_valid' => '使用可能なメールアドレスです',
        'no_setting' => 'すべての設定は、この調査のためにそこに設定されていません',
        'no_poll_create' => '作成された投票はまだありません',
        'no_poll_participant' => 'あなたの投票にはまだ参加者がいません.',
        'no_poll_close' => '終了している投票がありません',
    ],
    'validation' => [
        'name' => [
            'required' => '名前は入力必須です',
            'max' => '名前は' . config('settings.length_poll.name') . ' 文字まで入力してください',
        ],
        'email' => [
            'required' => 'メールアドレスは入力必須です',
            'max' => 'メールアドレス' . config('settings.length_poll.email') . ' 文字まで入力してください',
            'email' => 'メールアドレスは正しくありません!'
        ],
        'title' => [
            'required' => 'タイトルは入力必須です',
            'max' => 'タイトルは' . config('settings.length_poll.title') . ' 文字まで入力してください',
        ],
        'description' => [
            'max' => '説明は最大' . config('settings.length_poll.description') . ' 文字まで入力してください',
        ],
        'type' => [
            'required' => '投票の種類を一つ選んでください',
        ],
        'option' => [
            'option' => '少なくとも選択肢の一つに入力してください',
        ],
        'setting' => [
            'setting' => '設定は正しくありません。再度設定してください',
        ],
        'participant' => [
            'email' => '参加者のメールを入力してください',
        ],
    ],
    'table' => [
        'thead' => [
            'STT' => 'ID',
            'creator' => '作成者',
            'title' => 'タイトル',
            'status' => 'ステータス',
            'type' => '種類',
            'link' => 'リンク',
            'created_at' => '作成日',
        ],
        'tbody' => [
            'name' => '名前: ',
            'email' => 'メール ',
            'link_administration' => '管理の方へ',
            'link_participant' => '参加の方へ ',
        ],
    ],
    'tooltip' => [
        'edit' => 'この投票お編集する',
        'duplicate' => 'この投票をコピーしする',
        'delete_comment' => 'コメントをすべて削除する',
        'delete' => 'この投票を削除する',
        'show' => '投票詳細を見る',
        'open' => '投票を開始する',
        'close' => '投票を終了する',
    ],
    'nav_tab_edit' => [
        'info' => '情報',
        'option' => 'オプション',
        'setting' => '設定',
        'voting' => '投票',
        'result' => '結果',
        'activity' => '投票の活動',
    ],
    'message_client' => [
        'required' => '入力してください ',
        'max' => '最大ｎ文字まで入力してください ',
        'email' => 'メールが正しくありません',
        'number' => '数値を入力してください',
        'choose' => '選択してください ',
        'option_empty' => '新しいオプションを追加してください',
        'option_required' => 'オプションの内容を入力してください',
        'participant_empty' => 'メールアドレスを入力してください',
        'character' => '文字',
        'email_exist' => 'メールアドレスが存在しません。再度お試しください',
        'time_close_poll' => '投票終了時間は現在の時間よりも大きくなければなりません',
      'on' => 'オン',
      'off' => 'オフ',
        'link_exists' => 'このリンクは、システムに既に存在します。再度お試しください',
        'link_valid' => 'このリンクは使用できます',
        'confirm_delete_option' => 'このオプションを削除すると、該当する回答すべては削除されます。よろしいですか？',
        'email_exist_database' => '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> メールが既に存在します。投票にはログインしてください',
        'send_email_success' => 'あなたのメールアドレスには確認メールが送信されました。ご確認ください',
        'send_email_fail' => '送信失敗しました。入力したメールアドレスを確認してください',
        'option_duplicate' => 'オプションが重複されています。他のオプションを入力してください',
        'option_minimum' => 'このオプションは削除できません。少なくとも一つのオプションは必要です。',
        'option_image_duplicate' => '同一のイメージがありますが、使用しますか',
        'number_edit' => '指定する最大投票数は現在の投票数よりも大きくなければなりません。現在の投票数は…',
        'image' => 'この画像は使用できません。ご確認ください',
        'empty_url_image' => 'Enter a url or click upload',
        'not_type_url_image' => 'The image URL does not point to an image or the correct type of image.',
        'time_out_url_image' => 'The image URL was not reachable.  Check that the URL is correct.',
        'email_exists' => 'Địa chỉ email đã tồn tại trong hệ thống, vui lòng chọn địa chỉ email khác để bầu chọn',
        'error_occurs' => 'Có lỗi xảy ra trong quá trình xử lý',
    ],
    'mail' => [
        'label' => [
            'introduction' => '紹介',
        ],
        'introduction' => '私たちはあなたに投票を作成する簡単、高速な方法を提供します。<a href="' . url("/") .'">' .url("/") . '</a>をご覧ください ',
        'participant' => [
            'head' => 'FPOLL',
            'link' => '投票へのリンク ',
        ],
    ],
       'result_create' => [
       'head' => 'FPOLL',
         'thank' => 'ありがとうございます, ',
         'create_success' => '投票は作成できました',
        'send_mail' => 'emailには下記のリンクを送信しました',
        'participant_link' => '招待用リンク',
        'help_participant' => 'あなたの投票に参加する為に友達に信するリンクです',
         'link_admin' => '管理用リンク',
         'help_admin' => 'このリンクにアクセスして、投票を変更したり、削除したりすることができます',
     ],

/*------------------------------------------------------------
*                  USER - POLL
*------------------------------------------------------------*/
    'poll' => 'Poll',
    'vote' => '投票',
    'vote_page' => '投票のページ',
    'close' => '閉じる',
    'name' => '名前',
    'email' => 'メール',
    'no' => 'ID',
    'poll_history' => '投票履歴',
    'show_vote_details' => '投票詳細',
    'poll_info' => '投票情報',
    'activity_poll' => '投票のアクティビティ',
    'next' => '次へ',
    'optional' => '任意',
    'one_answer' => '単一回答',
    'multiple_answer' => '複数回答',

    'poll_details' => '投票詳細',
    'poll_initiate' => '作成者',
    'where' => '場所: ',
    'description' => '説明の記載はありません',
    'location' => '場所の記載はありません',
    'comments' => 'コメント',
    'add_comment' => 'コメントを追加',
    'show_comments' => 'コメントを見る',
    'hide' => '非表示',
    'save_comment' => '保存',
    'view_history' => '履歴を見る',
    'delete_all_participants' => '投票回答を削除',
    'list_polls' => '投票一覧',
    'polls_initiated' => '作成された投票の一覧',
    'subject' => 'タイトル',
    'participants' => '投票者',
    'latest_activity' => '最新のアクティビティ',
    'polls_participated_in' => '参加した投票',
    'polls_closed' => '終了投票',
    'list_all_polls' => '投票一覧',
    'administer' => '投票管理',
    'close_poll' => '投票を終了する',
    'reopen_poll' => '投票を再開する',
    'confirm_close_poll' => '終了します。よろしいですか？',
    'close_poll_successfully' => '投票が終了されました',
    'close_poll_fail' => 'エラーで投票を終了できませんでした',
    'reopen_poll_fail' => 'エラーで投票を再開できませんでした',
    'reopen_poll_successfully' => '投票を再開しました',
    'poll_not_found' => '投票が見つかりません',
    'message_name' => 'あなたの名前を入力してください',
    'message_email' => 'あなたのメールを入力してください',
    'message_validate_email' => '有効なメールアドレスを入力してください',
    'voted_poll' => '投票できました',
    'message_poll_limit' => 'この投票は最大投票数になりましたので、参加できません',
    'message_poll_closed' => '投票が終了しています。閲覧できません',
    'comment_name' => 'あなたの名前を入力してください',
    'comment_content' => 'コメント内容を入力してください',
    'confirmRemove' => '削除します。よろしいですか？',
    'load_latest_polls' => '最新の投票一覧が更新されました',
    'edit_link_admin' => '管理者用リンクを編集',
    'edit_link_user' => 'ユーザー用リンクを編集',
    'participation_link' => '投票用リンク',
    'administer_link' => '管理者用リンク',
    'administration' => '管理',
    'vote_empty' => '今は回答がまだありません',
    'confirm_delete_vote' => 'この回答を削除します。よろしいですか？',
    'email_exist' => '入力したメールアドレスは既に存在します。このメールアドレスでログイン、または他のメールアドレスを入力してください',
    'remove_vote_successfully' => '削除できました',
    'vote_successfully' => '回答できました',
    'export_pdf' => 'PDFを出力',
    'export_excel' => 'EXCELを出力',
    'link_exist' => 'このリンクは既に存在している',
    'link_invalid' => 'リンクは正しくありません',
    'edit_link_successfully' => '編集できました',
    'delete_all_participants_successfully' => '削除できました',
    'incorrect_password' => 'パスワードが正しくありません',
    'enter_password' => 'パスワードを入力してください',
    'create_duplicate_poll' => 'この投票からコピーして作成します',
    'not_activity' => '履歴がありません',
    'confirm_delete_all_participant' => 'この投票の回答を全て削除します。よろしいですか？',
    'login_here' => ' ログイン',
    'option' => [
        'name_vote' => 'オプション',
        'rate_vote' => '割合',
        'count_vote' => '票数',
    ],
    'hide_result_message' => '投票の結果は非表示にされました',
    'flashy_message' => 'メールを送信しました。ご確認ください。',
    'message_exist_email' => 'このメールアドレスは存在しません。',
    'link_vote' => '投票用リンク',
    'link_admin' => '管理用リンク',
    'email_not_exist' => '入力したメールアドレスは存在しません。',
    'register_with_mail_not_exist' => '登録できません。入力したメールアドレスは存在しません。',
    'link_not_found' => 'リンクは見つかりません',
    'date_last_vote' => '最終回答時間',
    'number_vote' => '票数',
    'email_voted' => 'このメールアドレスは投票したことがあります',
    'check' => '確認',
    'message_validate_name' => '名前を入力してください',
    'message_validate_name_and_email' => '名前とメールアドレスを入力してください',
    'image_preview' => '詳細画像を見る',
    'table_result' => '結果表',
    'bar_chart' => '棒グラフ',
    'pie_chart' => '円グラフ',
    'copy_link' => 'リンクをコピーする',
    'send_mail_again' => 'メールが届いていない場合はこちらをクリックしてください...',
    'message_vote_one_time' => 'あなたはこの投票に回答しました。回答は1人1回しかできません',
    'confirm_reopen_poll' => 'この投票を再開します。よろしいですか？',
    'close_date' => '投票終了時間',
    'show_result' => '結果を表示',
    'view_option' => 'オプションを見る',
    'view_setting' => '設定を見る',
    'poll_voted' => '回答されたオプションを編集することができません。',
    'message_poll_time_out' => '投票終了時間を過ぎました。投票することはできません',
    'statistic' => '統計的',
    'total_vote' => '投票数',
    'vote_first_time' => '最初投票時間',
    'vote_last_time' => '最終投票時間',
    'option_highest_vote' => '票数が最も多いオプション',
    'option_lowest_vote' => '票数が最も少ないオプション',
    'message_required_email' => 'メールアドレスを入力してください',
    'no_name' => '匿名の人',
    'reach_limit' => '最大票数になっています。',
    'action' => 'ビューの管理',
    'required' => '必須',
    'edit_link_admin_successfully' => '管理用のリンクが更新されました。',
];
