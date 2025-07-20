@if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        <ul class="list-disc pl-5 space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{-- Name & Quantity --}}
    <div class="md:flex md:gap-6">
        <div class="md:w-1/2 mb-4 md:mb-0">
            <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter name" required>
        </div>
        <div class="md:w-1/2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Quantity</label>
            <input type="number" name="quantity" value="{{ old('quantity', $category->quantity ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    {{-- Type & Is Active --}}
    <div class="md:flex md:gap-6 items-end">
        <div class="md:w-1/2 mb-4 md:mb-0">
            <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>
            <select name="type" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="Physical" {{ old('type', $category->type ?? '') == 'Physical' ? 'selected' : '' }}>Physical</option>
                <option value="Digital" {{ old('type', $category->type ?? '') == 'Digital' ? 'selected' : '' }}>Digital</option>
            </select>
        </div>
        <div class="md:w-1/2 flex items-center space-x-2">
            <input type="checkbox" name="is_active"
                {{ old('is_active', $category->is_active ?? false) ? 'checked' : '' }}
                class="form-checkbox text-blue-600 border-gray-300 rounded">
            <label class="text-sm text-gray-700">Active</label>
        </div>
    </div>

    {{-- Description --}}
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea name="description" rows="4"
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >{{ old('description', $category->description ?? '') }}</textarea>
    </div>

    {{-- Image & Available On --}}
    <div class="md:flex md:gap-6">
        <div class="md:w-1/2 mb-4 md:mb-0">
            <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
            <input type="file" name="image"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="md:w-1/2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Available On</label>
            <input type="date" name="available_on" value="{{ old('available_on', $category->available_on ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    {{-- Available At & Datetime --}}
    <div class="md:flex md:gap-6">
        <div class="md:w-1/2 mb-4 md:mb-0">
            <label class="block text-sm font-medium text-gray-700 mb-1">Available At</label>
            <input type="time" name="available_at" value="{{ old('available_at', $category->available_at ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="md:w-1/2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Available Datetime</label>
            <input type="datetime-local" name="available_datetime"
                value="{{ old('available_datetime', $category->available_datetime ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    {{-- Email & URL --}}
    <div class="md:flex md:gap-6">
        <div class="md:w-1/2 mb-4 md:mb-0">
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', $category->email ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="md:w-1/2">
            <label class="block text-sm font-medium text-gray-700 mb-1">URL</label>
            <input type="url" name="url" value="{{ old('url', $category->url ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    {{-- Color & Password --}}
    <div class="md:flex md:gap-6">
        <div class="md:w-1/2 mb-4 md:mb-0">
            <label class="block text-sm font-medium text-gray-700 mb-1">Color</label>
            <input type="color" name="color" value="{{ old('color', $category->color ?? '#000000') }}"
                class="w-full border border-gray-300 rounded h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="md:w-1/2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" name="password" value="{{ old('password', $category->password ?? '') }}"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

