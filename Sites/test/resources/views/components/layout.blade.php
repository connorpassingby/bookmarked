<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKMARKED</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            main: "#2B3F81",
                            hover: "#5D80F2"
                        },
                    },
                },
            };
        </script>
        <title>Bookmarked | Your trusted book review site</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4 ml-7 p-3" >
            <a href="/"
                ><img class="h-10 w-26" src="/images/BOOKMARKED_Vector.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                   <span>
                       Welcome, <span class="font-bold uppercase">{{auth()->user()->uname}} </span> !
                   </span>
                </li>

                <li>
                    <form action="/logout" class="inline" method="POST">
                        @csrf 
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
                @else

                <li>
                    <a href="/register" class="hover:text-hover"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="/login" class="hover:text-hover"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                @endauth
                </li>
            </ul>
        </nav>
         
    <main>
         {{$slot}}
    </main>
    <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-main text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Group 3 Software Engineering 1 | Copyright &copy; 2022, All Rights reserved</p>

            <a
                href="/reviews/create"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Post a Review</a
            >
        </footer>
        <x-flash-message/>
    </body>
</html>