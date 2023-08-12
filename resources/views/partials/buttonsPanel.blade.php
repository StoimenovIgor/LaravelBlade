<div class="pl-5">
    <ul class="nav nav-tabs mt-3">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin-panel') ? 'active' : '' }}"  href="{{ route('admin-panel') }}">Измени</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('create') ? 'active' : '' }}" href="{{ route('create') }}">Додај</a>
        </li>
    </ul>
</div>
