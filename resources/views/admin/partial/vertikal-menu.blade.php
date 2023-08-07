<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ $outletmid->firstWhere('kode_outlet', $user->level) ? '#' : url('/') }}">
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- <li class="menu-title" data-key="t-apps">Apps</li> --}}

                <li>
                    <a href="#" class="has-arrow">
                        <i data-feather="shopping-cart"></i>
                        <span data-key="t-ecommerce">Outlet</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @foreach ($outletmid as $outlets)
                            <li class=""><a href="<?php
                            if ($outlets->kode_outlet === $user->level || $user->level === 'ALL') {
                                echo url('/outlet?outlet=' . $outlets->kode_outlet . '&_' . $csrfToken . '&');
                            } else {
                                echo '#';
                            }
                            ?> "
                                    data-key="t-products">{{ $outlets->nama_outlet }}</a>
                            </li>
                        @endforeach

                    </ul>
                </li>

                <li>
                    
                    <a href="{{ $user->role === 'admin' ? url('/superadmin') : '#' }}">
                        <i data-feather="lock"></i>
                        <span data-key="t-admin">Admin</span>
                    </a>
                </li>
                <li>
                    
                    <a href="{{url('/logout')}}">
                        <i data-feather="power"></i>
                        <span data-key="t-admin">Logout</span>
                    </a>
                </li>

            </ul>

          
        </div>
        <!-- Sidebar -->
    </div>
</div>
