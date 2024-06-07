@extends('admin/layouts/HomePage')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Thêm tuyến xe mới</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                {{-- <div class="mb-3">
                    <label for="image" class="form-label">Ảnh</label>
                    <input type="file" class="form-control" id="image" name="category_image" required>
                </div> --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Tuyến xe</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="route_outbound" class="form-label">Lộ trình chiều đi</label>
                    <input type="text" class="form-control" id="route_outbound" name="route_outbound" required>
                </div>
                <div class="mb-3">
                    <label for="route_inbound" class="form-label">Lộ trình chiều về</label>
                    <input type="text" class="form-control" id="route_inbound" name="route_inbound" required>
                </div>
                <div class="mb-3">
                    <label for="operating_time" class="form-label">Thời gian hoạt động</label>
                    <input type="text" class="form-control" id="operating_time" name="operating_time" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Giá vé</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Trạng thái</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="1">Hoạt động</option>
                        <option value="0">Ngừng hoạt động</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
