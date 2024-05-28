<?php

return [
    'route' => '管理',
    'interface.header' => '管理員管理介面',
    'button.delete' => '刪除',
    'button.update' => '更新',
    'button.create' => '建立',
    'button.save' => '儲存',
    'button.yes' => '是，我確定',
    'button.no' => '否，取消',
    'button.cancel' => '取消',
    'button.close' => '關閉',
    'button.accept' => '我同意',

    //Tabs
    'tab.groups' => '群組',
    'tab.users' => '使用者',
    'tab.llms' => '模型',
    'tab.settings' => '系統設定',

    //Groups
    'button.new_group' => '新增群組',
    'header.create_group' => '建立一個新群組',
    'label.tab_permissions' => '頁面權限',
    'label.invite_code' => '邀請碼',
    'label.group_name' => '名稱',
    'label.invite_code' => '邀請碼',
    'placeholder.invite_code' => '邀請碼',
    'label.describe' => '介紹',
    'placeholder.group_name' => '群組名稱',
    'placeholder.group_detail' => '群組註解',
    'label.read' => '讀取',
    'label.delete' => '刪除',
    'label.update' => '更新',
    'label.llm_permission.disabled' => '模型使用權限(已停用模型)',
    'label.llm_permission.enabled' => '模型使用權限(已啟用模型)',
    'header.edit_group' => '編輯群組',
    'hint.group_updated' => '群組更新成功！',
    'hint.group_created' => '群組建立成功！',
    'modal.delete_group.header' => '您確定要刪除該群組',

    //Users
    'header.menu' => '主選單',
    'header.group_selector' => '群組選擇器',
    'header.fuzzy_search' => '模糊搜尋器',
    'header.create_user' => '建立使用者',
    'label.group_selector' => '從群組開始篩選使用者',
    'label.fuzzy_search' => '使用名稱或信箱搜尋使用者',
    'label.create_user' => '建立一個使用者的設定檔',

    'create_user.header' => '建立一個新的帳號',
    'create_user.joined_group' => '加入的群組',
    'label.members' => '個成員',
    'label.other_users' => '無群組成員',
    'button.return_group_list' => '返回群組列表',
    'placeholder.search_user' => '搜尋信箱或名稱',
    'hint.enter_to_search' => '按下Enter來搜尋',

    'group_selector.header' => '編輯使用者',
    'placeholder.email' => '使用者信箱',
    'placeholder.username' => '使用者名稱',
    'label.name' => '名稱',
    'modal.delete_user.header' => '確定要刪除使用者',
    'button.cancel' => '取消',
    'label.email' => '電子郵件',
    'label.password' => '密碼',
    'label.update_password' => '更新密碼',
    'label.detail' => '詳細說明',
    'placeholder.new_password' => '新密碼',
    'label.require_change_password' => '下次登入要求修改密碼',
    'label.extra_setting'=>'額外設定',
    'label.created_at'=>"創建於",
    'label.updated_at'=>'更新於',

    //LLMs
    'button.new_model' => '新增模型',
    'label.enabled_models' => '已啟用模型',
    'label.disabled_models' => '已停用模型',
    'header.create_model' => '建立模型設定檔',
    'modal.create_model.header' => '您確定要建立這個設定檔？',
    'label.model_image' => '模型頭像',
    'label.model_name' => '模型名稱',
    'label.order' => '展示順序',
    'label.link' => '外部連結',
    'placeholder.description' => '這個模型的相關介紹',
    'label.version' => '版本',
    'label.access_code' => '存取代碼',
    'placeholder.link' => '該模型的外部相關連結',
    'header.update_model' => '編輯模型設定檔',
    'label.description' => '敘述',
    'modal.update_model.header' => '您確定要更新這個語言模型設定檔嗎',
    'modal.delete_model.header' => '您確定要刪除這個語言模型設定檔嗎',

    //setting
    'header.settings' => '系統設定',
    'label.settings' => '所有關於系統的設定都可在此調整',
    'label.agent_API' => 'Agent API連線位置',
    'label.allow_register' => '允許註冊',
    'button.reset_redis' => '重設Redis快取',
    'hint.saved' => '已儲存',
    'hint.redis_cache_cleared' => 'Redis快取已清除',
    'label.need_invite' => '註冊必需有邀請碼',
    'label.footer_warning' => '對話底部警告',
    'label.safety_guard_API' => '安全過濾連線位置',
    'label.anno' => '系統公告',
    'label.tos' => '服務條款',

    //Permissions
    'perm.Room_update_import_chat' => '匯入對話',
    'perm.Room_update_new_chat' => '建立新對話',
    'perm.Room_update_feedback' => '給予回饋',
    'perm.Room_update_send_message' => '傳送訊息',
    'perm.Room_update_react_message' => '額外操作按鈕',
    'perm.Room_read_export_chat' => '匯出對話',
    'perm.Room_delete_chatroom' => '刪除對話',
    'perm.Room_update_upload_file' => '上傳檔案',
    'perm.Chat_update_react_message' => '額外操作按鈕',
    'perm.Dashboard_read_statistics' => '統計資訊',
    'perm.Dashboard_read_blacklist' => '黑名單',
    'perm.Dashboard_read_feedbacks' => '回饋資料',
    'perm.Dashboard_read_logs' => '系統日誌',
    'perm.Dashboard_read_safetyguard' => '安全過濾',
    'perm.Dashboard_read_inspect' => '訊息瀏覽器',
    'perm.Chat_update_detail_feedback' => '詳細回饋',
    'perm.Room_update_detail_feedback' => '詳細回饋',
    'perm.Chat_update_send_message' => '傳送訊息',
    'perm.Chat_update_new_chat' => '建立新對話',
    'perm.Chat_update_upload_file' => '上傳檔案',
    'perm.Chat_update_feedback' => '給予回饋',
    'perm.Chat_update_import_chat' => '匯入對話',
    'perm.Room_read_access_to_api' => '使用網站API',
    'perm.Chat_read_export_chat' => '匯出對話',
    'perm.Chat_delete_chatroom' => '刪除對話',
    'perm.Profile_update_api_token' => '更新網站API金鑰',
    'perm.Profile_update_name' => '修改使用者名稱',
    'perm.Profile_update_email' => '修改電子郵件地址',
    'perm.Profile_update_password' => '修改密碼',
    'perm.Profile_update_external_api_token' => '修改外部API金鑰',
    'perm.Profile_read_api_token' => '讀取網站API金鑰',
    'perm.Profile_delete_account' => '刪除帳號',
    'perm.Store_update_create_bot' => '創建Bot',
    'perm.Store_update_modify_bot' => '修改Bot',
    'perm.Store_delete_delete_bot' => '刪除Bot',
    'perm.Store_read_discover_community_bots' => '存取社群Bot',
    'perm.Store_read_discover_system_bots' => '存取系統Bot',
    'perm.Store_read_discover_my_bots' => '存取自建Bot',
    'perm.Store_read_any_modelfile' => '存取任何modelfile',

    'perm.Chat_update_detail_feedback.describe' => '給予回答更詳細的回饋標籤',
    'perm.Room_update_detail_feedback.describe' => '給予回答更詳細的回饋標籤',
    'perm.Profile_update_name.describe' => '更新自己帳號名稱的權限',
    'perm.Profile_update_email.describe' => '更新自己電子郵件信箱的權限',
    'perm.Profile_update_password.describe' => '更新自己密碼的權限',
    'perm.Profile_update_external_api_token.describe' => '更新存放在網站上的外部API金鑰的權限',
    'perm.Profile_read_api_token.describe' => '閱讀網站API金鑰的權限',
    'perm.Profile_delete_account.describe' => '刪除自己帳號的權限',
    'perm.Profile_update_api_token.describe' => '更新網站API金鑰的權限',
    'perm.Room_read_access_to_api.describe' => '使用網站API的權限',
    'perm.Chat_update_send_message.describe' => '在對話中送出訊息的權限（不影響建立）',
    'perm.Room_update_send_message.describe' => '在對話中送出訊息的權限（不影響建立）',
    'perm.Chat_update_new_chat.describe' => '建立對話的權限',
    'perm.Room_update_new_chat.describe' => '建立對話的權限',
    'perm.Chat_update_upload_file.describe' => '上傳檔案的權限(仍需要建立對話的權限才能使用)',
    'perm.Room_update_upload_file.describe' => '上傳檔案的權限(仍需要建立對話的權限才能使用)',
    'perm.Chat_update_feedback.describe' => '送出模型使用回饋的權限',
    'perm.Room_update_feedback.describe' => '送出模型使用回饋的權限',
    'perm.Room_delete_chatroom.describe' => '刪除對話的權限',
    'perm.Chat_delete_chatroom.describe' => '刪除對話的權限',
    'perm.Chat_read_export_chat.describe' => '匯出聊天紀錄的權限',
    'perm.Room_read_export_chat.describe' => '匯出聊天紀錄的權限',
    'perm.Chat_update_import_chat.describe' => '匯入聊天紀錄的權限（仍需要建立對話的權限）',
    'perm.Room_update_import_chat.describe' => '匯入聊天紀錄的權限（仍需要建立對話的權限）',
    'perm.Chat_update_react_message.describe' => '對訊息使用額外操作按鈕的權限(如引用、翻譯等功能)',
    'perm.Room_update_react_message.describe' => '對訊息使用額外操作按鈕的權限(如引用、翻譯等功能)',
    'perm.Dashboard_read_statistics.describe' => '存取統計資訊',
    'perm.Dashboard_read_blacklist.describe' => '存取黑名單',
    'perm.Dashboard_read_feedbacks.describe' => '存取回饋資料',
    'perm.Dashboard_read_logs.describe' => '存取系統日誌',
    'perm.Dashboard_read_safetyguard.describe' => '存取安全過濾',
    'perm.Dashboard_read_inspect.describe' => '存取訊息瀏覽器',
    'perm.Store_update_create_bot.describe' => '創建Bot所需的權限',
    'perm.Store_update_modify_bot.describe' => '修改自建Bot所需的權限',
    'perm.Store_delete_delete_bot.describe' => '刪除自建Bot所需的權限',
    'perm.Store_read_discover_community_bots.describe' => '讀取社群Bot所需的權限',
    'perm.Store_read_discover_system_bots.describe' => '讀取系統Bot所需的權限',
    'perm.Store_read_discover_my_bots.describe' => '讀取自建Bot所需的權限',
    'perm.Store_read_any_modelfile.describe' => '讀取任意modelfile所需的權限',
];
