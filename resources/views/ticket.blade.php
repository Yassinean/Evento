<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/assets/css/ticket.css">
    <title>Ticket</title>
</head>

<body>
    <div class="ticket created-by-anniedotexe">
        <div class="left">
            <div class="image"
                style="background-image: url('{{ asset('images/' . $event->image) }}');background-repeat:no-repeat;">
                <p class="admit-one">
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                    <span>ADMIT ONE</span>
                </p>
                <div class="ticket-number">
                    <p>
                        #20030220
                    </p>
                </div>
            </div>
            <div class="ticket-info">
                <p class="date">
                    <span class="june-29">{{ $event->date }}</span>
                </p>
                <div class="show-name">
                    <h1>{{ $event->name }}</h1>
                    <h2>{{ Auth::user()->name }}</h2>
                </div>
                <div class="time">
                    <p>8:00 PM <span>TO</span> 11:00 PM</p>
                    <p>DOORS <span>@</span> 7:00 PM</p>
                </div>
                <p class="location"><span>{{ $event->localisation }}</span>
                    <span class="separator"><i class="far fa-smile"></i></span><span>Salt Lake City, Utah</span>
                </p>
            </div>
        </div>
        <div class="right">
            <p class="admit-one">
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
                <span>ADMIT ONE</span>
            </p>
            <div class="right-info-container">
                <div class="show-name">
                    <h1>{{ $event->name }}</h1>
                </div>
                <div class="time">
                    <p>8:00 PM <span>TO</span> 11:00 PM</p>
                    <p>DOORS <span>@</span> 7:00 PM</p>
                </div>
                <div class="barcode">
                    <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb"
                        alt="QR code">
                </div>
                <p class="ticket-number">
                    #20030220
                </p>
            </div>
        </div>
    </div>
</body>

</html>
