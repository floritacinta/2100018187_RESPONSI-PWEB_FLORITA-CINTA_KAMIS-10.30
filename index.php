<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="Pengaturan_tampilan.css">

    <script src="program_kalkulator.js"></script>
    <title>RESPONSI PWEB</title>
</head>

<body>
    <div class="header">
        <center>
            &nbsp;TA pemograman web
        </center>
        <div class="garis"></div>
        <font>
            &emsp;nama&emsp;: Florita Cinta Arum Kuncoro
            <br>&nbsp;&nbsp;nim&emsp;&nbsp; : 2100018187
            <br>&nbsp;&nbsp;kelas&emsp;: d
        </font>
    </div>
    <div class="tampilan-form">
        <h1><br>program FORM<br></h1><br>
        <form name="form1" method="post" action="form_proses01.php">
            <table width="80%" height="50%" align="center">
                <tr>
                    <td>NIM</td>
                    <td><input name="nim" type="text"></td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td><input name="name" type="text"></td>
                </tr>

                <tr>
                    <td>Kelas</td>
                    <td><input name="clas" type="text"></td>
                </tr>

                <tr>
                    <td>alamat</td>
                    <td><textarea name="address"></textarea></td> </textarea>
                </tr>

                <tr>
                    <td>jenis kelamin</td>
                    <td>
                        <select name="gender">
                            <option value="Wanita">Wanita</option>
                            <option value="Pria">Pria</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td><input id="tombol-kirim" type="submit" name="Submit" value="Kirim">
                        <input id="tombol-batal" type="reset" name="Submit2" value="Batal"><br><br><br>
                    </td>
                </tr>
            </table>
        </form>
        <div align="center" class="form-huruf"><strong><a href="form_outputprogram.php"><br><br>memeriksa kembali data yang dikirim<br><br><br></a></strong></div>
        <div class="line-form"></div>
    </div>

    <!-- program kalkulator -->
    <div class="program-02">
        <h1><br>program CALENDER<br></h1><br>
        <div class="program-kalender">

            <div class="tapilan-bulan">July 2022</div>
            <ul class="tampilan-hari">
                <li>Sen</li>
                <li>Sel</li>
                <li>Rab</li>
                <li>Kam</li>
                <li>Jum</li>
                <li>Sab</li>
                <li>Min</li>
            </ul>
            <ul class="tampilan-tanggal">
                <li> </li>
                <li> </li>
                <li> </li>
                <li> </li>
                <li>1</li>
                <li>2</li>
                <li class="tampilan-tanggal-merah">3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li class="tampilan-tanggal-merah">10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li class="tampilan-tanggal-merah">17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li class="tampilan-tanggal-merah">24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>

                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li class="tampilan-tanggal-merah">31</li>
            </ul>
        </div>
    </div>

    <!-- program kalkulator -->
    <div class="tampilan-program-03">
        <h1><br>program KALKULATOR<br></h1><br>
        <div class="program-kalkulator">
            <form name="form">
                <input align="left" type="textarea" name="textarea" class="tampilan-textbox-type">
            </form>
            <table>
                <tr>
                    <td><input class="tampilan-left-button" type="button" value="1" onclick="input(1)"></td>
                    <td><input class="tampilan-left-button" type="button" value="2" onclick="input(2)"></td>
                    <td><input class="tampilan-left-button" type="button" value="3" onclick="input(3)"></td>
                    <td><input class="tampilan-c" type="button" value="c" onclick="clean()"></td>
                    <td><input class="tampilan-backspace-button" type="button" value="←" onclick="erase()"></td>
                </tr>
                <tr>
                    <td><input class="tampilan-left-button" type="button" value="4" onclick="input(4)"></td>
                    <td><input class="tampilan-left-button" type="button" value="5" onclick="input(5)"></td>
                    <td><input class="tampilan-left-button" type="button" value="6" onclick="input(6)"></td>
                    <td><input class="tampilan-bagi" type="button" value="÷" onclick="input('/')"></td>
                    <td rowspan="1"><input class="tampilan-right-button" type="button" value="x" onclick="input('*')">
                    </td>
                </tr>
                <tr>
                    <td><input class="tampilan-left-button" type="button" value="7" onclick="input(7)"></td>
                    <td><input class="tampilan-left-button" type="button" value="8" onclick="input(8)"></td>
                    <td><input class="tampilan-left-button" type="button" value="9" onclick="input(9)"></td>
                    <td><input class="tampilan-right-button" type="button" value="+" onclick="input('+')"></td>
                    <td><input class="tampilan-right-button" type="button" value="-" onclick="input('-')"></td>
                </tr>
                <tr>
                    <td><input class="tampilan-left-button" type="button" value="0" onclick="insert(0)"></td>
                    <td><input class="tampilan-left-button" type="button" value="00" onclick="insert('00')"></td>
                    <td><input class="tampilan-left-button" type="button" value="." onclick="insert('.')"></td>
                    <td colspan="2"><input class="tampilan-equal-button" type="button" value="=" onclick="total()"></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- footer website -->
    <div class="tampilan-copyright"> COPY RIGHT © 2022 Florita Cinta Arum Kuncoro </div>


</body>

</html>