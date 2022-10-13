<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24 bg-form border-white rounded-[50px]" >
                    <header class="text-center">
                    <img class="h-10 w-26 mx-auto d-block" src="/images/BOOKMARKED_Vector.png" alt="" class="logo"/>
                        <p class="mb-4 mt-3">Log into your account!</p>
                    </header>

                    <form method="POST" action="/users/authenticate">
                      @csrf 
                        <div class="mb-3">
                            <label for="email" class="inline-block text-lg text-center mb-2"
                                ></label
                            >

                            <input
                                type="email"
                                class="rounded-[50px] bg-input text-center p-2 w-full"
                                name="email" 
                                value="{{old('email')}}"
                                placeholder="Email"
                            />
                            
                          @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-11">
                            <label
                                for="password"
                                class="inline-block text-lg mb-2"
                            >
                            </label>
                            <input
                                type="password"
                                class="p-2 w-full rounded-[50px] bg-input text-center"
                                name="password" 
                                placeholder="Password"
                            />

                          @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                        </div>

                        <div class="mb-6 text-center text-xl">
                            <button
                                type="submit"
                                class="bg-main text-white py-2 px-[185px] rounded-[50px] hover:bg-black"
                            >
                                LOGIN
                            </button>
                        </div>

                        <div class="mt-8 text-center">
                            <p>
                                New in Bookmarked?
                                <a href="/register" class="text-main"
                                    >Register</a
                                >
                            </p>
                        </div>
                    </form>
  </x-card>
</x-layout>