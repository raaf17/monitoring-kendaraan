<table class="table" style="border: none">
    <tr>
        <td style="border-top: 0; border-bottom: 0;">Nama Pegawai</td>
        <td style="border-top: 0; border-bottom: 0;">:</td>
        <td style="border-top: 0; border-bottom: 0;">{{ $model->nama_pegawai }}</td>
    </tr>
    <tr>
        <td style="border-top: 0; border-bottom: 0;">Nama Driver</td>
        <td style="border-top: 0; border-bottom: 0;">:</td>
        <td style="border-top: 0; border-bottom: 0;">{{ $model->nama_driver }}</td>
    </tr>
    <tr>
        <td style="border-top: 0; border-bottom: 0;">Kendaraan</td>
        <td style="border-top: 0; border-bottom: 0;">:</td>
        <td style="border-top: 0; border-bottom: 0;">{{ $model->nama_kendaraan }}</td>
    </tr>
    <tr>
        <td style="border-top: 0; border-bottom: 0;">Tujuan</td>
        <td style="border-top: 0; border-bottom: 0;">:</td>
        <td style="border-top: 0; border-bottom: 0;">{{ $model->tujuan_pemesanan }}</td>
    </tr>
    <tr>
        <td style="border-top: 0; border-bottom: 0;">Dari Tanggal</td>
        <td style="border-top: 0; border-bottom: 0;">:</td>
        <td style="border-top: 0; border-bottom: 0;">{{ $model->tgl_pinjam }}</td>
    </tr>
    <tr>
        <td style="border-top: 0; border-bottom: 0;">Sampai Tanggal</td>
        <td style="border-top: 0; border-bottom: 0;">:</td>
        <td style="border-top: 0; border-bottom: 0;">{{ $model->tgl_kembali }}</td>
    </tr>
    <tr>
        <td style="border-top: 0; border-bottom: 0;">Status</td>
        <td style="border-top: 0; border-bottom: 0;">:</td>
        <td style="border-top: 0; border-bottom: 0;">
            @if ($model->status == 1) 
            <span class="badge badge-success">Approve</span>
            @elseif ($model->status == 0)
            <span class="badge badge-warning">Waiting</span>
            @elseif ($model->status == 3)
            <span class="badge badge-danger">Reject</span>
            @endif
        </td>
    </tr>
    <tr>
        <td style="border-top: 0; border-bottom: 0;">Approve By</td>
        <td style="border-top: 0; border-bottom: 0;">:</td>
        <td style="border-top: 0; border-bottom: 0;">{{ $model->nama_pejabat }}</td>
    </tr>
</table>