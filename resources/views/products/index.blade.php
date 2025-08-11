@extends('layouts.app')

@section('title', 'Home Product')

@section('contents')
<div class="container py-5">
  <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
    <div class="card-header text-white d-flex justify-content-between align-items-center" style="background: linear-gradient(90deg, #00bcd4, #2196f3); padding: 1.5rem;">
      <h3 class="mb-0 fw-bold"><i class="fa fa-boxes me-2"></i> Product Inventory</h3>
      <a href="{{ route('products.create') }}" class="btn btn-warning btn-lg fw-bold shadow-sm">
        <i class="fa fa-plus me-1"></i> Add Product
      </a>
    </div>

    <div class="card-body bg-light" style="padding: 2rem;">
      {{-- Success Message --}}
      @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm fw-semibold" role="alert">
          <i class="fa fa-check-circle me-1"></i> {{ Session::get('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      {{-- Product Table --}}
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center shadow-sm" style="min-width: 1400px; font-size: 1rem;">
          <thead style="background-color: #e3f2fd;" class="text-uppercase fw-bold text-primary">
            <tr style="height: 60px;">
              <th>SL</th>
              <th>Product</th>
              <th>Category</th>
              <th>Brand</th>
              <th>Model</th>
              <th>Serial No</th>
              <th>Project Serial</th>
              <th>Position</th>
              <th>User Description</th>
              <th>Remarks</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse($products as $p)
              <tr style="height: 55px; background-color: {{ $loop->iteration % 2 == 0 ? '#f9f9f9' : '#ffffff' }};">
                <td class="fw-bold text-info">{{ $loop->iteration }}</td>
                <td class="fw-semibold text-dark">{{ $p->product_name }}</td>
                <td><span class="badge bg-primary">{{ $p->category?->category_name ?? 'N/A' }}</span></td>
                <td><span class="badge bg-success">{{ $p->brand?->brand_name ?? 'N/A' }}</span></td>
                <td><span class="badge bg-warning text-dark">{{ $p->model?->model_name ?? 'N/A' }}</span></td>
                <td>{{ $p->serial_no ?? '-' }}</td>
                <td>{{ $p->project_serial_no ?? '-' }}</td>
                <td>{{ $p->position ?? '-' }}</td>
                <td>{{ $p->user_description ?? '-' }}</td>
                <td>{{ $p->remarks ?? '-' }}</td>
                <td>
                  <div class="d-flex justify-content-center gap-2">
                    <a href="{{ route('products.show', $p->id) }}" class="btn btn-sm btn-outline-info" title="View">
                      <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('products.edit', $p->id) }}" class="btn btn-sm btn-outline-warning" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{ route('products.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="11" class="text-center py-5 text-muted">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" alt="No products" width="100" class="mb-3 opacity-75">
                    <h5 class="fw-bold text-danger">No products found</h5>
                    <p class="small">Start by adding a new product to your inventory.</p>
                    <a href="{{ route('products.create') }}" class="btn btn-outline-primary btn-lg fw-bold">
                      <i class="fa fa-plus me-1"></i> Add Product
                    </a>
                  </div>
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      {{-- Optional Pagination --}}
      {{-- <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
      </div> --}}
    </div>
  </div>
</div>
@endsection
