<x-layouts.app :title="$post->title" metaDescription="meta description">
    <h1 class="my-4 text-3xl font-serif text-center text-sky-600 dark:text-sky-500">Edit Post</h1>

    <form class="max-w-xl px-8 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-slate-800"
        action="{{ route('posts.update', $post) }}" method="POST">

        {{-- Seguridad y método PATCH para actualización --}}
        @csrf
        @method('PATCH')

        {{-- Campos del formulario de edición --}}
        @include('posts.from-fields')

        {{-- Botones de acción --}}
        <div class="flex items-center justify-between mt-6">
            <a href="{{ route('posts.index') }}"
                class="text-sm font-semibold underline rounded text-slate-600 dark:text-slate-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                Regresar
            </a>

            <button type="submit"
                class="inline-flex items-center px-4 py-2 text-xs font-semibold uppercase transition-colors duration-150 ease-in-out rounded-md text-white bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                Enviar
            </button>
        </div>
    </form>
</x-layouts.app>
