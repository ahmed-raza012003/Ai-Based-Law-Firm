@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="fw-bold mb-4">Add New Lawyer</h4>
    <form action="{{ route('lawyers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Select User</label>
            <select name="user_id" class="form-select" required>
                <option value="">-- Select User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" required>
        </div>

        <div class="mb-3">
            <label class="form-label">City</label>
            <input type="text" class="form-control" name="city" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="available">Available</option>
                <option value="busy">Busy</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Categories</label>
            <select name="categories[]" class="form-control" multiple="multiple" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Add Lawyer</button>
    </form>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize select2 for categories select
        $('select[name="categories[]"]').select2();
    });
</script>
@endsection
