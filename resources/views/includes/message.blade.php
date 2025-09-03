@if (session('success'))
    <div class="alert alert-success mb-2">
        {{ session('success') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info mb-2">
        {{ session('info') }}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning mb-2">
        {{ session('warning') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger mb-2">
        {{ session('error') }}
    </div>
@endif
