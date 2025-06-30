<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Booking Restoran</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="image-section">
            <div class="image-slider-wrapper">
                <div class="image-slider">
                    <img src="{{ asset('images/burger.jpeg') }}" class="active" alt="Burger" />
                    <img src="{{ asset('images/spicy_chicken.jpeg') }}" alt="Spicy Chicken" />
                    <img src="{{ asset('images/iced_mocha.jpeg') }}" alt="Iced Mocha" />
                </div>
            </div>
        </div>

        <div class="form-section">
            <h1>Formulir Booking Restoran</h1>
            <div class="line-divider"></div>

            <div class="view-reservations">
                <a href="/bookings">Lihat Daftar Reservasi</a>
            </div>

            @if(session('success'))
                <p style="color: green">{{ session('success') }}</p>
            @endif

            <form method="POST" action="/booking">
                @csrf

                <label for="name">Nama</label>
                <input type="text" name="name" id="name" required value="{{ old('name') }}">
                @error('name') <small>{{ $message }}</small> @enderror

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required value="{{ old('email') }}">
                @error('email') <small>{{ $message }}</small> @enderror

                <label for="phone">No. HP</label>
                <input type="text" name="phone" id="phone" required value="{{ old('phone') }}">
                @error('phone') <small>{{ $message }}</small> @enderror

                <label for="guest_total">Jumlah Tamu</label>
                <input type="number" name="guest_total" id="guest_total" required value="{{ old('guest_total') }}">
                @error('guest_total') <small>{{ $message }}</small> @enderror

                <label for="date">Tanggal</label>
                <input type="date" name="date" id="date" required value="{{ old('date') }}">
                @error('date') <small>{{ $message }}</small> @enderror

                <label for="time">Waktu</label>
                <input type="time" name="time" id="time" required value="{{ old('time') }}">
                @error('time') <small>{{ $message }}</small> @enderror

                <label for="table_id">Pilih Meja</label>
                <select name="table_id" id="table_id" required>
                    <option value="">-- Pilih Meja --</option>
                    @foreach($tables as $table)
                        <option value="{{ $table->id }}" {{ !$table->available ? 'disabled' : '' }}>
                            Meja {{ $table->number }} {{ !$table->available ? '(Tidak Tersedia)' : '' }}
                        </option>
                    @endforeach
                </select>
                @error('table_id') <small>{{ $message }}</small> @enderror

                <label for="note">Catatan</label>
                <textarea name="note" id="note">{{ old('note') }}</textarea>

                <button type="submit">Kirim Reservasi</button>
            </form>
        </div>
    </div>

    <script>
        const images = document.querySelectorAll(".image-slider img");
        let current = 0;

        setInterval(() => {
            images[current].classList.remove("active");
            current = (current + 1) % images.length;
            images[current].classList.add("active");
        }, 4000);
    </script>
</body>
</html>
