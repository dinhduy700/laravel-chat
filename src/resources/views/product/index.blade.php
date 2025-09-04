<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + Bootstrap</title>

    {{-- Bootstrap 5 CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center text-primary">Danh sách sản phẩm</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($viewModel->getProducts() as $i => $product)
                <tr>
                  <td>{{ $i + 1}}</td>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->price }}</td>
                </tr>
                 
              @endforeach

            </tbody>
          </table>

        {{-- Paging --}}
        <div class="d-flex justify-content-center">
          {{ $viewModel->getProducts()->links('pagination::bootstrap-5') }}
        </div>
    </div>

    {{-- Bootstrap 5 JS CDN (kèm Popper) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
