<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link text-dark d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
            @if (Request::is('dashboard'))
                <i class="bi bi-house-fill"></i>
            @else
                <i class="bi bi-house"></i>
            @endif
            Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark d-flex align-items-center gap-2" href="/dashboard/posts">
            @if (Request::is('dashboard/posts*'))
                <i class="bi bi-file-post"></i>
            @else
                <i class="bi bi-file-post-fill"></i>
            @endif
            My Posts
        </a>
    </li>

    <hr class="my-3">

    <ul class="nav flex-column mb-auto">
        <li class="nav-item ms-3">
            <form action="/logout" method="post">
                @csrf
                <button class="dropdown-item" type="submit" id="logout" name="logout"><svg class="bi">
                        <use xlink:href="#door-closed" />
                    </svg> Logout</button>
            </form>
        </li>
    </ul>
</ul>
