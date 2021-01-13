<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
        <a href="./" class="navbar-brand">File</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#Collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="Collapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="index.html" class="nav-link active">Dashboard</a>
                </li>
                <li class="nav-item px-2">
                    <a href="posts.html" class="nav-link">Posts</a>
                </li>
                <li class="nav-item px-2">
                    <a href="categories.html" class="nav-link">Categories</a>
                </li>
                <li class="nav-item px-2">
                    <a href="users.html" class="nav-link">Users</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-user"></i> Welcome Brad
                    </a>
                    <div class="dropdown-menu">
                        <a href="profile.html" class="dropdown-item">
                            <i class="fas fa-user-circle"></i> Profile
                        </a>
                        <a href="settings.html" class="dropdown-item">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="nav-link">
                        <i class="fas fa-user-times"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HEADER -->
<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    <i class="fas fa-cog"></i> Dashboard</h1>
            </div>
        </div>
    </div>
</header>

<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#RegisterModal"><i class="fas fa-plus"></i>Register</a>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
                    <i class="fas fa-plus"></i> Planning
                </a>
            </div>

            <div class="col-md-2">
                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
                    <i class="fas fa-plus"></i> Add Course
                </a>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
                    <i class="fas fa-plus"></i> Add User
                </a>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fa fa-plus">Enventory</i>
                </a>
            </div>
        </div>
    </div>
</section>