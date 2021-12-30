@php
    $menu = App\Models\Menu::where('parent_id', '=', 0)->get();

@endphp
<nav role="navigation" class="widget-body">
    <ul class="acc-menu">
        <li class="nav-separator"><span>Explore</span></li>
        <li><a href="index.html"><i class="ti ti-home"></i><span>Dashboard</span><span class="badge badge-teal">2</span></a></li>
        @foreach($menu as $menu)
            <li><a href="{{ $menu->url }}"><i class="{{ $menu->icon }}"></i><span>{{ $menu->title }}</span></a>
                @if(count($menu->childs))
                    <ul class="acc-menu">
                        @foreach($menu->childs as $child)
                            <li><a href="{{ $child->url }}">{{ $child->title }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach

        <li><a href="javascript:;"><i class="ti ti-layout"></i><span>Setting</span></a>
            <ul class="acc-menu">
                <li><a href="{{ url('admin/setting/menu') }}">Menu</a></li>
            </ul>
        </li>
    </ul>
</nav>
