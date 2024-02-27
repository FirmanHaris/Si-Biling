@extends('layout.layout_backend.app')
@section('content')
    <div class="container">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold ">Detail Kelas {{ $detail[0]->kelas->nama_kelas }}
                            <h5>WALI KELAS {{ $detail[0]->kelas->guru->nama }}</h5>
                            {{-- @foreach ($siswa as $dk)
                                {{ $dk->detail_kelas->id_kelas }}
                            @endforeach --}}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAdd">
                                Add
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama Siswa</th>
                                        <th>#Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detail as $dk)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dk->siswa->nis }}</td>
                                            <td>{{ $dk->siswa->nama }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="modal" data-target="#ModalEdit"
                                                        title="" class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit ">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" data-toggle="" title="" data-id=""
                                                            data-nama="" class="btn btn-link btn-danger deletealertsiswa"
                                                            data-original-title="Hapus">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal Add Siswa --}}

        <div class="modal fade bd-example-modal-lg" id="ModalAdd" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Data
                            Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('insertdetail') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nis</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($siswa as $sis)
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $sis->nama }}</td>
                                            <td>{{ $sis->nis }}</td>
                                            <td>
                                                <input type="checkbox" name="$sis->nama[]"
                                                    class="@error('nama')
is-invalid
@enderror">

                                                @error('nama')
                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- end modal siswa --}}
    </div>
@endsection
