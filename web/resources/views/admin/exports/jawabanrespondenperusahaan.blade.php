<table>
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama Perusahaan</th>
        <th>Email Perusahaan</th>
        <th>Nomor Telepon</th>
        <th>URL Perusahaan</th>		
        <th>Alamat Perusahaan</th>	
        <th>Kontak Personal</th>	
        <th>Email Kontak Personal</th>	
        <th>Jabatan</th>
        @foreach ($kd_pertanyaans as $kd_pertanyaan)
        <th>{{ $kd_pertanyaan->kd_jawaban }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($jawabanrespondens as $jawabanresponden)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $jawabanresponden->user->name}}</td>
            <td>{{ $jawabanresponden->user->email }}</td>
            <td>'{{ $jawabanresponden->user->perusahaan->no_telp }}</td>
            <td>{{ $jawabanresponden->user->perusahaan->url_web }}</td>
            <td>{{ $jawabanresponden->user->perusahaan->alamat }}</td>
            <td>{{ $jawabanresponden->user->perusahaan->nama_cp }}</td>
            <td>{{ $jawabanresponden->user->perusahaan->email_cp }}</td>
            <td>{{ $jawabanresponden->user->perusahaan->jabatan }}</td>
             @php
             $len = count($jawabanresponden->jawabanrespondendetail);
             @endphp
            @foreach ($kd_pertanyaans as $kd_pertanyaan)
             @foreach($jawabanresponden->jawabanrespondendetail as $key => $val )
            @if ($kd_pertanyaan->kd_jawaban == $val->kd_jawaban)
                <td>{{ $val->jawaban  }}</td>
                @break
            @endif
            @if ($key == $len)
                <td></td>
                @break
            @endif
            @endforeach
           @endforeach
        </tr>
    @endforeach
    </tbody>
</table>