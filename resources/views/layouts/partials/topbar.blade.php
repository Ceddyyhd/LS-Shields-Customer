<header class="topbar">
    <div class="container-xxl">
        <div class="navbar-header">
            <div class="d-flex align-items-center gap-2">
                <!-- Menu Toggle Button -->
                <div class="topbar-item">
                    <button type="button" class="button-toggle-menu">
                        <iconify-icon
                            icon="iconamoon:menu-burger-horizontal"
                            class="fs-22"
                        ></iconify-icon>
                    </button>
                </div>
            </div>

            <div class="d-flex align-items-center gap-1">
                <!-- Theme Color (Light/Dark) -->
                <div class="topbar-item">
                    <button
                        type="button"
                        class="topbar-button"
                        id="light-dark-mode"
                    >
                        <iconify-icon
                            icon="iconamoon:mode-dark-duotone"
                            class="fs-24 align-middle"
                        ></iconify-icon>
                    </button>
                </div>


                <!-- User -->
                <div class="dropdown topbar-item">
                    <a
                        type="button"
                        class="topbar-button"
                        id="page-header-user-dropdown"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        
                    <span class="d-flex align-items-center">
                        <img class="rounded-circle" 
                            width="32"
                            src="{{ auth()->user()->avatar 
                                ? Storage::url(auth()->user()->avatar) 
                                : Storage::url('images/default-avatar.png') }}" 
                            alt="User Avatar" />
                    </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome {{ auth()->user()->name }}!</h6>
                        <a class="dropdown-item" href="{{ route('customer.profile') }}">
                            <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                        <a class="dropdown-item" href="{{ route('customer.settings') }}">
                            <i
                                class="bx bx-edit-alt text-muted fs-18 align-middle me-1"
                            ></i
                            ><span class="align-middle">Einstellungen</span>
                        </a>


                        <div class="dropdown-divider my-1"></div>

                        <a
                            class="dropdown-item text-danger"
                            href="{{ route('second', ['auth', 'login'])}}"
                        >
                            <i class="bx bx-log-out fs-18 align-middle me-1"></i
                            ><span class="align-middle">Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@push('scripts')
<script>
$(document).ready(function() {
    $('#attendanceBtn').on('click', function() {
        $.ajax({
            url: '{{ route("attendance.toggle") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                const btn = $('#attendanceBtn');
                const status = $('#attendanceStatus');
                
                if (response.status === 'present') {
                    btn.removeClass('btn-danger').addClass('btn-success');
                    status.text('Anwesend');
                } else {
                    btn.removeClass('btn-success').addClass('btn-danger');
                    status.text('Abwesend');
                }
            },
            error: function(xhr) {
                console.error('Attendance toggle failed:', xhr);
            }
        });
    });
});
</script>
@endpush