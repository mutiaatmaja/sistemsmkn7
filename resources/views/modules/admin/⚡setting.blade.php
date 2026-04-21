<?php

use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts.modules.admin')] #[Title('SMKN 7 Pontianak - Pengaturan')] class extends Component {
    public array $form = [];

    public array $groups = [];

    public string $activeTab = 'general';

    public bool $saved = false;

    public function mount(): void
    {
        $settings = Setting::query()
            ->orderBy('id')
            ->get(['group', 'key', 'label', 'value', 'type', 'is_public']);

        $this->form = $settings->mapWithKeys(fn(Setting $setting): array => [$setting->key => $setting->value])->all();

        $this->groups = $settings
            ->groupBy('group')
            ->map(
                fn($items): array => $items
                    ->map(
                        fn(Setting $setting): array => [
                            'key' => $setting->key,
                            'label' => $setting->label,
                            'type' => $setting->type,
                            'is_public' => $setting->is_public,
                        ],
                    )
                    ->values()
                    ->all(),
            )
            ->all();

        $this->activeTab = array_key_first($this->groups) ?? 'general';
    }

    public function updated(): void
    {
        $this->saved = false;
    }

    public function save(): void
    {
        $validated = $this->validate($this->rules());

        foreach ($validated['form'] as $key => $value) {
            Setting::query()
                ->where('key', $key)
                ->update([
                    'value' => is_string($value) ? trim($value) : $value,
                ]);
        }

        $this->saved = true;
    }

    public function setActiveTab(string $group): void
    {
        if (array_key_exists($group, $this->groups)) {
            $this->activeTab = $group;
        }
    }

    protected function rules(): array
    {
        return [
            'form.app_name' => ['required', 'string', 'max:255'],
            'form.app_timezone' => ['required', 'string', 'max:100'],
            'form.school_name' => ['required', 'string', 'max:255'],
            'form.school_npsn' => ['nullable', 'string', 'max:20'],
            'form.school_email' => ['nullable', 'email', 'max:255'],
            'form.school_phone' => ['nullable', 'string', 'max:30'],
            'form.school_address' => ['nullable', 'string'],
            'form.academic_year' => ['required', 'string', 'max:50'],
            'form.homepage_title' => ['required', 'string', 'max:255'],
            'form.homepage_description' => ['nullable', 'string'],
        ];
    }

    public function groupLabel(string $group): string
    {
        return match ($group) {
            'general' => 'Pengaturan Umum',
            'school' => 'Profil Sekolah',
            'contact' => 'Kontak Sekolah',
            'academic' => 'Akademik',
            'homepage' => 'Halaman Depan',
            default => str($group)->headline()->toString(),
        };
    }

    public function groupDescription(string $group): string
    {
        return match ($group) {
            'general' => 'Identitas aplikasi dan konfigurasi inti sistem.',
            'school' => 'Informasi utama profil sekolah.',
            'contact' => 'Kontak dan alamat sekolah.',
            'academic' => 'Pengaturan akademik yang sedang aktif.',
            'homepage' => 'Konten utama yang tampil di halaman depan.',
            default => 'Konfigurasi tambahan untuk modul ini.',
        };
    }
};
?>

<div class="space-y-6">
    <div class="flex flex-col gap-4 lg:flex-row lg:items-start lg:justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Pengaturan</h2>
            <p class="text-slate-500">Kelola konfigurasi umum aplikasi dari halaman ini.</p>
        </div>

        @if ($saved)
            <div
                class="rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700">
                Pengaturan berhasil disimpan.
            </div>
        @endif
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="grid grid-cols-1 gap-6 xl:grid-cols-[280px_minmax(0,1fr)]">
            <aside class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm">
                <div class="mb-4">
                    <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-500">Kelompok Pengaturan</h3>
                    <p class="mt-1 text-sm text-slate-500">Pilih kategori untuk mengubah konfigurasi yang relevan.</p>
                </div>

                <div class="space-y-2">
                    @foreach ($groups as $group => $fields)
                        <button type="button" wire:click="setActiveTab('{{ $group }}')"
                            class="flex w-full items-start justify-between rounded-lg border px-4 py-3 text-left transition {{ $activeTab === $group ? 'border-primary bg-orange-50 text-primary' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300 hover:bg-slate-50' }}">
                            <div>
                                <p class="font-semibold">{{ $this->groupLabel($group) }}</p>
                                <p
                                    class="mt-1 text-xs {{ $activeTab === $group ? 'text-primary/80' : 'text-slate-500' }}">
                                    {{ count($fields) }} item
                                </p>
                            </div>

                            <span class="material-symbols-outlined text-lg">chevron_right</span>
                        </button>
                    @endforeach
                </div>
            </aside>

            <div class="space-y-6">
                @foreach ($groups as $group => $fields)
                    @if ($activeTab === $group)
                        <section class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="mb-6 flex items-start gap-4">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-lg bg-orange-50 text-primary">
                                    <span class="material-symbols-outlined">settings</span>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900">{{ $this->groupLabel($group) }}
                                    </h3>
                                    <p class="text-sm text-slate-500">{{ $this->groupDescription($group) }}</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
                                @foreach ($fields as $field)
                                    <div class="{{ $field['type'] === 'textarea' ? 'lg:col-span-2' : '' }}">
                                        <label class="mb-2 block text-sm font-medium text-slate-700"
                                            for="{{ $field['key'] }}">
                                            {{ $field['label'] }}
                                            @if ($field['is_public'])
                                                <span
                                                    class="ml-2 rounded-full bg-blue-50 px-2 py-0.5 text-[11px] font-semibold text-blue-600">Publik</span>
                                            @endif
                                        </label>

                                        @if ($field['type'] === 'textarea')
                                            <textarea wire:model.defer="form.{{ $field['key'] }}" id="{{ $field['key'] }}" rows="4"
                                                class="w-full rounded-lg border border-slate-200 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20"></textarea>
                                        @else
                                            <input wire:model.defer="form.{{ $field['key'] }}"
                                                id="{{ $field['key'] }}"
                                                type="{{ $field['type'] === 'email' ? 'email' : 'text' }}"
                                                class="w-full rounded-lg border border-slate-200 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20" />
                                        @endif

                                        @error('form.' . $field['key'])
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                @endforeach

                <div class="flex items-center justify-end gap-3">
                    <button type="submit" wire:loading.attr="disabled" wire:target="save"
                        class="inline-flex items-center gap-2 rounded-lg bg-primary px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:opacity-90 disabled:cursor-not-allowed disabled:opacity-70">
                        <span wire:loading.remove wire:target="save"
                            class="material-symbols-outlined text-lg">save</span>
                        <span wire:loading wire:target="save"
                            class="material-symbols-outlined text-lg animate-spin">progress_activity</span>

                        <span wire:loading.remove wire:target="save">Simpan Pengaturan</span>
                        <span wire:loading wire:target="save">Menyimpan...</span>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex items-start gap-4">
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-slate-100 text-slate-600">
                <span class="material-symbols-outlined">database</span>
            </div>

            <div class="space-y-2">
                <h3 class="text-lg font-semibold text-slate-900">Data tersimpan di database</h3>
                <p class="text-sm text-slate-500">
                    Semua nilai pada form ini menggunakan tabel <span
                        class="font-semibold text-slate-700">settings</span>
                    dan dapat diakses lewat model <span class="font-semibold text-slate-700">Setting</span>.
                </p>
            </div>
        </div>
    </div>
</div>
