# Instalation
- composer install

### migrate database
- php artisan migrate
### run project
- php artisan serve

### database
- mysql
### library
- JQuery
- Bootstrap
- CAMANJS

### template
- SBAdmin2
---------------------------------------------------------------------------------

# ROLES
### USER
- status user (PENDING, ACTIVE)
pending = Belum acc cv oleh admin
active = sudah aktive dan bisa mengajukan taaruf

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
-> status user ACTICE
-> bisa akses semua menu di halaman user
-> bisa mulai taaruf
-> profile/cv nya sudah bisa dilihat oleh orang lain

dashboard user menampilkan
- status user (PENDING, ACTIVE)
- taaruf sent
- data incoming
- data approve
- data reject

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
