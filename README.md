<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Twitter Clone

Thit is a **complete Twitter clone** made in PHP + Laravel using **TALL** (Tailwind, Alpine.JS, Laravel and Livewire). It's not just frontend: is a complete **front & backend & database & authentication** project.

Have fun!

## How it Looks

📌 At the moment, this is the frontend (May 25th 2023):

![image](https://github.com/brunogroth/Twitter/assets/96024737/017b801d-6d60-431a-98a1-f2f20407fb0d)

## Installation
1. Clone the project
2. To install all dependencies, go to the project root directory and run `composer install` and `npm install`.
3. Create `.env` file and copy content from `.env.example` and set your MySQL DB connection variables (DB_USERNAME and DB_PASSWORD) at `.env` file.
4. [Create a Pusher account](https://pusher.com/) and create an channel setting Laravel as Backend for monitoring the application with WebSocket.
5. Get your PUSHER_APP_ID, PUSHER_APP_KEY and PUSHER_APP_SECRET an set them in your `.env` file.
6. Run migrations by executing `php artisan migrate`.
7. _(optional)_ I made possible to you generate some example tweets by using a TweetSeeder. For that, run `php artisan db:seed`.
8. Start the project by running `php artisan serve` and start the [Vite](https://vitejs.dev/) server (for serving css and js files) by running `npm run dev`.

## Author

**Bruno Groth**
[GitHub](https://github.com/brunogroth) | [LinkedIn](https://linkedin.com/in/bruno-groth/) | [Portfolio](https://brunogroth.github.io/Portfolio-React-Website)

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues page](https://github.com/brunogroth/Twitter/issues).

## Show your support

Give a ⭐ if you like this project!

## Thanks

Special thanks for <a href="https://github.com/pinguimdolaravel/twitter" target="_blank">Pinguim do Laravel</a> tutorial on <a href="https://youtube.com/live/CbIcBSu2px0&utm_source=https://github.com/brunogroth" target="_blank">this video</a>.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
