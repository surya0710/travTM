<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='dashboard') collapsed @endif" href="{{ route('dashboard')}}" >
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='pages') collapsed @endif"  href="{{ url('panel/pages/list') }}">
            <i class="bi bi-menu-button-wide"></i><span>Pages</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='banners') collapsed @endif"  href="{{ url('panel/banners/list') }}">
            <i class="bi bi-menu-button-wide"></i><span>Banners</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='category') collapsed @endif"  href="{{ url('panel/category/list') }}">
            <i class="bi bi-menu-button-wide"></i><span>Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='subcategory') collapsed @endif"  href="{{ url('panel/subcategory/list') }}">
            <i class="bi bi-menu-button-wide"></i><span>Sub Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='service') collapsed @endif"  href="{{ route('servicelist') }}">
            <i class="bi bi-menu-button-wide"></i><span>Services</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='blogcategory') collapsed @endif"  href="{{ url('panel/blogcategory/list') }}">
            <i class="bi bi-menu-button-wide"></i><span>Blog Category</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='blog') collapsed @endif"  href="{{ url('panel/blog/list') }}">
            <i class="bi bi-menu-button-wide"></i><span>Blog</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='contact') collapsed @endif"  href="{{ url('panel/contact/list') }}">
            <i class="bi bi-menu-button-wide"></i><span>Contact</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) !='websettings') collapsed @endif"  href="{{ url('panel/websettings') }}">
            <i class="bi bi-menu-button-wide"></i><span>Website Settings</span>
        </a>
    </li>

</ul>

</aside>