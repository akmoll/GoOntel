<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Sepeda </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/sepeda">List Sepeda</a>
          </li>
          </li>
        </ul>

      </nav>

<div class="container">
    <p>Cari Data Sepeda : </p>
	<form action="/sepeda/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Nama Sepeda" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

    <h3>Data Sepeda</h3>
    <a href="/sepeda/tambah"> + Tambah Sepeda Baru </a>
    <br>
    <br>

    <table class="table table-hover">
        <tr>
            <th>Merk</th>
            <th>Jenis Sepeda</th>
			<th>Kode Sepeda</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach($sepeda as $m)
        <tr>
            <td>{{ $m->merk_sepeda}}</td>
            <td>{{ $m->jenis_sepeda}}</td>
            <td>{{ $m->kodesepeda}}</td>
            <td>{{ $m->status_sepeda }}</td>
            <td>
                <a href="/sepeda/hapus/{{ $m->kodesepeda}}"> Hapus </a>
                <a href="/sepeda/detail/{{ $m->kodesepeda}}"> Detail </a>
            </td>
        </tr>
            @endforeach
        </table>

        <br>

    </div>

</body>
</html>
