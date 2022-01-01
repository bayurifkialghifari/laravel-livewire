@php
    $menu = App\Models\Menu::where('parent_id', '=', 0)->get();
@endphp
<nav role="navigation" class="widget-body">
    <ul class="acc-menu">
        <li class="nav-separator"><span>Explore</span></li>
        <li><a href="index.html"><i class="ti ti-home"></i><span>Dashboard</span><span class="badge badge-teal">2</span></a></li>
        @foreach($menu as $menu)
            <li><a href="{{ $menu->url == '' || $menu->url == '#' ? '#' : url('/'.$menu->url) }}"><i class="{{ $menu->icon }}"></i><span>{{ $menu->title }}</span></a>
                @if(count($menu->childs))
                    <ul class="acc-menu">
                        @foreach($menu->childs as $child)
                            <li><a href="{{ url('/'.$child->url) }}">{{ $child->title }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
