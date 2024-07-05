<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Content</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    <div>
        <h3>Bu Hatıraç, <span>{{ $qrCode->name }}</span> tarafından sizin için oluşturuldu.</h3>
        <h4 class="message"><span>Mesajınız:</span> {{ $qrCode->message }}</h5>
        <div class="gallery">
            @foreach ($qrCode->media as $index => $media)
                @if (preg_match('/\.(jpg|jpeg|png|gif|svg)$/i', $media))
                    <div class="gallery-item">
                        <img src="{{ asset('storage/' . $media) }}" alt="Media" class="thumbnail" data-index="{{ $index }}">
                    </div>
                @elseif (preg_match('/\.(mp4)$/i', $media))
                    <div class="gallery-item">
                        <video controls>
                            <source src="{{ asset('storage/' . $media) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @elseif (preg_match('/\.(mp3)$/i', $media))
                    <div class="gallery-item">
                        <audio controls>
                            <source src="{{ asset('storage/' . $media) }}" type="audio/mp3">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                @endif
            @endforeach
        </div>
        <a href="{{ route('qr.edit', ['id' => $qrCode->qr_id]) }}">Edit</a>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
        <div class="modal-content">
            <img id="img01" src="">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('myModal');
            const modalImg = document.getElementById('img01');
            const closeBtn = document.querySelector('.close');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');

            let currentIndex = 0;
            const thumbnails = document.querySelectorAll('.thumbnail');
            const images = Array.from(thumbnails).map(thumbnail => thumbnail.src);

            thumbnails.forEach((item, index) => {
                item.addEventListener('click', function () {
                    modal.style.display = 'block';
                    modalImg.src = this.src;
                    currentIndex = index;
                });
            });

            closeBtn.addEventListener('click', function () {
                modal.style.display = 'none';
            });

            modal.addEventListener('click', function (event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });

            prevBtn.addEventListener('click', function () {
                currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
                modalImg.src = images[currentIndex];
            });

            nextBtn.addEventListener('click', function () {
                currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
                modalImg.src = images[currentIndex];
            });
        });
    </script>
</body>
</html>
