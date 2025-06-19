<x-layout>
    <x-slot:Shumbo>
        <h1 class="text-2xl font-bold">Create Job</h1>
    </x-slot:Shumbo>
    <form method="POST" action="/jobs">
        @csrf
        <input type="hidden" name="description" id="description"
            value="We are looking for a dedicated and experienced worker to join our team.">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="text-base/7 font-semibold text-gray-900">Create a New Job</h1>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="title"> Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Developer" required></x-form-input>
                            <x-form-error name="title"></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">
                            Salary
                        </x-form-label>
                        <div class="mt-2">

                            <x-form-input name="salary" id="salary" placeholder="$50,000 USD">

                            </x-form-input>
                            <x-form-error name="salary">

                            </x-form-error>
                        </div>
                    </x-form-field>
                </div>
            {{-- Buttons Section Under the Border --}}
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs/" type="button" class="text-sm/6 font-semibold items-center text-gray-900">Cancel</a>

                <x-form-button> Save</x-form-button>
            </div>
        </div>





    </form>


</x-layout>
