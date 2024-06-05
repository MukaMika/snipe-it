<?php

return array(

    'accepted'                  => 'Активът беше приет.',
    'declined'                  => 'Активът беше отказан.',
    'bulk_manager_warn'	        => 'Вашите потребителски профили бяха обновени успешно, обаче вашето управителско вписване не беше запазено, защото управителят, които сте избрали бе в списъка с потребителски профили за промяна и потребителите не могат да бъдат свои управители. Моля изберете вашите потребителски профили отново, с изключение на управителя.',
    'user_exists'               => 'Потребителят вече съществува!',
    'user_not_found'            => 'Потребителят не съществува.',
    'user_login_required'       => 'Полето за вход е задължително',
    'user_has_no_assets_assigned' => 'Няма заведени активи на този потребител.',
    'user_password_required'    => 'Паролата е задължителна.',
    'insufficient_permissions'  => 'Нямате необходимите права.',
    'user_deleted_warning'      => 'Този потребител е изтрит. За да редактирате данните за него или да му зададете актив, трябва първо да възстановите потребителя.',
    'ldap_not_configured'        => 'Интеграцията с LDAP не е конфигурирана за тази инсталация.',
    'password_resets_sent'      => 'Избраните потребители, които са активирани и имат валиден е-майл адрес им беше изпратен линк за смяна на парола.',
    'password_reset_sent'       => 'Изпратена е връзка за въстановяване на паролата до :email!',
    'user_has_no_email'         => 'Този потребител няма е-майл адрес в неговия профил.',
    'log_record_not_found'        => 'Не е намерен лог запис за този потребител.',


    'success' => array(
        'create'    => 'Потребителят е създаден.',
        'update'    => 'Потребителят е обновен.',
        'update_bulk'    => 'Потребителите бяха обновени успешно!',
        'delete'    => 'Потребителят е изтрит.',
        'ban'       => 'Потребителят беше забранен успешно.',
        'unban'     => 'Потребителят възстановен успешно.',
        'suspend'   => 'Потребителят бе временно спрян.',
        'unsuspend' => 'Потребителят активиран успешно.',
        'restored'  => 'Потребителят е възстановен.',
        'import'    => 'Потребителите заредени успешно.',
    ),

    'error' => array(
        'create' => 'Възникна проблем при създаването на този потребител. Моля, опитайте отново.',
        'update' => 'Възникна проблем при обновяването на този потребител. Моля, опитайте отново.',
        'delete' => 'Възникна проблем при изтриването на този потребител. Моля, опитайте отново.',
        'delete_has_assets' => 'Този потребител има зададени елементи и не може да бъде изтрит.',
        'delete_has_assets_var' => 'This user still has an asset assigned. Please check it in first.|This user still has :count assets assigned. Please check their assets in first.',
        'delete_has_licenses_var' => 'This user still has a license seats assigned. Please check it in first.|This user still has :count license seats assigned. Please check them in first.',
        'delete_has_accessories_var' => 'This user still has an accessory assigned. Please check it in first.|This user still has :count accessories assigned. Please check their assets in first.',
        'delete_has_locations_var' => 'This user still manages a location. Please select another manager first.|This user still manages :count locations. Please select another manager first.',
        'delete_has_users_var' => 'This user still manages another user. Please select another manager for that user first.|This user still manages :count users. Please select another manager for them first.',
        'unsuspend' => 'Проблем при активирането на потребителя. Моля опитайте отново.',
        'import'    => 'Проблем при зареждането на потребителите. Моля опитайте отново.',
        'asset_already_accepted' => 'Този актив е вече приет.',
        'accept_or_decline' => 'Трябва да приемете или да откажете този актив.',
        'cannot_delete_yourself' => 'We would feel really bad if you deleted yourself, please reconsider.',
        'incorrect_user_accepted' => 'Активът, който се опитвате да приемете не е изписан към Вас.',
        'ldap_could_not_connect' => 'Проблем при комуникацията с LDAP сървъра. Моля прегледайте конфигурацията на LDAP.<br/>Грешка от LDAP сървъра: ',
        'ldap_could_not_bind' => 'Проблем при връзката с LDAP сървъра. Моля прегледайте конфигурацията на LDAP.<br/>Грешка от LDAP сървъра: ',
        'ldap_could_not_search' => 'Проблем при търсенето в LDAP сървъра. Моля прегледайте конфигурацията на LDAP.<br/>Грешка от LDAP сървъра: ',
        'ldap_could_not_get_entries' => 'Проблем при извличането на резултат от LDAP сървъра. Моля прегледайте конфигурацията на LDAP.<br/>Грешка от LDAP сървъра:',
        'password_ldap' => 'Паролата за този профил се управлява от LDAP / Active Directory. Моля, свържете се с вашия ИТ отдел, за да промените паролата си.',
    ),

    'deletefile' => array(
        'error'   => 'Файлът не е изтрит. Моля, опитайте отново.',
        'success' => 'Файлът е изтрит.',
    ),

    'upload' => array(
        'error'   => 'Проблем при качването на файл/овете. Моля опитайте отново.',
        'success' => 'Файл/овете качени успешно.',
        'nofiles' => 'Не сте избрали файлове за качване',
        'invalidfiles' => 'Един или повече файлове са твърде големи или с неразрешен тип. Разрешените типове файлове са png, gif, jpg, doc, docx, pdf, и txt.',
    ),

    'inventorynotification' => array(
        'error'   => 'Този потребител няма е-майл.',
        'success' => 'Потребителя беше известен отностно текущите активи, които са му заведени.'
    )
);