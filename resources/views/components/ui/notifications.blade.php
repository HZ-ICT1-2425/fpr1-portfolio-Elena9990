@if (session('success'))
    <div id="alert-message">
        {{ session('success') }}
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif
@if (session('success_update'))
    <div id="alert-message">
        {{ session('success_update') }}
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif
@if (session('success_create'))
    <div id="alert-message">
        {{ session('success_create') }}
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif

