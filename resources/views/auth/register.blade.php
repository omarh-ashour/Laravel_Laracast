<x-layout>
    <x-slot:Shumbo>
        <h1 class="text-2xl font-bold">Register</h1>
    </x-slot:Shumbo>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="firstname"> First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="firstname"  required></x-form-input>
                            <x-form-error name="first_name"></x-form-error>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="lastname"> Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="lastname"  required></x-form-input>
                            <x-form-error name="last_name"></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">
                            Email
                        </x-form-label>
                        <div class="mt-2">

                            <x-form-input name="email" id="email"  type="email" required>

                            </x-form-input>
                            <x-form-error name="email">

                            </x-form-error>
                        </div>
                    </x-form-field>

                     <x-form-field>
                        <x-form-label for="password">
                            Password
                        </x-form-label>
                        <div class="mt-2">

                            <x-form-input name="password" id="password" type="password"  required>

                            </x-form-input>
                            <x-form-error name="password">

                            </x-form-error>
                        </div>
                    </x-form-field>

                     <x-form-field>
                        <x-form-label for="password_confirmation">
                            Password Confirmation
                        </x-form-label>
                        <div class="mt-2">

                            <x-form-input name="password_confirmation" id="password_confirmation" type="password"  required>

                            </x-form-input>
                            <x-form-error name="password_confirmation">

                            </x-form-error>
                        </div>
                    </x-form-field>
                </div>
            {{-- Buttons Section Under the Border --}}
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" type="button" class="text-sm/6 font-semibold items-center text-gray-900">Cancel</a>

                <x-form-button> Register </x-form-button>
            </div>
        </div>





    </form>


</x-layout>
