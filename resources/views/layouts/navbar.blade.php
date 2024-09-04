{{-- Navbar Top --}}
<nav class="navbar navbar-top fixed-top bg-primary text-white">
    <div class="container">
        {{-- Navbar Brand --}}
        <a class="d-inline navbar-brand text-white" href="#">
            {{-- logo --}}
            <img src="{{ asset('images/logo-dashboard.png') }}" alt="Logo" width="32"
                class="align-text-bottom me-2">
            {{-- title --}}
            <span class="fs-4 text-uppercase">Sam Bandi Nusantara</span>
        </a>
    </div>
</nav>

{{-- Navbar Menu --}}
<nav class="navbar navbar-menu fixed-top navbar-expand-lg bg-light shadow-lg-sm">
    <div class="container">
        <div class="collapse navbar-collapse">
            @if (env('APP_URL') === 'https://pos.sambandi.id/pos')
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('pos.dashboard') }}" :active="request()->routeIs('dashboard')">
                            <i class="ti ti-home align-text-top me-1"></i> Dashboard
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('pos.categories.index') }}" :active="request()->routeIs('categories.*')">
                            <i class="ti ti-category align-text-top me-1"></i> Categories
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('pos.products.index') }}" :active="request()->routeIs('products.*')">
                            <i class="ti ti-copy align-text-top me-1"></i> Products
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('pos.customers.index') }}" :active="request()->routeIs('customers.*')">
                            <i class="ti ti-users align-text-top me-1"></i> Customers
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('pos.transactions.index') }}" :active="request()->routeIs('transactions.*')">
                            <i class="ti ti-folders align-text-top me-1"></i> Transactions
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('pos.report.index') }}" :active="request()->routeIs('report.*')">
                            <i class="ti ti-file-text align-text-top me-1"></i> Report
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('pos.about') }}" :active="request()->routeIs('about')">
                            <i class="ti ti-info-circle align-text-top me-1"></i> About
                        </x-navbar-link>
                    </li>
                </ul>
            @endif
            @if (env('APP_URL') === 'https://chain.sambandi.id/chain')
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('chain.dashboard') }}" :active="request()->routeIs('dashboard')">
                            <i class="ti ti-home align-text-top me-1"></i> Dashboard
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('chain.categories.index') }}" :active="request()->routeIs('categories.*')">
                            <i class="ti ti-category align-text-top me-1"></i> Categories
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('chain.products.index') }}" :active="request()->routeIs('products.*')">
                            <i class="ti ti-copy align-text-top me-1"></i> Products
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('chain.customers.index') }}" :active="request()->routeIs('customers.*')">
                            <i class="ti ti-users align-text-top me-1"></i> Customers
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('chain.transactions.index') }}" :active="request()->routeIs('transactions.*')">
                            <i class="ti ti-folders align-text-top me-1"></i> Transactions
                        </x-navbar-link>
                    </li>
                    <li class="nav-item">
                        <x-navbar-link href="{{ route('chain.report.index') }}" :active="request()->routeIs('report.*')">
                            <i class="ti ti-file-text align-text-top me-1"></i> Report
                        </x-navbar-link>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>
