<ul class="navbar-nav mr-auto" {!! clean($options) !!}>
    @foreach ($menu_nodes as $key => $row)
        <li class="nav-item @if ($row->has_child) menu-item-has-children @endif {{ $row->css_class }} @if ($row->active) active @endif">
            <a class="nav-link" href="{{ $row->url }}" target="{{ $row->target }}">
                @if ($row->icon_font)<i class='{{ trim($row->icon_font) }}'></i> @endif{{ $row->title }}
                @if ($row->has_child) <span class="toggle-icon"><i class="fa fa-angle-down"></i></span>@endif
            </a>
            @if ($row->has_child)
                {!!
                    Menu::generateMenu([
                        'menu'       => $menu,
                        'menu_nodes' => $row->child,
                        'view'       => 'main-menu',
                        'options'    => ['class' => 'sub-menu'],
                    ])
                !!}
            @endif
        </li>
    @endforeach
</ul>