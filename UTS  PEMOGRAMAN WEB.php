<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Selamat Datang - Sistem Informasi Kelautan</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
      function hapus_section(){
       let tombol=document.getElementById("Java");
       tombol.hidden(tombol.remove);
       
      }
    </script>
  </head>
  <body>
      <!--Ini adalah Navbar-->
    <section>
    <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: white;">
        <div class="container">
            <a href="https://www.upi.edu/" class="navbar-brand fixed">
                <img src="LOGO-UPI.jpg" width="50" lang="50" alt="Sistem Informasi Kelautan" class="img-responsive">
            </a>
          <a class="navbar-brand" href="#">Sistem Informasi Kelautan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="Sejarah.html">Sejarah</a></li>
                  <li><a class="dropdown-item" href="Visi-Misi.html">Visi Misi</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="#">Dosen</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Akademik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Akreditasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Download</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Himataska
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="https://www.himataska.web.id/">Tentang Himataska</a></li>
                <li><hr class="dropdown-divider"></li>
              </ul>
            </ul>
          </div>
        </div>
      </nav>
    </section>
</br>

    <!--Ini adalah Carousel-->
    <section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="upiserang.jpeg" class="d-block w-100" alt="Mahasiswa Diving">
            <div class="carousel-caption d-none d-md-block">
              <h2 style="text-align: left;">Kegiatan Mahasiswa</h2>
              <p style="text-align: left;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias quo iure similique atque saepe magnam odio repellat neque. Nemo ut quas ducimus magni, alias corrupti ea earum! Laudantium, aut cumque.</p>
              <a class="btn btn-primary left" href="#" role="button" >Selengkapnya</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="library.jpeg" class="d-block w-100" alt="Perpustakaan Upi">
            <div class="carousel-caption d-none d-md-block">
              <h2>Perpustakaan</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus minima nobis reprehenderit, eaque consectetur sit ipsum architecto quis provident soluta similique sequi in aperiam impedit. Doloribus nemo asperiores voluptate fuga?</p>
              <a class="btn btn-primary" href="#" role="button">Selengkapnya</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="diving.png" class="d-block w-100" alt="Kantor Administrasi Upi">
            <div class="carousel-caption d-none d-md-block">  
              <h2>Tentang Kampus</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero enim repellat odit perferendis temporibus, quos quis consequatur eum perspiciatis aperiam illum architecto a vel aspernatur optio sint tempora sunt fuga.</p>
              <a class="btn btn-primary" href="#" role="button">Selengkapnya</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </br>

    <!--Tampilan Update 3 Colom 1 Baris-->
    
    <div class="container" id="update">
    <div class="row ">
        <div class="col-md-4 mb-3">
            <h2>Berita</h2>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse soluta ducimus laboriosam masiquas dkaos aliquam atque quisquam fugiat mollitia, eius placeat amet a sint corrupti ullam assumenda, asperiores nisi minima quaerat!</p>
              <a href="#">Selengkapnya</a>
            </div>
        <div class="col-md-4 mb-3">
            <h2>Kemahasiswaan</h2>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus possimus vitae, libero odit est laboriosam! Quas quisquam doloremque laudantium aspernatur, sit iusto explicabo similique quibusdam assumenda harum sequi quod odio!</p>
              <a href="#">Selengkapnya</a>
            </div>
        <div class="col-md-4 mb-3">
            <h2>Himataska</h2>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae accusantium dolore facere nemo corrupti, quia amet adipisci rem rerum, enim maxime, magnam corporis excepturi dolorem beatae. Quam, autem? Nihil, sed?</p>
              <a href="#">Selengkapnya</a>
          </div>  
      </div>
    </div>
  </section>
</br> 

    <!--Youtube dan text-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col"><iframe width="500" height="315" src="https://www.youtube.com/embed/uSpL9GR0QaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col bg-fff text-dark text-left"><h3>Tentang Kami</h3>
            <p>Program Studi Sistem Informasi Kelautan merupakan bagian dari Ilmu Kelautan yang fokus pada analisis data kelautan baik numerik maupun spasial untuk kemudian diintegrasikan berbasis sistem informasi yang dikembangkan sebagai dasar pengambilan keputusan. Bidang kajian dari prodi SIK terdiri dari Ilmu Kelautan, Ilmu Perikanan, Sistem Informasi, Sistem Informasi Geografis, serta Penginderaan Jauh Keluatan dan Ilmu Kelautan. Pembelajaran di SIK selain dilaksanakan di ruang kelas juga dilaksanakan di laboratorium, e-learning, field study ke pesisir dan laut. Pembelajaran di SIK dilaksanakan oleh dosen SIK dan dosen dari Kampus UPI Serang serta para praktisi dan professional di bidangnya</p>
            <button type="button" class="btn btn-primary" align="left">Selengkapnya</button>
            </div>
           </div>
         </div>
        </br>


    <!--Bagian JavaScript-->
    <div class="container overflow-hidden" id="Java">
      <div class="row gx-5">
        <div class="col">
         <div class="p-3 border bg-light" style="color: black;">
          <h2>Latihan JavaScript</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis tempore cum quisquam quia magnam perferendis, illo inventore ipsum? Molestias blanditiis natus provident atque consequatur corrupti placeat rem esse illum commodi?
          </p>
          <button type="button" class="btn btn-light border-dark" onclick="hapus_section()">Hapus Section Ini</button>
        </div>
        </div>
        <div class="col">
          <div class="p-3 border bg-dark" >
            <h2>Latihan JavaScript</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis tempore cum quisquam quia magnam perferendis, illo inventore ipsum? Molestias blanditiis natus provident atque consequatur corrupti placeat rem esse illum commodi?
            </p>
            <button type="button" class="btn btn-dark border-white" onclick="hapus_section()">Hapus Section Ini</button>
          </div>
        </div>
      </div>
    </div>
</br> 

    <!--Contact dan keterangan serta lokasi-->
    <section>
        <div class="container" id="contact">
            <div class="row justify-content-center fs-6">
                <div class="col-4">
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="exampleInputName" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="EmailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Pesan</label>
                      <textarea class="form-control" name="kirimpesan" id="pesan" cols="10" rows="5"></textarea>                    
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
                <div class="col-8 justify-content-center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0370422558126!2d106.14447451464727!3d-6.12571766176979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418adaa4f7f563%3A0x950ec58123df8596!2sUniversitas%20Pendidikan%20Indonesia%20(UPI)%20Kampus%20Serang!5e0!3m2!1sid!2sid!4v1633591953122!5m2!1sid!2sid" width="850" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>


    <!--Footer-->
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="text-muted">©️ 2021, Fredy Al Qadry (2009733)</span>
        </div>
      </footer>
    </div>


    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>