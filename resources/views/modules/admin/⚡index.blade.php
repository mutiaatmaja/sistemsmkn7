<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts.modules.admin')] #[Title('Admin Index')] class extends Component {
    //
};
?>

<div class="space-y-4">
    <h2 class="text-2xl font-bold text-slate-900">Admin Index</h2>
    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-slate-600">Selamat datang di halaman index modul Admin.</p>
    </div>
</div>
