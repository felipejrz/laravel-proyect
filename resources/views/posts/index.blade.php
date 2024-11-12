<x-layouts.app title="Blog" metaDescription="Blog meta description">

    <header class="px-6 py-4 space-y-4 text-center">
        <h1 class="font-serif text-4xl text-sky-600 dark:text-sky-500">Blog</h1>

        @auth
            <a class="inline-flex items-center px-6 py-3 text-sm font-semibold tracking-widest text-white uppercase transition-all duration-150 ease-in-out rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-sky-500"
                href="{{ route('posts.create') }}">Create new post</a>
        @endauth
    </header>

    <main class="grid gap-6 p-4 mx-auto max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:gap-8">
        @foreach ($posts as $post)
            <article
                class="flex flex-col justify-between max-w-full p-6 space-y-4 transition-shadow duration-150 ease-in-out bg-white rounded-lg shadow-sm hover:shadow-md dark:bg-slate-800">
                <header>
                    <h2 class="mb-2 text-2xl font-semibold text-slate-600 dark:text-slate-300">
                        <a href="{{ route('posts.show', $post) }}"
                            class="hover:text-sky-600 dark:hover:text-sky-400 transition-colors">
                            {{ $post->title }}
                        </a>
                    </h2>
                </header>
                @auth

                    <footer class="flex items-center justify-between pt-4 border-t border-slate-200 dark:border-slate-700">
                        <a class="inline-flex items-center text-sm font-medium tracking-wide text-slate-500 dark:text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 transition"
                            href="{{ route('posts.edit', $post) }}">Edit</a>

                        <form action="{{ route('posts.destroy', $post) }}" method="POST"
                            onsubmit="return confirm('Estas seguro de Eliminar este post?')">
                            @csrf
                            @method('DELETE')
                            <button
                                class="inline-flex items-center text-sm font-semibold tracking-wide text-red-500 dark:text-red-400 hover:text-red-600 dark:hover:text-red-500 transition"
                                type="submit">Delete</button>
                        </form>
                    </footer>
                @endauth
            </article>
        @endforeach
    </main>
</x-layouts.app>
