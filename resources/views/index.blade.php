@extends ('layout')

@section ('sidebar-html')
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Client Notes</h3>
        </div>

        <ul class="list-unstyled components">
            <p>Clients</p>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Client 1</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Note 1</a>
                    </li>
                    <li>
                        <a href="#">Note 2</a>
                    </li>
                    <li>
                        <a href="#">Note 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Client 2</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Note 1</a>
                    </li>
                    <li>
                        <a href="#">Note 2</a>
                    </li>
                    <li>
                        <a href="#">Note 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Client 3</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Note 1</a>
                    </li>
                    <li>
                        <a href="#">Note 2</a>
                    </li>
                    <li>
                        <a href="#">Note 3</a>
                    </li>
                </ul>
            </li>

        </ul>

    </nav>
    <!-- Page Content -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
        </nav>
    </div>
</div>
@endsection
