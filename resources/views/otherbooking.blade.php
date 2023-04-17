<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
        		<form action="other" method="post">
				@csrf
 
                		<input type="date" name="date">
                		<input type="text" name="sum" placeholder="Summe">
                		<select name="other_booking_type_id">
                		 @foreach($other_booking_types as $other_booking_type)
                		 <option value="{{ $other_booking_type->id }}" class="form-control">{{ $other_booking_type->name }}</option>
                		 @endforeach
                		</select>    
                		<select name="booking_type">
                		 <option value="1" class="form-control">Eingang</option>
                		 <option value="0" class="form-control">Ausgang</option>
                		</select>      
                		<input type="hidden" name="bank_account_id" value="1">     		
						<input type="submit">

                </form>
                	<table>
                		<tr>
                			<td>Januar</td>
                			<td>Februar</td>
                			<td>März</td><td>April</td>
                		</tr>
                		<tr><td>{{ $statistics['january'] }}</td><td>&nbsp;x</td><td>&nbsp;x</td><td>{{ $statistics['april'] }}</td></tr>
                	</table>
                	<table>
                		 @foreach($other_bookings as $booking)
                		  <tr><td>{{ $booking->date }}<td><td>{{ $booking->sum }}<td></tr>
                		 @endforeach
                	</table>
            </div>
        </div>
    </body>
</html>
