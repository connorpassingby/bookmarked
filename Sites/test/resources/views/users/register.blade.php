<x-layout>
  <x-card class="p-[50px] max-w-lg mx-auto mt-20 bg-form border-white rounded-[50px]" >
                    <header class="text-center">
                    <img class="h-10 w-26 mx-auto d-block" src="/images/BOOKMARKED_Vector.png" alt="" class="logo"/>
                        <p class="mb-4 mt-2">Create an account and post a review!</p>
                    </header>

                    <form method="POST" action="/users">
                      @csrf 
                        <div class="mb-2">
                            <label for="name" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="text"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="uname" value="{{old('uname')}}"
                                placeholder="Username"
                            />

                          @error('uname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label for="fname" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="text"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="fname" value="{{old('fname')}}"
                                placeholder="First Name"
                            />

                          @error('fname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label for="lname" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="text"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="lname" value="{{old('lname')}}"
                                placeholder="Last Name"
                            />

                          @error('lname')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label for="minitial" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="text"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="minitial" value="{{old('minitial')}}"
                                placeholder="Middle Initial"
                            />

                          @error('minitial')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>
                        
                        <div class="mb-2">
                            <label for="cluster" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="number"
                                class="rounded-[50px] bg-input text-center placeholder-gray-600 p-2 w-full"
                                name="cluster" value="{{old('cluster')}}"
                                placeholder="Cluster No."
                            />

                          @error('cluster')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label for="bld" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="number"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="bld" value="{{old('bld')}}"
                                placeholder="Building No."
                            />

                          @error('bld')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label for="flr" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="number"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="flr" value="{{old('flr')}}"
                                placeholder="Floor no."
                            />

                          @error('flr')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label for="unit" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="number"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="unit" value="{{old('unit')}}"
                                placeholder="Unit No."
                            />

                          @error('unit')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label for="contact" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="text"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="contact" value="{{old('contact')}}"
                                placeholder="Contact No."
                            />

                          @error('contact')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>
                        
                        <div class="mb-2">
                            <label for="birthday" class="inline-block text-lg mb-2">
                            </label>
                            <input
                                type="text"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="birthday" value="{{old('birthday')}}"
                                placeholder="Birthday (YYYY-MM-DD)"
                            />

                          @error('birthday')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label for="email" class="inline-block text-lg mb-2"
                                ></label
                            >
                            <input
                                type="email"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="email" value="{{old('email')}}"
                                placeholder="Email"
                            />
                            
                          @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label
                                for="password"
                                class="inline-block text-lg mb-2"
                            >
                            </label>
                            <input
                                type="password"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="password" value="{{old('password')}}"
                                placeholder="Password"
                            />

                          @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-2">
                            <label
                                for="password2"
                                class="inline-block text-lg mb-2"
                            >
                            </label>
                            <input
                                type="password"
                                class="rounded-[50px] bg-input placeholder-gray-600 text-center p-2 w-full"
                                name="password_confirmation"
                                placeholder="Confirm Password"
                            />

                          @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mt-9 mb-6 text-center text-lg">
                            <button
                                type="submit"
                                class="bg-main text-white py-3 px-[143px] rounded-[50px] hover:bg-black"
                            >
                                SIGNUP
                            </button>
                        </div>

                        <div class="mt-8 text-center">
                            <p>
                                Already have an account?
                                <a href="/login" class="text-main"
                                    >Login</a
                                >
                            </p>
                        </div>
                    </form>
  </x-card>
</div>
</x-layout>