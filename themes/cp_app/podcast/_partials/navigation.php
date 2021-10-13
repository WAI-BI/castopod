<?php declare(strict_types=1);

$navigationItems = [
    [
        'uri' => route_to('podcast-activity', $podcast->handle),
        'label' => lang('Podcast.activity'),
    ],
    [
        'uri' => route_to('podcast-episodes', $podcast->handle),
        'label' => lang('Podcast.episodes'),
    ],
    [
        'uri' => route_to('podcast-about', $podcast->handle),
        'label' => lang('Podcast.about'),
    ],
]
?>
<nav class="sticky z-40 flex col-start-2 px-4 pt-8 bg-white shadow gap-x-2 md:gap-x-4 md:px-8 -top-8 md:-top-12 md:rounded-b-xl md:pt-12 ">
    <?php foreach ($navigationItems as $item): ?>
        <?php $isActive = url_is($item['uri']); ?>
        <a href="<?= $item['uri'] ?>" class="px-4 py-1 text-sm font-semibold uppercase border-b-4<?= $isActive ? ' border-b-4 text-pine-500 border-pine-500' : ' text-gray-500 hover:text-gray-900 hover:border-gray-200 border-transparent' ?>"><?= $item['label'] ?></a>
    <?php endforeach; ?>
    <button type="button" class="p-2 ml-auto rotate-180 rounded-full sm:hidden focus:outline-none focus:ring-2 focus:ring-pine-500 focus:ring-offset-2 focus:ring-offset-pine-100"><?= icon('menu') ?></button>
</nav>