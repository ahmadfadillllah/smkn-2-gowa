@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        @include('notif.index')
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Visi Sekolah</h4>
                    </div>
                    <form action="{{ route('profilsekolah.visi_update') }}" method="POST">
                        @csrf
                        <div class="card-body custom-ekeditor">
                            <textarea name="visi" id="ckeditor">{{ $visi->visi }}</textarea>
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-table-cells-large me-2"></i>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
