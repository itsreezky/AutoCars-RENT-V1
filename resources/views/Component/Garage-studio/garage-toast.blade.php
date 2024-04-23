@if(session('notifadd'))
<div class="toast bg-gradient-light fade show ms-auto mt-4" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header border-0 bg-transparent">
        <img class="me-2 mb-1 text-dark" src="{{asset ('assets/img/logo.png') }}" width="18"></img>
        <span class="me-auto font-weight-bold text-dark">Notification System</span>
        <b class="badge badge-success">SUCCESS</b>
        <i class="fas fa-times text-md ms-3 cursor-pointer text-dark" data-bs-dismiss="toast" aria-label="Close"></i>
    </div>
    <hr class="horizontal m-0">
    <div class="toast-body text-dark">
        <b>Congrats! {{ Auth::user()->nama }}.</b> <br> {{ session('notifadd') }}
    </div>
</div>
@endif

<div class="container">
    @if(session('notifup'))
    <div class="toast bg-gradient-light fade show ms-auto mt-4" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header border-0 bg-transparent">
            <img class="me-2 mb-1 text-dark" src="{{asset ('assets/img/logo.png') }}" width="18"></img>
            <span class="me-auto font-weight-bold text-dark">Notification System</span>
            <b class="badge badge-success">SUCCESS</b>
            <i class="fas fa-times text-md ms-3 cursor-pointer text-dark" data-bs-dismiss="toast"
                aria-label="Close"></i>
        </div>
        <hr class="horizontal m-0">
        <div class="toast-body text-dark">
            <b>Congrats! {{ Auth::user()->nama }}.</b> <br> {{ session('notifup') }}
        </div>
    </div>
    @endif

    <div class="container">
        @if(session('notifdel'))
        <div class="toast bg-gradient-light fade show ms-auto mt-4" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header border-0 bg-transparent">
                <img class="me-2 mb-1 text-dark" src="{{asset ('assets/img/logo.png') }}" width="18"></img>
                <span class="me-auto font-weight-bold text-dark">Notification System</span>
                <b class="badge badge-success">SUCCESS</b>
                <i class="fas fa-times text-md ms-3 cursor-pointer text-dark" data-bs-dismiss="toast"
                    aria-label="Close"></i>
            </div>
            <hr class="horizontal m-0">
            <div class="toast-body text-dark">
                <b>Congrats! {{ Auth::user()->nama }},</b> <br> {{ session('notifdel') }}
            </div>
        </div>
        @endif
