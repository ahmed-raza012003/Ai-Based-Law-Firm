@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h4 class="fw-bold">All Lawyers</h4>
        <a href="{{ route('lawyers.create') }}" class="btn btn-dark">Add New Lawyer</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>City</th>
                <th>Status</th>
                <th>Categories</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lawyers as $key => $lawyer)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $lawyer->user->name }}</td>
                <td>{{ $lawyer->city }}</td>
                <td>
                    <span class="badge bg-{{ $lawyer->status == 'available' ? 'success' : 'danger' }}">
                        {{ ucfirst($lawyer->status) }}
                    </span>
                </td>
                <td>
                    @foreach($lawyer->categories as $category)
                        <span class="badge bg-info text-dark">{{ $category->name }}</span>
                    @endforeach
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editLawyerModal{{ $lawyer->id }}">Edit</a>
                    <form action="{{ route('lawyers.destroy', $lawyer->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            {{-- Edit Modal --}}
            <div class="modal fade" id="editLawyerModal{{ $lawyer->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <form action="{{ route('lawyers.update', $lawyer->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Lawyer</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control" name="address" value="{{ $lawyer->address }}" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">City</label>
                          <input type="text" class="form-control" name="city" value="{{ $lawyer->city }}" required>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Status</label>
                          <select name="status" class="form-select" required>
                              <option value="available" {{ $lawyer->status == 'available' ? 'selected' : '' }}>Available</option>
                              <option value="busy" {{ $lawyer->status == 'busy' ? 'selected' : '' }}>Busy</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Categories</label>
                          <select name="categories[]" class="form-select" multiple>
                              @foreach($categories as $category)
                                  <option value="{{ $category->id }}" {{ $lawyer->categories->contains($category->id) ? 'selected' : '' }}>
                                      {{ $category->name }}
                                  </option>
                              @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
