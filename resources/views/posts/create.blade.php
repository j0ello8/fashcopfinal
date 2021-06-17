
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="row">
            <h1> Add A New Project</h1>
        </div>

        <form action="/p" enctype="multipart/form-data" method="POST">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="caption" :value="__('Project Name')" />

                <x-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" required autofocus />
                @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <!-- Location  Address -->
            <div class="mt-4">
                <x-label for="location" :value="__('Location')" />

                <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required />
            </div>

            <div class="mt-4">
                <x-label for="describtion" :value="__('Brief Project Description')" />

                <x-input id="describtion" class="block mt-1 w-full" type="text" name="describtion" :value="old('describtion')" required />
            </div>

            <div class="mt-4">
                <x-label for="budget" :value="__('Estimated Budget')" />

                <x-input id="budget" class="block mt-1 w-full" type="text" name="budget" :value="old('budget')" required />
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label">Project Preview Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
    
                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>

             <div class="row pt-4">
                <x-button class="ml-4">
                    {{ __('Add New Project') }}
                </x-button>
                {{-- <button class="btn btn-primary"> Add New Project</button> --}}
            </div>


        </form>
    </x-auth-card>
</x-guest-layout>





{{-- <div class="container col-11">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1> Add A New Project</h1>
                </div>
                <div class="form-group row">
                    <x-label for="caption" class="col-md-4 col-form-label"/>Project name</label>
                    <x-input id="caption" type="text" class="form-control @error('caption') is-invalid 
                        @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus/>
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group row">
                    <label for="location" class="col-md-4 col-form-label">Location</label>
                    <input id="location" type="text" class="form-control @error('location') is-invalid 
                        @enderror" name="location" value="{{ old('location') }}"  autocomplete="location" autofocus>   
                    @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                </div>
                <div class="form-group row">
                    <label for="describtion" class="col-md-4 col-form-label">description</label>
                    <input id="description" type="text" class="form-control @error('describtion') is-invalid 
                        @enderror" name="describtion" value="{{ old('describtion') }}"  autocomplete="describtion" autofocus>   
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                </div>
                <div class="form-group row">
                    <label for="budget" class="col-md-4 col-form-label">Estimated Budget</label>
                    <input id="budget" type="text" class="form-control @error('budget') is-invalid 
                        @enderror" name="budget" value="{{ old('budget') }}"  autocomplete="budget" autofocus>   
                    @error('budget')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror    
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Project Preview Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
        
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary"> Add New Project</button>
                </div>
            </div>
        </div>
    </form>
</div> --}}
© 2021 Copyright FaShCoP