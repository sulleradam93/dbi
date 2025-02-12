<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            <a href="{{ route('companies.index') }}" class="text-white hover:text-gray-400">
                {{ __('companies.create.companies') }}
            </a>
            <span class="mx-2"> &gt; </span>
            {{ __('companies.create.edit_company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="{{ route('companies.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">{{ __('companies.create.name') }}</label>
                        <input type="text" name="name" id="name"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('name') is-invalid @enderror"
                               value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">{{ __('companies.create.email') }}</label>
                        <input type="email" name="email" id="email"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="form-label">{{ __('companies.create.phone') }}</label>
                        <input type="text" name="phone" id="phone"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('phone') is-invalid @enderror"
                               value="{{ old('phone') }}" required>
                        @error('phone')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="address" class="form-label">{{ __('companies.create.address') }}</label>
                        <input type="text" name="address" id="address"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('address') is-invalid @enderror"
                               value="{{ old('address') }}" required>
                        @error('address')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('companies.index') }}" class="ml-4 px-4 py-2 text-gray-600 border border-gray-300 border-2 rounded-md focus:outline-none no-underline">
                            {{ __('companies.create.cancel') }}
                        </a>
                        
                        <button class="btn btn-primary ml-4 px-4 py-2">
                            {{ __('companies.create.save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>