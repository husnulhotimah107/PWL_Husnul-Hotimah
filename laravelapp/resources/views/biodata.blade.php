<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata</h1>
    <p>Nama : {{ $nama }}</p>
    <p>Mata Kuliah</p>
    <ul>
        @foreach($matkul as $datamatkul)
            <li>{{ $datamatkul }}</li> @endforeach
    </ul>
</body>
</html>
