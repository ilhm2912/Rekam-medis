<div class="modal fade" id="modal-pasien" tabindex="-1" role="dialog" aria-labelledby="modal-rekamMedis">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pilih Pasien</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-pasien">
                    <thead>
                        <th width="5%">No</th>
                        <th>Nama Hewan</th>
                        <th>Jenis Hewan</th>
                        <th>Spesies</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Pemilik</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th><i class="fa fa-cog"></i></th>
                    </thead>
                    <tbody>
                        @foreach ($pasien as $key => $item)
                            <tr>
                                <td width="5%">{{ $key + 1 }}</td>
                                <td>{{ $item->nm_hewan }}</td>
                                <td>{{ $item->jenis_hewan }}</td>
                                <td>{{ $item->spesies }}</td>
                                <td>{{ $item->sex }}</td>
                                <td>{{ $item->nm_pemilik }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    <a href="{{ route('transaction.create', $item->id) }}"
                                        class="btn btn-primary btn-xs btn-flat">
                                        <i class="fa fa-check-circle"></i>
                                        Pilih
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
