<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Tarea</title>
    <style>
        body {
            color: black;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        nav {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .logout-container {
            display: flex;
            align-items: center;
        }
        .login, .register {
            background-color: #555;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px; 
        }
        .login:hover, .register:hover {
            background-color: #666;
        }
        .Btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition-duration: .3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
            background-color: rgb(255, 65, 65);
        }
        /* plus sign */
        .sign {
            width: 100%;
            transition-duration: .3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .sign svg {
            width: 17px;
        }
        .sign svg path {
            fill: white;
        }
        /* text */
        .text {
            position: absolute;
            right: 0%;
            width: 0%;
            opacity: 0;
            color: white;
            font-size: 1.2em;
            font-weight: 600;
            transition-duration: .3s;
        }
        /* hover effect on button width */
        .Btn:hover {
            width: 125px;
            border-radius: 40px;
            transition-duration: .3s;
        }
        .Btn:hover .sign {
            width: 30%;
            transition-duration: .3s;
            padding-left: 20px;
        }
        /* hover effect button's text */
        .Btn:hover .text {
            opacity: 1;
            width: 70%;
            transition-duration: .3s;
            padding-right: 10px;
        }
        /* button click effect*/
        .Btn:active {
            transform: translate(2px ,2px);
        }

        .cssbuttons-io-button {
            display: flex;
            align-items: center;
            font-family: inherit;
            font-weight: 500;
            font-size: 16px;
            padding: 0.7em 1.4em 0.7em 1.1em;
            color: white;
            background: #ad5389;
            background: linear-gradient(0deg, rgba(20,167,62,1) 0%, rgba(102,247,113,1) 100%);
            border: none;
            box-shadow: 0 0.7em 1.5em -0.5em #14a73e98;
            letter-spacing: 0.05em;
            border-radius: 20em;
        }

        .cssbuttons-io-button svg {
        margin-right: 6px;
        }

        .cssbuttons-io-button:hover {
        box-shadow: 0 0.5em 1.5em -0.5em #14a73e98;
        }

        .cssbuttons-io-button:active {
        box-shadow: 0 0.3em 1em -0.5em #14a73e98;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .agregarTarea {
            position: absolute;
            right: 40%
        }

        #linkAgregar {
            text-decoration: none;
        }

            .bin {
            --black: #000000;
            --binbg: #e6e6e6;
            --width: 40px;
            --height: 50px;
            background-image: repeating-linear-gradient(to right, transparent, transparent 5px, var(--black) 5px, var(--black) 7px, transparent 7px);
            background-size: 11px calc(var(--height) / 2);
            background-position: 2px center;
            background-repeat: repeat-x;
            margin: auto;
            position: relative;
            background-color: var(--binbg);
            border: 0;
            color: transparent;
            width: var(--width);
            height: var(--height);
            border: 2px solid var(--black);
            border-radius: 0 0 6px 6px;
            }

            .bin::after, .bin::before {
            content: "";
            position: absolute;
            transform-origin: left bottom;
            transition: 200ms ease-in-out;
            border-width: 2px;
            border-style: solid;
            margin: auto;
            right: 0;
            }

            .bin::after {
            left: -4px;
            top: -5px;
            height: 7px;
            width: var(--width);
            border: 2px solid var(--black);
            background-color: var(--binbg);
            border-radius: 5px 5px 0 0;
            }

            .bin::before {
            top: -8px;
            height: 2px;
            width: 10px;
            border-color: var(--black) var(--black) transparent var(--black);
            left: 0;
            }

            .bin:focus, .bin:active {
            outline: none;
            cursor: none;
            }

            .bin:focus::before, .bin:focus::after, .bin:active::before, .bin:active::after {
            transform-origin: left bottom;
            transform: rotate(-45deg);
            }

            .bin:focus::before, .bin:active::before {
            top: -18px;
            left: -23px;
            right: 3px;
            }

            .bin:focus ~ .div, .bin:active ~ .div {
            cursor: none;
            z-index: 1;
            }

            .bin:focus ~ .div:hover, .bin:active ~ .div:hover {
            cursor: none;
            }

            .bin:focus ~ .overlay, .bin:active ~ .overlay {
            pointer-events: inherit;
            z-index: 2;
            cursor: none;
            }

            .bin:focus ~ .div > small, .bin:active ~ .div > small {
            opacity: 1;
            animation: throw 300ms 30ms cubic-bezier(0.215, 0.61, 0.355, 0.3) forwards;
            }

            .div:focus, .div:active, .div:hover {
            z-index: 1;
            cursor: none;
            }

            .div > small {
            position: absolute;
            width: 20px;
            height: 16px;
            left: 0;
            right: -58px;
            margin: auto;
            top: 27px;
            bottom: 0;
            border-left: 1px solid black;
            opacity: 0;
            }

            .div > small::before, .div > small::after {
            content: "";
            position: absolute;
            width: 1px;
            border-right: 1px solid black;
            }

            .div > small::before {
            height: 17px;
            transform: rotate(-42deg);
            top: -3px;
            right: 13px;
            }

            .div > small::after {
            height: 4px;
            transform: rotate(-112deg);
            top: 18px;
            right: 11px;
            }

            .div > small > i::before, .div > small > i::after {
            content: "";
            position: absolute;
            border-top: 1px solid black;
            }

            .div > small > i::before {
            border-left: 1px solid black;
            width: 4px;
            bottom: -4px;
            height: 4px;
            transform: rotate(66deg);
            }

            .div > small > i::after {
            border-right: 1px solid black;
            width: 5px;
            bottom: -2px;
            height: 5px;
            transform: rotate(-114deg);
            right: 6px;
            }

            @keyframes throw {
            0% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(0, -30px) rotate(-10deg);
            }

            60% {
                transform: translate(0, -40px) rotate(-30deg);
            }

            70% {
                transform: translate(-5px, -50px) rotate(-40deg) scale(1);
                opacity: 1;
            }

            80% {
                transform: translate(-10px, -60px) rotate(-60deg) scale(0.9);
                opacity: 1;
            }

            90% {
                transform: translate(-20px, -50px) rotate(-100deg) scale(0.5);
                opacity: 0.8;
            }

            100% {
                transform: translate(-30px, -20px) rotate(-80deg) scale(0.4);
                opacity: 0;
            }
            }


.Btn {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 100px;
  height: 40px;
  border: none;
  padding: 0px 20px;
  background-color: rgb(168, 38, 255);
  color: white;
  font-weight: 500;
  cursor: pointer;
  border-radius: 10px;
  box-shadow: 5px 5px 0px rgb(140, 32, 212);
  transition-duration: .3s;
}

.svg1 {
  width: 13px;
  position: absolute;
  right: 0;
  margin-right: 20px;
  fill: white;
  transition-duration: .3s;
}

.Btn:hover {
  color: transparent;
}

.Btn:hover svg1 {
  right: 43%;
  margin: 0;
  padding: 0;
  border: none;
  transition-duration: .3s;
}

.Btn:active {
  transform: translate(3px , 3px);
  transition-duration: .3s;
  box-shadow: 2px 2px 0px rgb(140, 32, 212);
}   

a {
text-decoration: none;
}
    </style>
</head>
<body>
    <nav>
        <div>
            <a href="/home">Home</a>
        </div>

        <div class="logout-container">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="Btn" type="submit">
                    <div class="sign">
                        <svg viewBox="0 0 512 512">
                            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                        </svg>
                    </div>
                    <div class="text">Logout</div>
                </button>
            </form>
        </div>
    </nav>

    <h1>Hola, {{ Auth::user()->name }}</h1>

    <h2>Detalles de la Tarea</h2>

    @if ($tarea)
        <table>
            <tr>
                <td>Titulo:</td>
                <td>{{ $tarea->titulo }}</td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td>{{ $tarea->descripcion }}</td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td>{{ $tarea->estado }}</td>
            </tr>
            <tr>
                <td>Fecha límite:</td>
                <td>{{ $tarea->fecha_limite }}</td>
            </tr>
            <tr>
                <td>Fecha de creación:</td>
                <td>{{ $tarea->created_at }}</td>
            </tr>
        </table>

        <div class="agregarTarea">
            
        </div>

        <div>
            <a href="{{ route('editarTarea', $tarea->id) }}">
                <button class="Btn">Editar
                    <svg class="svg1" viewBox="0 0 512 512">
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                    </svg>
                </button>
            </a>

            <!-- Agrega el botón para eliminar aquí -->
            <form method="POST" action="{{ route('eliminarTarea', $tarea->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="bin">🗑</button>
            </form>
        </div>

    @else
        <h2 style="color: red;">La tarea no existe.</h2>
    @endif

</body>
</html>
