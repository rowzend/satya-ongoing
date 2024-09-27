<nav id="navmenu" class="navmenu">
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-house navicon"></i> Home
            </a>
        </li>
        <li>
            <a href="{{ route('usulan.index') }}" class="{{ request()->routeIs('usulan.index') ? 'active' : '' }}">
                <i class="bi bi-person navicon"></i> Usulan Satya
            </a>
        </li>
        <li>
            <a href="#resume" class="{{ request()->is('resume') ? 'active' : '' }}">
                <i class="bi bi-file-earmark-text navicon"></i> Rekap Usulan
            </a>
        </li>

        {{-- <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Deep Dropdown 1</a></li>
                        <li><a href="#">Deep Dropdown 2</a></li>
                        <li><a href="#">Deep Dropdown 3</a></li>
                        <li><a href="#">Deep Dropdown 4</a></li>
                        <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
            </ul>
        </li> --}}
    </ul>
</nav>
