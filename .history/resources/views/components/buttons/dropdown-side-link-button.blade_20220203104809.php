@props(['id', 'name', 'active'])

@php
    $classActive = ($active ?? false)
    ? 'active'
    : '';
@endphp

<li class="nav-item">
    <a class="nav-link {{ $classActive }}" data-bs-toggle="collapse" aria-current="page"
        href="#{{ $id ?? '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-file" aria-hidden="true">
            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
            <polyline points="13 2 13 9 20 9"></polyline>
        </svg>
        {{ $name ?? 'Button_Name' }}
    </a>
</li>
{{ $slot }}
