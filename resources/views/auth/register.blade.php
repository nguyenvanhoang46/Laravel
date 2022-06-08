<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" />
<style>
    .container-item-box {
        position: relative;
        width: 100%;
        background-color: #fff;
        min-height: 100vh;
        overflow: hidden;
    }

    .forms-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
    .login-product:hover{
        background-color: #c89979 !important;
    }
    .signin-signup {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        left: 75%;
        width: 50%;
        transition: 1s 0.7s ease-in-out;
        display: grid;
        grid-template-columns: 1fr;
        z-index: 5;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0rem 5rem;
        transition: all 0.2s 0.7s;
        overflow: hidden;
        grid-column: 1 / 2;
        grid-row: 1 / 2;
    }

    form.sign-up-form {
        opacity: 0;
        z-index: 1;
    }

    form.sign-in-form {
        z-index: 2;
    }

    .title {
        font-size: 2.2rem;
        color: #c89979;
        margin-bottom: 10px;
    }

    .input-field {
        max-width: 380px;
        width: 100%;
        background-color: #f0f0f0;
        margin: 10px 0;
        height: 55px;
        border-radius: 55px;
        display: grid;
        grid-template-columns: 15% 85%;
        padding: 0 0.4rem;
        position: relative;
    }

    .input-field i {
        text-align: center;
        line-height: 55px;
        color: #acacac;
        transition: 0.5s;
        font-size: 1.1rem;
    }

    .input-field input {
        background: none;
        outline: none;
        border: none;
        line-height: 1;
        font-weight: 600;
        font-size: 1.1rem;
        color: #333;
    }

    .input-field input::placeholder {
        color: #aaa;
        font-weight: 500;
    }

    .social-text {
        padding: 0.7rem 0;
        font-size: 1rem;
    }

    .social-media {
        display: flex;
        justify-content: center;
    }

    .social-icon {
        height: 46px;
        width: 46px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 0.45rem;
        color: #333;
        border-radius: 50%;
        border: 1px solid #333;
        text-decoration: none;
        font-size: 1.1rem;
        transition: 0.3s;
    }

    .social-icon:hover {
        color: #4481eb;
        border-color: #4481eb;
    }

    .btn {
        width: 150px;
        background-color: #5995fd;
        border: none;
        outline: none;
        height: 49px;
        border-radius: 49px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        margin: 10px 0;
        cursor: pointer;
        transition: 0.5s;
    }

    .btn:hover {
        background-color: #4d84e2;
    }
    .image{
        margin-top: 50px;
        width: 50% !important;
    }
    .panels-container {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .container-item-box:before {
        content: "";
        position: absolute;
        height: 2000px;
        width: 2000px;
        top: -10%;
        right: 48%;
        transform: translateY(-50%);
        /* background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%); */
        transition: 1.8s ease-in-out;
        border-radius: 50%;
        z-index: 6;
        background-color: #333333;
    }

    .image {
        width: 100%;
        transition: transform 1.1s ease-in-out;
        transition-delay: 0.4s;
    }

    .panel {
        /* display: flex; */
        flex-direction: column;
        align-items: flex-end;
        justify-content: space-around;
        text-align: center;
        z-index: 6;
    }

    .left-panel {
        pointer-events: all;
        padding: 3rem 17% 2rem 12%;
    }

    .right-panel {
        pointer-events: none;
        padding: 3rem 12% 2rem 17%;
    }

    .panel .content {
        color: #fff;
        transition: transform 0.9s ease-in-out;
        transition-delay: 0.6s;
    }

    .panel h3 {
        font-weight: 600;
        line-height: 1;
        font-size: 1.5rem;
    }

    .panel p {
        font-size: 0.95rem;
        padding: 0.7rem 0;
    }

    .btn.transparent {
        margin: 0;
        background: none;
        border: 2px solid #fff;
        width: 130px;
        height: 41px;
        font-weight: 600;
        font-size: 0.8rem;
    }

    .right-panel .image,
    .right-panel .content {
        transform: translateX(800px);
    }

    /* ANIMATION */

    .container-item-box.sign-up-mode:before {
        transform: translate(100%, -50%);
        right: 52%;
    }

    .container-item-box.sign-up-mode .left-panel .image,
    .container-item-box.sign-up-mode .left-panel .content {
        transform: translateX(-800px);
    }

    .container-item-box.sign-up-mode .signin-signup {
        left: 25%;
    }

    .container-item-box.sign-up-mode form.sign-up-form {
        opacity: 1;
        z-index: 2;
    }

    .container-item-box.sign-up-mode form.sign-in-form {
        opacity: 0;
        z-index: 1;
    }

    .container-item-box.sign-up-mode .right-panel .image,
    .container-item-box.sign-up-mode .right-panel .content {
        transform: translateX(0%);
    }

    .container-item-box.sign-up-mode .left-panel {
        pointer-events: none;
    }

    .container-item-box.sign-up-mode .right-panel {
        pointer-events: all;
    }
    .input-size {
        width: 45%;
    }
    .image-item {
        margin-left: 190px;
    }
    .logout-mona {
        text-decoration: none;

    }

</style>
<x-guest-layout>
    <div class="container-item-box">
        <div class="forms-container">
            <div class="signin-signup" id="id01">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                    <h2 class="title">Đăng Ký</h2>
                    <div class="input-size">
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4 input-size">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 input-size">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4 input-size">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                 type="password"
                                 name="password_confirmation" required />
                    </div>
                    <div class="mt-5"></div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4">
                            {{ __('Đăng Ký') }}
                        </x-button>
                    </div>
                    <div class="mt-5"></div>
                    <div class="social-media mt-5">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Mới đây ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn text-light login-product transparent" id="sign-up-btn">
                         @if (Route::has('password.request'))
                         <a class="underline logout-mona text-white text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('login') }}">
                         {{ __('Đăng Nhập') }}
                         </a>
                         @endif
                    </button>
                    <div class="mt-4">
                        <a href="index.html"> <img src="" alt="">
                        </a>
                    </div>
                </div>

                <img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png"
                     class="image image-item" alt="" />

            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Một trong số chúng tôi ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent text-light login-product" id="sign-in-btn">
                        Đăng nhập
                    </button>
                    <div class="mt-4">
                        <a href="index.html"> <img src="" alt="">
                        </a>
                    </div>
                </div>
                <img width="50%" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png"
                     class="image" alt="" />

            </div>
        </div>
    </div>
</x-guest-layout>


