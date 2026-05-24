<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Post Details</h1>
                <a href="{{ route('posts.index') }}" class="text-gray-600 hover:text-gray-800">Back to Posts</a>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="mb-4">
                    <span class="text-gray-500 text-sm">ID</span>
                    <p class="text-gray-900 font-semibold">{{ $post->id }}</p>
                </div>

                <div class="mb-4">
                    <span class="text-gray-500 text-sm">Title</span>
                    <p class="text-gray-900 font-semibold">{{ $post->title }}</p>
                </div>

                <div class="mb-4">
                    <span class="text-gray-500 text-sm">Category</span>
                    <p class="text-gray-900">{{ $post->category ? $post->category->name : 'No category' }}</p>
                </div>

                <div class="mb-4">
                    <span class="text-gray-500 text-sm">Content</span>
                    <p class="text-gray-900 whitespace-pre-wrap">{{ $post->content }}</p>
                </div>

                <div class="mb-4">
                    <span class="text-gray-500 text-sm">Created At</span>
                    <p class="text-gray-900">{{ $post->created_at->format('M d, Y H:i') }}</p>
                </div>

                <div class="mb-4">
                    <span class="text-gray-500 text-sm">Updated At</span>
                    <p class="text-gray-900">{{ $post->updated_at->format('M d, Y H:i') }}</p>
                </div>

                <div class="mt-6 pt-6 border-t">
                    <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-3 transition duration-200">
                        Edit
                    </a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition duration-200" onclick="return confirm('Are you sure you want to delete this post?')">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
