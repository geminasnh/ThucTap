<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    const PATH_VIEW = 'admin.products.';
    const PATH_UPLOAD = 'uploads/product';

    public function index()
    {
        $products = Product::with('category')->latest()->take(10)->get();
        return view(self::PATH_VIEW . 'index', compact('products'));
    }

    public function create()
    {
        $sku = $this->generateUniqueSku();
        $slug = '';
        $categories = Category::pluck('name', 'id')->all();
        return view(self::PATH_VIEW . 'create', compact('categories', 'sku', 'slug'));
    }

    public function store(StoreProductRequest $request)
    {
        if ($request->isMethod('POST')) {
            $param = $request->except('__token');

            // Handle image upload
            if ($request->hasFile('thumb_image')) {
                $filename = $request->file('thumb_image')->store(self::PATH_UPLOAD, 'public');
            } else {
                $filename = null;
            }

            $param['thumb_image'] = $filename; // Save the image path
            $param['slug'] = $this->createSlug($request->name); // Generate slug
            $param['status'] = $request->qty > 0 ? 1 : 0; // Set status

            Product::create($param);
            return redirect()->route('admin.products.index')->with('success', 'Product added successfully.');
        }
    }
    public function show(Product $product)
{
    // $product = Product::findOrFail($id);
    return view(self::PATH_VIEW . 'show', compact('product'));
}

    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id')->all(); // Lấy danh sách danh mục
        return view(self::PATH_VIEW . 'edit', compact('product', 'categories'));
    }
    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->isMethod('PUT')) {
            $param = $request->except('__token', '__method');

            // Handle image upload
            if ($request->hasFile('thumb_image')) {
                // Delete the old image if it exists
                if ($product->thumb_image && Storage::disk('public')->exists($product->thumb_image)) {
                    Storage::disk('public')->delete($product->thumb_image);
                }

                $filename = $request->file('thumb_image')->store(self::PATH_UPLOAD, 'public');
            } else {
                $filename = $product->thumb_image; // Keep the old image if no new one is uploaded
            }

            $param['thumb_image'] = $filename; // Save the image path
            $param['slug'] = $this->createSlug($request->name); // Generate slug
            $param['status'] = $request->qty > 0 ? 1 : 0; // Set status

            $product->update($param);
            return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
        }
    }

    public function destroy(Product $product)
    {
        // Delete the image if it exists
        if ($product->thumb_image && Storage::disk('public')->exists($product->thumb_image)) {
            Storage::disk('public')->delete($product->thumb_image);
        }

        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }

    protected function generateUniqueSku()
    {
        do {
            $sku = 'SKU-' . strtoupper(uniqid());
        } while (Product::where('sku', $sku)->exists());

        return $sku;
    }

    protected function createSlug($name)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;

        $count = 1;
        while (Product::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}
