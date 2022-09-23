<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'persons' => 'أشخاص',
    'all_persons' => 'All persons',
    'no_person' => 'لم يعثر على أحد!',
    'create' => 'إنشاء شخص',
    'view' => 'عرض شخص',
    'edit' => 'Edit person',
    'delete' => 'حذف شخص',
    'messages' => [
        'createSuccess' => 'Person has been successfully created!',
        'editSuccess' => 'تم تحديث الشخص بنجاح!',
        'deleteSuccess' => 'Person has been removed!',
    ],
    'form' => [
        'avatar' => 'الصورة الرمزية',
        'avatar_size_hint' =>
            'Avatar must be squared and at least 400px wide and tall.',
        'full_name' => 'الإسم الكامل',
        'full_name_hint' => 'This is the full name or alias of the person.',
        'unique_name' => 'Unique name',
        'unique_name_hint' => 'تستخدم للروابط',
        'information_url' => 'Information URL',
        'information_url_hint' =>
            'Url to a relevant resource of information about the person, such as a homepage or third-party profile platform.',
        'submit_create' => 'إنشاء شخص',
        'submit_edit' => 'حفظ الشخص',
    ],
    'podcast_form' => [
        'title' => 'Manage persons',
        'add_section_title' => 'Add persons to this podcast',
        'add_section_subtitle' => 'You may pick several persons and roles.',
        'persons' => 'Persons',
        'persons_hint' =>
            'You may select one or several persons with the same roles. You need to create the persons first.',
        'roles' => 'الأدوار',
        'roles_hint' =>
            'You may select none, one or several roles for a person.',
        'submit_add' => 'Add person(s)',
        'remove' => 'Remove',
    ],
    'episode_form' => [
        'title' => 'Manage persons',
        'add_section_title' => 'Add persons to this episode',
        'add_section_subtitle' => 'You may pick several persons and roles.',
        'persons' => 'Persons',
        'persons_hint' =>
            'You may select one or several persons with the same roles. You need to create the persons first.',
        'roles' => 'الأدوار',
        'roles_hint' =>
            'You may select none, one or several roles for a person.',
        'submit_add' => 'Add person(s)',
        'remove' => 'Remove',
    ],
    'credits' => 'Credits',
];
