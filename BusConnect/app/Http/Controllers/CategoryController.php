<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin/pages/category/index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/pages/category/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        // $fileName = $request->category_image->getClientOriginalName();
        // $request->category_image->storeAs('public/images', $fileName);
        // $request->merge(['image'=> $fileName]);

        // dd($request->all());
 
       try{
        Category::create($request->all());
        return redirect()->route('category.index')->with('success','Thêm tuyến xe mới thành công');
       }catch(\Throwable $th){
        return redirect()->back()->with('error','Thêm tuyến xe mới không thành công');
       }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin/pages/category/edit', compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //dd($request->all());
        try{
            $category->update($request->all());
            return redirect()->route('category.index')->with('success','Cập nhật tuyến xe thành công');
           }catch(\Throwable $th){
            return redirect()->back()->with('error','Cập nhật tuyến xe không thành công');
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try{
            $category->delete();
            return redirect()->route('category.index')->with('success','Xóa tuyến xe thành công');
           }catch(\Throwable $th){
            return redirect()->back()->with('error','Xóa luồng tuyến không thành công');
           }
    }
    
    public function trash(){
        $categories = Category::onlyTrashed()->get();
        return view ('admin/pages/category/trash', compact('categories'));
    }

    public function restore($id){
        Category::withTrashed()->where('id',$id)->restore();
        return redirect()->route('category.index')->with('success','Khôi phục tuyến xe thành công');
    }
    public function forceDelete($id){
        Category::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('category.trash')->with('success','Xóa tuyến xe thành công');
    }
    public function search(Request $request)
{
    $keyword = $request->input('keyword');

    // Tìm kiếm các chuyến xe dựa trên từ khóa
    $categories = Category::where('title', 'like', "%$keyword%")
                            ->orWhere('route_outbound', 'like', "%$keyword%")
                            ->orWhere('route_inbound', 'like', "%$keyword%")
                            ->orWhere('operating_time', 'like', "%$keyword%")
                            ->orWhere('price', 'like', "%$keyword%")
                            ->orWhere('status', 'like', "%$keyword%")
                            ->get();

    return view('admin/pages/category/index', compact('categories'));
}
}
