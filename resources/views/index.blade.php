@extends('layouts.center')
@section('konten')
    <div class="container">
        <div class="card my-4 shadow" data-aos="fade-up">
            <div class="card-body">
                <h2 class="card-title">Usulan Satya Lencana</h2>
                <p class="card-text">
                    kontekstual...
                </p>
            </div>
        </div>

        <div class="card mb-4 shadow" data-aos="fade-up" data-aos-delay="100">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Buat Usulan Satya Lencana</h4>
                    <a href="{{ route('usulan.create') }}" class="btn btn-primary btn-round ms-auto btn-sm">
                        <i class="fa fa-plus"></i> Usulkan
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tableUsul" class="display table table-striped table-hover table-condensed" width="100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NIP</th>
                                <th>NAMA</th>
                                <th>TINGKAT</th>
                                <th>PERIODE</th>
                                <th>STATUS</th>
                                <th style="width: 10%">AKSI</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    $(document).ready(function() {
        $('#tableUsul').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('usulan.data') }}',
            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                },
                {
                    data: 'nip',
                },
                {
                    data: 'nama',
                },
                {
                    data: 'tingkatan',
                },
                {
                    data: 'periode',
                },
                {
                    data: 'status',
                },
                {
                    data: 'action',
                    ,
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const nipInput = document.getElementById('nip');
        const namaInput = document.getElementById('nama');
        const tingkatanInput = document.getElementById('tingkatan');
        const periodeInput = document.getElementById('periode');
        const pengantarInput = document.getElementById('pengantar');
        const tanggalInput = document.getElementById('tanggal');

        nipInput.addEventListener('change', async () => {
            const nip = nipInput.value;

            if (nip) {
                try {
                    const response = await fetch(
                        `/api/get-data/${nip}`); // Replace with your actual API endpoint
                    if (response.ok) {
                        const data = await response.json();

                        // Populate the form fields with the fetched data
                        namaInput.value = data.nama || '';
                        tingkatanInput.value = data.tingkatan || '';
                        periodeInput.value = data.periode || '';
                        pengantarInput.value = data.pengantar || '';
                        tanggalInput.value = data.tanggal || '';

                    } else {
                        console.error('Data not found or invalid NIP');
                        // Optionally clear the fields if the API returns an error
                        namaInput.value = '';
                        tingkatanInput.value = '';
                        periodeInput.value = '';
                        pengantarInput.value = '';
                        tanggalInput.value = '';
                    }
                } catch (error) {
                    console.error('Error fetching data:', error);
                }
            } else {
                // Clear the fields if NIP is empty
                namaInput.value = '';
                tingkatanInput.value = '';
                periodeInput.value = '';
                pengantarInput.value = '';
                tanggalInput.value = '';
            }
        });
    });
</script>
