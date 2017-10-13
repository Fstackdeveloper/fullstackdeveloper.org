 @if ( $RemoveUL == 0 )                           
 <ul class="sub-menu">
 @endif
 
@foreach ($adminmenu AS $value)


                               	<li class="nav-item @if ($value->root == 1)  start @endif {{ $value->active ? ' active open' : '' }}">
                                <a href="{{ $value->route ? route($value->route) : 'javascript:;' }}" class="nav-link  {{ (count($value->childs) > 0) ? ' nav-toggle' : '' }} ">
                                    <i class="icon-{{ $value->icon }}"></i>
                                    <span class="title">{{ $value->title }}</span>
                                    @if ( $value->active) <span class="selected"></span> @endif
                                    @if (count($value->childs) > 0) <span class="arrow {{ ($value->active)? ' open' : '' }}"></span> @endif
                                </a>
@if (count($value->childs) > 0)

@include('admin.commons.sidebarItem', array('adminmenu'=> $value->childs, 'RemoveUL'=>0))

@endif
								</li>
@endforeach

 @if ($RemoveUL == 0) 
</ul>
 @endif