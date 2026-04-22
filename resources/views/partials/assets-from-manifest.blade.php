@php
    $entries = $entries ?? [];
    $manifestPath = public_path('build/manifest.json');
    $manifest = [];

    if (is_file($manifestPath)) {
        $manifest = json_decode(file_get_contents($manifestPath), true) ?: [];
    }
@endphp

@foreach ($entries as $entry)
    @php
        $assetFile = $manifest[$entry]['file'] ?? null;
    @endphp

    @if ($assetFile && str_ends_with($assetFile, '.css'))
        <link href="{{ asset('build/' . $assetFile) }}" rel="stylesheet" />
    @elseif ($assetFile && str_ends_with($assetFile, '.js'))
        <script src="{{ asset('build/' . $assetFile) }}" type="module"></script>
    @endif
@endforeach
