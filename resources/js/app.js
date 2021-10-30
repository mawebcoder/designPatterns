import Echo from "laravel-echo";

window.io = require('socket.io-client')

window.echo = new Echo({
                           broadcaster: 'socket.io',
                           host: 'http://localhost:6002'
                       })

console.log(echo.connector)
