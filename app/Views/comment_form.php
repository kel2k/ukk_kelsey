<div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <style>
        .container-fluid {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .post-details {
            margin-top: 20px; /* Adjust the margin between header and image */
        }

        .post-image {
            width: 20%; /* Sesuaikan ukuran gambar sesuai kebutuhan Anda */
            margin-bottom: 10px; /* Tambahkan margin di bawah gambar untuk memberikan jarak dengan teks */
        }

        .comments-section {
            margin-top: 20px; /* Beri margin agar formulir komen terpisah dari komen sebelumnya */
        }

        .comment-form {
            margin-top: 10px; /* Beri margin di atas tombol submit */
            margin-bottom: 10px; /* Tambahkan margin di bawah tombol submit */
        }
    </style>

    <div class="post-details text-center">
        <img src="<?= base_url('assets/images/' . $photos['image']); ?>" alt="Post Image" class="img-fluid post-image">
        <p><?= $photos['description']; ?></p>
    </div>

    <!-- Tampilkan Komentar -->
    <div class="comments-section text-center">
        <p>Komen:</p>
        <?php foreach ($comments as $comment) : ?>
            <div class="comment">
                <p><strong><?= $comment['username']; ?></strong>: <?= $comment['comment']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- HTML Form untuk Komentar -->
    <form class="comment-form" action="<?= base_url('home/submitComment'); ?>" method="post">
        <input type="hidden" name="post_id" value="<?= $photos['id_photos']; ?>">
        <textarea name="comment" placeholder="Add a comment"></textarea>
        <br> <!-- Baris baru agar tombol submit berada di bawah kotak komentar -->
        <button type="submit">Submit Comment</button>
    </form>

    <!-- Return to Portfolio Button -->
    <a href="<?= base_url('/home/portofolio'); ?>" class="return-button">Kembali ke Postingan</a>
</div>
