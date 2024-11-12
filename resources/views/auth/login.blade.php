<x-layouts.app title="Login" metaDescription="Login meta description">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Login</h1>
    <form class="max-w-2xl px-8 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-slate-800"
        action="{{ route('login') }}" method="POST">

        {{-- Protección CSRF --}}
        @csrf

        {{-- Campo Email --}}
        <label class="flex flex-col">
            <span class="mb-1 font-serif text-slate-600 dark:text-slate-400">Email</span>
            <input
                class="rounded-md shadow-sm border p-2 border-slate-300 dark:border-slate-700 dark:bg-slate-900/80 text-slate-700 dark:text-slate-100 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-2 focus:ring-sky-300 focus:border-sky-500 dark:focus:ring-sky-600"
                name="email" type="email" value="{{ old('email') }}">

            {{-- Mensaje de Error --}}
            @error('email')
                <small class="mt-1 font-bold text-red-500">{{ $message }}</small>
            @enderror
        </label>

        {{-- Campo Contraseña --}}
        <label class="flex flex-col mt-4">
            <span class="mb-1 font-serif text-slate-600 dark:text-slate-400">Contraseña</span>
            <input
                class="rounded-md shadow-sm border p-2 border-slate-300 dark:border-slate-700 dark:bg-slate-900/80 text-slate-700 dark:text-slate-100 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-2 focus:ring-sky-300 focus:border-sky-500 dark:focus:ring-sky-600"
                name="password" type="password">

            {{-- Mensaje de Error --}}
            @error('password')
                <small class="mt-1 font-bold text-red-500">{{ $message }}</small>
            @enderror
        </label>

        {{-- Recordarme Checkbox --}}
        <label class="flex items-center my-4">
            <input type="checkbox" name="remember"
                class="rounded border-slate-300 text-sky-600 shadow-sm focus:ring-sky-500 dark:focus:ring-sky-600 dark:border-slate-700">
            <span class="ml-2 text-slate-600 dark:text-slate-400">Recordarme</span>
        </label>


        {{-- Botón de Enviar --}}
        <div class="flex items-center justify-between mt-5">
            <a class="text-sm font-semibold underline rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none hover:text-sky-600 dark:hover:text-sky-400 transition"
                href="{{ route('register') }}">
                ¿No tienes una cuenta? Regístrate
            </a>

            <button
                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out bg-sky-800 rounded-md hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 dark:text-sky-200"
                type="submit">
                Iniciar Sesión
            </button>
        </div>
    </form>
</x-layouts.app>
