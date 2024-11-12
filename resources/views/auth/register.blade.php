<x-layouts.app title="Register" metaDescription="Register meta description">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Register</h1>
    <form class="max-w-2xl px-8 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-slate-800"
        action="{{ route('register') }}" method="POST">

        {{-- Protección CSRF --}}
        @csrf

        {{-- Campo Nombre --}}
        <label class="flex flex-col">
            <span class="mb-1 font-serif text-slate-600 dark:text-slate-400">Nombre</span>
            <input
                class="rounded-md shadow-sm border p-2 border-slate-300 dark:border-slate-700 dark:bg-slate-900/80 text-slate-700 dark:text-slate-100 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-2 focus:ring-sky-300 focus:border-sky-500 dark:focus:ring-sky-600"
                autofocus="autofocus"
                name="name"
                type="text"
                value="{{ old('name') }}">

            {{-- Mensaje de Error --}}
            @error('name')
                <small class="mt-1 font-bold text-red-500">{{ $message }}</small>
            @enderror
        </label>

        {{-- Campo Email --}}
        <label class="flex flex-col mt-4">
            <span class="mb-1 font-serif text-slate-600 dark:text-slate-400">Email</span>
            <input
                class="rounded-md shadow-sm border p-2 border-slate-300 dark:border-slate-700 dark:bg-slate-900/80 text-slate-700 dark:text-slate-100 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-2 focus:ring-sky-300 focus:border-sky-500 dark:focus:ring-sky-600"
                name="email"
                type="email"
                value="{{ old('email') }}">

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
                name="password"
                type="password"
                value="{{ old('password') }}">

            {{-- Mensaje de Error --}}
            @error('password')
                <small class="mt-1 font-bold text-red-500">{{ $message }}</small>
            @enderror
        </label>

        {{-- Campo Confirmar Contraseña --}}
        <label class="flex flex-col mt-4">
            <span class="mb-1 font-serif text-slate-600 dark:text-slate-400">Confirmar Contraseña</span>
            <input
                class="rounded-md shadow-sm border p-2 border-slate-300 dark:border-slate-700 dark:bg-slate-900/80 text-slate-700 dark:text-slate-100 placeholder:text-slate-400 dark:placeholder:text-slate-500 focus:ring-2 focus:ring-sky-300 focus:border-sky-500 dark:focus:ring-sky-600"
                name="password_confirmation"
                type="password">

            {{-- Mensaje de Error --}}
            @error('password_confirmation')
                <small class="mt-1 font-bold text-red-500">{{ $message }}</small>
            @enderror
        </label>

        {{-- Botón de Enviar --}}
        <div class="flex items-center justify-between mt-6">
            <button type="submit"
                class="inline-flex items-center px-5 py-2 text-xs font-semibold text-white uppercase transition-all duration-150 ease-in-out bg-sky-800 rounded-md hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 dark:bg-sky-700 dark:text-sky-200">
                Register
            </button>
        </div>
    </form>
</x-layouts.app>
