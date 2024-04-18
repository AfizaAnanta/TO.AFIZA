<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="row">
        <div class="col-md-6">
            <center><h3><a href="{{ url('/kalkulator1') }}">kalkulator 1</a></h3></center>
        </div>
        <div class="row">
        <div class="col-md-6">
        <style>
    h1 {
  text-align: center;
}
body {
    background-color: 	white;
    outline: auto;
    border: 2px outset black;
    padding: 10%;
 }
form {
  width: 400px;
  margin: 0 auto; /* Center the form horizontally */
  padding: 20px;
  border: 1px solid black;
  border-radius: 8px;
  background-color: #9195F6;
}
input[type="submit"] {
  padding: 10px 20px;
  background-color: #0D9276;
  color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}
 </style>
            <center><h3><a href="{{ url('/kalkulator2') }}">kalkulator 2</a></h3></center>
        </div>
    </div>
                    <center>
                        <h1>Kalkulator 2</h1>
                        <div class="calculator">
                            <form action="{{route('hitung.store')}}" method="post">
                                @csrf
                                <table border=1 width=400>

                                <tr>
                                <td colspan=2><input type="number" name="angka1" id=""><br></td>
                                <td colspan=2 rowspan=2><input type="submit" value="reset" name="op"></td>
                                </tr>
                                 <tr>
                                 <td colspan=2><input type="number" name="angka2" id=""><br></td>
                                 </tr>
                                 <tr>
                            <td colspan=4>Hasil:{{$hasil}}</td>
                           </tr>
                                 <tr>
                                    <td><input type="submit" value="+" name="op"></td>
                                    <td><input type="submit" value="-" name="op"></td>
                                    <td><input type="submit" value="*" name="op"></td>
                                    <td><input type="submit" value="/" name="op"></td>
                                 </tr>
                            <br>
                            <td colspan=4>
                                Nama: Afiza Ananta <br>
                                Kelas :XII RPL

                            </form>

                            </td>
                            </table>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

   