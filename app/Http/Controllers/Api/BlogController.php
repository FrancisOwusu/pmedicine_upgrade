<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Blog;
use App\Http\Resources\BlogResource;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    use ApiResponse;

    /**
     * Get all blogs (paginated)
     */
    public function index(Request $request): JsonResponse
    {
        $perPage = $request->get('per_page', 15);
        $categoryId = $request->get('category_id');
        
        $query = Blog::with(['category', 'assets'])
            ->orderBy('id', 'DESC');
            
        if ($categoryId) {
            $query->where('cat_id', $categoryId);
        }
        
        $blogs = $query->paginate($perPage);
        
        return $this->paginatedResponse(
            BlogResource::collection($blogs),
            'Blogs retrieved successfully'
        );
    }

    /**
     * Get single blog
     */
    public function show($id): JsonResponse
    {
        $blog = Blog::with(['category', 'assets', 'comments'])->findOrFail($id);
        
        return $this->successResponse(
            new BlogResource($blog),
            'Blog retrieved successfully'
        );
    }

    /**
     * Get blogs by category
     */
    public function byCategory($categoryId): JsonResponse
    {
        $blogs = Blog::where('cat_id', $categoryId)
            ->with(['category', 'assets'])
            ->orderBy('id', 'DESC')
            ->paginate(15);
            
        return $this->paginatedResponse(
            BlogResource::collection($blogs),
            'Blogs retrieved successfully'
        );
    }

    /**
     * Create blog (admin only)
     */
    public function store(Request $request): JsonResponse
    {
        // Your existing store logic, but return JSON
        // ...
        
        return $this->successResponse(
            new BlogResource($blog),
            'Blog created successfully',
            201
        );
    }
}