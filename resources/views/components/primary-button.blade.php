<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-r from-green-500 to-blue-500 hover:from-green-600 hover:to-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all ease-in-out duration-300 shadow-lg hover:shadow-xl']) }}>
    {{ $slot }}
</button>
