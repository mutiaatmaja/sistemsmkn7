<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/modules/depan.php';
require __DIR__.'/modules/akademis.php';
require __DIR__.'/modules/keuangan.php';
require __DIR__.'/modules/pengaturan.php';

$baseDomain = env('APP_BASE_DOMAIN', 'smkn7ptk.sch.id');
$isLocal = app()->environment(['local', 'development', 'testing']);

$mapModule = function (string $slug, string $name, string $routeFile) use ($baseDomain, $isLocal): void {
	$registrar = Route::middleware(['web'])->name($name.'.');

	if ($isLocal) {
		$registrar->prefix($slug)->group(base_path($routeFile));

		return;
	}

	$registrar->domain("{$slug}.{$baseDomain}")->group(base_path($routeFile));
};

$mapModule('admin', 'admin', 'routes/modules/admin.php');
$mapModule('pengaduan', 'pengaduan', 'routes/modules/pengaduan.php');
$mapModule('pkl', 'pkl', 'routes/modules/pkl.php');
$mapModule('sarpras', 'sarpras', 'routes/modules/sarpras.php');
$mapModule('tracer', 'tracer-study', 'routes/modules/tracer-study.php');
$mapModule('perpustakaan', 'perpustakaan', 'routes/modules/perpustakaan.php');
$mapModule('bimbingan', 'bimbingan', 'routes/modules/bimbingan.php');
