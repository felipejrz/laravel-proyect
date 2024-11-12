<x-layouts.app title="Crear nuevo post" metaDescription="Formulario para crear un nuevo blog post">
    <h1 class="my-6 text-3xl font-serif text-center text-sky-600 dark:text-sky-500">Crear Nuevo Post</h1>

    {{-- Formulario para crear un nuevo post --}}
    <form class="max-w-2xl px-8 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-slate-800"
        action="{{ route('posts.store') }}" method="POST">

        {{-- Protección CSRF --}}
        @csrf

        {{-- Campos del formulario --}}
        @include('posts.from-fields')

        {{-- Botones de acción --}}
        <div class="flex items-center justify-between mt-6">
            <a href="{{ route('posts.index') }}"
                class="text-sm font-semibold text-slate-600 underline rounded dark:text-slate-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                Regresar
            </a>

            <button type="submit"
                class="inline-flex items-center px-5 py-2 text-xs font-semibold text-white uppercase transition-all duration-150 ease-in-out bg-sky-800 rounded-md hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 dark:bg-sky-700 dark:text-sky-200">
                Enviar
            </button>
        </div>
    </form>
</x-layouts.app>
