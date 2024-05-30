<?= helper('svg') ?>
<!DOCTYPE html>
<html lang="<?= service('request')
    ->getLocale() ?>">

<head>
	<meta charset="UTF-8"/>
	<meta name="robots" content="noindex">

	<title>Castopod Auth</title>
	<meta name="description" content="Castopod is an open-source hosting platform made for podcasters who want engage and interact with their audience."/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <?= service('vite')
        ->asset('styles/index.css', 'css') ?>
</head>

<body class="flex flex-col items-center justify-center min-h-screen mx-auto bg-base">
	<header class="mb-4">
		<a href="<?= route_to(
		    'home',
		) ?>" class="inline-flex items-baseline text-4xl font-bold font-display text-accent-base focus:ring-accent">
			Home
		</a>
	</header>
	<main class="flex flex-col w-full max-w-md px-6 py-4 mx-auto rounded-lg bg-elevated border-3 border-subtle gap-y-4">
		<Heading tagName="h1" size="large" class="self-center"><?= $this->renderSection(
		    'title',
		) ?></Heading>
		<?= view('_message_block') ?>
		<?= $this->renderSection('content') ?>
	</main>
	<footer class="flex flex-col text-sm">
		<?= $this->renderSection('footer') ?>
	</footer>
</body>
