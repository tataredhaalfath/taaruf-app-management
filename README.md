# Instalation
- composer install

### migrate database
- php artisan migrate
### akses file storage
- php artisan storage:link
### run project
- php artisan serve

### database
- mysql

### library
- JQuery
- Bootstrap
- CAMANJS

### API statis wilayah indonesia
- http://www.emsifa.com/api-wilayah-indonesia/

### backend framework
- laravel8

### template admin
- SBAdmin2

### wireframe
- https://whimsical.com/ta-aruf-app-CdKrJiTi4PMe4XSMU7fPnk
### mainmap 
- https://whimsical.com/website-ta-aruf-app-8fKKEGszDTnouftbs8H8jH

---------------------------------------------------------------------------------

# ROLES
### USER
- status user (PENDING, ACTIVE, INACTIVE)
- pending = Belum acc cv oleh admin
- active = sudah aktive dan bisa mengajukan taaruf
- inactive = sudah selesai taaruf. akun di disable oleh admin

1. user belum login / regist . 
-> hanya bisa akses halaman home, stories, login/regist page

2. user sudah login / regist tapi helum verify email
-> bisa akses ke home, stories, taaruf page, user page (dashboard, profile)

3. user sudah login / regist tapi belum isi cv dan profile dan user question
-> status user masih pending
-> system check email_verified_at !== NULL
-> hanya bisa akses ke home, stories, taaruf page
-> harus mengisi profile dan cv
-> belum bisa mengajukan taaruf sebelum mengisi profile dan cv secara lengkap dan harus nunggu di konfimasi oleh admin cv nya


alur pengisian profile
masuk ke profile
- menu my account
- mengisikan form yang telah tersedia

alur pengisian cv
- masuk ke profile
- pilih menu cv 
- tampil form untuk membuat lampiran cv (id, user_id, slug)
- isi nama untuk mulai membuat lampiran cv (nama akan dikonversi menjadi slug)
- masuk ke tampilan form cv yang lengkap
- isi form
- submit

lengkapi cv
- masuk ke profile
- lengkapi cv
- isi data cv

pengisian user question
-masuk ke profile
- buat 3 pertanyaan taaruf
- submit

setelah profile, cv, dan user question lengkap. pilih menu cv -> kirim cv
-cv akan di tinjau oleh admin

4. user login . cv approve oleh admin
- status user ACTIVE
- bisa akses semua menu di halaman user
- bisa mulai taaruf
- profile/cv nya sudah bisa dilihat oleh orang lain

dashboard user menampilkan
- status user (PENDING, ACTIVE)
- taaruf sent
- data incoming
- data approve
- data reject

5. alur mulai taaruf
- masuk menu taaruf
- pilih user
- detail
- ajak taaruf
- jawab pertanyaan taaruf
- ajak taaruf
- masuk ke menu user -> taaruf sent. untuk melihat permintaan taaruf yg terkirim

6. alur menerima taaruf
- masuk menu incoming taaruf
- lihat detail permintaan taaruf
- terima taaruf / tolak taaruf

7. taaruf approve
- masuk menu taaruf approve
- lihat list approve
- pilih lanjutkan
- tentukan keputusan untuk melanjutkan ke pernikahan atau tidak
- berikan feedback pada website

8. user yang selesai taaruf secara otomatis account nya akan di disable oleh admin dalam kurun waktu tertentu
---------------------------------------------------------------------------------

### ADMIN
1. akses halaman web. /home, /taaruf, /stories
2. akses dashboard admin
  - data user
  - status user
  - permintaan pengecekan cv
  - data taaruf sent
  - data taaruf in process
  - data taaruf reject
  - taaruf status
  - data counselor
3. cv confirm
  - admin bisa menerima dan menolak pengajuan cv dari user
4. taaruf
  - admin bisa melihat list taaruf success dan failed
  - bisa mendisable akun user yang selesai taaruf
5. users 
  - admin bisa melihat list user yang active dan pending
6. counselor
  - admin bisa melihat list counselor 
  - admin bisa menambahkan counselor
  - admin bisa melihat list pendampingan
7. content
  - admin bisa nemabahkan, mengedit dan menghapus content kajian
  - admin bisa nemabahkan, mengedit dan menghapus content quotes
8. configure
  - admin bisa mengisi dan mengedit data diri

---------------------------------------------------------------------------------

### COUNSELOR
1. akses halaman web. /home, /taaruf, /stories
2. akses dashboard consoler
  - data taaruf sent
  - data taaruf in process
  - data taaruf reject
  - data status taaruf
3. Taaruf
  - counselor bisa melihat list pengguna in taaruf
  - counselor bisa memilih untuk melakukan pendampingan
  - counselor akan menghubungi user untuk membuat janji bertemu keluarga akhwat
4. pendampingan
  - counselor dapat melihat list pendampinga yang dilakukan
  - counselor dapat melihat detail pengguna yang di didampingi
5. configure
  - counselor bisa mengisi dan mengedit data diri
