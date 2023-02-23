@if (session('success'))
    <script>
        Swal.fire(
        'Good job!',
        '{{ session('success') }}',
        'success'
        )
    </script>
@endif

@if (session('info'))
    <script>
        Swal.fire(
        'Upps!',
        '{{ session('info') }}',
        'info'
        )
    </script>
@endif

@error('email')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('password')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('visi')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('misi')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('struktur_organisasi')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('sejarah')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('nama')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('avatar')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('password_lama')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('password_baru')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('nip')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror

@error('gambar')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Info!</strong> {{ $message }}.
</div>
@enderror
