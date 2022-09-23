<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24" >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Register
                        </h2>
                        <p class="mb-4">Create an account and post a review!</p>
                    </header>

                    <form method="POST" action="/users">
                      @csrf 
                        <div class="mb-6">
                            <label for="name" class="inline-block text-lg mb-2">
                                Username
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="uname" value="{{old('uname')}}"
                            />

                          @error('uname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label for="fname" class="inline-block text-lg mb-2">
                                First Name
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="fname" value="{{old('fname')}}"
                            />

                          @error('fname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label for="lname" class="inline-block text-lg mb-2">
                                Last Name
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="lname" value="{{old('lname')}}"
                            />

                          @error('lname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label for="minitial" class="inline-block text-lg mb-2">
                                Middle Initial
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="minitial" value="{{old('minitial')}}"
                            />

                          @error('minitial')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>
                        
                        <div class="mb-6">
                            <label for="cluster" class="inline-block text-lg mb-2">
                                Cluster No.
                            </label>
                            <input
                                type="number"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="cluster" value="{{old('cluster')}}"
                            />

                          @error('cluster')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label for="bld" class="inline-block text-lg mb-2">
                                Building No.
                            </label>
                            <input
                                type="number"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="bld" value="{{old('bld')}}"
                            />

                          @error('bld')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label for="flr" class="inline-block text-lg mb-2">
                                Floor No.
                            </label>
                            <input
                                type="number"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="flr" value="{{old('flr')}}"
                            />

                          @error('flr')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label for="unit" class="inline-block text-lg mb-2">
                                Unit No.
                            </label>
                            <input
                                type="number"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="unit" value="{{old('unit')}}"
                            />

                          @error('unit')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label for="contact" class="inline-block text-lg mb-2">
                                Contact No.
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="contact" value="{{old('contact')}}"
                            />

                          @error('contact')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>
                        
                        <div class="mb-6">
                            <label for="birthday" class="inline-block text-lg mb-2">
                                Birthday <i>(YYYY-MM-DD)</i>
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="birthday" value="{{old('birthday')}}"
                            />

                          @error('birthday')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Email</label
                            >
                            <input
                                type="email"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email" value="{{old('email')}}"
                            />
                            
                          @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="password"
                                class="inline-block text-lg mb-2"
                            >
                                Password
                            </label>
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password" value="{{old('password')}}"
                            />

                          @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="password2"
                                class="inline-block text-lg mb-2"
                            >
                                Confirm Password
                            </label>
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password_confirmation"
                            />

                          @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                type="submit"
                                class="bg-main text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Sign Up
                            </button>
                        </div>

                        <div class="mt-8">
                            <p>
                                Already have an account?
                                <a href="/login" class="text-main"
                                    >Login</a
                                >
                            </p>
                        </div>
                    </form>
  </x-card>
</x-layout>