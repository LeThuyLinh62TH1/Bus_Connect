@extends('admin/layouts/HomePage')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Cập nhật luồng tuyến xe</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $category) }}" method="POST" >
                    @csrf
                    @method('PUT')
                    {{-- @if (session('error'))
                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    {{-- <input type="hidden" name="id" value="{{ $category->id }}"> --}}
                    {{-- <div class="mb-3">
                        <label for="image" class="form-label">Ảnh</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div> --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Tuyến xe</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title', $category->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="route_outbound" class="form-label">Lộ trình chiều đi</label>
                        <input type="text" class="form-control @error('route_outbound') is-invalid @enderror"
                            id="route_outbound" name="route_outbound"
                            value="{{ old('route_outbound', $category->route_outbound) }}" required>
                        @error('route_outbound')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="route_inbound" class="form-label">Lộ trình chiều về</label>
                        <input type="text" class="form-control @error('route_inbound') is-invalid @enderror"
                            id="route_inbound" name="route_inbound"
                            value="{{ old('route_inbound', $category->route_inbound) }}" required>
                        @error('route_inbound')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="operating_time" class="form-label">Thời gian hoạt động</label>
                        <input type="text" class="form-control @error('operating_time') is-invalid @enderror"
                            id="operating_time" name="operating_time"
                            value="{{ old('operating_time', $category->operating_time) }}" required>
                        @error('operating_time')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá vé</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" value="{{ old('price', $category->price) }}" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select class="form-select @error('status') is-invalid @enderror" id="status" name="status"
                            required>
                            <option value="1" {{ old('status', $category->status) ? 'selected' : '' }}>Hoạt động
                            </option>
                            <option value="0" {{ old('status', !$category->status) ? 'selected' : '' }}>Ngừng</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
