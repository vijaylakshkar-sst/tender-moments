<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo">
		<a href="{{route('admin.dashboard')}}" class="app-brand-link">
			<span class="app-brand-logo demo">
                <img class="logo-dark" src="{{asset('assets/admin/img/logo.png')}}" style="width:100px;" width="120" alt="">
			</span>
		</a>

		<a href="javascript:void(0);"
			class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	<ul class="menu-inner py-1">
		<li class="menu-item {{ request()->is('admin/dashboard') ? 'active' : ''}}">
			<a href="{{route('admin.dashboard')}}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Dashboard">Dashboard</div>
			</a>
		</li>


        <li class="menu-item {{ request()->is('admin/slots*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Events">Slots</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('admin/slots-create') ? 'active' : '' }}">
                    <a href="{{ route('admin.slot.create') }}" class="menu-link">
                        <div>Add Slot</div>
                    </a>
                </li>
            </ul>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('admin/slots') ? 'active' : '' }}">
                    <a href="{{ route('admin.slot.index') }}" class="menu-link">
                        <div>View Slot</div>
                    </a>
                </li>
            </ul>
        </li>


		<li class="menu-item {{ request()->is('admin/bookings') ? 'active' : ''}}">
			<a href="{{route('admin.bookings.index')}}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-group"></i>
				<div data-i18n="User">Bookings</div>
			</a>
		</li>


		<li class="menu-item {{ request()->is('admin/users*') ? 'active' : ''}}">
			<a href="{{route('admin.users.index')}}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-group"></i>
				<div data-i18n="User">Users</div>
			</a>
		</li>

		{{-- <li class="menu-item {{ request()->is('admin/contacts/index') ? 'active' : ''}}">
			<a href="{{route('admin.contacts.index')}}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-envelope"></i>
				<div data-i18n="Contacts">Contacts</div>
			</a>
		</li> --}}

		@php
            $pages = Helper::pages();
        @endphp

		<li class="menu-item {{ request()->is('admin/page*') ? 'active open' : ''}}">
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-book-content"></i>
				<div data-i18n="Pages">Website Pages</div>
				{{-- <div class="badge bg-danger rounded-pill ms-auto">{{count($pages)}}</div> --}}
			</a>
			<ul class="menu-sub">
				@foreach($pages as $page)
					<li class="menu-item {{ request()->is('admin/page/create/'.$page->key) ? 'active' : ''}}">
						<a href="{{route('admin.page.create',$page->key)}}" class="menu-link">
							<div data-i18n="{{$page->name}}">{{$page->name}}</div>
						</a>
					</li>
                @endforeach
			</ul>
		</li>

	</ul>
</aside>
