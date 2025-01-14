<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center text-primary mb-4">Multiplication Table</h1>

    <!-- แสดงค่าของ multiplier ที่ส่งจากคอนโทรลเลอร์ -->
    <div class="text-center mb-4">
        <p class="lead">Multiplier: <strong>{{ $multiplier }}</strong></p>
    </div>

    <!-- ฟอร์มรับค่า multiplier -->
    <div class="d-flex justify-content-center mb-4">
        <form action="{{ url('/multiplication') }}" method="post" class="w-50 shadow p-4 rounded bg-white">
            @csrf
            <div class="form-group mb-3">
                <label for="multiplier" class="form-label fs-5">Enter a multiplier:</label>
                <input type="number" name="multiplier" id="multiplier" class="form-control form-control-sm" value="{{ old('multiplier', $multiplier) }}" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2">Show Table</button>
        </form>
    </div>

    <!-- แสดงผลลัพธ์สูตรคูณ -->
    @if (!empty($multiplication_table))
        <div class="mt-4">
            <div class="text-center">
                @foreach ($multiplication_table as $row)
                    <p>{{ $row['multiplier'] }} x {{ $row['i'] }} = {{ $row['result'] }}</p>
                @endforeach
            </div>
        </div>
    @endif
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
