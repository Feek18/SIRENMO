<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="bg-white flex rounded-2xl shadow-lg max-w-4xl p-5 items-center">
            <div class="md:w-full px-12 text-center">
                <h1 class="font-bold text-3xl">Login</h1>
                <p class="mt-3 font-normal text-base opacity-70">Hey, enter your details to get login to your account</p>

                <form action="" class="flex flex-col gap-5">
                    <input class="p-3 rounded-xl border mt-9" type="text" name="email" placeholder="Enter email">
                    <input class="p-3 rounded-xl border" type="pass" name="pass" placeholder="Enter password">
                    <p class="text-sm text-left font-normal">Forgot Password?</p>
                    <button class="bg-login-color rounded-2xl p-1.5 font-semibold text-xl hover:bg-[#E8E8E8] duration-150">Login</button>
                </form>

                <button class="mt-14 font-normal">
                    Don't have an account?
                    <a class="font-semibold" href="#">Register now</a>
                </button>
                
            </div>
            <div class="w-full md:block hidden">
                <img src="img/loginimg.png" alt="">
            </div>
        </div>
    </div>
</div>
</body>
</html>