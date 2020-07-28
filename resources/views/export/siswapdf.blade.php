<table class="table">
	<thead>
	<tr>
		<th>Nama Lengkap</th>
		<th>Nis</th>
		<th>Kelas</th>	
		<th>Rata Rata nilai</th>
	</tr>
	</thead>
	<tbody>
		@foreach($siswa as $s)
		<tr>
			<td>{{$s->nama}}</td>
			<td>{{$s->nis}}</td>
			<td>{{$s->kelas}}</td>
			<td>{{$s->ratanilai()}}</td>
		</tr>
		@endforeach
	</tbody>
</table>