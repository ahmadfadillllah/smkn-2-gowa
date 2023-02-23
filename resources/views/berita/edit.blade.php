@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masukkan Berita/Kegiatan</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="needs-validation" action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" novalidate >
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom05">Kategori
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <select class="default-select wide form-control" id="validationCustom05" name="kategoriberita_id">
                                                    <option {{ $berita->kategoriberita_id == $berita->kategoriberita_id ? "$berita->kategori->nama" : ""}} value="{{ $berita->kategoriberita_id }}">{{ $berita->kategori->nama }}
                                                        @foreach ($kategori as $k)
                                                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                                        @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a one.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom06">Judul
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="validationCustom06" name="judul" value="{{ $berita->judul }}" required>
                                                <div class="invalid-feedback">
                                                    Masukkan Judul.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom06">Gambar
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-7">
                                                <input type="file" class="form-control" id="validationCustom06" name="gambar" placeholder="Masukkan Gambar">
                                                <div class="invalid-feedback">
                                                    Masukkan Gambar.
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <a href="{{ asset('admin/finlab.dexignzone.com/xhtml/images/berita') }}/{{ $berita->gambar }}" class="btn btn-info" target="_blank">Lihat Gambar</a>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-12 col-form-label" for="validationCustom06">Isi
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-12">
                                                <div class="card-body custom-ekeditor">
                                                    <textarea name="isi" id="ckeditor">{{ $berita->isi }}</textarea>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Masukkan Isi.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-lg-12 ms-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>
@include('dashboard.layout.footer')
