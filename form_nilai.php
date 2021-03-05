
  
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
               
        <div class="container">
            <form class="form-horizontal ml-5 mr-5 p-5 mt-4 shadow" style="background-color:#f1f2f6 ;">

              <div class="text-center">
                <h4 class="mb-5 text-primary text-mg">Form Nilai Siswa</h4>
              </div>
              <!------------>
              <div class="container">
                <div class="form-group row">
                  <label for="nama__lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="namaLengkap" >
                  </div>
                </div>
                <br>
                <!------------>

                <div class="form-group row">
                  <label for="mata__kuliah" class="col-sm-3 col-form-label">Mata Kuliah</label>
                  <div class="col-sm-7">
                    <select name="mata__kuliah" id="mata__kuliah" class="form-control">
                      <option value="DDP">Dasar-Dasar Pemrograman</option>
                      <option value="PWL">Pemrograman Web Lanjutan</option>
                      <option value="BD">Basis Data</option>
                    </select>
                  </div>
                </div>
                <br>
                <!------------>

                <div class="form-group row">
                  <label for="nilai__uts" class="col-sm-3 col-form-label">Nilai UTS</label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" id="nilai__uts" >
                  </div>
                </div>
                <br>
                <!------------>

                <div class="form-group row">
                  <label for="nilai__uas" class="col-sm-3 col-form-label">Nilai UAS</label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control " id="nilai__uas" >
                  </div>
                </div>
                <br>
                <!------------>

                <div class="form-group row">
                  <label for="nilai__tugas" class="col-sm-3 col-form-label">Nilai Tugas/Praktikum</label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" id="nilai__tugas" >
                  </div>
                </div>
                <br>
                <!------------>

                <div class="text-center">
                    <a href="index.php" class="btn btn-primary">Simpan</a>
                </div>

            </form>
        </div>
</body>
</html>