@section('menu-admin-left')
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{route('admin-home')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Dashboard </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin-user') }}" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p> User </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>Menu<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('menu-parent.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Menu Parent</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('menu-one-child.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Menu Tengah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('menu-two-child.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Menu Bawah</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('page.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Page</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Post<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('post.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Post</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('post-categories.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Post Kategori</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('slider.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>Slider</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('video.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>Video</p>
            </a>
        </li>
    </ul>
</nav>
@stop