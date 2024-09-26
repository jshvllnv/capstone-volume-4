<link rel="stylesheet" href="{{ asset('css/admin/sidebar.css') }}">

<aside id="sidebar">
    <div class="d-flex">
        <button id="toggle-btn" type="button" class="p-4">
            <i class="bx bx-menu fs-3"></i>
        </button>
        <div class="sidebar-logo">
            <a href="{{ url('admin') }}">CampusConnect</a>
        </div>
        
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="" class="sidebar-link text-decoration-none d-flex">
                <i class="bx bxs-dashboard fs-5"></i>
                <span class="fs-6">Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ url('roles')}}" class="sidebar-link text-decoration-none d-flex">
                <i class="bx bxs-file-find fs-5"></i>
                <span class="fs-6">Roles</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ url('permissions')}}" class="sidebar-link text-decoration-none d-flex">
                <i class="bx bxs-lock fs-5"></i>
                <span class="fs-6">Permissions</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ url('users')}}" class="sidebar-link text-decoration-none d-flex">
                <i class="bx bxs-user fs-5"></i>
                <span class="fs-6">Accounts</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="" class="sidebar-link text-decoration-none d-flex">
                <i class="bx bxs-notepad fs-5"></i>
                <span class="fs-6">Announcements</span>
            </a>
        </li>
    </ul>

    <div class="sidebar-footer">
        
        <a href="" class="sidebar-link">
            <i class="bx bxs-cog"></i>
            <span>Settings</span>
        </a>

    </div>
</aside>




<script src="{{ asset('js/admin/sidebar.js')}}"></script>

