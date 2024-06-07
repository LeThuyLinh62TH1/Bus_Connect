@extends('admin/layouts/HomePage')
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                    <h3>Danh sách chuyến xe</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-end">
                                    <p><a href="index-2.html">Admin</a> <i class="fas fa-caret-right"></i>
                                        Danh sách chuyến xe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Luồng Tuyến Xe Bus</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form action="{{ route('search.category') }}" method="GET">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here..." name="keyword">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>                                        
                                    </div>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="#" class="btn_1">Tìm Kiếm</a>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="{{ route('category.create') }}" class="btn_1">Thêm tuyến xe mới</a>
                                </div>
                                <div class="add_button ms-2">
                                    <a href="{{ route('category.trash') }}" class="btn_1 btn-danger"><i class="fas fa-trash-restore"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Thông báo -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="QA_table mb_30">
                            <table class="table lms_table_active">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col">Ảnh</th> --}}
                                        <th scope="col">Tuyến xe</th>
                                        <th scope="col">Lộ trình chiều đi</th>
                                        <th scope="col">Lộ trình chiều về</th>
                                        <th scope="col">Thời gian hoạt động</th>
                                        <th scope="col">Giá vé</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categories as $item)
                                        <tr>
                                            {{-- <td><img src="{{ asset($item->image) }}" alt="" width="100"></td> --}}
                                            <th scope="row"><a href="#"
                                                    class="question_content">{{ $item->title }}</a></th>
                                            <td>{{ $item->route_outbound }}</td>
                                            <td>{{ $item->route_inbound }}</td>
                                            <td>{{ $item->operating_time }}</td>
                                            <td>{{ number_format($item->price, 0, ',', '.') }} VND</td>
                                            <td><a href="#"
                                                    class="status_btn">{{ $item->status ? 'Hoạt động' : 'Ngừng' }}</a></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Action buttons">
                                                    <a href="{{ route('category.edit', $item->id) }}" class="btn btn-warning btn-sm me-2">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('category.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm me-2">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>                                                
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Không có chuyến xe nào.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
