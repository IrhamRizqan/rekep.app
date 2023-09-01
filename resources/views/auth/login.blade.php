        @if ($message = Session::get('success'))
            <div class="alert alert-info">
                {{$message}}
            </div>
        @endif
        <section class="bg-gray-50 min-h-screen flex items-center justify-center">
            <!-- login kontener -->
            <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
                <!-- forms -->
                <div class="sm:w-1/2 px-16">
                    <h2 class="font-bold text-2xl"> Login </h2>
                    <p class="text-sm mt-4"> Jika sudah memiliki akun </p>
                    <form action="" class="flex flex-col gap-4">
                        <input class="p-2 mt-8 rounded-xl border w-full" type="email" name="email" placeholder="Email">
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye absolute top-1/2 right-3 
                        -translate-y-1/2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </div>
                        <input class="bg-blue-800 rounded-xl 
                        text-white py-2" type="submit" value="Login">
                    </form>
    
                    <div class="mt-10 grid grid-cols-3 items-center text-gray-400">
                        <hr class="border-gray-400">
                        <p class="text-center">OR</p>
                        <hr class="border-gray-400">
                    </div>
    
                    <br>
                    
    
                    <button class="bg-blue-800 border py-2 w-full rounded-xl text-white">
                        Register
                    </button>
                
                </div>
                <!-- fotooo -->
                <div class="sm:block hidden w-1/2 p-5">
                    <img class="  rounded-2xl " src="login.jpg" alt="">
                </div>
            </div>
    
        </section>
    
