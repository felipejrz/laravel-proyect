<div class="space-y-6">
    {{-- Campo de Título --}}
    <label class="flex flex-col">
        <span class="mb-1 font-serif text-slate-600 dark:text-slate-400">Title</span>
        <input
            class="rounded-md shadow-sm border p-2 border-slate-300 dark:border-slate-700 dark:bg-slate-900/80 text-slate-700 dark:text-slate-100 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-2 focus:ring-sky-300 focus:border-sky-500 dark:focus:ring-sky-600"
            name="title"
            type="text"
            value="{{ old('title', $post->title) }}">

        {{-- Mensaje de Error --}}
        @error('title')
            <small class="mt-1 font-bold text-red-500">{{ $message }}</small>
        @enderror
    </label>

    {{-- Campo de Cuerpo --}}
    <label class="flex flex-col">
        <span class="mb-1 font-serif text-slate-600 dark:text-slate-400">Body</span>
        <textarea
            class="rounded-md shadow-sm border p-2 border-slate-300 dark:border-slate-700 dark:bg-slate-900/80 text-slate-700 dark:text-slate-100 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-2 focus:ring-sky-300 focus:border-sky-500 dark:focus:ring-sky-600"
            name="body">{{ old('body', $post->body) }}</textarea>

        {{-- Mensaje de Error --}}
        @error('body')
            <small class="mt-1 font-bold text-red-500">{{ $message }}</small>
        @enderror
    </label>
</div>
