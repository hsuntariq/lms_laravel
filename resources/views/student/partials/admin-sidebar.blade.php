<ul class="d-flex flex-column bg-white p-4 gap-2" style="height:90vh;">
    <li
        class="d-flex {{ collect(request()->segments())->last() === 'home' ? 'active' : 'text-dark' }} rounded-3 p-3 gap-3 align-items-center">
        <div class="bi bi-blockquote-left"></div>
        <h6 class="m-0">
            <a class="text-decoration-none {{ collect(request()->segments())->last() === 'home' ? 'text-white' : 'text-dark' }}"
                href="#">
                Dashboard
            </a>
        </h6>
    </li>
    <li
        class="d-flex rounded-3 p-3 gap-3 align-items-center {{ collect(request()->segments())->last() === 'courses' ? 'active' : 'text-dark' }}">
        <div class="bi bi-book"></div>
        <h6 class="m-0">
            <a class="text-decoration-none {{ collect(request()->segments())->last() === 'courses' ? 'text-white' : 'text-dark' }}"
                href="#">
                Courses
            </a>
        </h6>
    </li>
    <li
        class="d-flex rounded-3 p-3 gap-3 align-items-center {{ collect(request()->segments())->last() === 'assignments' ? 'active' : 'text-dark' }}">
        <div class="bi bi-speedometer"></div>
        <h6 class="m-0">
            <a class="text-decoration-none {{ collect(request()->segments())->last() === 'assignments' ? 'text-white' : 'text-dark' }}"
                href="/tasks/assignments">
                Assignments
            </a>
        </h6>
    </li>
    <li
        class="d-flex rounded-3 p-3 gap-3 align-items-center {{ collect(request()->segments())->last() === 'attendance' ? 'active' : 'text-dark' }}">
        <div class="bi bi-speedometer"></div>
        <h6 class="m-0">
            <a class="text-decoration-none {{ collect(request()->segments())->last() === 'attendance' ? 'text-white' : 'text-dark' }}"
                href="#">
                Attendance
            </a>
        </h6>
    </li>
    <li
        class="d-flex rounded-3 p-3 gap-3 align-items-center {{ collect(request()->segments())->last() === 'settings' ? 'active' : 'text-dark' }}">
        <div class="bi bi-gear"></div>
        <h6 class="m-0">
            <a class="text-decoration-none {{ collect(request()->segments())->last() === 'settings' ? 'text-white' : 'text-dark' }}"
                href="#">
                Settings
            </a>
        </h6>
    </li>
</ul>
