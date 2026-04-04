<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- LEFT -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- RIGHT -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications -->
        <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span id="message-count" class="badge badge-warning navbar-badge">0</span>
    </a>

    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">Notifications</span>

        <div class="dropdown-divider"></div>

        <a href="{{ route('admin.message.index') }}" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> Lihat Pesan Masuk
        </a>

        <div class="dropdown-divider"></div>

        <a href="{{ route('admin.message.index') }}" class="dropdown-item dropdown-footer">
            See All
        </a>
    </div>
</li>

<script>
function loadMessageCount() {
    fetch('/admin/messages/count')
        .then(res => res.json())
        .then(data => {
            document.getElementById('message-count').innerText = data;
        });
}

loadMessageCount();
setInterval(loadMessageCount, 5000);
</script>

        <!-- Fullscreen -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <!-- Profile -->
        <li class="nav-item dropdown">
            <a class="nav-link d-flex align-items-center" data-toggle="dropdown" href="#">
                <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}"
                    class="img-circle elevation-2"
                    width="30" height="30" style="object-fit: cover;">
                <span class="ml-2">{{ Auth::user()->name ?? 'Admin' }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <span class="dropdown-item text-center font-weight-bold">
                    {{ Auth::user()->email ?? '-' }}
                </span>

                <div class="dropdown-divider"></div>

                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </button>
                </form>
            </div>
        </li>

    </ul>
</nav>

<!-- SCRIPT REALTIME -->
<script>
    function loadMessageCount() {
        fetch('/admin/messages/count')
            .then(response => response.json())
            .then(data => {
                document.getElementById('message-count').innerText = data;
            })
            .catch(error => console.log(error));
    }

    // pertama kali load
    loadMessageCount();

    // update tiap 5 detik
    setInterval(loadMessageCount, 5000);
</script>
