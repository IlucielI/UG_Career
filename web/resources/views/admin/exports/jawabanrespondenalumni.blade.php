<table>
    <thead>
    <tr>
        <th>kdptimsmh</th>
        <th>kdpstmsmh</th>
        <th>nimhsmsmh</th>
        <th>nmmhsmsmh</th>
        <th>telpomsmh</th>		
        <th>emailmsmh</th>	
        <th>tahun_lulus</th>	
        <th>nik</th>
        <th>npwp</th>
        @foreach ($kd_pertanyaans as $kd_pertanyaan)
        <th>{{ $kd_pertanyaan->kd_jawaban }}</th>
        @endforeach
        <!-- <th>F21</th>
        <th>F22</th>
        <th>F23</th>
        <th>F24</th>
        <th>F25</th>
        <th>F26</th>
        <th>F27</th>
        <th>F3</th>
        <th>F4</th>
        <th>F6</th>
        <th>F7</th>
        <th>F7A</th>
        <th>F1A</th>
        <th>F10</th>
        <th>F1B</th>
        <th>F16</th>
        <th>F1C</th>
        <th>F8</th>
        <th>F504</th>
        <th>F504A</th>
        <th>F504B</th>
        <th>F510A</th>
        <th>F510B</th>
        <th>F11</th>
        <th>F5B</th>
        <th>F5C</th>
        <th>F5D</th>
        <th>F18A</th>
        <th>F18B</th>
        <th>F18C</th>
        <th>F18D</th>
        <th>F12</th>
        <th>F14</th>
        <th>F15</th>
        <th>F1761</th>
        <th>F1763</th>
        <th>F1765</th>
        <th>F1767</th>
        <th>F1769</th>
        <th>F1771</th>
        <th>F1773</th>
        <th>F1762</th>
        <th>F1764</th>
        <th>F1766</th>
        <th>F1768</th>
        <th>F1770</th>
        <th>F1772</th>
        <th>F1774</th>
        <th>F1D</th>
        <th>F1E</th>  -->
    </tr>
    </thead>
    <tbody>
    @foreach($jawabanrespondens as $jawabanresponden)
        <tr>
            <td>031037</td>
            <td>{{ $jawabanresponden->user->alumni->prodi->kd_prodi }}</td>
           <td>{{ $jawabanresponden->user->alumni->npm }}</td>
            <td>{{ $jawabanresponden->user->name }}</td>
            <td>'{{ $jawabanresponden->user->alumni->no_telp }}</td>
            <td>{{ $jawabanresponden->user->email }}</td>
            <td>{{ $jawabanresponden->user->alumni->tahun_lulus }}</td>
            <td>'{{ $jawabanresponden->user->alumni->nik }}</td>
            <td>'{{ $jawabanresponden->user->alumni->npwp }}</td>
             @php
             $len = count($jawabanresponden->jawabanrespondendetail);
             @endphp
            @foreach ($kd_pertanyaans as $kd_pertanyaan)
             @foreach($jawabanresponden->jawabanrespondendetail as $key => $val )
            @if ($kd_pertanyaan->kd_jawaban == $val->kd_jawaban)
                <td>{{ $val->jawaban  }}</td>
                @break
            @endif
            @if ($key == $len - 1)
                <td></td>
                @break
            @endif
            @endforeach
           @endforeach
        </tr>
    @endforeach
    </tbody>
</table>